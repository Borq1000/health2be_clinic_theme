<?php 


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

          
            
            <!-- Section Blog Grid -->
            <section class="flat-section">
                <div class="container">
                    <div class="row">
                         <?php if (have_posts()) { ?>
                    <?php
                    $i = 0;
                    while (have_posts()) : the_post();  // the loop
                        ?>
                       
                        <div class="col-lg-4 col-md-6">
                            <a href="<?php the_permalink() ?>" class="flat-blog-item hover-img" title="<?php the_title(); ?>">
                                <div class="img-style">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                    <span class="date-post"><?php echo get_the_date('d/m/y'); ?></span>
                                </div>
                                <div class="content-box">
                                   
                                    <h5 class="title link"><?php the_title(); ?></h5>
                                    
                                </div>

                            </a>
                        </div>
                    <?php endwhile; ?>

                    <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>

                <?php } else { ?>
                    <h1>Здесь пока нет статей.</h1>

                <?php } ?>   
                        
                    </div>
                </div>
            </section>
            <!-- End Section Blog Grid -->
        
         
        
           
            
         
    
<?php get_footer(); ?>