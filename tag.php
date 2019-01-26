<?php get_header(); ?>

<div class="titArea titArea--party flexbox flex_v-center flex_just-bet">
    <h1 class="titArea__tit">BLOG</h1>
</div>
<div class="contents flexbox flex_wrap">

<div class="blog_wrap">
<h2 class="blog_tit_h2">"<?php echo get_search_query(); ?>" に一致した記事</h2>
<div class="blog_list flexbox flex_wrap">

		<?php if(have_posts()): while(have_posts()): 
	the_post(); ?>

	<?php get_template_part( 'gaiyou', 'medium' ); ?>

	<?php endwhile; endif; ?>


	<div class="pagination pagination-index">
	<?php echo paginate_links( array(
		'type' => 'list',
		'prev_text' => '&laquo;',
		'next_text' => '&raquo;'
	) ); ?>
	</div>

</div>
</div>
<div class="sidebar">
	<?php get_sidebar(); ?>
</div>
</div>









<?php get_footer(); ?>
