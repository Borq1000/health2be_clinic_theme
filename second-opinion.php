<?php 
/*
Template Name: Второе мнение
*/

get_header(); ?>

<!-- Hero Section -->
<section class="hero-section position-relative">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6 py-5">
                <div class="hero-content p-4 rounded-3">
                    <h2 class="section-title fw-bold mb-4">Второе медицинское<br>мнение</h2>
                    <ul class="feature-list list-unstyled mb-4">
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-primary me-2"></i>
                            мнение специалиста в сложной ситуации
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-primary me-2"></i>
                            детальная аналитика истории болезни
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-primary me-2"></i>
                            проведение консилиума с разными специалистами
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-primary me-2"></i>
                            полное медицинское сопровождение от Health2Be
                        </li>
                    </ul>
                    <button class="btn btn-primary btn-lg popmake-5582 pum-trigger">
                        <i class="fas fa-stethoscope me-2"></i>
                        Получить второе мнение
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-bg position-absolute top-0 end-0 w-100 h-100" style="background: url('https://health2be.com/wp-content/uploads/xfeature-2-opinion.jpg.pagespeed.ic.4SW1rmGLBn.jpg') center/cover no-repeat;"></div>
</section>

<!---short top text--->
<section class="intro-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="intro-content text-center">
                    <div class="intro-icon mb-4">
                        <i class="fas fa-comment-medical"></i>
                    </div>
                    <p class="service-big">
                        Имея возможность получить второе мнение онлайн через Health2Be, вы можете быть уверены в корректности установленного диагноза, получить рекомендации по дальнейшему обследованию и лечению от наших специалистов.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!---info section---->
<section class="info-section py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Личный консультант -->
            <div class="col-lg-4">
                <div class="info-card h-100">
                    <div class="info-card-content">
                        <div class="info-icon">
                            <img src="https://health2be.com/wp-content/uploads/xvm-consult.png.pagespeed.ic.owf1_8wYP8.png" alt="Консультант" class="img-fluid">
                        </div>
                        <h3 class="info-title">Личный консультант</h3>
                        <p class="info-text">Специалисты службы медицинского сопровождения Health2Be изучат и помогут Вам подготовить необходимые медицинские документы для дальнейшей аналитики.</p>
                    </div>
                </div>
            </div>

            <!-- Сеть врачей -->
            <div class="col-lg-4">
                <div class="info-card h-100">
                    <div class="info-card-content">
                        <div class="info-icon">
                            <img src="https://health2be.com/wp-content/uploads/xvm-net.png.pagespeed.ic.vPuNBfhGoe.png" alt="Сеть врачей" class="img-fluid">
                        </div>
                        <h3 class="info-title">Сеть врачей</h3>
                        <p class="info-text">Ваш случай будет рассмотрен и проанализирован ведущим специалистом в своей области. При необходимости будет проведен консилиум с участием нескольких врачей.</p>
                    </div>
                </div>
            </div>

            <!-- Экспертный совет -->
            <div class="col-lg-4">
                <div class="info-card h-100">
                    <div class="info-card-content">
                        <div class="info-icon">
                            <img src="https://health2be.com/wp-content/uploads/xvm-sovet.png.pagespeed.ic.QEAeHwZh9H.png" alt="Экспертный совет" class="img-fluid">
                        </div>
                        <h3 class="info-title">Экспертный совет</h3>
                        <p class="info-text">В консилиуме по Вашему случаю работают ведущие российские и зарубежные специалисты. Предоставление рекомендаций по дальнейшим действиям.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/uslugi/second-opinion/our-doctors-carousel.php'; ?>

<?php get_footer(); ?>