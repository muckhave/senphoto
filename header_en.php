<!DOCTYPE html>
<html lang="en">
<head prefix="og: http://ogp.me/ns#">
<meta charset="UTF-8">
<title>
<?php wp_title( '|', true, 'right'); ?>
<?php bloginfo( 'name' ); ?>
</title>

<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?20180523">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/image/fabi.png" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js?180302"></script>
<link rel="stylesheet" href="css/animate.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.lettering.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.textillate.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cinzel|Alex+Brush|Anton|Cabin|Josefin+Sans|Oswald|Roboto|Playfair+Display|Kalam" rel="stylesheet">
<link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />



<?php if( is_single() || is_page() ): //記事の個別ページ用のメタデータ ?>
<meta name="description" content="<?php echo wp_trim_words( $post->post_content, 100, '…' ); ?>">
<?php if( has_tag() ): ?>
<?php $tags = get_the_tags();
$kwds = array();
foreach($tags as $tag) {
	$kwds[] = $tag->name;
} ?>
<meta name="keywords" content="<?php echo implode( ',', $kwds ); ?>">
<?php endif; ?>
<meta property="og:type" content="article">
<meta property="og:title" content="<?php the_title(); ?>">
<meta property="og:url" content="<?php the_permalink(); ?>">
<meta property="og:description" content="<?php echo wp_trim_words( $post->post_content, 100, '…' ); ?>">
<meta property="og:image" content="<?php echo mythumb( 'large' ); ?>">
<?php endif; //記事の個別ページ用のメタデータ【ここまで】?>
<?php if( is_home() ): //トップページ用のメタデータ ?>
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<?php $allcats = get_categories();
foreach($allcats as $allcat) {
	$kwds[] = $allcat->name;
} ?>
<meta name="keywords" content="<?php echo implode( ',', $kwds ); ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
<meta property="og:url" content="<?php echo home_url( '/' ); ?>">
<meta property="og:description" content="<?php bloginfo( 'description' ); ?>">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/picnic-top.jpg">
<?php endif; //トップページ用のメタデータ【ここまで】?>
<?php if( is_category() || is_tag() ): //カテゴリー・タグページ用のメタデータ ?>
	<?php if( is_category() ) {
		$termid = $cat;
		$taxname = 'category';
	} elseif( is_tag() ) {
		$termid = $tag_id;
		$taxname = 'post_tag';
	} ?>
<meta name="description" content="<?php single_term_title(); ?>に関する記事の一覧です。">
<?php $childcats = get_categories( array( 'child_of' => $termid ) );
$kwds = array();
$kwds[] = single_term_title('', false);
foreach($childcats as $childcat) {
	$kwds[] = $childcat->name;
} ?>
<meta name="keywords" content="<?php echo implode( ',', $kwds ); ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php single_term_title(); ?>に関する記事｜<?php bloginfo( 'name' ); ?>">
<meta property="og:url" content="<?php echo get_term_link( $termid, $taxname ); ?>">
<meta property="og:description" content="<?php single_term_title(); ?>に関する記事の一覧です。">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/picnic-top.jpg">
<?php endif; //カテゴリー・タグページ用のメタデータ【ここまで】?>
<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
<meta property="og:locale" content="ja_JP">
<meta name="twitter:site" content="@ebisucom">
<meta name="twitter:card" content="summary_large_image">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
		<header class="header">
			<div class="header__inner">
				<div class="header__tit flexbox flex_v-center">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div>
						<h1 class="header__maintit">SEN PHOTO</h1>
						<span class="header__subtit">for beatiful snap shot</span>
					</div></a>
				</div>
				<div class="header__right flexbox flex_v-center">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<div class="header__btn--home btn btn--simple">
							<span class="icon icon--house"></span>HOME
						</div>
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<div class="header__btn btn btn--simple">
							日本語/ <span class="font_a5a5a5">ENGLISH</span>
						</div>
					</a>
					<div class="header__hbgBtn">
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
		</header>
		<div class="nav__wrap">
			<nav class="nav">
				<ul class="nav__inner">
					<li class="nav__item arrow-right arrow--white">
						<a href="<?php echo get_template_directory_uri(); ?>/toppage_en/">HOME</a>
					</li>
					<li class="nav__item arrow-right arrow--white">
						<a href="<?php echo get_template_directory_uri(); ?>/party_en/">PARTY PHOTO<br class="txt-br">SERVICE</a>
					</li>
					<li class="nav__item arrow-right arrow--white">
						<a href="<?php echo get_template_directory_uri(); ?>/kamakura_en/">KAMAKURA PHOTO<br class="txt-br">TOUR</a>
					</li>
					<li class="nav__item arrow-right arrow--white">
						<a href="https://www.instagram.com/senphoto_wedding/" target="_blank">INSTAGRAM</a>
					</li>
					<li class="nav__item arrow-right arrow--white">
						<a href="<?php echo get_template_directory_uri(); ?>/fee_en/">FEE SYSTEM</a>
					</li>
					<li class="nav__item arrow-right arrow--white">
						<a href="<?php echo get_template_directory_uri(); ?>/contact_en/">APPLY or
							<br class="txt-br">CONTACT
						</a>
					</li>
				</ul>
			</nav>
		</div>