
<?php get_header(); ?>
<div class='article-container'>
    <h1><?php the_title(); ?></h1>
    <div class='text'>
        <?php the_content(); ?>
    </div>
    <small><i class="fa-solid fa-tag"><?php the_tags('', ' / ' ); ?></i></small>
</div>
<?php get_footer(); ?>