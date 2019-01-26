<article class="blog_list_item" <?php post_class( 'gaiyou' ); ?>>
<a class="flexbox flex_wrap" href="<?php the_permalink(); ?>">
        <span class="blog_list_img" style="background-image:url(<?php echo mythumb( 'medium' ); ?>);"></span>
        <div class="blog_list_txtarea">
            <h2 class="blog_list_tit"><?php the_title(); ?></h2>
            <div class="blog_list_tit_date">
                <i class="fa fa-pencil"></i>
                <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                date：<?php echo get_the_date( 'Y-m-d' ); ?>
                </time>
            </div>
            <div class="blog_list_infotxt"><?php the_excerpt(); ?></div>
        </div>

</a>
</article>
