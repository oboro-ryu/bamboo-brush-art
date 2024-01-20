<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php titles(); ?>Bamboo Brush Art EC Home Page</title>
    <link rel="icon" href="<?php echo get_template_directory_uri();  ?>/img/logo-new.png">                                    <!-- PC等アイコン -->
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri();  ?>/img/logo-new.png">  <!-- スマートフォンアイコン -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/styles.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/article.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/author.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/mobile.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/loading.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/shop.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/animation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();  ?>/css/lawpage.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
     .artwork-snippet-a {
        width: 100%;
        height: 100%;
        background-image: url('<?php echo get_template_directory_uri(); ?>/img/ad-banner4.png'); 
        background-size: cover; 
        opacity: 0; 
        transition: opacity 1s; 
        filter: brightness(1) ;
        position: absolute;
    }
     .artwork-snippet-b {
        width: 100%;
        height: 100%;
        background-image: url('<?php echo get_template_directory_uri(); ?>/img/ad-banner6.png'); 
        background-size: cover; 
        opacity: 0; 
        transition: opacity 1s; 
        filter: brightness(1) ;
        position: absolute;
    }
     .artwork-snippet-c {
        width: 100%;
        height: 100%;
        background-image: url('<?php echo get_template_directory_uri(); ?>/img/ad-banner1.png'); 
        background-size: cover;
        opacity: 0; 
        transition: opacity 1s; 
        filter: brightness(1) ;
        position: absolute;
    }
     .artwork-snippet-d {
        width: 100%;
        height: 100%;
        background-image: url('<?php echo get_template_directory_uri(); ?>/img/ad-banner7.png'); 
        background-size: cover; 
        opacity: 0;
        transition: opacity 1s; 
        filter: brightness(1) ;
        position: absolute;
    }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/5fba8c4d6b.js" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<body class="loading">

<div id="loading-wrapper">
  <div id="loading-text">LOADING</div>
  <div id="loading-content"></div>
</div>
    <header class="header">
        <!-- <header> -->
        <!-- <section class="flex"> -->
            <div class="logo-container">
                <h1><a href="<?php echo home_url(); ?>"><span class="blink-text">Bam</span>boo Brush Art</a></h1>
            </div>
                <nav>
                <!-- <nav class="navbar"> -->
                    <ul>
                        <li><a href="<?php echo home_url(); ?>"><i class="bi bi-house-door"></i></a></li>
                        <li><a href="https://bamboo-brush-art.com/wp/shop/"><i class="bi bi-bag"></i></a></li>
                        <li><a href="https://bamboo-brush-art.com/wp/cart/"><i class="bi bi-cart"></i></a></li>
                        <li><a href="https://bamboo-brush-art.com/wp/blog/"><i class="bi bi-book"></i></a></li>
                        <li><a href="https://bamboo-brush-art.com/wp/profile/"><i class="bi bi-person"></i></a></li>
                        <li><a href="https://bamboo-brush-art.com/wp/contact/"><i class="bi bi-envelope"></i></a></li>
                    </ul>
                </nav>
        <!-- </section> -->
    </header>
    <div class="carousel-container">
            <div class="ad-carousel">
                <!-- <figure class="ad-banner" data-aos="fade-in"><img src='<?php echo get_template_directory_uri(); ?>/img/ad-banner8.png' alt='広告8'></figure> -->
                <a href="https://www.instagram.com/dorunokaden/" target="_blank">
                    <figure class="ad-banner" data-aos="fade-in"><img src='<?php echo get_template_directory_uri(); ?>/img/ad-banner9-2.jpg' alt='広告9'>
                    </figure>
                </a>
                <figure class="ad-banner" data-aos="fade-in"><img src='<?php echo get_template_directory_uri(); ?>/img/ad-banner10.png' alt='広告10'></figure>
                <a href="https://yosuke-hue.github.io/BKCI-HOUSE/" target="_blank">
                    <figure class="ad-banner" data-aos="fade-in">
                        <img src='<?php echo get_template_directory_uri(); ?>/img/ad-banner11.jpg' alt='広告11'>
                    </figure>
                </a>
                <!-- <figure class="ad-banner" data-aos="fade-in"><img src='<?php echo get_template_directory_uri(); ?>/img/ad-banner11.jpg' alt='広告11'></figure> -->
                <figure class="ad-banner" data-aos="fade-in"><img src='<?php echo get_template_directory_uri(); ?>/img/ad-banner15.png' alt='広告12'></figure>
                <a href="https://buzzprovide.jp/?fbclid=PAAaYysVHQSpE7a4tykkhWwc0vkvAoFZsbxCceHmf5gJDuWa8IYyAHiHY_BkM_aem_ASzH1WwsO_uCZKtQt_h6Wob1kDmS6twuUod4OPctKVadURuimplI-wsKpxzGMKmk9U8" target="_blank">
                    <figure class="ad-banner" data-aos="fade-in">
                        <img src='<?php echo get_template_directory_uri(); ?>/img/ad-banner13.jpg' alt='広告13'>
                    </figure>
                </a>
                <!-- <figure class="ad-banner" data-aos="fade-in"><img src='<?php echo get_template_directory_uri(); ?>/img/ad-banner14.png' alt='広告14'></figure>   -->
            </div>
        </div>

            <div class="container">
            <main>