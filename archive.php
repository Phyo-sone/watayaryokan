<?php
/*
Template Name: お知らせ
*/
?>
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

<section class="news-section news-archive section">
    <div class="news-archive-wrapper">

        <?php get_template_part('sidebar'); ?>

        <div class="news-archive-main">
            <div class="news-archive-title-wrapper">
                <h1 class="news-archive-title">お知らせ一覧</h1>
            </div>
            <div class="news-archive-list-wrapper">

                <ul class="news-archive-list">

                    <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'posts_per_page' => '2',
                    );
                    $the_query = new WP_Query($args);
                    ?>

                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="box">
                                <a class="news-link" href="<?php the_permalink(); ?>">

                                    <div class="news-img-wrapper">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php echo the_post_thumbnail_url() ?>" alt="" class="news-img">
                                        <?php else : ?>
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/news-one.png" alt="" class="news-img">
                                        <?php endif; ?>
                                    </div>

                                    <div class="tag-flex">
                                        <time date-time="<?php echo get_the_date('Y.n.j'); ?>" class="news-date"><?php echo get_the_date('Y.n.j'); ?></time>
                                        <?php $categories = get_the_category(); ?>
                                        <?php if ($categories) : ?>

                                            <?php foreach ($categories as $category) : ?>
                                                <span class="category"><?php echo $category->name; ?></span>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                    <p class="news-content"><?php the_title(); ?></p>

                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>

                <?php
                $pagination = paginate_links(array(
                    'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $the_query->max_num_pages,
                    'prev_text' => '',
                    'next_text' => '',
                ));
                ?>
                <div class="pagination">
                    <?php echo $pagination; ?>
                </div>

            </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>