<?php 
/*
Template Name: Обычная страница
*/

get_header();  ?>


 

          
            <section class="flat-section">
                <div class="container">
                    
                    
                     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    
                   
                    
                </div>
            </section>
        
        
           
            
         
    
<?php get_footer(); ?>