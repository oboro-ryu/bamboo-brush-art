<?php get_header(); ?>

<?php
    $tagID = get_queried_object_id();
?>
                <h2>タグ：『<?php single_tag_title(); ?>』の記事一覧</h2>
                    <div class="container">
                        <div class="content">
                            <div class="card-wrap">

                                <?php
                                    $args = array(
                                    'post_type' => 'post',
                                    'tag_id' => $tagID,
                                    'paged' => $paged, // 表示するページ数
                                    'posts_per_page' => 6,
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

<?php get_footer(); ?>