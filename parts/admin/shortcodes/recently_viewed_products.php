<?php
/*
Plugin Name: WooCommerce - Recently Viewed Products
Plugin URL: http://remicorson.com/
Description: Adds a "recently viewed products" shortcode
Version: 1.0
Author: Remi Corson
Author URI: http://remicorson.com
Contributors: corsonr
Text Domain: rc_wc_rvp
Domain Path: languages
*/

/**
 * Register the [woocommerce_recently_viewed_products per_page="5"] shortcode
 *
 * This shortcode displays recently viewed products using WooCommerce default cookie
 * It only has one parameter "per_page" to choose number of items to show
 *
 * @access      public
 * @since       1.0
 * @return      $content
 */
function rc_woocommerce_recently_viewed_products( $atts, $content = null ) {

	// Get shortcode parameters
	extract(shortcode_atts(array(
		"per_page" => '5'
	), $atts));

	// Get WooCommerce Global
	global $woocommerce;

	// Get recently viewed product cookies data
	$viewed_products = ! empty( $_COOKIE['woocommerce_recently_viewed'] ) ? (array) explode( '|', $_COOKIE['woocommerce_recently_viewed'] ) : array();
	$viewed_products = array_filter( array_map( 'absint', $viewed_products ) );

	// If no data, quit
	if ( empty( $viewed_products ) )
		return __( 'You have not viewed any product yet!', 'rc_wc_rvp' );

	// Create the object
	ob_start();

	// Get products per page
	if( !isset( $per_page ) ? $number = 5 : $number = $per_page )

		// Create query arguments array
		$query_args = array(
			'posts_per_page' => $number,
			'no_found_rows'  => 1,
			'post_status'    => 'publish',
			'post_type'      => 'product',
			'post__in'       => $viewed_products,
			'orderby'        => 'rand'
		);

	// Add meta_query to query args
	$query_args['meta_query'] = array();

	// Check products stock status
	$query_args['meta_query'][] = $woocommerce->query->stock_status_meta_query();

	// Create a new query
	$r = new WP_Query($query_args);

	if(isset($r->posts)){
		$list = '';
		while($r->have_posts()){
			$r->the_post();
			global $product;
			$img = has_post_thumbnail() ? get_the_post_thumbnail( $r->post->ID, 'shop_thumbnail' ) : woocommerce_placeholder_img( 'shop_thumbnail' );
			$list .= '<li>';
			$list .= '<a href="'.get_permalink().'">';
			$list .= $img;
			$list .= '<span class="price">'.$product->get_price_html().'</span>';
			$list .= '<h2 class="woocommerce-loop-product__title">'.get_the_title().'</h2>';
			$list .= '</a>';
			$list .= '</li>';
		}

		$content = '<h2 style="text-align: center; margin-bottom: 20px">Ранее вы смотрели</h2>';
		$content .= '<ul class="products shop--loop">'.$list.'</ul>';
	}
	$content .= ob_get_clean();
	return $content;
}

add_shortcode("woocommerce_recently_viewed_products", "rc_woocommerce_recently_viewed_products");