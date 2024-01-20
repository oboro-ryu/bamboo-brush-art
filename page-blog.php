<?php get_header(); ?>
<div class="profile-container">
            <div class="profile-block-container">
                <div class="parallel-quadrangle-a">
                    <div class="parallel-quadrangle-font-a">案</div> 
                    <div class="artwork-snippet-a"></div>
                </div>
                <a href="/wordpress/shop">
                    <div class="parallel-quadrangle-b">
                        <div class="parallel-quadrangle-font-b">購</div> 
                        <div class="artwork-snippet-b"></div>
                    </div>
                </a>
                <a href="/wordpress/blog">
                    <div class="parallel-quadrangle-c">
                        <div class="parallel-quadrangle-font-c">読</div> 
                        <div class="artwork-snippet-c"></div>
                    </div>
                </a>
                <a href="/wordpress/profile">
                    <div class="parallel-quadrangle-d">
                        <div class="parallel-quadrangle-font-d">紹</div> 
                        <div class="artwork-snippet-d"></div>
                    </div>
                </a>
            </div>
            <div class="white-bg-container">
                <div class="white-slide-bg-a"></div>
                <div class="white-slide-bg-b"></div>
                <div class="white-slide-bg-c"></div>
                <div class="white-slide-bg-d"></div>
                <div class="white-img-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/profile-img.png" alt="">
                </div>
            </div>
        </div>

        <!-- デジタル水墨画の紹介 -->
        <section class="digital-sumi-e-intro sentence">
            <h2 class="blink-text">デジタル水墨画とは</h2>
            <div class="digital-sumi-e-content container">
                <img src="<?php echo get_template_directory_uri(); ?>/img/digital-sumi-e-sample.png" alt="デジタル水墨画の例" class="digital-sumi-e-image archive div">
                <div>
                    <p>デジタル水墨画は、伝統的な水墨画の美しさを現代のテクノロジーを駆使して再現したアートジャンルです。このアートスタイルは、デジタルツールを活用して、手の動きや筆圧の細やかなニュアンスを精密にキャッチし、伝統的な墨の濃淡や筆の動きをデジタル上で表現します。</p>
                    <p>この手法により、アーティストは伝統的な水墨画の持つ繊細さや深みを保ちつつ、デジタル技術の進化による無限の再編集や表現の幅を探求することができます。伝統と革新が絶妙に融合したこのスタイルは、アート界に新しい風をもたらしています。</p>
                    <p>デジタル水墨画は、過去と未来、伝統と革新が同居するユニークなアートフォームと言えるでしょう。</p>
                </div>
            </div>
        </section>

            <section>
            <div class="parallax-section" data-speed="0.5">
                <div class="parallax-image" style="background-image: url('path/to/your/image.jpg')"></div>
            </div>
<section>
                <h2>記事一覧</h2>
                    <div class="container">
                        <div class="content">
                            <div class="card-wrap">

                                <?php
                                    $args = array(
                                    'post_type' => 'post',
                                    'paged' => $paged, // 表示するページ数
                                    'posts_per_page' => 9,
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