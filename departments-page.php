<?php 
/*
Template Name: Departments
*/

get_header();  ?>


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

<section class="flat-section common-page-section">
    <div class="container">
        
        
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
        
       
        
    </div>
</section>
    
    
<?php get_footer(); ?>