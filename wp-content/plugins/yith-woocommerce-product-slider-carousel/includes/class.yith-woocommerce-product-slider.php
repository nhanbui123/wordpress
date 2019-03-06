<?php
if( !defined( 'ABSPATH' ) )
    exit;

if( !class_exists( 'YITH_WooCommerce_Product_Slider' ) ) {

    class YITH_WooCommerce_Product_Slider
    {

        protected static $_instance;
        protected $_panel = null;
        protected $_panel_page = 'yith_wc_product_slider';
        protected $_official_documentation = 'http://yithemes.com/docs-plugins/yith-woocommerce-product-slider-carousel';
        protected $_premium_landing_url = 'http://yithemes.com/themes/plugins/yith-woocommerce-product-slider-carousel/';
        protected  $_premium_live_demo = 'http://plugins.yithemes.com/yith-woocommerce-product-slider-carousel';
        protected $_premium = 'premium.php';
        
        public $is_wc_2_7;

        public function __construct()
        {
            // Load Plugin Framework
            $this->product_slider = YITH_Product_Slider_Type();

            add_action( 'plugins_loaded', array($this, 'plugin_fw_loader'), 15 );
            //Add action links
            add_filter( 'plugin_action_links_' . plugin_basename(YWCPS_DIR . '/' . basename(YWCPS_FILE)), array($this, 'action_links'));
            //Add row meta
            add_filter( 'plugin_row_meta', array( $this, 'plugin_row_meta' ) , 10, 4 );
            //Add menu  field under YITH_PLUGIN
            add_action( 'yith_wc_product_slider_carousel_premium', array( $this, 'premium_tab' ) );
            add_action( 'admin_menu', array($this, 'add_product_slider_carousel_menu' ), 5);

            add_action( 'wp_enqueue_scripts', array( $this, 'include_style_script' ) );

            //Add context menu to TinyMCE editor
            add_action( 'admin_init', array( $this, 'add_shortcodes_button' ) );
            add_action( 'media_buttons_context', array( &$this, 'ywcps_media_buttons_context' ) );
            add_action( 'admin_print_footer_scripts', array( &$this, 'ywcps_add_quicktags' ) );
            add_action( 'admin_action_print_shortcode_popup', array( $this, 'print_shortcode_popup' ) );
            // register shortcodes to WPBackery Visual Composer
            add_action( 'vc_before_init', array( $this, 'register_vc_shortcodes' ) );

            $this->is_wc_2_7 = version_compare( WC()->version,'2.7.0','>=' );

            if( !defined( 'YWCPS_PREMIUM' ) ) {
                $this->_include_templates();
                add_action('woocommerce_admin_field_ajax-category', 'YWCPS_Ajax_Category::output');
            }

        }

        public static function get_instance()
        {
            if (is_null(self::$_instance)) {
                self::$_instance = new self();
            }

            return self::$_instance;
        }

        /**
         * include lightbox in thickbox
         * @author YITHEMES
         * @since 1.0.6
         */
        private function _include_templates()
        {
             include_once( YWCPS_TEMPLATE_PATH .'/admin/ajax-category.php');
        }

        public function plugin_fw_loader() {
            if ( ! defined( 'YIT_CORE_PLUGIN' ) ) {
                global $plugin_fw_data;
                if( ! empty( $plugin_fw_data ) ){
                    $plugin_fw_file = array_shift( $plugin_fw_data );
                    require_once( $plugin_fw_file );
                }
            }
        }

        /**
         * Action Links
         *
         * add the action links to plugin admin page
         *
         * @param $links | links plugin array
         *
         * @return   mixed Array
         * @since    1.0
         * @author   Andrea Grillo <andrea.grillo@yithemes.com>
         * @return mixed
         * @use plugin_action_links_{$plugin_file_name}
         */
        public function action_links($links)
        {

            $links[] = '<a href="' . admin_url("admin.php?page={$this->_panel_page}") . '">' . __('Settings', 'yith-woocommerce-product-slider-carousel') . '</a>';

            $premium_live_text = defined( 'YWCPS_FREE_INIT' ) ?  __( 'Premium live demo', 'yith-woocommerce-product-slider-carousel' ) : __( 'Live demo', 'yith-woocommerce-product-slider-carousel' );

            $links[] = '<a href="'.$this->_premium_live_demo.'" target="_blank">'.$premium_live_text.'</a>';

            if (defined('YWCPS_FREE_INIT')) {
                $links[] = '<a href="' . $this->get_premium_landing_uri() . '" target="_blank">' . __('Premium Version', 'yith-woocommerce-product-slider-carousel') . '</a>';
            }

            return $links;
        }

        /**
         * plugin_row_meta
         *
         * add the action links to plugin admin page
         *
         * @param $plugin_meta
         * @param $plugin_file
         * @param $plugin_data
         * @param $status
         *
         * @return   Array
         * @since    1.0
         * @author   Andrea Grillo <andrea.grillo@yithemes.com>
         * @use plugin_row_meta
         */
        public function plugin_row_meta($plugin_meta, $plugin_file, $plugin_data, $status)
        {
            if ((defined('YWCPS_INIT') && (YWCPS_INIT == $plugin_file)) ||
                (defined('YWCPS_FREE_INIT') && (YWCPS_FREE_INIT == $plugin_file))
            ) {

                $plugin_meta[] = '<a href="' . $this->_official_documentation . '" target="_blank">' . __('Plugin Documentation', 'yith-woocommerce-product-slider-carousel') . '</a>';
            }

            return $plugin_meta;
        }

        /**
         * Get the premium landing uri
         *
         * @since   1.0.0
         * @author  Andrea Grillo <andrea.grillo@yithemes.com>
         * @return  string The premium landing link
         */
        public function get_premium_landing_uri()
        {
            return defined('YITH_REFER_ID') ? $this->_premium_landing_url . '?refer_id=' . YITH_REFER_ID : $this->_premium_landing_url.'?refer_id=1030585';
        }

        /**
         * Premium Tab Template
         *
         * Load the premium tab template on admin page
         *
         * @since   1.0.0
         * @author  Andrea Grillo <andrea.grillo@yithemes.com>
         * @return  void
         */
        public function premium_tab()
        {
            $premium_tab_template = YWCPS_TEMPLATE_PATH . '/admin/' . $this->_premium;
            if (file_exists($premium_tab_template)) {
                include_once($premium_tab_template);
            }
        }

        /**
         * Add a panel under YITH Plugins tab
         *
         * @return   void
         * @since    1.0
         * @author   Andrea Grillo <andrea.grillo@yithemes.com>
         * @use     /Yit_Plugin_Panel class
         * @see      plugin-fw/lib/yit-plugin-panel.php
         */
        public function add_product_slider_carousel_menu()
        {
            if (!empty($this->_panel)) {
                return;
            }

            $admin_tabs = array(
                'settings' => __('Settings', 'yith-woocommerce-product-slider-carousel'),
            );

            if (!defined('YWCPS_PREMIUM'))
                $admin_tabs['premium-landing'] = __('Premium Version', 'yith-woocommerce-product-slider-carousel');
            else {
                $admin_tabs['layout1']  =   __('Layout 1', 'yith-woocommerce-product-slider-carousel');
                $admin_tabs['layout2']  =   __('Layout 2', 'yith-woocommerce-product-slider-carousel');
                $admin_tabs['layout3']  =   __('Layout 3', 'yith-woocommerce-product-slider-carousel');

            }

            $args = array(
                'create_menu_page' => true,
                'parent_slug' => '',
                'page_title' => __('Product Slider Carousel', 'yith-woocommerce-product-slider-carousel'),
                'menu_title' => __('Product Slider Carousel', 'yith-woocommerce-product-slider-carousel'),
                'capability' => 'manage_options',
                'parent' => '',
                'parent_page' => 'yit_plugin_panel',
                'page' => $this->_panel_page,
                'admin-tabs' => $admin_tabs,
                'options-path' => YWCPS_DIR . '/plugin-options'
            );



            $this->_panel = new YIT_Plugin_Panel_WooCommerce($args);
        }


        /**Include style and script
         * @author YITHEMES
         * @since 1.0.0
         */
        public function include_style_script()
        {
            wp_register_style('fontawesome', YWCPS_ASSETS_URL . 'css/font-awesome.min.css');
            wp_register_style('owl-carousel-style', YWCPS_ASSETS_URL . 'css/owl.css', array(), '2.0.0-beta.2.4');
            wp_register_style('yith-animate', YWCPS_ASSETS_URL . 'css/animate.css');
            wp_register_style('yith-product-slider-style', YWCPS_ASSETS_URL . 'css/product_slider_style.css', array(), YWCPS_VERSION);
            wp_register_script('owl-carousel', YWCPS_ASSETS_URL . 'js/owl.carousel.js', array('jquery'), '2.0.0-beta.2.4', true);
        }



        /**
         * Add shortcode button
         *
         * Add shortcode button to TinyMCE editor, adding filter on mce_external_plugins
         *
         * @return void
         * @since 1.0.0
         * @author Antonio La Rocca <antonio.larocca@yithemes.it>
         */
        public function add_shortcodes_button()
        {
            if (!current_user_can('edit_posts') && !current_user_can('edit_pages'))
                return;
            if (get_user_option('rich_editing') == 'true') {
                add_filter('mce_external_plugins', array(&$this, 'add_shortcodes_tinymce_plugin'));
                add_filter('mce_buttons', array(&$this, 'register_shortcodes_button'));
            }
        }

        /**
         * Add shortcode plugin
         *
         * Add a script to TinyMCE script list
         *
         * @param $plugin_array array() Array containing TinyMCE script list
         *
         * @return array() The edited array containing TinyMCE script list
         * @since 1.0.0
         * @author Antonio La Rocca <antonio.larocca@yithemes.it>
         */
        public function add_shortcodes_tinymce_plugin($plugin_array)
        {
            $plugin_array['ywcps_shortcode'] = YWCPS_ASSETS_URL . 'js/tinymce.js';
            return $plugin_array;
        }

        /**
         * Register shortcode button
         *
         * Make TinyMCE know a new button was included in its toolbar
         *
         * @param $buttons array() Array containing buttons list for TinyMCE toolbar
         *
         * @return array() The edited array containing buttons list for TinyMCE toolbar
         * @since 1.0.0
         * @author Antonio La Rocca <antonio.larocca@yithemes.it>
         */
        public function register_shortcodes_button($buttons)
        {
            array_push($buttons, "|", "ywcps_shortcode");
            return $buttons;
        }


        /**
         * The markup of shortcode
         *
         * @since   1.0.0
         *
         * @param   $context
         *
         * @return  mixed
         * @author  Alberto Ruggiero
         */
        public function ywcps_media_buttons_context( $context ) {

            global $post_ID, $temp_ID;

            $query_args   = array(
                'post_id'   => (int) ( 0 == $post_ID ? $temp_ID : $post_ID ),
                'action'   => 'print_shortcode_popup',
                'KeepThis'  => true,
                'TB_iframe' => true,

            );
            $lightbox_url = esc_url( add_query_arg( $query_args, admin_url( 'admin.php' ) ) );

            $out = sprintf( '<a id="ywcps_shortcode" style="display:none" href="%s" class="hide-if-no-js thickbox" title="%s"></a>', $lightbox_url,  __( 'Add YITH WooCommerce Product Slider Carousel shortcode', 'yith-woocommerce-product-slider-carousel' )  );

            return $context . $out;

        }

        public function print_shortcode_popup(){

            require_once( YWCPS_DIR.'/templates/admin/lightbox.php' );
        }

        /**
         * Add quicktags to visual editor
         *
         * @since   1.0.0
         * @return  void
         * @author  Alberto Ruggiero
         */
        public function ywcps_add_quicktags() {

            ?>
            <script type="text/javascript">

                if ( window.QTags !== undefined ) {
                    QTags.addButton( 'ywcps_shortcode', 'add ywcps shortcode', function () {
                        jQuery('#ywcps_shortcode').click()
                    } );
                }


            </script>
        <?php
        }

        /**
         * Register product slider carousel shortcode to visual composer
         * @author YITHEMES
         * @return void
         * @since 1.0.6
         */
        public function register_vc_shortcodes()
        {

            $all_sliders  = $this->get_productslider();

            $options = array();

            foreach( $all_sliders as $key=>$value )
                $options["{$value['text']}"] = $value['value'];


            $vc_map_params = apply_filters('yith_wcps_vc_shortcodes_params', array(

                'yith_wc_productslider' => array(
                    'name' => __('YITH WooCommerce Product Slider Carousel', 'yith-woocommerce-product-slider-carousel'),
                    'base' => 'yith_wc_productslider',
                    'description' => __('Add Product Slider', 'yith-woocommerce-product-slider-carousel'),
                    'category' => __('Product Slider Carousel', 'yith-woocommerce-product-slider-carousel'),
                    'params' => array(
                        array(
                            'type' => 'dropdown',
                            'holder' => '',
                            'heading' => __('Choose a Product Slider', 'yith-woocommerce-product-slider-carousel'),
                            'param_name' => 'id',
                            'value' => $options,
                            'description' => __('Choose to show empty terms or not', 'yith-wcbr')
                        ),
                        array(
                         'type' =>'textfield',
                          'holder' => '',
                          'param_name' => 'z_index',
                          'heading' => __('Z-Index', 'yith-woocommerce-product-slider-carousel' )
                        )
                    ),

                )

            ));

            if (!empty($vc_map_params) && function_exists('vc_map')) {
                foreach ($vc_map_params as $params) {
                    vc_map($params);
                }
            }
        }

        /**return all product slider
         * @author YITHEMES
         * @since 1.0.0
         * @used include_style_script
         * @return array
         */
        public function get_productslider()
        {
            global $slider_free_id;

            return array( array( 'text' => get_option('ywcps_title'), 'value' => $slider_free_id ) );

        }


    }
}