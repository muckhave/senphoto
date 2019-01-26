<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="http://alexgorbatchev.com/pub/sh/current/styles/shCoreEclipse.css"/>
<script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js"></script>
    <?php if(have_posts()): while(have_posts()): 
	the_post(); ?>
        <div class="titArea titArea--flower flexbox flex_v-center flex_just-bet" style="background-image:url(<?php echo get_template_directory_uri(); ?>/image/contact2.jpg);">
            <h1 class="titArea__tit"><?php the_title(); ?></h1>
        </div>
<div class="formArea">
      <?php if( has_post_thumbnail() && $page==1 ): ?>
      <div class="catch">
        <?php the_post_thumbnail( 'large' ); ?>
      </div>
      <?php endif; ?>
      <?php the_content(); ?>
      <?php wp_link_pages( array(
		'before' => '<div class="pagination"><ul><li>',
		'separator' => '</li><li>',
		'after' => '</li></ul></div>',
		'pagelink' => '<span>%</span>'
	) ); ?>
      
		
		

		
		
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
<?php //アクセス数の記録
$count_key = 'postviews';
$count = get_post_meta($post->ID, $count_key, true);
$count++;
update_post_meta($post->ID, $count_key, $count);
?>