<?php

if ( is_admin() ) {
	add_filter( 'dashboard_recent_posts_query_args', 'add_page_to_dashboard_activity' );
	function add_page_to_dashboard_activity( $query_args ) {
		if ( is_array( $query_args[ 'post_type' ] ) ) {
			//Set yout post type
			$query_args[ 'post_type' ][] = 'quote';
		} else {
			$temp = array( $query_args[ 'post_type' ], 'quote' );
			$query_args[ 'post_type' ] = $temp;
		}
		return $query_args;
	}
}

/**
 * Get posts pending count as per Post Type.
 * @param  string $post_type
 * @return integer            Pending count.
 */
function quote_get_pending_items( $post_type ) {
    global $wpdb;
    $pending_count = $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $wpdb->posts WHERE post_type = %s AND post_status = 'pending'", $post_type ) );
    return (int) $pending_count;
}

/**
 * Show pending count on menu.
 * @return integer pending count beside menu label.
 * @author Samik Chattopadhyay
 * @link http://stackoverflow.com/a/8625696/1743124
 */
function notification_bubble_in_my_custom_post_type_menu() {
    global $menu;
    $pending_items = quote_get_pending_items( 'quote' );
    //while registering a post type the 'menu_position' is important, here our value was 7
    $menu[6][0] .= $pending_items ? " <span class='update-plugins count-1' title='title'><span class='update-count'>$pending_items</span></span>" : '';
}
add_action('admin_menu', 'notification_bubble_in_my_custom_post_type_menu');