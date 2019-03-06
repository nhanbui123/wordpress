<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
if ( ! class_exists( 'YITH_WSFD_Privacy' ) ) {
	/**
	 * Class YITH_WAF_Privacy
	 * Privacy Class
	 *
	 * @author Alberto Ruggiero
	 */
	class YITH_WSFD_Privacy extends YITH_Privacy_Plugin_Abstract {

		/**
		 * YITH_WSFD_Privacy constructor.
		 */
		public function __construct() {
			parent::__construct( _x( 'YITH WooCommerce Share For Discounts', 'Privacy Policy Content', 'yith-woocommerce-share-for-discounts' ) );
		}

		public function get_privacy_message( $section ) {

			$message = '';

			switch ( $section ) {
				case 'collect_and_store':
					ob_start();

					?>
					<p class="privacy-policy-tutorial"><?php _ex( 'The plugin creates and shares a coupon code after a product or a specific page of the website are shared on one of the social networks available.', 'Privacy Policy Content', 'yith-woocommerce-share-for-discounts' ) ?></p>
					<p class="privacy-policy-tutorial"><?php _ex( 'If the site is visited with a guest user account, the plugin uses a cookie to identify the customer univocally and issue the coupon code.', 'Privacy Policy Content', 'yith-woocommerce-share-for-discounts' ) ?></p>
					<?php

					$message = ob_get_clean();
					break;

			}

			return $message;
		}
	}
}

new YITH_WSFD_Privacy();