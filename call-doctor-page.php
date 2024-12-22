<?php 
/*
Template Name: Страница Вызов врача
*/

get_header(); ?>

<style>
    .hero-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;

    background: url("<?php header_image(); ?>") no-repeat center center;
    background-size: cover;
    z-index: 1;
}
</style>

<main class="main-content-services">

<section class="hero-banner compact">
    <div class="hero-image">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                    <?php
                    $subheader_title = get_post_meta(get_the_ID(), 'subheader_title', true);
                    $subheader_aditional = get_post_meta(get_the_ID(), 'subheader_aditional', true);
                    
                    if ($subheader_title) {
                       
                        echo $subheader_title;
                       
                    }

                    if ($subheader_aditional) {
                        echo $subheader_aditional;
                     }
                     
                    ?>


                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>


<?php require_once 'includes/call-action.php';   ?>

</main>

<?php get_footer(); ?>