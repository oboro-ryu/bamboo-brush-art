</main>

<?php 
if (
    !is_page('contact') && 
    !is_page('profile1') && 
    !is_page('profile2') &&
    !is_page('profile3') &&
    !is_page('profile') && 
    !is_home() 
) : 
?>
    <?php get_sidebar(); ?>
<?php endif; ?>


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
    jQuery(document).ready(function($) {


$(".card-list figure img").hover(
    function() {
        $(this).animate({ 'zoom': 1.1 }, 400);
    },
    function() {
        $(this).animate({ 'zoom': 1 }, 400);
    }
);


$('a[href^="#"]').click(function() {
    let speed = 500;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
});


let topBtn = $('<div class="scrollTop">^</div>');
$('body').append(topBtn);
$(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
        topBtn.fadeIn();
    } else {
        topBtn.fadeOut();
    }
});
topBtn.click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
    return false;
});
});
</script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<!--AOSライブラリ-------->
<script>
    AOS.init();
</script>
<script>
$(document).ready(function(){
    $('a[href^="#"]').click(function() {
        var speed = 400;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $('body,html').animate({scrollTop:position}, speed, 'swing');
        return false;
    });
});
</script>
<!---------ヘッダー固定------------->
<!-- <script>
    jQuery(document).ready(function($) {
    var stickyHeaderTop = $('header').offset().top; 

    $(window).scroll(function(){
        if( $(window).scrollTop() > stickyHeaderTop ) {
            $('header').addClass('sticky');
        } else {
            $('header').removeClass('sticky');
        }
    });
});
</script>

<script>
    jQuery(document).ready(function($) {
    $(window).scroll(function() {
        $('.parallax-section').each(function() {
            var windowTop = $(window).scrollTop();
            var elementTop = $(this).offset().top;
            var diff = windowTop - elementTop;
            var yPos = -(diff * $(this).data('speed'));

            $(this).children('.parallax-image').css('transform', 'translate3d(0, ' + yPos + 'px, 0)');
        });
    });
});
</script> -->
<!-------------広告バーのカルーセル----------->
<script>
jQuery(document).ready(function($){
    $('.ad-carousel').slick({
        dots: true, 
        infinite: true, 
        speed: 300, 
        slidesToShow: 4, 
        adaptiveHeight: 3, 
        autoplay: true, 
        autoplaySpeed: 10000 
    });
});
</script>
<!--------------フェードインアニメーション--------------->
<script>
    $(document).ready(function(){
    setTimeout(function(){
        $('h1, li, .parallel-quadrangle-a, .parallel-quadrangle-b, .parallel-quadrangle-c, .parallel-quadrangle-d, .white-slide-bg-a, .white-slide-bg-b, .white-slide-bg-c, .white-slide-bg-d, .white-img-container').toggleClass('slide_on');
    }, 500); // 0.5秒後に動作
});
</script> 
<!---------------ホバーアニメーション------------------>
<script>
var
cursor = $(".cursor"),
follower = $(".follower"),
cWidth = 8, 
fWidth = 40, 
delay = 10, 
mouseX = 0, 
posX = 0,
posY = 0; 


function updateAnimation() {
    if ($('.cursor').length && $('.follower').length) { 
        posX += (mouseX - posX) / delay;
        posY += (mouseY - posY) / delay;

        TweenMax.set(follower, {
            css: {    
                left: posX - (fWidth / 2),
                top: posY - (fWidth / 2)
            }
        });
        
        TweenMax.set(cursor, {
            css: {    
                left: mouseX - (cWidth / 2),
                top: mouseY - (cWidth / 2)
            }
        });

        requestAnimationFrame(updateAnimation); 
    }
}


requestAnimationFrame(updateAnimation);


$(document).on("mousemove", function(e) {
    mouseX = e.pageX;
    mouseY = e.pageY;
});

$("a").on({
    "mouseenter": function() {
        cursor.addClass("is-active");
        follower.addClass("is-active");
    },
    "mouseleave": function() {
        cursor.removeClass("is-active");
        follower.removeClass("is-active");
    }
});
</script>
<!--------------ご案内システム「案内」--------------->
<!-------------.parallel-quadrangle-aのご案内------>
<script>
    $(document).ready(function() {
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
        $('.parallel-quadrangle-a').hover(function() {
            $(this).css('transform', 'skewX(-25deg) scale(1.1)');
        }, function() {
            $(this).css('transform', 'skewX(-25deg) scale(1.1)');
        });
        //台形をクリックしたら吹き出しを表示させる
        $('.parallel-quadrangle-a').click(function(e) {
            e.preventDefault();

            $('.tooltip').remove();

            const tooltip = $(`<div class="tooltip">${initialTooltipContent}</div>`);
            $(this).append(tooltip);

            const facePosition = 90;  
            tooltip.css('top', facePosition + 'px');

            tooltip.show();
            //追加のクリックしたら水墨画表示される
            if ($(this).find('.artwork-snippet-a, .artwork-snippet-b, .artwork-snippet-c, .artwork-snippet-d').length) {
                $(this).find('.artwork-snippet-a, .artwork-snippet-b, .artwork-snippet-c, .artwork-snippet-d').css('opacity', '1');
            }
        });
            //追加のクリックしたら水墨画表示される
        $('.parallel-quadrangle-b, .parallel-quadrangle-c, .parallel-quadrangle-d').on('click', function() {
            if ($(this).find('.artwork-snippet-a, .artwork-snippet-b, .artwork-snippet-c, .artwork-snippet-d').length) {
                $(this).find('.artwork-snippet-a, .artwork-snippet-b, .artwork-snippet-c, .artwork-snippet-d').css('opacity', '1');
            }
        });


        // 「はい」をクリックしたときのイベントハンドラ
        $(document).on('click', '.no-button', function() {
            $('.tooltip-content').html('では楽しんでください！！');
        });

        // 「いいえ」をクリックしたときのイベントハンドラ
        $(document).on('click', '.yes-button', function() {
            $('.tooltip-content').html(`<div class="next-info-content">
                    当サイトでは現在、デジタル水墨画カードの販売を行っております。
                    <div>
                        <button class="response-button more-info-button">詳しく</button>
                    </div>
                </div>
            `);
        });
        //「詳しく」をクリックしたときのイベントハンドラ
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

        //「デジタルカードをみたい」をクリックしたときのイベントハンドラ
        $(document).on('click', '.dejital-info-button', function() {
        $('.tooltip-content').html(`<a href="/wordpress/shop"><div class="next2-info-content">
                水墨画デジタルカード一覧へ
            </div></a>
            `);
        });
        //「記事を読みたい」をクリックしたときのイベントハンドラ
        $(document).on('click', '.article-info-button', function() {
        $('.tooltip-content').html(`<a href="/wordpress/blog"><div class="next3-info-content">
                記事一覧へ
            </div></a>
            `);
        });

        $(document).on('click', '.next2-info-content, .next3-info-content', function(e) {
        e.stopPropagation(); 
        const link = $(this).parent().attr('href'); 
        if (link) {
            window.location.href = link; 
            }
        });

        
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.parallel-quadrangle-a, .parallel-quadrangle-b, .parallel-quadrangle-c, .parallel-quadrangle-d, .tooltip').length) {
                $('.tooltip').remove();
            }
        });
    });
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const elements = document.querySelectorAll('.sentence'); 

    function checkPosition() {
        for (let element of elements) {
            const positionFromTop = element.getBoundingClientRect().top;

            if (positionFromTop - window.innerHeight <= 0) {
                element.classList.add('fade-in');
            }
        }
    }

    window.addEventListener('scroll', checkPosition);
    checkPosition();
});
</script>
<script>
    const leftElements = document.querySelectorAll('.sumi-e-content');
    const rightElements = document.querySelectorAll('.digital-sumi-e-content');

    function checkSlidePosition() {
        for (let element of leftElements) {
            const positionFromTop = element.getBoundingClientRect().top;

            if (positionFromTop - window.innerHeight <= 0) {
                element.classList.add('slide-in-left');
            }
        }

        for (let element of rightElements) {
            const positionFromTop = element.getBoundingClientRect().top;

            if (positionFromTop - window.innerHeight <= 0) {
                element.classList.add('slide-in-right');
            }
        }
    }

    window.addEventListener('scroll', checkSlidePosition);
    checkSlidePosition();
</script>
<script>
    $(window).on('load', function() {
    
    $('#loading-wrapper').fadeOut();
    
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


