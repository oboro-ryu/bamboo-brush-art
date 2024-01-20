<?php

// サムネイル(アイキャッチ)
add_theme_support( "post-thumbnails" );


function titles()
{
    $title = wp_title(" | ", true, "right");
    if (is_home() || is_front_page()) {
        // トップページ
        echo "Bamboo Brush Art | デジタル水墨画アート販売サイト";
    } else {
        // トップページ以外
        echo $title . "Bamboo Brush Art";
    }
};



add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
}


//ウィジェット
function sample_widgets(){
    register_sidebar(array(
    'name' => '共通サイドバー',/* ←追加したいウィジェットの名前 */
    'description' => 'サイドバーウィジェット',/* ←追加したいウィジェットの概要 */
    'id' => 'sidebar',/* ←追加したいウィジェットのID */
    'before_widget' => '<div>',/* ←追加したいウィジェットを囲う開始タグ */
    'after_widget' => '</div>',/* ←追加したいウィジェットを囲う閉じタグ */
    'before_title' => '<h3>',/* ←追加したいウィジェットのタイトルを囲う開始タグ */
    'after_title' => '</h3>'/* ←追加したいウィジェットのタイトルを囲う閉じタグ */
    ));
}
add_action('widgets_init', 'sample_widgets');




// 検索
function my_posy_search($search) {
    if(is_search()) {
    $search .= " AND post_type = 'post'";
    }
    return $search;
}
add_filter('posts_search', 'my_posy_search');

function empty_search_redirect( $wp_query ) {
    if ( $wp_query->is_main_query() && $wp_query->is_search && ! $wp_query->is_admin ) {
    $s = $wp_query->get( 's' );
    $s = trim( $s );
    if ( empty( $s ) ) {
    wp_safe_redirect( home_url('/') );
    exit;
    }
    }
    }
    add_action( 'parse_query', 'empty_search_redirect' );


// aside
if (function_exists('register_sidebar')) {
    register_sidebar(array(
      'name' => 'サイドバー',
      'id' => 'sidebar',
      'description' => 'サイドバーウィジェット',
      'before_widget' => '<div>',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="side-title">',
      'after_title' => '</h3>'
   ));
  }








// tag
//タグクラウドショートコードget_tags()投稿数表示無し
function mytagsc2() {
    ob_start();?>
  <div class="mytags">
  <?php
  $tags = get_tags('orderby=name&order=ASC');
  $orderby = apply_filters( 'get_terms_orderby', $orderby, $args );
  if ($tags) {
  foreach($tags as $tag) { ?>
  <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name ; ?></a>
  <?php } ?>
  <?php } ?>
  </div>
  <?php
  return ob_get_clean();
  }
  add_shortcode('mytag2', 'mytagsc2');

  function enqueue_theme_scripts() {
    wp_enqueue_script('jquery');
    
    // カスタムスクリプトの読み込み
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/custom-scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

function add_slick_assets() {
    // Slick CSS
    wp_enqueue_style( 'slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css' );

    // Slick Theme CSS (オプショナル: Slickのデフォルトスタイルを使用する場合)
    wp_enqueue_style( 'slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css' );

    // jQuery (WordPress がすでに登録している場合はこれが必要ないかもしれません)
    wp_enqueue_script( 'jquery' );

    // Slick JS
    wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array( 'jquery' ), '', true );
}

function enqueue_gsap_scripts() {
    // GSAP
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', array(), null, true);
}

function move_product_meta() {
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
    add_action( 'woocommerce_after_single_product', 'woocommerce_template_single_meta', 20 );
}
add_action( 'init', 'move_product_meta' );



add_action('wp_enqueue_scripts', 'enqueue_gsap_scripts');



add_action( 'wp_enqueue_scripts', 'add_slick_assets' );

//=====http://localhost/wordpress/product/特定の商品の買い物かごの位置を変更=========//
function change_add_to_cart_position() {
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
    add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_single_add_to_cart', 15 );
}
add_action( 'init', 'change_add_to_cart_position' );


