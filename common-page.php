<?php 
/*
Template Name: Обычная страница
*/

get_header();  ?>


   <!-- Page Title -->
            <section class="flat-title-page" style="background-image: url(<?php header_image(); ?>);">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                              <?php
                if (function_exists('bcn_display')) {
                    bcn_display();
                }
                ?>
                        </ul>
                        <h2 class="text-center text-white title"><?php the_title(); ?></h2>
                    </div>
                </div>
            </section>
            <!-- End Page Title -->

          
            <section class="flat-section">
                <div class="container">
                    <div class="row">
                         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
                    </div>
                </div>
            </section>
        
        
           
            
         
    
<?php get_footer(); ?>