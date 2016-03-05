<?php
/**
 * Admin View: Notice - Email missing
 *
 * @package WooCommerce_PagSeguro/Admin/Notices
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="error inline">
	<p><strong><?php _e( 'PagSeguro Disabled', 'woocommerce-pagseguro' ); ?></strong>: <?php printf( __( 'You should inform your email address. %s', 'woocommerce-pagseguro' ), '<a href="' . esc_url( admin_url( 'admin.php?page=wc-settings&tab=checkout&section=wc_pagseguro_gateway' ) ) . '">' . __( 'Click here to configure!', 'woocommerce-pagseguro' ) . '</a>' ); ?>
	</p>
</div>
