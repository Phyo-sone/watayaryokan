<?php get_header(); ?>

<section class="pages-top">

    <div class="pages-wrapper about-img">
        <img class="only-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/tp-news-top.png" alt="">
        <img class="only-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/tp-news-top-sp.png" alt="">
    </div>

</section>

<div class="pages-ttl section body-text">
    <a href="">トップ</a> <a href="">></a> <a href="">お知らせ</a>
</div>

<section class="news-section section">
    <div class="news-article-wrapper">

        <?php get_template_part('sidebar'); ?>

        <article class="news-archive-main">

            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <div class="news-article-head">
                        <time date-time="<?php echo get_the_date('Y.n.j'); ?>" class="news-date"><?php echo get_the_date('Y.n.j'); ?></time>
                        <h1 class="news-article-title"><?php the_title(); ?></h1>
                    </div>

                    <div class="news-article-image-wrapper">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo the_post_thumbnail_url() ?>" alt="" class="news-img">
                        <?php endif; ?>
                    </div>

                    <div class="news-article-body">
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </article>

    </div>
</section>

<?php get_footer(); ?>