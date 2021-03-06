 		<div class="grid">
			<div class="section grid_item-2 grid_item-s1 bk_gray">
				<div class="section__tit">
					<span class="g_cizl">BLOG</span>
				</div>
				<div class="section__tit__mintxt">センのブログ</div>
                
                
                
                		  		<?php if( has_category() ) {
		$cats = get_the_category();
		$catkwds = array();
		foreach($cats as $cat) {
			$catkwds[] = $cat->term_id;
		}
	} ?>
	<?php
	$myposts = get_posts( array(
		'post_type' => 'post',
		'posts_per_page' => '6',
		'post__not_in' => array( $post->ID ),
		'category__in' => $catkwds,
		'orderby' => 'rand'
	) ); 
	if( $myposts ): ?>
	<aside class="mymenu mymenu-thumb mymenu-related">
	<ul class="blog__wrap grid pd-r-20">
	
		<?php foreach($myposts as $post):
		setup_postdata($post); ?>
        <li class="flexbox blog__list flex_wrap grid_item-3 grid_item-s2 pd-l-20">
            <a class="footer_blog_ank" href="<?php the_permalink(); ?>">
                <span  class="blog__thumImg" style="background-image:url(<?php echo mythumb( 'medium' ); ?>);"></span>
                <div class="blog__date">2018.06.15 Fri.</div>
                <div class="blog__text"><?php the_title(); ?></div>
            </a>
        </li>
        
		<?php endforeach; ?>
	
	</ul>
	</aside>
	<?php wp_reset_postdata();
	endif; ?>
			</div>
			<div class="section grid_item-2 grid_item-s1 bk_yellow">
				<div class="section__tit">
					<span class="g_cizl">INSTAGRAM</span>
				</div>
				<div class="section__tit__mintxt">インスタグラム</div>
				<div class="instagram">
					<!-- InstaWidget -->
					<a href="https://www.instagram.com/senphoto_wedding/" id="link-cc2a868e36693849d37e0b1517095a047bf2ec0a2878927495e262a9375ea596">@senphoto_wedding</a>
					<script src="https://instawidget.net/js/instawidget.js?u=cc2a868e36693849d37e0b1517095a047bf2ec0a2878927495e262a9375ea596&width=280px"></script>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="footer__inner">
				<div class="grid  pd-r-20">
					<div class="grid_item-3 grid_item-s1 pd-t-10 pd-l-20">
						<ul class="grid flex_just-bet pd-r-20">
							<li class="footer__item grid_item-2 grid_item-s2 pd-l-20">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<span class="icon icon--houseW"></span>HOME
								</a>
							</li>
							<li class="footer__item grid_item-2 grid_item-s2 pd-l-20">
								<a href="<?php echo get_template_directory_uri(); ?>/party/">
									<span class="icon icon--cameraW"></span>結婚式２次会・各種パーティー
								</a>
							</li>
							<li class="footer__item grid_item-2 grid_item-s2 pd-l-20">
								<a href="<?php echo get_template_directory_uri(); ?>/kamakura/">
									<span class="icon icon--cameraW"></span>ロケーション撮影
								</a>
							</li>
							<li class="footer__item grid_item-2 grid_item-s2 pd-l-20">
								<a href="<?php echo get_template_directory_uri(); ?>/flower/">
									<span class="icon icon--cameraW"></span>花の写真教室
								</a>
							</li>
							<li class="footer__item grid_item-2 grid_item-s2 pd-l-20">
								<a href="<?php echo get_template_directory_uri(); ?>/blog">
									<span class="icon icon--penW"></span>BLOG
								</a>
							</li>
							<li class="footer__item grid_item-2 grid_item-s2 pd-l-20">
								<a href="<?php echo get_template_directory_uri(); ?>/fee/">
									<span class="icon icon--yenW"></span>料金について
								</a>
							</li>
							<li class="footer__item grid_item-2 grid_item-s2 pd-l-20">
								<a href="<?php echo get_template_directory_uri(); ?>/contact/">
									<span class="icon icon--mailW"></span>お申込み・お問い合わせ
								</a>
							</li>
							<li class="footer__item grid_item-2 grid_item-s2 pd-l-20">
								<a href="<?php echo get_template_directory_uri(); ?>/">
									<span class="icon icon--menW"></span>カメラマンについて
								</a>
							</li>
						</ul>
					</div>
					<div class="grid_item-3 footer__gred2 grid_item-s1 pd-t-10 pd-l-20">
						<ul class="grid pd-r-20">
							<li class="footer__item footer__item--sub grid_item-s2 grid_item-2 pd-l-20">
								<a href="<?php echo get_template_directory_uri(); ?>/toppage_en/">ENGLISH</a>
							</li>
							<li class="footer__item footer__item--sub grid_item-s2 grid_item-2 pd-l-20">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">JAPANESE</a>
							</li>
							<li class="footer__item footer__item--sub grid_item-s1 grid_item-1  pd-l-20">
								<a href="https://www.instagram.com/senphoto_wedding/" >
									<span class="footer__insta icon-instagram">Instagram</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="grid_item-3 pd-t-10 grid_item-s1 pd-l-20">
						<div class="footer__plofile__tit">PLOFILE</div>
						<div class="footer__plofile">
							<div class="footer__plofile__image">
								<img src="<?php echo get_template_directory_uri(); ?>/image/sen_plofile.jpg" alt="senphoto">
							</div>
							<div class="footer__plofile__txt">海外で著名写真家のアシスタントを経てフリーランスフォトグラファーとして独立。ファッション、報道、ブライダルの撮影を手がける。帰国後、SENPHOTOを立ち上げ、『写真とは何か？』を追求し続けている。</div>
						</div>
					</div>
				</div>
				<div class="footer__copylight">Copyright(C)2018 
					<br class="txt-br2">SEN PHOTO All Rights Reserved.
				</div>
			</div>
		</footer>
<?php wp_footer(); ?>
</body>
</html>