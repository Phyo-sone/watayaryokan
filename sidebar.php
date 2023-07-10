<aside class="news-sidebar">
    <div class="news-categories">
        <h2 class="news-sidebar-title">カテゴリー</h2>
        <ul class="news-sidebar-list">

            <?php $categories = get_categories(); ?>

            <?php if (!empty($categories)) : ?>

                <?php foreach ($categories as $category) : ?>
                    <li class="news-sidebar-list-item"><a class="news-sidebar-list-link" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
    <div class="news-monthly">
        <h2 class="news-sidebar-title">過去のお知らせ</h2>
        <ul class="news-sidebar-list">
            <?php
            $args = array(
                'type' => 'monthly',
                'limit' => '',
                'format' => 'html',
                'before' => '',
                'after' => '',
                'show_post_count' => false,
                'echo' => 1,
                'order' => 'DESC',
                'post_type' => 'post'
            );
            wp_get_archives($args);
            ?>

        </ul>
    </div>
</aside>