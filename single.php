<?php get_header(); ?>
<div class="bk_gray2">
	<div class="contents flexbox flex_wrap">
		<div class="blog_wrap">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<article 
			<?php post_class( 'kiji' ); ?>>
			<div class="sub-header">
				<div class="bread">
					<ol>
						<li>
							<a href="<3ee8f139ced96328c070bfda42c3a893 />">
								<i class="fa fa-home"></i>
								<span>TOP</span>
							</a>
						</li>
						<li>
							<a href="<b375f0dc499b07d457902f2e2f892e51 />/blog/">BLOG </a>
						</li>
						<li>
							<?php if( has_category() ): ?>
							<?php $postcat=get_the_category(); ?>
							<?php echo get_category_parents( $postcat[0], true, '</li><li>' ); ?>
							<?php endif; ?>
							<a>
								<?php the_title(); ?>
							</a>
						</li>
					</ol>
				</div>
			</div>
			<div class="kiji-tag">
				<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
			</div>
			<h1>
				<?php the_title(); ?>
			</h1>
			<div class="kiji-date">
				<i class="fa fa-pencil"></i>
				<time datetime="<4c07bfc4cea7082735e4920fd3a84b2b />">投稿： 
					<?php echo get_the_date( 'Y年m月d日' ); ?>
				</time>
				<?php if( get_the_modified_date( 'Ymd' ) > get_the_date( 'Ymd' ) ): ?>｜ 
				<time datetime="<63dc1a688b5bcc7eafe3548188763c86 />">更新： 
					<?php echo get_the_modified_date( 'Y年m月d日' ); ?>
				</time>
				<?php endif; ?>
			</div>
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
			<div class="ninja_onebutton">
				<script type="text/javascript">
	//<![CDATA[
	(function(d){
	if(typeof(window.NINJA_CO_JP_ONETAG_BUTTON_603b3186d6992a9d4fe2994b63a8d18e)=='undefined'){
			document.write("<sc"+"ript type='text\/javascript' src='\/\/omt.shinobi.jp\/b\/603b3186d6992a9d4fe2994b63a8d18e'><\/sc"+"ript>");
	}else{
			window.NINJA_CO_JP_ONETAG_BUTTON_603b3186d6992a9d4fe2994b63a8d18e.ONETAGButton_Load();}
	})(document);
	//]]>
	</script>
				<span class="ninja_onebutton_hidden" style="display:none;">
					<?php the_permalink(); ?>
				</span>
				<span style="display:none;" class="ninja_onebutton_hidden">
					<?php the_title(); ?>
				</span>
			</div>
		</article>
		<?php endwhile; endif; ?>
		</div>
		<div class="sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<?php //アクセス数の記録
$count_key = 'postviews';
$count = get_post_meta($post->ID, $count_key, true);
$count++;
update_post_meta($post->ID, $count_key, $count);
?>