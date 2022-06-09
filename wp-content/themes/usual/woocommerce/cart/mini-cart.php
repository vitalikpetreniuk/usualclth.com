<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_mini_cart' ); ?>

<div class="widget_shopping_cart_content header-cart">
    <a href="<?= wc_get_cart_url(); ?>"
       class="header-cart-link <?php if ( $woocommerce->cart->cart_contents_count ) {
		   echo 'full';
	   } ?>">
		<?php
        if ( WC()->cart->is_empty() ) : ?>
            <svg class="svg-fill header-cart0" width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.05279 0L3.19098 5.72361H1H0V6.72361V7.72361V8.72361H0.982559L2.01329 13.0881L2.01339 13.0885L3.01329 17.3381L3.10399 17.7236H3.5H6.5H10H13.25H16.5H16.896L16.9867 17.3381L17.9867 13.0881L17.988 13.0827L18.9624 8.72361H19H20V7.72361V6.72361V5.72361H19H16.809L13.9472 0L13.0528 0.447214L15.691 5.72361H4.30902L6.94721 0.447214L6.05279 0ZM2.89567 12.4736L2.01007 8.72361H5.0943L5.88378 12.4736H2.89567ZM6.9057 12.4736L6.11622 8.72361H9.5V12.4736H6.9057ZM10.5 12.4736V8.72361H13.8838L13.0943 12.4736H10.5ZM14.1162 12.4736L14.9057 8.72361H17.9377L17.0994 12.4736H14.1162ZM3.89601 16.7236L3.1313 13.4736H6V16.7236H3.89601ZM7 16.7236V13.4736H9.5V16.7236H7ZM10.5 16.7236V13.4736H12.9711L12.7787 16.7236H10.5ZM13.7805 16.7236L13.9728 13.4736H16.8687L16.104 16.7236H13.7805ZM19 6.72361H1V7.72361H19V6.72361Z""/>
            </svg>
		<?php else: ?>
            <svg class="header-cart1" width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.05279 0L3.19098 5.72361H1H0V6.72361V7.72361V8.72361H0.982559L2.01329 13.0881L2.01339 13.0885L3.01329 17.3381L3.10399 17.7236H3.5H6.5H10H13.25H16.5H16.896L16.9867 17.3381L17.9867 13.0881L17.988 13.0827L18.9624 8.72361H19H20V7.72361V6.72361V5.72361H19H16.809L13.9472 0L13.0528 0.447214L15.691 5.72361H4.30902L6.94721 0.447214L6.05279 0ZM2.89567 12.4736L2.01007 8.72361H5.0943L5.88378 12.4736H2.89567ZM6.9057 12.4736L6.11622 8.72361H9.5V12.4736H6.9057ZM10.5 12.4736V8.72361H13.8838L13.0943 12.4736H10.5ZM14.1162 12.4736L14.9057 8.72361H17.9377L17.0994 12.4736H14.1162ZM3.89601 16.7236L3.1313 13.4736H6V16.7236H3.89601ZM7 16.7236V13.4736H9.5V16.7236H7ZM10.5 16.7236V13.4736H12.9711L12.7787 16.7236H10.5ZM13.7805 16.7236L13.9728 13.4736H16.8687L16.104 16.7236H13.7805ZM19 6.72361H1V7.72361H19V6.72361Z" fill="white"/>
                <circle cx="17.5" cy="15.5" r="4.75" fill="#FF0000" stroke="white" stroke-width="1.5"/>
            </svg>

            <svg class="header-cart2" width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.05279 0L3.19098 5.72361H1H0V6.72361V7.72361V8.72361H0.982559L2.01329 13.0881L2.01339 13.0885L3.01329 17.3381L3.10399 17.7236H3.5H6.5H10H13.25H16.5H16.896L16.9867 17.3381L17.9867 13.0881L17.988 13.0827L18.9624 8.72361H19H20V7.72361V6.72361V5.72361H19H16.809L13.9472 0L13.0528 0.447214L15.691 5.72361H4.30902L6.94721 0.447214L6.05279 0ZM2.89567 12.4736L2.01007 8.72361H5.0943L5.88378 12.4736H2.89567ZM6.9057 12.4736L6.11622 8.72361H9.5V12.4736H6.9057ZM10.5 12.4736V8.72361H13.8838L13.0943 12.4736H10.5ZM14.1162 12.4736L14.9057 8.72361H17.9377L17.0994 12.4736H14.1162ZM3.89601 16.7236L3.1313 13.4736H6V16.7236H3.89601ZM7 16.7236V13.4736H9.5V16.7236H7ZM10.5 16.7236V13.4736H12.9711L12.7787 16.7236H10.5ZM13.7805 16.7236L13.9728 13.4736H16.8687L16.104 16.7236H13.7805ZM19 6.72361H1V7.72361H19V6.72361Z" fill="black"/>
                <circle cx="17.5" cy="15.5" r="4.75" fill="#FF0000" stroke="white" stroke-width="1.5"/>
            </svg>
		<?php endif; ?>
    </a>
</div>

<?php do_action( 'woocommerce_after_mini_cart' ); ?>
