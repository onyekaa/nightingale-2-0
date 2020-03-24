<?php
/**
 * The copyright message for our theme
 *
 * This is the template that displays the copyright in the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nightingale
 * @copyright NHS Leadership Academy, Tony Blacker
 * @version 1.0 13th January 2020
 */

?>
<p class="nhsuk-footer__copyright"><?php echo esc_html__( '&copy; Copyright', 'nightingale' ); ?>, <?php bloginfo( 'name' ); ?> <?php echo esc_html( date_i18n( __( 'Y', 'nightingale' ) ) ); ?></p>
