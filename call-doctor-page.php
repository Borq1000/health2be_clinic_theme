<?php 
/*
Template Name: Страница Вызов врача
*/

get_header(); ?>

<section class="hero-banner compact">
    <div class="hero-image">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h1 class="h2 text-white fw-bold mb-3 animate__animated animate__fadeInUp">
                            Вызов врача на дом. Платная скорая помощь.
                        </h1>
                        <div class="d-flex align-items-center mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                            <span class="price-badge">от 8000 руб.</span>
                            <span class="availability-badge ms-3">
                                <i class="fas fa-clock me-1"></i>24/7
                            </span>
                        </div>
                        <div class="hero-buttons animate__animated animate__fadeInUp animate__delay-2s">
                            <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#callDoctorModal">
                                <i class="fas fa-phone-alt me-2"></i>Вызвать врача
                            </button>
                            <button class="btn btn-outline-light">
                                <i class="fas fa-info-circle me-2"></i>Узнать больше
                            </button>
                        </div>
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


<?php require_once 'includes/uslugi/call-doctor/advantages.php';   ?>

<?php require_once 'includes/uslugi/call-doctor/how-we-help.php';   ?>

<?php require_once 'includes/uslugi/call-doctor/faq.php';   ?>

<?php require_once 'includes/call-action.php';   ?>

<?php get_footer(); ?>