<!-- <style>
    aside {
    display: flex;
    justify-content: space-around;
}

section.author {
    width: 45%; 
}


@media only screen and (max-width: 390px) {
    aside {
        display: block;
    }

    section.author {
        display: block;
    }
} 


</style> -->


<?php get_header(); ?>
        <aside>
        <section class="author">
        <a href="/wordpress/profile1/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-new.png" alt="プロフィール画像">
            <p>
            Bamboo Brush Art<br>
            代表者(22)<br>
            私の国際関係への情熱は、高校時代にフィリピンとアイルランドでの留学経験から火がつきました。異なる文化との触れ合いを通じて、多様なバックグラウンドを持つ人々とコミュニケーションを取ることの大切さと喜びを学び、国際関係への興味が日に日に強まっていきました。大学では国際学部へと進学し、模擬国連という素晴らしい活動に参加しました。これにより、私の国際政治への理解は一層深まり、さらに実際の国際問題について熱心に議論する貴重な機会を得ることができました。
            </p>
        </a>
    </section>
    <section class="author">
        <a href="/wordpress/profile2/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/profile-img22.jpg" alt="プロフィール画像">
            <p>
            Bamboo Brush Art<br>
            パートナー(22)<br>
            大学では機械工学を専攻し、ハード主体のものづくりの知見を深めてきました。しかし、大学生活の中でオンラインチェスゲームの開発に挑戦した経験が、ITというソフトの領域に強い関心を持つきっかけとなりました。それ以降、継続的にプログラミングの学習を進めてきました。その後、他者の役に立ちたいという強い意志の下、ソフトウェア開発業務の受託を始めました。開発領域は特定の分野に限定せず、自動作曲や自然言語処理など、幅広い領域で行っています。今後も、新しい分野の開発に挑戦を続ける所存です。
            </p>
        </a>
    </section>
    <section class="author">
        <a href="/wordpress/profile3/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/profile-img33.jpg" alt="プロフィール画像">
            <p>
            Bamboo Brush Art<br>
            お尋ね者(22)<br>
            2001年、奈良県橿原市生まれ。2023年11月で大学３年生で経済学部に所属しております。2023年9月からドイツのケルン大学に交換留学生として在籍しております。2024年8月帰国予定です。日本の大学では、35人規模の国際イベント企画団体、114人の留学生が住む国際寮のそれぞれリーダーと寮長を1年間務めさせていただきました。環境経済学について学ぶゼミに所属しており、2023年5月には滋賀県の特産物「政所茶」の産地情報の必要性について社会調査を行いました。                    
            </p>
        </a>
    </section>
        </aside>
<?php get_footer(); ?>
<style>
/* Add your CSS rules here */
aside {
    display: flex;
    flex-wrap: wrap; /* If you want to allow the items to wrap on smaller screens */
    justify-content: space-around; /* This will space out the `author` sections */
}

section.author {
    flex: 1; /* This allows the sections to grow and take up equal space */
    /* You can also use a specific width like width: 45%; but make sure they fit in a row */
}

@media only screen and (max-width: 767px) {
    aside {
        flex-direction: column; /* This will stack the `author` sections vertically on smaller screens */
    }

    section.author {
        /* Adjust width or flex properties as needed for smaller screens */
    }
}
</style>