<?php get_header(); ?>


<section class="flat-section flat-recommended flat-sidebar">
    <div class="container">
        <div class="box-title-listing">
            <div class="box-left">
                <h1 class="fw-8">Клиники</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 flat-animate-tab">
                <div class="tab-content">
                    <div class="tab-pane active show" id="gridLayout" role="tabpanel">
                        <div class="row">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="col-md-4">
                                    <div class="homelengo-box">
                                        <div class="archive-top">
                                            <a href="<?php the_permalink(); ?>" class="images-group">
                                                <div class="images-style">
                                                    <?php
                                                    $photos = get_post_meta(get_the_ID(), 'photos', true);
                                                    $photos_array = explode(',', $photos);
                                                    $image_url = wp_get_attachment_url($photos_array[0]);
                                                    if ($image_url) :
                                                    ?>
                                                        <img class="lazyload" data-src="<?php echo esc_url($image_url); ?>" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="top">
                                                    <ul class="d-flex gap-6">
                                                        <li class="flag-tag primary">
                                                            <?php echo esc_html(get_post_meta(get_the_ID(), 'country', true)); ?>
                                                        </li>
                                                        <li class="flag-tag style-1">
                                                            <?php echo esc_html(get_post_meta(get_the_ID(), 'city', true)); ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="bottom">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <?php echo esc_html(get_post_meta(get_the_ID(), 'address', true)); ?>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="archive-bottom">
                                            <div class="content-top">
                                                <h6 class="text-capitalize">
                                                    <a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a>
                                                </h6>
                                                <div class="clinics-page-detail-btn-wrapper">
                                                    <a href="<?php the_permalink(); ?>" class="tf-btn btn-line btn-login">Подробнее</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; endif; ?>
                        </div>
                        <ul class="wd-navigation mt-20">
                            <?php
                            global $wp_query;
                            $big = 999999999;
                            echo paginate_links(array(
                                'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                'format'  => '?paged=%#%',
                                'current' => max(1, get_query_var('paged')),
                                'total'   => $wp_query->max_num_pages,
                                'prev_text' => '<i class="icon icon-arr-l"></i>',
                                'next_text' => '<i class="icon icon-arr-r"></i>',
                            ));
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
