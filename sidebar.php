<?php dynamic_sidebar( 'ad' ); ?>



<?php
$location_name = 'pickupnav'; 
$locations = get_nav_menu_locations();
$myposts = wp_get_nav_menu_items( $locations[ $location_name ] ); 
if( $myposts ): ?>

<?php wp_reset_postdata();
endif; ?>




<?php
$myposts = get_posts( array(
	'post_type' => 'post',
	'posts_per_page' => '6',
	'meta_key' => 'postviews',
	'orderby' => 'meta_value_num'
) ); 
if( $myposts ): ?>

<?php wp_reset_postdata();
endif; ?>



<?php dynamic_sidebar( 'submenu' ); ?>

