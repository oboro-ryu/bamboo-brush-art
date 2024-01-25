<?php

// サムネイル(アイキャッチ)
add_theme_support( "post-thumbnails" );


function titles()
{
    // 現在のページのタイトルを取得し、" | "を区切り文字として使用
    $title = wp_title(" | ", true, "right");

    if (is_home() || is_front_page()) {
        // この条件分岐は、現在のページがホームページまたはフロントページの場合に該当します
        // ホームページまたはフロントページの場合、指定されたタイトルを出力
        echo "Bamboo Brush Art | デジタル水墨画アート販売サイト";
    } else {
        // 上記の条件に当てはまらない場合（トップページ以外のページ）
        // 取得したページタイトルと" | "の後にサイト名を追加して出力
        echo $title . "Bamboo Brush Art";
    }
};


// WordPress の 'after_setup_theme' フックに 'woocommerce_support' 関数を追加します。
// 'after_setup_theme' フックは、テーマがセットアップされた後に実行されるフックです。
add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() {
    // テーマに WooCommerce のサポートを追加します。
    // これにより、テーマが WooCommerce プラグインとの互換性を持ち、
    // WooCommerce の機能が正しく動作するようになります。
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
// 検索クエリにフィルターを適用する関数を定義します。
function my_post_search($search) {
    // 現在のリクエストが検索ページの場合にのみ処理を行います。
    if(is_search()) {
        // 検索クエリに "AND post_type = 'post'" を追加して、
        // 検索結果を投稿(post)タイプに限定します。
        $search .= " AND post_type = 'post'";
    }
    // 変更後の検索クエリを返します。
    return $search;
}
// 'posts_search' フックに 'my_post_search' 関数を追加します。
add_filter('posts_search', 'my_post_search');

// 空の検索クエリに対してリダイレクトを行う関数を定義します。
function empty_search_redirect( $wp_query ) {
    // 主要クエリであり、検索ページであり、管理画面ではない場合に処理を行います。
    if ( $wp_query->is_main_query() && $wp_query->is_search && ! $wp_query->is_admin ) {
        // 検索クエリの文字列を取得し、トリミングします。
        $s = $wp_query->get( 's' );
        $s = trim( $s );
        // 検索クエリが空の場合、ホームページにリダイレクトします。
        if ( empty( $s ) ) {
            wp_safe_redirect( home_url('/') );
            exit;
        }
    }
}
// 'parse_query' フックに 'empty_search_redirect' 関数を追加します。
add_action( 'parse_query', 'empty_search_redirect' );



// aside
// WordPress の 'register_sidebar' 関数が存在するかどうかを確認します。
// この関数はウィジェットエリア（サイドバー）を登録するために使われます。
if (function_exists('register_sidebar')) {
    // ウィジェットエリア（サイドバー）を登録します。
    register_sidebar(array(
        'name' => 'サイドバー',             // サイドバーの名前。
        'id' => 'sidebar',                 // サイドバーのID。ウィジェットを指定する際に使用します。
        'description' => 'サイドバーウィジェット',  // サイドバーの説明。
        'before_widget' => '<div>',        // ウィジェットを囲む前のHTMLマークアップ。
        'after_widget' => '</div>',        // ウィジェットを囲む後のHTMLマークアップ。
        'before_title' => '<h3 class="side-title">', // ウィジェットのタイトルを囲む前のHTMLマークアップ。
        'after_title' => '</h3>'           // ウィジェットのタイトルを囲む後のHTMLマークアップ。
    ));
}


// tag
//タグクラウドショートコードget_tags()投稿数表示無し
// ショートコード用の関数を定義します。
function mytagsc2() {
    // 出力バッファリングを開始します。
    ob_start(); ?>
    <div class="mytags">
    <?php
    // タグを名前順で取得します。
    $tags = get_tags('orderby=name&order=ASC');
    // タグの順序をフィルタリングするためのフックを適用します。
    $orderby = apply_filters( 'get_terms_orderby', $orderby, $args );
    if ($tags) {
        // 取得したタグごとにループ処理を行います。
        foreach($tags as $tag) { ?>
            <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name ; ?></a>
        <?php } ?>
    <?php } ?>
    </div>
    <?php
    // 出力バッファを取得し、クリーンアップします。
    return ob_get_clean();
}
// 'mytag2' というショートコードを 'mytagsc2' 関数に関連付けます。
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


