<?php get_header(); ?>

<!-- Breadcumb -->
<div class="breadcumb-wrapper">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"><?php the_title(); ?></h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                    <li><a href="<?php echo get_post_type_archive_link('doctor'); ?>">Врачи</a></li>
                    <li><?php the_title(); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Team Details -->
<section class="team-details space-top space-extra-bottom">
    <div class="container">
        <div class="row gx-60">
            <div class="col-lg-5">
                <div class="team-details-img">
                    <?php 
                    $photo_url = get_post_meta(get_the_ID(), 'doctor_photo', true);
                    if ($photo_url) {
                        echo '<img src="' . esc_url($photo_url) . '" alt="' . esc_attr(get_the_title()) . '">';
                    } else {
                        echo '<img src="/wp-content/uploads/2024/12/doctor-1.jpg" alt="Doctor Photo">';
                    }
                    ?>
                    <div class="team-details-shape"></div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="team-details-content">
                    <h2 class="team-details-title"><?php the_title(); ?></h2>
                    <span class="team-details-desig"><?php echo esc_html(get_post_meta(get_the_ID(), 'specialty', true)); ?></span>
                    
                    <div class="team-details-info">
                        <div class="info-wrap">
                            <h3 class="team-details-subtitle">Информация о враче</h3>
                            <div class="row gy-2">
                                <div class="col-sm-6">
                                    <div class="info-box">
                                        <div class="info-box-icon">
                                            <i class="fas fa-graduation-cap"></i>
                                        </div>
                                        <div class="info-box-content">
                                            <span class="info-box-title">Образование</span>
                                            <span class="info-box-text"><?php echo esc_html(get_post_meta(get_the_ID(), 'education', true)); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="info-box">
                                        <div class="info-box-icon"><i class="fas fa-briefcase"></i></div>
                                        <div class="info-box-content">
                                            <span class="info-box-title">Опыт работы</span>
                                            <span class="info-box-text"><?php echo esc_html(get_post_meta(get_the_ID(), 'experience', true)); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="info-box">
                                        <div class="info-box-icon"><i class="fas fa-phone"></i></div>
                                        <div class="info-box-content">
                                            <span class="info-box-title">Телефон</span>
                                            <span class="info-box-text"><?php echo esc_html(get_post_meta(get_the_ID(), 'phone', true)); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="info-box">
                                        <div class="info-box-icon"><i class="fas fa-envelope"></i></div>
                                        <div class="info-box-content">
                                            <span class="info-box-title">Email</span>
                                            <span class="info-box-text"><?php echo esc_html(get_post_meta(get_the_ID(), 'email', true)); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Doctor Details Tabs -->
<section class="doctor-tabs-section">
    <div class="container">
        <div class="doctor-tabs-wrapper">
            <ul class="nav nav-tabs doctor-tabs" role="tablist">
                <li class="nav-item flex-fill text-center" role="presentation">
                    <button class="nav-link active w-100" data-bs-toggle="tab" data-bs-target="#about">О враче</button>
                </li>
                <li class="nav-item flex-fill text-center" role="presentation">
                    <button class="nav-link w-100" data-bs-toggle="tab" data-bs-target="#specialization">Специализация</button>
                </li>
                <li class="nav-item flex-fill text-center" role="presentation">
                    <button class="nav-link w-100" data-bs-toggle="tab" data-bs-target="#services">Услуги</button>
                </li>
            </ul>
        </div>

        <div class="tab-content doctor-tab-content">
            <div class="tab-pane fade show active" id="about" role="tabpanel">
                <div class="team-details-tab">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="tab-pane fade" id="specialization" role="tabpanel">
                <div class="team-details-tab">
                    <div class="row">
                        <?php
                        $specializations = get_post_meta(get_the_ID(), 'specializations', true);
                        if ($specializations) {
                            $specializations_array = explode(',', $specializations);
                            foreach ($specializations_array as $spec) {
                                echo '<div class="col-md-6 mb-30">';
                                echo '<div class="service-box">';
                                echo '<div class="service-box-icon"><i class="fas fa-check-circle"></i></div>';
                                echo '<div class="service-box-content">';
                                echo '<h3 class="service-box-title">' . esc_html(trim($spec)) . '</h3>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="services" role="tabpanel">
                <div class="team-details-tab">
                    <div class="service-price-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Услуга</th>
                                    <th>Длительность</th>
                                    <th>Стоимость</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $services = get_post_meta(get_the_ID(), 'services', true);
                                if ($services) {
                                    foreach ($services as $service) {
                                        echo '<tr>';
                                        echo '<td>' . esc_html($service['name']) . '</td>';
                                        echo '<td>' . esc_html($service['duration']) . '</td>';
                                        echo '<td><span class="price">' . esc_html($service['price']) . ' ₽</span></td>';
                                        echo '</tr>';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Appointment Section -->
<section class="appointment-section space-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-11">
                <div class="appointment-form-wrap">
                    <div class="title-area text-center">
                        <h2 class="sec-title">Записаться на приём</h2>
                        <p class="sec-text">Оставьте заявку и мы свяжемся с вами для подтверждения записи</p>
                    </div>
                    <form action="#" class="appointment-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Ваше имя" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="tel" class="form-control" placeholder="Телефон" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="date" class="form-control" required>
                            </div>
                            <div class="col-12 form-group">
                                <textarea class="form-control" placeholder="Комментарий" rows="3"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="vs-btn">Отправить заявку</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* General Styles */
:root {
    --theme-color: #0046E8;
    --title-color: #141F45;
    --body-color: #737887;
    --smoke-color: #F3F6F7;
    --white-color: #ffffff;
    --black-color: #000000;
}

.team-details-tab p {
    font-size: 18px;
    line-height: 1.5em;
    font-family: sans-serif;
}

.space-top {
    padding-top: 60px;
}

.space-bottom {
    padding-bottom: 120px;
}

.space-extra-bottom {
    padding-bottom: 30px;
}

/* Breadcumb */
.breadcumb-wrapper {
    background-color: var(--smoke-color);
    padding: 50px 0;
    position: relative;
}

.breadcumb-content {
    text-align: center;
}

.breadcumb-title {
    color: var(--title-color);
    font-size: 48px;
    margin-bottom: 15px;
}

.breadcumb-menu {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    gap: 20px;
}

.breadcumb-menu li {
    position: relative;
    color: var(--body-color);
}

.breadcumb-menu li:not(:last-child):after {
    content: '/';
    margin-left: 20px;
}

.breadcumb-menu a {
    color: var(--body-color);
    text-decoration: none;
}

.breadcumb-menu a:hover {
    color: #00b5e8;
}

/* Team Details */
.team-details-img {
    position: relative;
    padding-left: 30px;
}

.team-details-img img {
    width: 100%;
    border-radius: 10px;
}

.team-details-shape {
    position: absolute;
    top: 30px;
    left: 0;
    width: 100%;
    height: 100%;
    border: 1px solid var(--theme-color);
    border-radius: 10px;
    z-index: -1;
}

.team-details-title {
    font-size: 36px;
    margin-bottom: 10px;
    color: var(--title-color);
}

.team-details-desig {
    color: #00b5e8;
    display: block;
    margin-bottom: 25px;
    font-size: 18px;
}

.team-details-subtitle {
    font-size: 24px;
    margin-bottom: 25px;
    color: var(--title-color);
}

/* Info Box */
.info-box {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 20px;
}

.info-box-icon {
    flex: 0 0 45px;
    width: 45px;
    height: 45px;
    background-color: #00b5e8;
    color: var(--white-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
}

.info-box-icon i {
    width: auto;
    height: auto;
    line-height: 1;
}

.info-box-content {
    flex: 1;
    padding-top: 2px;
}

.info-box-title {
    display: block;
    font-size: 14px;
    color: var(--body-color);
    margin-bottom: 5px;
}

.info-box-text {
    display: block;
    color: var(--title-color);
    font-weight: 500;
    line-height: 1.4;
}

/* Team Social */
.team-social {
    display: flex;
    gap: 10px;
    margin-top: 30px;
}

.team-social a {
    width: 40px;
    height: 40px;
    background-color: var(--smoke-color);
    color: #00b5e8;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.3s ease;
}

.team-social a:hover {
    background-color: #00b5e8;
    color: var(--white-color);
}

/* Tabs */
.tab-menu1 {
    margin-bottom: 40px;
}

.nav-tabs {
    border: none;
    justify-content: center;
    gap: 10px;
}

.nav-tabs .nav-link {
    border: none;
    background-color: var(--smoke-color);
    color: var(--title-color);
    padding: 15px 30px;
    border-radius: 5px;
    font-weight: 500;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-link:hover {
    color: #00b5e8;
    background: transparent;
}

.nav-tabs .nav-link.active {
    border-bottom: 2px solid #00b5e8;
}

/* Service Box */
.service-box {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 30px;
    background-color: var(--smoke-color);
    border-radius: 10px;
    transition: all 0.3s ease;
}

.service-box:hover {
    background-color: #00b5e8;
    color: var(--white-color);
}

.service-box-icon {
    color: #00b5e8;
    font-size: 24px;
}

.service-box:hover .service-box-icon {
    color: var(--white-color);
}

.service-box-title {
    margin: 0;
    font-size: 18px;
}

/* Price Table */
.service-price-table table {
    width: 100%;
}

.service-price-table th {
    background-color: #00b5e8;
    color: var(--white-color);
    padding: 15px 20px;
}

.service-price-table td {
    padding: 15px 20px;
    border-bottom: 1px solid var(--smoke-color);
}

.service-price-table .price {
    color: #00b5e8;
    font-weight: 600;
}

/* Appointment Form */
.appointment-form-wrap {
    background-color: var(--white-color);
    padding: 60px;
    border-radius: 10px;
    box-shadow: 0 0 30px rgba(0,0,0,0.1);
}

.title-area {
    margin-bottom: 40px;
}

.sec-title {
    font-size: 36px;
    color: var(--title-color);
    margin-bottom: 15px;
}

.sec-text {
    color: var(--body-color);
    margin-bottom: 0;
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    height: 55px;
    border: 1px solid var(--smoke-color);
    padding: 10px 20px;
    border-radius: 5px;
}

textarea.form-control {
    height: auto;
}

.vs-btn {
    background-color: #ffffff;
    color: #00b5e8;
    padding: 15px 40px;
    border: 2px solid #00b5e8;
    border-radius: 30px;
    font-weight: 500;
    transition: all 0.3s ease;
    display: inline-block;
    text-decoration: none;
}

.vs-btn:hover {
    background-color: #00b5e8;
    color: #ffffff;
}

@media (max-width: 991px) {
    .space-top {
        padding-top: 80px;
    }
    
    .space-bottom {
        padding-bottom: 80px;
    }
    
    .space-extra-bottom {
        padding-bottom: 100px;
    }
    
    .team-details-img {
        margin-bottom: 40px;
    }
    
    .appointment-form-wrap {
        padding: 40px;
    }
}

@media (max-width: 767px) {
    .breadcumb-title {
        font-size: 36px;
    }
    
    .team-details-title {
        font-size: 30px;
    }
    
    .nav-tabs .nav-link {
        padding: 10px 20px;
    }
    
    .appointment-form-wrap {
        padding: 30px;
    }
}

/* Обновленные стили для секции табов */
.doctor-tabs-section {
    padding: 20px 0;
    background-color: #fff;
}

.doctor-tabs-wrapper {
    border-bottom: 1px solid #e9ecef;
    margin-bottom: 10px;
}

.doctor-tabs {
    border: none;
    width: 100%;
    margin-bottom: -1px;
    display: flex;
    justify-content: space-between;
}

.doctor-tabs .nav-item {
    margin: 0;
}

.doctor-tabs .nav-link {
    border: none;
    border-bottom: 2px solid transparent;
    background: transparent;
    color: #141F45;
    padding: 15px 30px;
    font-size: 18px;
    font-weight: 500;
    transition: all 0.3s ease;
    margin: 0;
    border-radius: 0;
    white-space: nowrap;
}

.doctor-tabs .nav-link:hover {
    color: #00b5e8;
    background: transparent;
    border-color: transparent;
}

.doctor-tabs .nav-link.active {
    color: #00b5e8;
    background: #fff;
    border-bottom: 2px solid #00b5e8;
}

.doctor-tab-content {
    padding-top: 0px;
}

/* Медиа-запросы для адаптивности */
@media (max-width: 767px) {
    .doctor-tabs .nav-link {
        padding: 12px 20px;
        font-size: 16px;
    }
    
    .doctor-tabs-section {
        padding: 40px 0;
    }
}

@media (max-width: 575px) {
    .doctor-tabs {
        flex-direction: column;
    }
    
    .doctor-tabs .nav-item {
        width: 100%;
    }
    
    .doctor-tabs .nav-link {
        width: 100%;
        text-align: center;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Form validation
    const forms = document.querySelectorAll('.appointment-form');
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

    // Initialize tabs
    const triggerTabList = [].slice.call(document.querySelectorAll('.nav-tabs .nav-link'));
    triggerTabList.forEach(function(triggerEl) {
        const tabTrigger = new bootstrap.Tab(triggerEl);
        triggerEl.addEventListener('click', function(event) {
            event.preventDefault();
            tabTrigger.show();
        });
    });
});
</script>

<?php get_footer(); ?>


