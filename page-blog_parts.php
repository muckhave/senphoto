<?php get_header(); ?>
<div class="bk_gray2">
	<div class="contents flexbox flex_wrap">
		<div class="blog_wrap">
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
			<h1>ブログのパーツコピペ用ページ</h1>
			<h2>このタグは見出しの2です</h2>
			<div class="sample-html">
<pre>&lt;h2&gt;このタグは見出しの2です&lt;/h2&gt;</pre>
</div>
<h3>このタグは見出しの3です</h3>
<div class="sample-html">
<pre>&lt;h3&gt;このタグは見出しの3です&lt;/h3&gt;</pre>
</div>
<h4>このタグは見出しの4です</h4>
<div class="sample-html">
<pre>&lt;h4&gt;このタグは見出しの4です&lt;/h4&gt;</pre>
</div>
<h5>このタグは見出しの5です</h5>
<div class="sample-html">
<pre>&lt;h5&gt;このタグは見出しの5です&lt;/h5&gt;</pre>
</div>
<a href="http://senphoto.sub.jp/wp-content/themes/senphoto/contact/"><div class="linkBtn arrow-right">お問い合わせ</div></a>
<div class="sample-html">
<pre>&lt;a href=&quot;http://senphoto.sub.jp/wp-content/themes/senphoto/contact/&quot;&gt;&lt;div class=&quot;linkBtn arrow-right&quot;&gt;お問い合わせはこちら&lt;/div&gt;&lt;/a&gt;</pre>
</div>
		</article>
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