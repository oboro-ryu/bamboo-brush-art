<?php get_header(); ?> 
    <section>   
    <h2>「<?php the_search_query(); ?>」の検索結果は<?php echo $wp_query->found_posts;?>件です</h2>

            <div class="container">
                <div class="content">
                    <div class="card-wrap">
                        <?php if (have_posts()): ?>
                            <?php while(have_posts()) : the_post(); ?>

                            <a href="<?php the_permalink(); ?>"><div class="card-list">
                                <?php if (has_post_thumbnail()): ?>
                                    <figure><?php the_post_thumbnail( "post-thumbnail" ); ?></figure>
                                <?php else: ?>
                                    <figure><img src='<?php echo get_template_directory_uri(); ?>/img/no-image.jpg' alt='no-image'></figure>
                                <?php endif; ?>
                                <h2><?php the_title(); ?></h2>
                                <p>
                                    <?php the_excerpt(); ?>
                                    <small><i class="fa-regular fa-clock"></i><?php echo get_the_date( $format, $post ); ?>　<i class="fa-solid fa-tag"></i><?php the_tags('', ' / ' ); ?></small>
                                </p>
                            </div><a>


                            <?php endwhile; else: ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>                        
    </section>

<?php get_footer(); ?>