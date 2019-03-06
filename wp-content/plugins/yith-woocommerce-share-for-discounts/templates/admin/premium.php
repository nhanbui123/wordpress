<?php
/**
 * Premium Tab
 *
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Share for Discounts
 * @version 1.0.2
 */

/*
 * This file belongs to the YIT Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly
?>

<style>
.landing{
    overflow-x: hidden;
}

.section{
    margin-left: -20px;
    margin-right: -20px;
    font-family: "Raleway",san-serif;
}
.section h1{
    text-align: center;
    text-transform: uppercase;
    color: #808a97;
    font-size: 35px;
    font-weight: 700;
    line-height: normal;
    display: inline-block;
    width: 100%;
    margin: 50px 0 0;
}
.section ul{
    list-style-type: disc;
    padding-left: 15px;
}
.section:nth-child(even){
    background-color: #fff;
}
.section:nth-child(odd){
    background-color: #f1f1f1;
}
.section .section-title img{
    display: table-cell;
    vertical-align: middle;
    width: auto;
    margin-right: 15px;
}
.section h2,
.section h3 {
    display: inline-block;
    vertical-align: middle;
    padding: 0;
    font-size: 24px;
    font-weight: 700;
    color: #808a97;
    text-transform: uppercase;
}

.section .section-title h2{
    display: table-cell;
    vertical-align: middle;
    line-height: 25px;
}

.section-title{
    display: table;
}

.section h3 {
    font-size: 14px;
    line-height: 28px;
    margin-bottom: 0;
    display: block;
}

.section p{
    font-size: 13px;
    margin: 25px 0;
}
.section ul li{
    margin-bottom: 4px;
}
.landing-container{
    max-width: 750px;
    margin-left: auto;
    margin-right: auto;
    padding: 50px 0 30px;
}
.landing-container:after{
    display: block;
    clear: both;
    content: '';
}
.landing-container .col-1,
.landing-container .col-2{
    float: left;
    box-sizing: border-box;
    padding: 0 15px;
}
.landing-container .col-1 img{
    width: 100%;
}
.landing-container .col-1{
    width: 55%;
}
.landing-container .col-2{
    width: 45%;
}
.premium-cta{
    background-color: #808a97;
    color: #fff;
    border-radius: 6px;
    padding: 20px 15px;
}
.premium-cta:after{
    content: '';
    display: block;
    clear: both;
}
.premium-cta p{
    margin: 7px 0;
    font-size: 14px;
    font-weight: 500;
    display: inline-block;
    width: 60%;
}
.premium-cta a.button{
    border-radius: 6px;
    height: 60px;
    float: right;
    background: url(<?php echo YWSFD_ASSETS_URL ?>/images/upgrade.png) #ff643f no-repeat 13px 13px;
    border-color: #ff643f;
    box-shadow: none;
    outline: none;
    color: #fff;
    position: relative;
    padding: 9px 50px 9px 70px;
}
.premium-cta a.button:hover,
.premium-cta a.button:active,
.premium-cta a.button:focus{
    color: #fff;
    background: url(<?php echo YWSFD_ASSETS_URL ?>/images/upgrade.png) #971d00 no-repeat 13px 13px;
    border-color: #971d00;
    box-shadow: none;
    outline: none;
}
.premium-cta a.button:focus{
    top: 1px;
}
.premium-cta a.button span{
    line-height: 13px;
}
.premium-cta a.button .highlight{
    display: block;
    font-size: 20px;
    font-weight: 700;
    line-height: 20px;
}
.premium-cta .highlight{
    text-transform: uppercase;
    background: none;
    font-weight: 800;
    color: #fff;
}

.section.one{
    background: url(<?php echo YWSFD_ASSETS_URL ?>/images/01-bg.png) no-repeat #fff; background-position: 85% 75%
}
.section.two{
    background: url(<?php echo YWSFD_ASSETS_URL ?>/images/02-bg.png) no-repeat #fff; background-position: 85% 75%
}
.section.three{
    background: url(<?php echo YWSFD_ASSETS_URL ?>/images/03-bg.png) no-repeat #fff; background-position: 85% 75%
}
.section.four{
    background: url(<?php echo YWSFD_ASSETS_URL ?>/images/04-bg.png) no-repeat #fff; background-position: 85% 75%
}
.section.five{
    background: url(<?php echo YWSFD_ASSETS_URL ?>/images/05-bg.png) no-repeat #fff; background-position: 85% 75%
}
.section.six{
    background: url(<?php echo YWSFD_ASSETS_URL ?>/images/06-bg.png) no-repeat #fff; background-position: 85% 75%
}
.section.seven{
    background: url(<?php echo YWSFD_ASSETS_URL ?>/images/07-bg.png) no-repeat #fff; background-position: 85% 75%
}
.section.eight{
    background: url(<?php echo YWSFD_ASSETS_URL ?>/images/08-bg.png) no-repeat #fff; background-position: 85% 75%
}


@media (max-width: 768px) {
    .section{margin: 0}
    .premium-cta p{
        width: 100%;
    }
    .premium-cta{
        text-align: center;
    }
    .premium-cta a.button{
        float: none;
    }
}

@media (max-width: 480px){
    .wrap{
        margin-right: 0;
    }
    .section{
        margin: 0;
    }
    .landing-container .col-1,
    .landing-container .col-2{
        width: 100%;
        padding: 0 15px;
    }
    .section-odd .col-1 {
        float: left;
        margin-right: -100%;
    }
    .section-odd .col-2 {
        float: right;
        margin-top: 65%;
    }
}

@media (max-width: 320px){
    .premium-cta a.button{
        padding: 9px 20px 9px 70px;
    }

    .section .section-title img{
        display: none;
    }
}
</style>
<div class="landing">
    <div class="section section-cta section-odd">
        <div class="landing-container">
            <div class="premium-cta">
                <p>
                    <?php echo sprintf( __('Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce Share for Discounts%2$s to benefit from all features!','ywau'),'<span class="highlight">','</span>' );?>
                </p>
                <a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank" class="premium-cta-button button btn">
                    <span class="highlight"><?php _e('UPGRADE','ywau');?></span>
                    <span><?php _e('to the premium version','ywau');?></span>
                </a>
            </div>
        </div>
    </div>
    <div class="one section section-even clear">
        <h1><?php _e('Premium Features','ywau');?></h1>
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YWSFD_ASSETS_URL ?>/images/01.png" alt="<?php _e( 'Coupon configuration','ywau') ?>" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YWSFD_ASSETS_URL ?>/images/01-icon.png" alt="icon 01"/>
                    <h2><?php _e('Coupon configuration','ywau');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('Create a tailored coupon for who deserves to be rewarded for the sharing of one of your shop products.Configure the coupon in detail, deciding whether to set a discount on the %1$scart%2$s or on the %1$ssingle product%2$s, with a %1$sfixed%2$s or a %1$spercentage%2$s amount. The perfect way to give a coupon the value you want.', 'ywau'), '<b>', '</b>');?>
                </p>
            </div>
        </div>
    </div>
    <div class="two section section-odd clear">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YWSFD_ASSETS_URL ?>/images/02-icon.png" alt="icon 02" />
                    <h2><?php _e('Sharing of a specific URL','ywau');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('The premium version of the plugin allows you to set the %1$sURL%2$s of a certain page to make it sharable from users through the sharing buttons available in your shop pages.', 'ywau'), '<b>', '</b>');?>
                </p>
                <p>
                    <?php echo sprintf(__('A great opportunity to put in the spotlight a page of the shop, or an %1$sexternal page%2$s that you want to be shared in the most famous social networks.', 'ywau'), '<b>', '</b>');?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YWSFD_ASSETS_URL ?>/images/02.png" alt="<?php _e( 'Upload by the product','ywau') ?>" />
            </div>
        </div>
    </div>
    <div class="three section section-even clear">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YWSFD_ASSETS_URL ?>/images/03.png" alt="<?php _e( 'Email sharing','ywau') ?>" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YWSFD_ASSETS_URL ?>/images/03-icon.png" alt="icon 03" />
                    <h2><?php _e( 'Email sharing','ywau');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('Maybe up to now you just have the freedom to share your shop contents through Facebook, Twitter and Google+ social profiles; but with the premium version of the plugin users will be able to share one of your products with friend simply writing their %1$semails%2$s and a small message for them.%3$sA perfect action for all users that use sharing with a scrupulous attention.', 'ywau'), '<b>', '</b>','<br>');?>
                </p>
            </div>
        </div>
    </div>
    <div class="four section section-odd clear">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YWSFD_ASSETS_URL ?>/images/04-icon.png" alt="icon 04" />
                    <h2><?php _e('Position','ywau');?></h2>
                </div>
                <p>
                    <?php echo sprintf( __( 'Object disposition is vital for a site, and this is why the plugin lets you %1$schange the position of the sharing box%2$s in the product detail page, in addition to the "Cart" and "Checkout" pages.','ywau' ),'<b>','</b>' ) ?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YWSFD_ASSETS_URL ?>/images/04.png" alt="<?php _e( 'Customizable texts','ywau') ?>" />
            </div>
        </div>
    </div>
    <div class="five section section-even clear">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YWSFD_ASSETS_URL ?>/images/05.png" alt="<?php _e( 'Position','ywau') ?>" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YWSFD_ASSETS_URL ?>/images/05-icon.png" alt="icon 05" />
                    <h2><?php _e('Customizable texts','ywau');?></h2>
                </div>
                <p>
                    <?php echo sprintf(__('All messages showed on the screen are %1$seasily editable%2$s from users with the options of the plugin settings panel. Change the texts as you like, adding clear and explicative messages.', 'ywau'), '<b>', '</b>');?>
                </p>
            </div>
        </div>
    </div>
    <div class="six section section-odd clear">
        <div class="landing-container">
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YWSFD_ASSETS_URL ?>/images/06-icon.png" alt="icon 06" />
                    <h2><?php _e('Shortcode','ywau');?></h2>
                </div>
                <p>
                    <?php echo sprintf( __('Take advantage of the usefulness of the plugin\'s shortcode to add easily the sharing buttons you have configured in any place of the site.%3$sPurchase the premium version of the plugin to give users the freedom to %1$sshare any contents of your shop%2$s.','ywau'),'<b>','</b>','<br>'); ?>
                </p>
            </div>
            <div class="col-1">
                <img src="<?php echo YWSFD_ASSETS_URL ?>/images/06.png" alt="<?php _e( 'Saving path','ywau') ?>" />
            </div>
        </div>
    </div>
    <div class="seven section section-even clear">
        <div class="landing-container">
            <div class="col-1">
                <img src="<?php echo YWSFD_ASSETS_URL ?>/images/07.png" alt="<?php _e( 'Checkout and Cart pages','ywau') ?>" />
            </div>
            <div class="col-2">
                <div class="section-title">
                    <img src="<?php echo YWSFD_ASSETS_URL ?>/images/07-icon.png" alt="icon 07" />
                    <h2><?php _e('Checkout and Cart pages','ywau');?></h2>
                </div>
                <p>
                    <?php echo sprintf( __('Something completely new of the premium version of the %1$sYITH WooCommerce Share for Discounts%2$s plugin: users can share the "Checkout" and "Cart" pages. They will benefit from the coupon too!','ywau'),'<strong>','</strong>'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="section section-cta section-odd">
        <div class="landing-container">
            <div class="premium-cta">
                <p>
                    <?php echo sprintf( __('Upgrade to %1$spremium version%2$s of %1$sYITH WooCommerce Share for Discounts%2$s to benefit from all features!','ywau'),'<span class="highlight">','</span>' );?>
                </p>
                <a href="<?php echo $this->get_premium_landing_uri() ?>" target="_blank" class="premium-cta-button button btn">
                    <span class="highlight"><?php _e('UPGRADE','ywau');?></span>
                    <span><?php _e('to the premium version','ywau');?></span>
                </a>
            </div>
        </div>
    </div>
</div>
