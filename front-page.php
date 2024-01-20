<?php get_header(); ?>
<main>
        
<div class="logo1-container">
    <section class="logo1-home" id="logo1-home">

        <div class="logo1-content">
            <!-- <h3>A single drop of ink dances</h3>
            <p>The droplet of ink descends gracefully, coming to life upon the blank paper. </p> -->
            <!-- <a href="https://bamboo-brush-art.com/wp/shop/" class="btn">get yours now</a> -->
        </div>
    
    </section>

</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');

:root{
    --main-color:#d3ad7f;
    --black:#13131a;
    --bg:#010103;
    --border:.1rem solid rgba(255,255,255,.3);
}

*{
    font-family: 'Roboto', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
}

html::-webkit-scrollbar{
    width: .8rem;
}

html::-webkit-scrollbar-track{
    background: transparent;
}

html::-webkit-scrollbar-thumb{
    background: #fff;
    border-radius: 5rem;
}

body{
    background: var(--bg);
}

section{
    padding:3rem 2rem;
    margin: 0 auto;
    max-width: 1200px;
}

.heading{
    text-align: center;
    color:#fff;
    text-transform: uppercase;
    padding-bottom: 3.5rem;
    font-size: 4rem;
}

.heading span{
    color:var(--main-color);
    text-transform: uppercase;
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.9rem 3rem;
    font-size: 1.7rem;
    color:#fff;
    background: var(--main-color);
    cursor: pointer;
}

.btn:hover{
    letter-spacing: .2rem;
}
.wp-block-image.size-large img {
    transition: opacity 0.3s, filter 0.3s; /* スムーズな遷移のため */
}

.wp-block-image.size-large img:hover {
    opacity: 0.8;
    filter: brightness(1.2) contrast(1.1);
}

.logo1-container{
    background:url(https://bamboo-brush-art.com/wp-content/uploads/2023/10/logo-new-1.png) no-repeat;
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 550px;
    position: relative;
}

.logo1-home{
    min-height: 100vh;
    display: flex;
    align-items: center;
}

.logo1-home .logo1-content{
    max-width: 60rem;

}

.logo1-home .logo1-content h3{
    font-size: 6rem;
    text-transform: uppercase;
    color:#d3ad7f;
}

.logo1-home .logo1-content p{
    font-size: 2rem;
    font-weight: lighter;
    line-height: 1.8;
    padding:1rem 0;
    color:#010103;
}
.logo1-home .logo1-content p:hover {
    color: #E87E04; 
}
.logo1-content h3, .logo1-content p, .logo1-content a.btn {
    font-family: 'YourChosenFont', serif; /* 選んだフォントに変更してください */
    color: #333; /* 水墨画風の色に変更してください */
    text-shadow: 1px 1px 2px #bbb; /* 影を追加してアクセントをつける */
}
@media only screen and (max-width: 780px) {

    * {
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
}

/* .logo1-container h3 {
    font-size: 3rem;
    text-transform: uppercase;
    color:#d3ad7f;
} */

.logo1-container {
    height: 300px
    
}

.logo1-home .logo1-content h3 {
    font-size: 4rem; /* 画面幅が768px以下の場合のフォントサイズ */
}
.logo1-container h3 {
    display: none;
}

.logo1-container p {
display: none;
}

a.btn {
display: none;
}
}
@media only screen and (max-width: 480px) {

    * {
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
}


.logo1-home {
padding: 2rem 1rem;
}

.logo1-content {
text-align: center; 
}

.logo1-container {
    height: 300px; 
}

.logo1-container h3 {
    display: none;
}

.logo1-container p {
display: none;
}

a.btn {
display: none;
}

}

</style>
<script>
document.querySelector('.wp-block-image.size-large img').addEventListener('mouseover', function() {
    this.style.opacity = '0.8';
    this.style.filter = 'brightness(1.2) contrast(1.1)';
});

document.querySelector('.wp-block-image.size-large img').addEventListener('mouseout', function() {
    this.style.opacity = '';
    this.style.filter = '';
});
</script>



<section class="about" id="about">

    <h1 class="heading slide_on"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img decoding="async" src="https://bamboo-brush-art.com/wp-content/uploads/2023/10/ad-banner10-1.png" alt="">
            
        </div>

        <div class="content">
    <h3>私たちの水墨画アートのユニークな魅力とは？</h3>
    <p>私たちのデジタル水墨画の中には、深い優雅さと静寂な美しさが込められています。</p>
    <p>光と影の繊細な遊びから、墨と空間の大胆なコントラストまで、私たちのアートは静けさとバランスの世界を探求する招待状となっています。デジタル時代のために再解釈された水墨画の時代を超越した伝統をご堪能ください。</p>
    <a href="https://bamboo-brush-art.com/explanation/" class="btn">詳しくはこちら</a>
</div>


    </div>

</section>

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');

:root{
    --main-color:#d3ad7f;
    --black:#13131a;
    --bg:#010103;
    --border:.1rem solid rgba(255,255,255,.3);
}

*{
    font-family: 'Roboto', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
}

html::-webkit-scrollbar{
    width: .8rem;
}

html::-webkit-scrollbar-track{
    background: transparent;
}

html::-webkit-scrollbar-thumb{
    background: #fff;
    border-radius: 5rem;
}

body{
    background: var(--bg);
}

section{
    padding:3rem 2rem;
    margin: 0 auto;
    max-width: 1200px;
}

.heading{
    text-align: center;
    color:#fff;
    text-transform: uppercase;
    padding-bottom: 3.5rem;
    font-size: 4rem;
}

.heading span{
    color:var(--main-color);
    text-transform: uppercase;
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.9rem 3rem;
    font-size: 1.7rem;
    color:#fff;
    background: var(--main-color);
    cursor: pointer;
}

.btn:hover{
    letter-spacing: .2rem;
}

/* .home-container{
    background:url(http://localhost/wordpress/wp-content/uploads/2023/10/logo.png) no-repeat;
    background-size: cover;
    background-position: center;
} */

.home{
    min-height: 100vh;
    display: flex;
    align-items: center;
}

.home .content{
    max-width: 60rem;
}

.home .content h3{
    font-size: 6rem;
    text-transform: uppercase;
    color:#fff;
}

.home .content p{
    font-size: 2rem;
    font-weight: lighter;
    line-height: 1.8;
    padding:1rem 0;
    color:#eee;
}

.about .row{
    display: flex;
    align-items: center;
    background:var(--black);
    flex-wrap: wrap;
    gap: 1.5rem;
}

.about .row .image{
    flex:1 1 45rem;
}

.about .row .image img{
    width: 100%;
}
.about .row .content{
    flex:1 1 45rem;
    padding:2rem;
}

.about .row .content h3{
    font-size: 3rem;
    color:#fff;
}

.about .row .content p{
    font-size: 1.6rem;
    color:#ccc;
    padding:1rem 0;
    line-height: 1.8;
}

.about .row{
    display: flex;
    align-items: center;
    background:var(--black);
    flex-wrap: wrap;
    gap: 1.5rem;
}

.about .row .image{
    flex:1 1 45rem;
}

.about .row .image img{
    width: 100%;
}
.about .row .content{
    flex:1 1 45rem;
    padding:2rem;
}

.about .row .content h3{
    font-size: 3rem;
    color:#fff;
}

.about .row .content p{
    font-size: 1.6rem;
    color:#ccc;
    padding:1rem 0;
    line-height: 1.8;
}

/* media queries  */
@media (max-width:780px){

    html{
        font-size: 55%;
    }

    .header{
        padding:1.5rem 2rem;
    }

    section{
        padding:2rem;
    }

}

@media (max-width:780px){

    #menu-btn{
        display: inline-block;
    }

    .header .navbar{
        position: absolute;
        top:100%; right: -100%;
        background: #fff;
        width: 30rem;
        height: calc(100vh - 9.5rem);
    }

    .header .navbar.active{
        right:0;
    }

    .header .navbar a{
        color:var(--black);
        display: block;
        margin:1.5rem;
        padding:.5rem;
        font-size: 2rem;
    }

    .header .search-form{
        width: 90%;
        right: 2rem;
    }

    .home{
        background-position: left;
        justify-content: center;
        text-align: center;
    }

    .home .content h3{
        font-size: 4.5rem;
    }

    .home .content p{
        font-size: 1.5rem;
    }

}

</style>

<section class="menu" id="menu">

    <h1 class="heading slide_on"> our <span>menu</span> </h1>

    <div class="box-container">

 <div class="box">
            <img decoding="async" src="https://bamboo-brush-art.com/wp-content/uploads/2023/11/Untitled-design-5.png" alt="">
            <h3>静寂の山水</h3>
            <div class="price">¥200 <span>¥400</span></div>
            <a href="https://bamboo-brush-art.com/product/静寂の山水-4/ " class="btn">購入</a>
        </div>

        <div class="box">
            <img decoding="async" src="https://bamboo-brush-art.com/wp-content/uploads/2023/11/S__3981326.jpg" alt="">
            <h3>星間旅行者</h3>
            <div class="price">¥600 <span>¥800</span></div>
            <a href="https://bamboo-brush-art.com/product/星間旅行者/" class="btn">購入</a>
        </div>

        <div class="box">
            <img decoding="async" src="https://bamboo-brush-art.com/wp-content/uploads/2023/11/S__3981323.jpg" alt="">
            <h3>墨舞煌</h3>
            <div class="price">¥500 <span>¥700</span></div>
            <a href="https://bamboo-brush-art.com/product/墨舞煌/" class="btn">購入</a>
        </div>

        <div class="box">
            <img decoding="async" src="https://bamboo-brush-art.com/wp-content/uploads/2023/11/S__3981324.jpg" alt="">
            <h3>時輪姫像</h3>
            <div class="price">¥600 <span>¥800</span></div>
            <a href="https://bamboo-brush-art.com/product/時輪姫像/" class="btn">購入</a>
        </div>

        <div class="box">
            <img decoding="async" src="https://bamboo-brush-art.com/wp-content/uploads/2023/10/ad-banner6.png" alt="">
            <h3>夜花鳥語</h3>
            <div class="price">¥100 <span>¥200</span></div>
            <a href="https://bamboo-brush-art.com/product/夜花鳥語/" class="btn">購入</a>
        </div>

        <div class="box">
            <img decoding="async" src="https://bamboo-brush-art.com/wp-content/uploads/2023/11/Untitled-design-2-1.png" alt="">
            <h3>墨影夢遊</h3>
            <div class="price">¥100  <span>¥200</span></div>
            <a href="https://bamboo-brush-art.com/product/墨影夢遊/" class="btn">購入</a>
        </div>


    </div>

</section>

<style>
.menu .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.menu .box-container .box{
    padding:5rem;
    text-align: center;
    border:var(--border);    
}

.menu .box-container .box img{
    height: 25rem;
}

.menu .box-container .box h3{
    color: #fff;
    font-size: 2rem;
    padding:1rem 0;
}

.menu .box-container .box .price{
    color: #fff;
    font-size: 2.5rem;
    padding:.5rem 0;
}

.menu .box-container .box .price span{
    font-size: 1.5rem;
    text-decoration: line-through;
    font-weight: lighter;
}

.menu .box-container .box:hover{
    background:#fff;
}

.menu .box-container .box:hover > *{
    color:var(--black);
}

.products .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
}

.products .box-container .box{
    text-align: center;
    border:var(--border);
    padding: 2rem;
}

.products .box-container .box .icons a{
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    border:var(--border);
    color:#fff;
    margin:.3rem;
}

.products .box-container .box .icons a:hover{
    background:var(--main-color);
}

.products .box-container .box .image{
    padding: 2.8rem 0;
}

.products .box-container .box .image img{
    height: 25rem;
}

.products .box-container .box .content h3{
    color:#fff;
    font-size: 2.5rem;
}

.products .box-container .box .content .stars{
    padding: 1.5rem;
}

.products .box-container .box .content .stars i{
    font-size: 1.7rem;
    color: var(--main-color);
}

.products .box-container .box .content .price{
    color:#fff;
    font-size: 2.5rem;
}

.products .box-container .box .content .price span{
    text-decoration: line-through;
    font-weight: lighter;
    font-size: 1.5rem;
}
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap');

:root{
    --main-color:#d3ad7f;
    --black:#13131a;
    --bg:#010103;
    --border:.1rem solid rgba(255,255,255,.3);
}

*{
    font-family: 'Roboto', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
}

html::-webkit-scrollbar{
    width: .8rem;
}

html::-webkit-scrollbar-track{
    background: transparent;
}

html::-webkit-scrollbar-thumb{
    background: #fff;
    border-radius: 5rem;
}

body{
    background: var(--bg);
}

section{
    padding:3rem 2rem;
    margin: 0 auto;
    max-width: 1200px;
}

.heading{
    text-align: center;
    color:#fff;
    text-transform: uppercase;
    padding-bottom: 3.5rem;
    font-size: 4rem;
}

.heading span{
    color:var(--main-color);
    text-transform: uppercase;
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.9rem 3rem;
    font-size: 1.7rem;
    color:#fff;
    background: var(--main-color);
    cursor: pointer;
}

.btn:hover{
    letter-spacing: .2rem;
}

img {
object-fit: cover;
}



@media only screen and (max-width: 780px) {
.menu {
padding: 2rem; /* 内側の余白を調整 */
}

.menu .heading {
font-size: 3rem; /* h1タグのフォントサイズを調整 */
margin-bottom: 2rem; /* 下の余白を調整 */
}

.menu .box {
width: 250px; /* ボックスの幅を自動調整 */
margin-bottom: 2rem; /* 下の余白を調整 */
}

.menu .box img {
width: 100%; /* 画像の幅を100%に設定 */
height: auto; /* 画像の高さを自動調整 */
}

.menu .box h3 {
font-size: 2rem; /* h3タグのフォントサイズを調整 */
}

.menu .box .price {
font-size: 1.8rem; /* 価格のフォントサイズを調整 */
}

.menu .box a.btn {
font-size: 1.8rem; /* ボタンのフォントサイズを調整 */
padding: 1rem 2rem; /* ボタンの内側の余白を調整 */
}

.box .btn {
        display: block; /* 画面が小さいときは表示 */
}

@media only screen and (max-width: 768px) {
.menu .box-container .box,
.products .box-container .box {
border: none;
}
}

.menu .box-container,
.products .box-container {
display: flex;
flex-direction: column;
align-items: center;
}


}


/*===================文字の高級感==========================*/
.menu .heading, 
.menu .heading span,
.menu .box-container .box h3,
.menu .box-container .box p,
.menu .box-container .box a.btn {
    font-family: 'YourChosenFont', serif; /* 選んだフォントに変更してください */
    color: #333; /* 水墨画風の色に変更してください */
    text-shadow: 1px 1px 2px #bbb; /* 影を追加してアクセントをつける */
}
</style>
    </div>
    <small><i class="fa-solid fa-tag"></i></small>
</div>
</main>

<?php get_footer(); ?>