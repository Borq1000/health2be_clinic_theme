<?php get_header(); ?>


<section class="bread-crumbs">
    <div class="container" style="padding-left:10px;padding-right:10px;">
        <div class="row" style="padding-left:0px;padding-right: 0px;margin-left: 4px;margin-right: 4px;">

            <ul>
                <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                }
                ?>
            </ul>

        </div>
    </div>
</section>


<main>



    <section class="single-project-page-section-1">
        <div class="container">
            <div class="row single-project-page-row-1">
                <div class="col-md-5 col-sm-5">
                    <div class="project-main-img-araper">
                        <img src="<?php echo get_post_meta(get_the_ID(), 'main_photo', true); ?>" class="project-main-img" alt="<?php the_title(); ?>">
                    </div>
                </div>
                
                <div class="col-md-7 col-sm-7">
                    <div class="project-info-wraper-1">
                        <h1><?php the_title(); ?></h1>
                        <div class="characteristics-1">
                             <?php if (!empty(get_post_meta(get_the_ID(), 'completion_time', true))) : ?>
                            <div class="char">
                                <div class="s-1"> <?php echo get_post_meta(get_the_ID(), 'completion_time', true); ?></div>
                                <div class="s-2">Cрок выполнения</div>
                            </div> 
                             <?php endif; ?>
                            
                            <?php if (!empty(get_post_meta(get_the_ID(), 'area', true))) : ?>
                            <div class="char">
                                <div class="s-1"> <?php echo get_post_meta(get_the_ID(), 'area', true); ?>кв.м.</div>
                                <div class="s-2">Площадь покрытия</div>
                            </div>
                            <?php endif; ?>
                            
                            <?php if (!empty(get_post_meta(get_the_ID(), 'year_of_implementation', true))) : ?>
                            <div class="char">
                                <div class="s-1"> <?php echo get_post_meta(get_the_ID(), 'year_of_implementation', true); ?></div>
                                <div class="s-2">Год реализации</div>
                            </div>
                             <?php endif; ?>
                        </div>
                        
                        <div class="characteristics-2-location">
                            <?php if (!empty(get_post_meta(get_the_ID(), 'highway', true))) : ?>
                            <div class="characteristics-2__row"><span class="sp-1">Шоссе:</span> <span><?php echo get_post_meta(get_the_ID(), 'highway', true); ?></span></div>
                            <?php endif; ?>
                            <?php if (!empty(get_post_meta(get_the_ID(), 'distance_from_mkad', true))) : ?>
                            <div class="characteristics-2__row"><span class="sp-1">Расстояние от МКАД:</span> <span><?php echo get_post_meta(get_the_ID(), 'distance_from_mkad', true); ?> км.</span></div>
                            <?php endif; ?>
                            
                            <?php if (!empty(get_post_meta(get_the_ID(), 'nearest_city', true))) : ?>
                            <div class="characteristics-2__row"><span class="sp-1">Ближайший город:</span> <span><?php echo get_post_meta(get_the_ID(), 'nearest_city', true); ?></span></div>
                             <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row single-project-page-row-2">
                <div class="col-md-6 col-sm-6">
                    <div class="wrp-1">
                       <ul>
    <?php if (!empty(get_post_meta(get_the_ID(), 'main_work', true))) : ?>
        <li><span>Основная работа:</span> <?php echo get_post_meta(get_the_ID(), 'main_work', true); ?></li>
    <?php endif; ?>

    <?php if (!empty(get_post_meta(get_the_ID(), 'dop_raboty', true))) : ?>
        <li><span>Дополнительные работы:</span> <?php echo get_post_meta(get_the_ID(), 'dop_raboty', true); ?></li>
    <?php endif; ?>

    <?php if (!empty(get_post_meta(get_the_ID(), 'material', true))) : ?>
        <li><span>Материал:</span> <?php echo get_post_meta(get_the_ID(), 'material', true); ?></li>
    <?php endif; ?>

    <?php if (!empty(get_post_meta(get_the_ID(), 'area', true))) : ?>
        <li><span>Площадь покрытия:</span> <?php echo get_post_meta(get_the_ID(), 'area', true); ?> кв.м.</li>
    <?php endif; ?>

    <?php if (!empty(get_post_meta(get_the_ID(), 'completion_time', true))) : ?>
        <li><span>Срок выполнения:</span> <?php echo get_post_meta(get_the_ID(), 'completion_time', true); ?></li>
    <?php endif; ?>

    <?php if (!empty(get_post_meta(get_the_ID(), 'project_difficulty', true))) : ?>
        <li><span>Сложность проекта:</span>  <?php echo get_post_meta(get_the_ID(), 'project_difficulty', true); ?></li>
    <?php endif; ?>

    <?php if (!empty(get_post_meta(get_the_ID(), 'cost', true))) : ?>
        <li><span>Стоимость:</span> <?php echo get_post_meta(get_the_ID(), 'cost', true); ?> руб.</li>
    <?php endif; ?>
</ul>

                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="wrp-2">
                        <p><strong>Состав работ:</strong></p>
                        <?php echo get_post_meta(get_the_ID(), 'work_composition', true); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    
   <?php
   // Получаем ID поста
$post_id = get_the_ID();

// Получаем значения метаполей
$before_image = get_post_meta($post_id, 'before_image', true);
$after_image = get_post_meta($post_id, 'after_image', true);
   
   
   if($before_image && $after_image) { ?> 
    <section class="before-after-section">
        <div class="container">

      <div class="row">
          <div class="col-md-6">
              <div class="before-after-text">Фото До</div>
              <img src="<?php echo $before_image; ?>" class="img-responsive img-before-after">
          </div>
          <div class="col-md-6">
              <div class="before-after-text">Фото После</div>
              <img src="<?php echo $after_image; ?>" class="img-responsive img-before-after">
          </div>

      </div>
        </div>
    </section>  
    
   <?php } ?>   
    
                <?php
$project_images = get_post_meta(get_the_ID(), 'project_images', true);

if (!empty($project_images) && is_array($project_images)) { ?>
    <section class="project-gallery-section">
        <div class="container">
            <div class="project-gallery-title">Фото с объекта</div>
            <div class="row row-project-gallery">

    
 <?php   foreach ($project_images as $image_url) {
        echo '<div class="col-md-6 col-sm-6 col-xs-12"><div class="project-gallery-item">'; // Оберните каждое изображение в div с классом col-md-3
        echo '<img src="' . esc_url($image_url) . '" alt="" class="img-responsive img-project-gallery">'; // Используйте класс img-fluid для адаптивных изображений
        echo '</div></div>';
    }  ?>
    

            </div>
    
    </div>
    </section>
    
    <?php } ?>

    <h3 style="color:red;display: none;"><?php the_ID(); ?></h3>

    <section class="main-text-home">
        <div class="container" style="padding-top: 20px;">
            <div class="project-description-title">Описание работ</div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>

            
    
            
            
            
        </div>

    </section>

 


 









</main>
    <?php get_footer(); ?>

