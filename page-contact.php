<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="http://alexgorbatchev.com/pub/sh/current/styles/shCoreEclipse.css"/>
<script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js"></script>
    <?php if(have_posts()): while(have_posts()): 
	the_post(); ?>
        <div class="titArea titArea--flower flexbox flex_v-center flex_just-bet" style="background-image:url(<?php echo get_template_directory_uri(); ?>/image/contact2.jpg);">
            <h1 class="titArea__tit">お申込み・お問い合わせ</h1>
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
	<h4 class="txt-center ">利用規約</h4>
	<ol class="form__kiyaku maxWidth">
		<li class="form__kiyaku__li">有料会場をご利用の方はお申し込み前に、会場の責任者に対し外部からの出張撮影を利用することを伝え、許可をお取り下さい。料金が発生する場合は、本サービス利用者のご負担となります。</li>
		<li class="form__kiyaku__li">お申し込み後、原則３日以内に利用者のメールアドレスへ撮影の可否のご連絡致します。キャンセル料はかかりません。</li>
		<li class="form__kiyaku__li">お支払方法は原則として銀行振込となります。</li>
		<li class="form__kiyaku__li">撮影日当日、天候や事故等により撮影地に到着できない、また私の身に病気・負傷・窃盗などの撮影ができない状況が発生した場合、当方は一切の責任を負いませんのでご了承下さい。（私一人で撮影しているため）</li>
		<li class="form__kiyaku__li">カメラは２台撮影ですが、万が一撮影中や撮影後に私的事故（カメラ・撮影データ破損）があった場合には、謝罪料としてお客様に１００００円お支払いし、これをもって当方は一切の責任を負わず、利用者はクレーム・損害賠償の請求を一切行わないものとします。</li>
		<li class="form__kiyaku__li">撮影環境や状況によってはご要望の写真を撮影できない場合もございます。また撮影データご購入後の返金は受け付けておりませんのでご了承下さい。</li>
	</ol>
</div>
<?php get_footer(); ?>
<?php //アクセス数の記録
$count_key = 'postviews';
$count = get_post_meta($post->ID, $count_key, true);
$count++;
update_post_meta($post->ID, $count_key, $count);
?>