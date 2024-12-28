<?php get_header(); ?>

<section class="page-subheader">
    <div class="container">
        <h1 class="page-title">Результаты поиска</h1>
        <div class="search-results-header">
            <p>Результаты поиска для: <span class="search-query">"<?php echo get_search_query(); ?>"</span></p>
        </div>
    </div>
</section>

<section class="search-results-section py-5">
    <div class="container">
        <div class="row g-4">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-6 col-lg-4">
                        <article class="post-card h-100">
                            <div class="post-thumbnail">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', array('class' => 'img-fluid')); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="post-content p-4">
                                <div class="post-meta mb-2">
                                    <span class="post-date">
                                        <i class="fas fa-calendar-alt me-2"></i><?php echo get_the_date(); ?>
                                    </span>
                                    <?php if (has_category()) : ?>
                                        <span class="post-category ms-3">
                                            <i class="fas fa-folder me-2"></i><?php the_category(', '); ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <h3 class="post-title h5 mb-3">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="post-excerpt mb-3">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary btn-sm">
                                    Читать далее
                                </a>
                            </div>
                        </article>
                    </div>
                <?php endwhile; ?>

                <?php if ($wp_query->max_num_pages > 1) : ?>
                    <div class="col-12">
                        <nav class="pagination-nav mt-5" aria-label="Навигация по страницам">
                            <?php
                            echo paginate_links(array(
                                'prev_text' => '<i class="fas fa-chevron-left"></i> Назад',
                                'next_text' => 'Вперед <i class="fas fa-chevron-right"></i>',
                                'type' => 'list',
                                'class' => 'pagination justify-content-center'
                            ));
                            ?>
                        </nav>
                    </div>
                <?php endif; ?>

            <?php else : ?>
                <div class="col-12">
                    <div class="search-no-results">
                        <i class="fas fa-search fa-3x mb-3"></i>
                        <h3>Ничего не найдено</h3>
                        <p>К сожалению, по вашему запросу ничего не найдено. Попробуйте изменить параметры поиска.</p>
                        <div class="search-form-wrapper">
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
