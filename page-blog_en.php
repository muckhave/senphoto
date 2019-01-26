<?php get_header(); ?>

<div class="titArea titArea--party flexbox flex_v-center flex_just-bet">
    <h1 class="titArea__tit">BLOG</h1>
</div>
<div class="bk_gray2">
	<div class="contents flexbox flex_wrap">
		<div class="blog_wrap">
			<div class="blog_list flexbox flex_wrap">
			<?php
				$wp_query = new WP_Query();
				$my_posts = array(
					'post_type' => 'post',
					'posts_per_page'=> '6',
				);
				$wp_query->query( $my_posts );
				if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();
			?>
				// ここにコンテンツ
			<?php endwhile; endif; wp_reset_postdata(); ?>

			aaaaaaaaaaaaaaa

			</div>
		</div>
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>








<?php get_footer(); ?>
