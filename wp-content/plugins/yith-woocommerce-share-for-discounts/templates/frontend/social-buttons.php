<?php
/**
 * This file belongs to the YIT Plugin Framework.
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
 */

if ( !defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

/**
 * FACEBOOK
 */
if ( $social_params['facebook'] == 'yes' ) {

    ?>
    <div id="fb-root"></div>
    <?php

    if ( $social_params['facebook_type'] != 'share' ) {
        wc_get_template( '/frontend/fb-like-btn.php', array( 'social_params' => $social_params ), YWSFD_TEMPLATE_PATH, YWSFD_TEMPLATE_PATH );
    }

    if ( $social_params['facebook_type'] != 'like' ) {
        wc_get_template( '/frontend/fb-share-btn.php', array( 'social_params' => $social_params ), YWSFD_TEMPLATE_PATH, YWSFD_TEMPLATE_PATH );
    }

}

/**
 * TWITTER
 */
if ( $social_params['twitter'] == 'yes' ) {
    wc_get_template( '/frontend/tw-tweet-btn.php', array( 'social_params' => $social_params ), YWSFD_TEMPLATE_PATH, YWSFD_TEMPLATE_PATH );
}

/**
 * LINKEDIN
 */
if ( isset( $social_params['linkedin'] ) && $social_params['linkedin'] == 'yes' && file_exists( YWSFD_TEMPLATE_PATH . '/frontend/lnk-share-btn-premium.php' ) ) {
    wc_get_template( '/frontend/lnk-share-btn-premium.php', array( 'social_params' => $social_params ), YWSFD_TEMPLATE_PATH, YWSFD_TEMPLATE_PATH );
}

/**
 * EMAIL
 */
if ( isset( $social_params['linkedin'] ) && $social_params['email'] == 'yes' && file_exists( YWSFD_TEMPLATE_PATH . '/frontend/mail-btn-premium.php' ) ) {
    wc_get_template( '/frontend/mail-btn-premium.php', array( 'social_params' => $social_params ), YWSFD_TEMPLATE_PATH, YWSFD_TEMPLATE_PATH );
}

/**
 * TWITTER FORM
 */
if ( $social_params['twitter'] == 'yes' ) {
    wc_get_template( '/frontend/tw-tweet-form.php', array( 'social_params' => $social_params ), YWSFD_TEMPLATE_PATH, YWSFD_TEMPLATE_PATH );
}

/**
 * LINKEDIN FORM
 */
if ( isset( $social_params['linkedin'] ) && $social_params['linkedin'] == 'yes' && file_exists( YWSFD_TEMPLATE_PATH . '/frontend/lnk-share-form-premium.php' ) ) {
    wc_get_template( '/frontend/lnk-share-form-premium.php', array( 'social_params' => $social_params ), YWSFD_TEMPLATE_PATH, YWSFD_TEMPLATE_PATH );
}

/**
 * EMAIL FORM
 */
if ( isset( $social_params['linkedin'] ) && $social_params['email'] == 'yes' && file_exists( YWSFD_TEMPLATE_PATH . '/frontend/mail-form-premium.php' ) ) {
    wc_get_template( '/frontend/mail-form-premium.php', array( 'social_params' => $social_params ), YWSFD_TEMPLATE_PATH, YWSFD_TEMPLATE_PATH );
}