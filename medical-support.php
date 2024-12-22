<?php 
/*
Template Name: Полное медицинское сопровождение 
*/

get_header();  ?>


<section class="hero-banner compact">
    <div class="hero-image" style="background-image: url('https://health2be.com/wp-content/uploads/annualy-program.jpg');">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h2 class="text-white fw-bold mb-3 animate__animated animate__fadeInUp">
                            Комплексное медицинское<br>сопровождение
                        </h2>
                        <p class="text-white mb-4 animate__animated animate__fadeInUp animate__delay-1s" style="line-height: 1.8;">
                            <i class="fas fa-clock me-2" style="color: #7acacd;"></i>Полное медицинское сопровождение<br>
                            24 часа в сутки, 365 дней в году,<br>
                            в России и за границей.<br>
                            <i class="fas fa-shield-alt me-2" style="color: #7acacd;"></i>Квалифицировано, конфиденциально,<br>
                            без ожиданий и лишних вопросов.
                        </p>
                        <div class="hero-buttons animate__animated animate__fadeInUp animate__delay-2s">
                            <button class="btn btn-primary me-2 popmake-5765 pum-trigger">
                                <i class="fas fa-clipboard-check me-2"></i>Оставить заявку
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!---------->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-block mb-5 animate__animated animate__fadeIn">
                    <p class="lead mb-0">
                        <i class="fas fa-exclamation-circle me-3" style="color: #7acacd;"></i>
                        К сожалению, непредвиденные моменты случаются в жизни каждого человека вне зависимости от его возраста и сферы деятельности, а самое главное — их не представляется возможным предвидеть.
                    </p>
                </div>
                <div class="text-center animate__animated animate__fadeIn animate__delay-1s">
                    <div class="question-block p-4">
                        <p class="h4 mb-3">Куда бежать? Кому звонить? Что делать?</p>
                        <p class="h5">Искать знакомых, поднимать связи, спрашивать соседей?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!---order section----->

<?php require_once 'includes/uslugi/medical-support/medical-support-order.php'; ?>
<?php require_once 'includes/uslugi/medical-support/why-us.php'; ?>        
<?php require_once 'includes/uslugi/medical-support/cases.php'; ?>        
<?php require_once 'includes/uslugi/medical-support/faq.php'; ?>
<?php require_once 'includes/call-action.php'; ?>

<?php get_footer(); ?>