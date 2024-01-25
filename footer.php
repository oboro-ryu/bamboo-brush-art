</main>
<?php 
<<<<<<< Updated upstream
// 条件分岐を開始
=======
// 条件分岐を開始します。
>>>>>>> Stashed changes
if (
    // 現在のページが 'contact' ではない場合
    !is_page('contact') && 
    // かつ、'profile1' ではない場合
    !is_page('profile1') && 
    // かつ、'profile2' ではない場合
    !is_page('profile2') &&
    // かつ、'profile3' ではない場合
    !is_page('profile3') &&
    // かつ、'profile' ではない場合
    !is_page('profile') && 
    // かつ、ホームページ（フロントページ）でもない場合
    !is_home() 
) : 
    // 上記の条件に該当する場合、サイドバーを取得して表示
    get_sidebar();
// 条件分岐を終了
endif; 
?>
</div>

<footer>
<div class="fotter-container">
    <div class="social-links">
        <a href="https://tiktok.com/@sallymen_plus"><i class="fa-brands fa-tiktok"></i></a>
        <a href="https://youtube.com/@BambooBrushArt"><i class="fa-brands fa-youtube"></i></a>
        <a href="https://instagram.com/bamboo_brush_art?igshid=MjEwN2IyYWYwYw=="><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.patreon.com/"><i class="fa-brands fa-patreon"></i></a>
    </div>
</div>
<p><a href="https://bamboo-brush-art.com/lawpage/">特定商取引法に基づく表記</a></p>
<p>COPYRIGHT &copy; Bamboo Brush Art, ALL RIGHTS RESERVED. </p>
</footer>
<?php wp_footer(); ?>
<script>
// jQuery の準備が整ったら、以下の関数を実行
jQuery(document).ready(function($) {

    // ".card-list figure img" にマウスホバー時のイベントを設定
    $(".card-list figure img").hover(
        function() {
            // ホバー時に画像を拡大します（zoom: 1.1）。
            $(this).animate({ 'zoom': 1.1 }, 400);
        },
        function() {
            // ホバーが解除された時に画像を元のサイズに戻す（zoom: 1）。
            $(this).animate({ 'zoom': 1 }, 400);
        }
    );

    // ページ内リンク（href属性が"#"で始まるリンク）をクリックした際の挙動を設定
    $('a[href^="#"]').click(function() {
        let speed = 500; // スクロールの速度
        let href = $(this).attr("href"); // クリックされたリンクのhref属性を取得
        // ターゲットとなる要素を取得（hrefが"#"または空の場合は'html'をターゲットに）
        let target = $(href == "#" || href == "" ? 'html' : href);
        // ターゲットの位置を取得
        let position = target.offset().top;
        // スムーズスクロールを実行
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false; // 既定の動作をキャンセル
    });

    // トップへ戻るボタンを作成し、ページに追加
    let topBtn = $('<div class="scrollTop">^</div>');
    $('body').append(topBtn);

    // ウィンドウをスクロールした際のイベントを設定
    $(window).scroll(function () {
        // スクロール位置が200pxを超えた場合にボタンを表示
        if ($(this).scrollTop() > 200) {
            topBtn.fadeIn();
        } else {
            // それ以外の場合はボタンを非表示に
            topBtn.fadeOut();
        }
    });

    // トップへ戻るボタンをクリックした際の挙動を設定
    topBtn.click(function () {
        // ページのトップへスムーズスクロールを実行
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false; // 既定の動作をキャンセル
    });
});
</script>

<!-- AOS (Animate On Scroll) ライブラリのスクリプトを読み込み -->
<!-- このライブラリは、スクロール時のアニメーション効果を実装するために使用 -->
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

<!-- AOS ライブラリの初期化スクリプト -->
<script>
    // AOS ライブラリを初期化
    // これにより、スクロール時にアニメーション効果が適用
    AOS.init();
</script>

<script>
// ドキュメントが読み込まれたら、以下の関数を実行
$(document).ready(function(){
    // href属性が "#" で始まるすべてのリンクにクリックイベントを設定
    $('a[href^="#"]').click(function() {
        const speed = 400; // スクロールの速度を設定
        const href= $(this).attr("href"); // クリックされたリンクの href 属性を取得
        
        // hrefが "#" または空文字列である場合は 'html' をターゲットにし、
        // それ以外の場合は href の値をターゲットにします。
        const target = $(href == "#" || href == "" ? 'html' : href);
        
        const position = target.offset().top; // ターゲットのページ上での位置（トップからの距離）を取得
        
        // body と html 要素をアニメーションさせてスクロール
        // スクロールの目的地（position）、速度（speed）、
        // そして 'swing' オプションを用いたスムーズな動きを設定
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        
        return false; // クリックイベントのデフォルトの動作（リンクの遷移）をキャンセル
    });
});
</script>
<!-------------広告バーのカルーセル----------->
<script>
// ドキュメントが完全に読み込まれた後に、以下の関数を実行
jQuery(document).ready(function($){
    // '.ad-carousel' クラスを持つ要素に対して、slick スライダーを初期化
    $('.ad-carousel').slick({
        dots: true,            // スライダーの下にナビゲーションドットを表示
        infinite: true,        // 無限ループスクロールを有効化
        speed: 300,            // スライドする速度（ミリ秒）を設定
        slidesToShow: 4,       // 一度に表示するスライドの数を設定
        adaptiveHeight: 3,     // スライダーの高さをスライド内容に合わせて調整
        autoplay: true,        // 自動再生を有効化
        autoplaySpeed: 10000   // 自動再生の間隔（ミリ秒）を設定
    });
});
</script>
<!--------------フェードインアニメーション--------------->
<script>
// ドキュメントが完全に読み込まれた後に、以下の関数を実行
$(document).ready(function(){
    // setTimeoutを使って、一定時間後に特定の動作を実行
    setTimeout(function(){
        // 'h1', 'li', および複数のクラスを持つ要素に対して、
        // 'slide_on' というクラスの切り替えを行う
        $('h1, li, .parallel-quadrangle-a, .parallel-quadrangle-b, .parallel-quadrangle-c, .parallel-quadrangle-d, .white-slide-bg-a, .white-slide-bg-b, .white-slide-bg-c, .white-slide-bg-d, .white-img-container').toggleClass('slide_on');
    }, 500); // 500ミリ秒（0.5秒）後にこの動作を実行
});
</script> 
<!---------------ホバーアニメーション------------------>
<script>
// カスタムカーソルとフォロワー要素の変数を定義
var cursor = $(".cursor"),
    follower = $(".follower"),
    cWidth = 8, // カーソルの幅
    fWidth = 40, // フォロワーの幅
    delay = 10, // アニメーションの遅延度
    mouseX = 0, // マウスのX座標
    posY = 0; // マウスのY座標

// カーソルとフォロワーのアニメーションを更新する関数
function updateAnimation() {
    // カーソルとフォロワー要素が存在する場合にのみ動作
    if ($('.cursor').length && $('.follower').length) { 
        // アニメーションのために位置を計算
        posX += (mouseX - posX) / delay;
        posY += (mouseY - posY) / delay;

        // TweenMaxを使ってフォロワーの位置を設定
        TweenMax.set(follower, {
            css: {    
                left: posX - (fWidth / 2),
                top: posY - (fWidth / 2)
            }
        });
        
        // TweenMaxを使ってカーソルの位置を設定
        TweenMax.set(cursor, {
            css: {    
                left: mouseX - (cWidth / 2),
                top: mouseY - (cWidth / 2)
            }
        });

        // アニメーションを継続するためにrequestAnimationFrameを呼び出し
        requestAnimationFrame(updateAnimation); 
    }
}

// requestAnimationFrameを使ってアニメーションを開始
requestAnimationFrame(updateAnimation);

// ドキュメント上でのマウス移動イベント
$(document).on("mousemove", function(e) {
    // マウスの座標を更新
    mouseX = e.pageX;
    mouseY = e.pageY;
});

// リンク ('a'要素) 上でのマウスイベント
$("a").on({
    "mouseenter": function() {
        // マウスがリンクに乗ったとき、アクティブ状態のクラスを追加
        cursor.addClass("is-active");
        follower.addClass("is-active");
    },
    "mouseleave": function() {
        // マウスがリンクから離れたとき、アクティブ状態のクラスを削除
        cursor.removeClass("is-active");
        follower.removeClass("is-active");
    }
});
</script>
<!--------------ご案内システム「案内」--------------->
<!-------------.parallel-quadrangle-aのご案内------>
<script>
// ドキュメントが完全に読み込まれた後に、以下の関数を実行
$(document).ready(function() {
    // 初期のツールチップコンテンツを定義
    const initialTooltipContent = `
        <div class="tooltip-content">
            当サイトをご利用くださいまして誠にありがとうございます。
            <div>当サイトのご利用は初めてですか？？</div>
            <div>
                <button class="response-button yes-button">はい</button>
                <button class="response-button no-button">いいえ</button>
            </div>
        </div>
    `;

    // '.parallel-quadrangle-a' の要素にマウスがホバーした時のイベントを設定
    $('.parallel-quadrangle-a').hover(function() {
        $(this).css('transform', 'skewX(-25deg) scale(1.1)');
    }, function() {
        $(this).css('transform', 'skewX(-25deg) scale(1.1)');
    });

    // '.parallel-quadrangle-a' をクリックしたときのイベントを設定
    $('.parallel-quadrangle-a').click(function(e) {
        e.preventDefault(); // デフォルトのイベントをキャンセル

        $('.tooltip').remove(); // 既存のツールチップを削除

        // 新しいツールチップを作成して追加します。
        const tooltip = $(`<div class="tooltip">${initialTooltipContent}</div>`);
        $(this).append(tooltip);

        const facePosition = 90;  
        tooltip.css('top', facePosition + 'px'); // ツールチップの位置を設定
                tooltip.show(); // ツールチップを表示

        // '.artwork-snippet-*' の要素がある場合、透明度を設定
        if ($(this).find('.artwork-snippet-a, .artwork-snippet-b, .artwork-snippet-c, .artwork-snippet-d').length) {
            $(this).find('.artwork-snippet-a, .artwork-snippet-b, .artwork-snippet-c, .artwork-snippet-d').css('opacity', '1');
        }
    });

    // 他の '.parallel-quadrangle-*' 要素をクリックしたときのイベントを設定
    $('.parallel-quadrangle-b, .parallel-quadrangle-c, .parallel-quadrangle-d').on('click', function() {
        if ($(this).find('.artwork-snippet-a, .artwork-snippet-b, .artwork-snippet-c, .artwork-snippet-d').length) {
            $(this).find('.artwork-snippet-a, .artwork-snippet-b, .artwork-snippet-c, .artwork-snippet-d').css('opacity', '1');
        }
    });

    // 「はい」ボタンをクリックしたときのイベントを設定
    $(document).on('click', '.yes-button', function() {
        $('.tooltip-content').html('では楽しんでください！！');
    });

    // 「いいえ」ボタンをクリックしたときのイベントを設定
    $(document).on('click', '.no-button', function() {
        $('.tooltip-content').html(`<div class="next-info-content">
            当サイトでは現在、デジタル水墨画カードの販売を行っております。
            <div>
                <button class="response-button more-info-button">詳しく</button>
            </div>
        </div>
        `);
    });

    // 「詳しく」ボタンをクリックしたときのイベントを設定
    $(document).on('click', '.more-info-button', function() {
        $('.tooltip-content').html(`<div class="next1-info-content">
            デジタル水墨画カードは、伝統的な水墨画の美しさと最先端のデジタル技術を組み合わせた新しいアートメディアです。AIによって作成されるアートは、独自性や創造性に富むこのカードは、持ち運びが容易かつ安価な価格での購入が可能で、独特のギフトとしても最適です。伝統と革新の融合をお手元で体感してください。
            <div>
                <button class="response-button dejital-info-button">デジタルカードをみたい</button>
                <button class="response-button article-info-button">記事を読みたい</button>
            </div>
        </div>
        `);
    });

    // 「デジタルカードをみたい」ボタンをクリックしたときのイベントを設定
    $(document).on('click', '.dejital-info-button', function() {
        $('.tooltip-content').html(`<a href="/wordpress/shop"><div class="next2-info-content">
            水墨画デジタルカード一覧へ
        </div></a>
        `);
    });

    // 「記事を読みたい」ボタンをクリックしたときのイベントを設定
    $(document).on('click', '.article-info-button', function() {
        $('.tooltip-content').html(`<a href="/wordpress/blog"><div class="next3-info-content">
            記事一覧へ
        </div></a>
        `);
    });

    // 'next2-info-content' または 'next3-info-content' をクリックしたときのイベントを設定
    $(document).on('click', '.next2-info-content, .next3-info-content', function(e) {
        e.stopPropagation(); // イベントの伝播を停止
        const link = $(this).parent().attr('href'); // リンク先を取得
        if (link) {
            window.location.href = link; // リンク先に移動
        }
    });

    // ドキュメント上の任意の場所をクリックしたときのイベントを設定
    $(document).on('click', function(e) {
        // クリックされた要素が特定の要素群に属していない場合、ツールチップを削除
        if (!$(e.target).closest('.parallel-quadrangle-a, .parallel-quadrangle-b, .parallel-quadrangle-c, .parallel-quadrangle-d, .tooltip').length) {
            $('.tooltip').remove();
        }
    });
});

</script>
<script>
// DOMが完全に読み込まれた後に、以下の関数を実行
document.addEventListener("DOMContentLoaded", function() {
    // '.sentence' クラスを持つすべての要素を取得
    const elements = document.querySelectorAll('.sentence'); 

    // 要素の位置をチェックして、特定の条件を満たした場合にクラスを追加する関数
    function checkPosition() {
        // 取得した要素のそれぞれに対して処理を行う
        for (let element of elements) {
            // 要素のビューポート上での位置を取得
            const positionFromTop = element.getBoundingClientRect().top;

            // 要素がビューポート内に入ったかどうかをチェック
            if (positionFromTop - window.innerHeight <= 0) {
                // 条件を満たした場合、'fade-in' クラスを追加
                element.classList.add('fade-in');
            }
        }
    }

    // スクロールイベント時に位置チェック関数を呼び出し
    window.addEventListener('scroll', checkPosition);
    // 初期状態でも位置チェック関数を呼び出し
    checkPosition();
});
</script>
<script>
// '.sumi-e-content' クラスを持つすべての要素を取得
const leftElements = document.querySelectorAll('.sumi-e-content');
// '.digital-sumi-e-content' クラスを持つすべての要素を取得
const rightElements = document.querySelectorAll('.digital-sumi-e-content');

// スライドインアニメーションの位置をチェックする関数
function checkSlidePosition() {
    // 左側の要素について処理を行う
    for (let element of leftElements) {
        // 要素のビューポート上での位置を取得
        const positionFromTop = element.getBoundingClientRect().top;

        // 要素がビューポート内に入ったかどうかをチェック
        if (positionFromTop - window.innerHeight <= 0) {
            // 条件を満たした場合、'slide-in-left' クラスを追加
            element.classList.add('slide-in-left');
        }
    }

    // 右側の要素について処理を行う
    for (let element of rightElements) {
        // 要素のビューポート上での位置を取得
        const positionFromTop = element.getBoundingClientRect().top;

        // 要素がビューポート内に入ったかどうかをチェック
        if (positionFromTop - window.innerHeight <= 0) {
            // 条件を満たした場合、'slide-in-right' クラスを追加
            element.classList.add('slide-in-right');
        }
    }
}

// スクロールイベント時にスライドイン位置チェック関数を呼び出し
window.addEventListener('scroll', checkSlidePosition);
// 初期状態でもスライドイン位置チェック関数を呼び出し
checkSlidePosition();
</script>
<script>
// ウィンドウのロードイベントが完了したときに、以下の関数を実行
$(window).on('load', function() {
    // '#loading-wrapper' 要素のフェードアウトアニメーションを実行
    // これは通常、ローディング画面やインジケータを非表示にするために使用
    $('#loading-wrapper').fadeOut();
    
    // 'body' 要素から 'loading' クラスを削除
    // このクラス削除は、ページの読み込みが完了したことを示し、ローディング時に適用されていたスタイルや制限を解除するために使う
    $('body').removeClass('loading');
});
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "name": "Bamboo Brush Art",
  "url": "https://bamboo-brush-art.com/",
  "description": "デジタル水墨画の販売サイト",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://bamboo-brush-art.com/search?query={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
</body>
</html>
