<?php get_header(); ?>

  <?php $args = array(
        'post_type' => 'construction_project',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $projects = new WP_Query($args);
    
    ?>

<main>

    <!------------------------------------------------------->

   <section class="details-card">
  <div class="container" style="margin-top:30px;margin-bottom: 50px;">
    <h1>Наши работы</h1>

    <?php $terms = get_terms( array( 'taxonomy' => 'related_services', 'hide_empty' => false ) ); ?>
    <div class="taxonomy-buttons">
        <span><b>Фильтр</b></span><br>
      <?php foreach ($terms as $term) : ?>
        <button class="taxonomy-button" data-term="<?php echo $term->slug; ?>"><?php echo $term->name; ?></button>
      <?php endforeach; ?>
    </div>

    <div class="row" id="projects-container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $related_pages = get_the_terms(get_the_ID(), 'related_services'); ?>
        <div class="col-md-3 related-projects-col" data-term="<?php echo $related_pages[0]->slug; ?>">
          <div class="thumbnail related-projects-thumbnail">
            <?php $main_photo = get_post_meta(get_the_ID(), 'main_photo', true); ?>
            <?php if (!empty($main_photo)) : ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <img src="<?php echo esc_url($main_photo); ?>" class="related-projects-carousel-img" alt="<?php the_title(); ?>">
              </a>
          <?php else : ?>
              <img src="https://nasha-dachaa.ru/wp-content/uploads/2023/04/kiparosivik.jpg" class="related-projects-carousel-img" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="caption related-projects-caption">
              <div class="related-project-carousel-it-title"><?php the_title(); ?></div>
              <?php $completion_time = get_post_meta(get_the_ID(), 'completion_time', true); ?>
              <div class="related-projects-carousel-preview-info">
                <?php if (!empty($completion_time)) : ?>
                  <p class="related-projects-time">Сроки: <?php echo esc_html($completion_time); ?> </p>
                <?php endif; ?>
                <?php $area = get_post_meta(get_the_ID(), 'area', true); ?>
                <?php if (!empty($area)) : ?>
                  <p class="related-projects-area">Площадь: <?php echo esc_html($area); ?> кв.м.</p>
                <?php endif; ?>
                <?php if ($related_pages && !is_wp_error($related_pages)) : ?>
                  <!--------here related taxonomy can be desplayed------------->
                <?php endif; ?>
              </div>
              <p><a href="<?php the_permalink(); ?>" class="btn btn-primary related-projects-carousel-btn" role="button" title="<?php the_title(); ?>">Подробнее</a></p>
            </div>
          </div>
        </div>
      <?php endwhile; else : ?>
        <p>Нет проектов для отображения.</p>
      <?php endif; ?>
    </div>
    
    <?php the_posts_pagination(); ?>
  </div>
</section>


    <!---------------------------------------------------------------->






    <section class="main-text-home">
        <div class="container">


        </div>

    </section>









<section class="section-queries">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="offers-queries-wraper">
                    <div class="h3" style="color:#fff">Высокое качество работ</div>
                    <?php require_once 'includes/predlojeniya.php';  ?>
                </div>
            </div>
            
            <div class="col-md-5">
                <div class="queries-wraper">
                    <div class="h3" style="color:#fff">Популярные запросы</div>
                    
                    <?php require_once 'includes/zaprosi.php';  ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
jQuery(document).ready(function($) {
    $('.taxonomy-button').on('click', function() {
        var term = $(this).data('term');
        $('.related-projects-col').hide();
        $('.related-projects-col[data-term="' + term + '"]').show();
    });
});
</script>




    <?php get_footer(); ?>