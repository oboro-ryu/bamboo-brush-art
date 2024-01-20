<?php get_header(); ?>
    <section>
        <?php
        $cat = get_the_category();
        $catname = $cat[0]->cat_name;
        $id = $cat[0]->cat_ID;
        ?>

        <h2>『<?php echo $catname; ?>』一覧</h2>
        <div class="container">
            <div class="content">
                <div class="card-wrap">

                    <?php
                        $args = array(
                        'post_type' => 'post',
                        'paged' => $paged, // 表示するページ数
                        'posts_per_page' => 6,
                        'category__in' => $id
                    ); ?>
                    <?php $wp_query = new WP_Query( $args ); ?>

                        <?php if (have_posts()): ?>
                            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); /* 投稿のループ開始 */ ?>
                    
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
                            </div></a>

                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>

                        <?php endif; ?>
                </div>
            </div>
        </div>
        <div class='pagenavi'>
            <?php if ( function_exists( 'wp_pagenavi' ) ) { wp_pagenavi(); } ?>
        </div>
    

    </section>
<?php get_footer(); ?>