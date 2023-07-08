<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>


<section class="pages-top">
    
<div class="pages-wrapper about-img">
    <img class="only-pc"src="<?php echo get_template_directory_uri(); ?>/assets/img/tp-contact-top-pc.png" alt="">
    <img class="only-sp"src="<?php echo get_template_directory_uri(); ?>/assets/img/tp-contact-top-sp.png" alt="">

</div>

</section>

<div class="pages-ttl section body-text">
    <a href="">トップ</a> <a href="">></a> <a href="">宿泊プラン</a>
</div>

<section class="contact-section section section-x ">
    <div class="contact-wrapper">

    <div class="common-ttl-horizontal">
        <h2 class="hori-ttl hall-ttl">お問い合わせ</h2>
    </div>

    <div class="hall-text">
        <p>下記のフォームに必要事項をご入力後、「送信」ボタンを押してください。<br>お返事には数日かかる場合がございます。またLINEや電話からでも問い合わせできます。</p>
    </div>
    <div class="contact-box">
    <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>

        </div>
</section>
            
<?php get_footer(); ?>


     
     
  
   

