<?php 
/*
Template Name: Страница услуг
*/

get_header(); ?>

<section class="hero-banner">
    <div class="hero-image">
        <div class="hero-overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h1 class="display-4 text-white fw-bold mb-4 animate__animated animate__fadeInUp">
                            Вызов врача на дом. Платная скорая помощь.
                        </h1>
                        <p class="lead text-white mb-5 animate__animated animate__fadeInUp animate__delay-1s">
                            от 8000 руб. ежедневно 24/7
                        </p>
                        <div class="hero-buttons animate__animated animate__fadeInUp animate__delay-2s">
                            <button class="btn btn-primary btn-lg me-3 rounded-pill" data-bs-toggle="modal" data-bs-target="#callDoctorModal">
                                <i class="fas fa-phone-alt me-2"></i>Вызвать врача
                            </button>
                            <button class="btn btn-outline-light btn-lg rounded-pill">
                                <i class="fas fa-info-circle me-2"></i>Узнать больше
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------text---------------------->
<?php require_once 'includes/uslugi/call-doctor/text-content-top.php';   ?>

<?php require_once 'includes/uslugi/call-doctor/advantages.php';   ?>

<?php require_once 'includes/uslugi/call-doctor/how-we-help.php';   ?>

<?php get_footer(); ?>