
<?php
/*
 * Plugin Name: woocommerce add content before single product summary
 */
function acbsps_custom_text() {
    echo'this text is added before single product summary </br>'
   ;
}
add_action( 'woocommerce_before_single_product_summary', 'acbsps_custom_text' );
?>

