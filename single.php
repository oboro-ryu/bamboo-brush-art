<?php get_header(); ?>
    <div class='article-container'>
        <div class='text'>
            <?php the_content(); ?>
        </div>
        <small><i class="fa-regular fa-clock"></i><?php echo get_the_date( $format, $post ); ?>　<i class="fa-solid fa-tag"></i><?php the_tags('', ' / ' ); ?></small>
    </div>
<?php get_footer(); ?>