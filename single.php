<?php get_header(); ?>

<section class="page-subheader">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <ul class="breadcrumbs-list">
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </ul>
    </div>
</section>

<article class="single-post py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Основной контент -->
                <div class="post-content bg-white rounded-3 p-4 mb-4">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <!-- Мета-информация -->
                        <div class="post-meta d-flex align-items-center mb-4">
                            <span class="post-date me-4">
                                <i class="fas fa-calendar-alt me-2"></i>
                                <?php echo get_the_date(); ?>
                            </span>
                            <?php if (has_category()) : ?>
                                <span class="post-category me-4">
                                    <i class="fas fa-folder me-2"></i>
                                    <?php the_category(', '); ?>
                                </span>
                            <?php endif; ?>
                            <span class="post-author">
                                <i class="fas fa-user me-2"></i>
                                <?php the_author(); ?>
                            </span>
                        </div>

                        <!-- Изображение записи -->
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail mb-4">
                                <?php the_post_thumbnail('large', array('class' => 'img-fluid rounded-3')); ?>
                            </div>
                        <?php endif; ?>

                        <!-- Контент записи -->
                        <div class="post-text">
                            <?php the_content(); ?>
                        </div>

                        <!-- Теги -->
                        <?php if (has_tag()) : ?>
                            <div class="post-tags mt-4">
                                <i class="fas fa-tags me-2"></i>
                                <?php the_tags('', ', '); ?>
                            </div>
                        <?php endif; ?>

                    <?php endwhile; endif; ?>
                </div>

                <!-- Навигация по записям -->
                <div class="post-navigation d-flex justify-content-between mt-4">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>
                    <div class="prev-post">
                        <?php if (!empty($prev_post)) : ?>
                            <a href="<?php echo get_permalink($prev_post); ?>" class="nav-link">
                                <i class="fas fa-chevron-left me-2"></i>
                                <span class="d-none d-sm-inline">Предыдущая статья</span>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="next-post">
                        <?php if (!empty($next_post)) : ?>
                            <a href="<?php echo get_permalink($next_post); ?>" class="nav-link">
                                <span class="d-none d-sm-inline">Следующая статья</span>
                                <i class="fas fa-chevron-right ms-2"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Комментарии -->
                <?php if (comments_open() || get_comments_number()) : ?>
                    <div class="post-comments mt-5">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Сайдбар -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <!-- Поиск -->
                    <div class="widget search-widget bg-white rounded-3 p-4 mb-4">
                        <h4 class="widget-title mb-3">Поиск</h4>
                        <?php get_search_form(); ?>
                    </div>

                    <!-- Последние записи -->
                    <div class="widget recent-posts bg-white rounded-3 p-4 mb-4">
                        <h4 class="widget-title mb-3">Последние записи</h4>
                        <ul class="list-unstyled">
                            <?php
                            $recent_posts = wp_get_recent_posts(array(
                                'numberposts' => 5,
                                'post_status' => 'publish'
                            ));
                            foreach ($recent_posts as $post) : ?>
                                <li class="mb-3">
                                    <a href="<?php echo get_permalink($post['ID']); ?>" class="d-flex align-items-center">
                                        <?php if (has_post_thumbnail($post['ID'])) : ?>
                                            <div class="flex-shrink-0 me-3">
                                                <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail', array('class' => 'rounded-3')); ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1"><?php echo $post['post_title']; ?></h6>
                                            <small class="text-muted">
                                                <i class="fas fa-calendar-alt me-1"></i>
                                                <?php echo get_the_date('', $post['ID']); ?>
                                            </small>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Категории -->
                    <div class="widget categories bg-white rounded-3 p-4 mb-4">
                        <h4 class="widget-title mb-3">Категории</h4>
                        <ul class="list-unstyled">
                            <?php
                            $categories = get_categories();
                            foreach ($categories as $category) : ?>
                                <li class="mb-2">
                                    <a href="<?php echo get_category_link($category->term_id); ?>" class="d-flex justify-content-between align-items-center">
                                        <span><?php echo $category->name; ?></span>
                                        <span class="badge bg-light text-dark"><?php echo $category->count; ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<?php get_footer(); ?>
