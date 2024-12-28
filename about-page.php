<?php
/**
 * Template Name: О компании
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage HealthHBE
 */

get_header();
?>




<main class="container py-5">
  

    <!-- О компании -->
    <div class="about-section mb-5">
        <div class="text-center mb-5">
            <h2 class="title">Добро пожаловать в Clinics.Health2Be</h2>
            <div class="title-divider">
                <div class="divider-line"></div>
                <i class="fas fa-plus divider-icon" aria-hidden="true"></i>
                <div class="divider-line"></div>
            </div>
            <p class="section-subtitle">Основные направления работы компании – лечебно диагностическая работа на базе частной клиники Юнимед-С, которая была организованна в 2000 году.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="about-image-wrapper">
                    <img src="https://health2be.com/wp-content/uploads/xabout-1.jpg.pagespeed.ic.7wbr1Lx11w.jpg" class="img-fluid" alt="О компании">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content">
                    <p class="text-muted mb-4">За годы своей работы в различных направлениях медицины мы пришли к выводу, что необходимо сконцентрировать весь накопленный опыт и потенциал в двух направлениях:</p>
                    
                    <div class="direction-blocks">
                        <div class="direction-item">
                            <span class="direction-number">01</span>
                            <h3 class="direction-title">Частное направление</h3>
                            <p class="direction-text">Медицинская клиника Юнимед-С, оснащенная по последнему слову науки и техники. В результате был создан медицинский центр с высококвалифицированным, опытным персоналом. Выбраны основные направления медицинских услуг, которые возможно оказать на базе клиники.</p>
                        </div>
                        
                        <div class="direction-item">
                            <span class="direction-number">02</span>
                            <h3 class="direction-title">Организация обследования и лечения</h3>
                            <p class="direction-text">Организация высококачественного обследования, лечения и реабилитации пациентов в ведущих Российских и в зарубежных клиниках. Реализация данного направления работы осуществляется при плотной поддержке ведущих клиник и научно-исследовательских институтов, которые располагают большими в сравнении с частной клиникой возможностями.</p>
                        </div>
                    </div>

                    <div class="about-buttons">
                        <a href="/clinics/" class="btn btn-primary">Клиники-партнёры</a>
                        <a href="/sanatorii/" class="btn btn-outline">Санатории-партнёры</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Галерея -->
    <style>
        .gallery-img {
            transition: transform 0.3s ease;
            height: 250px;
            object-fit: cover;
        }
        .gallery-img:hover {
            transform: scale(1.05);
        }
        .gallery-item {
            overflow: hidden;
        }
        .gallery-item-tall {
            height: calc(500px + 1.5rem); /* Высота двух изображений + отступ */
        }
        .gallery-img-tall {
            height: 100%;
        }
    </style>
    
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h2 class="title">Наша клиника</h2>
            <div class="title-divider">
                <div class="divider-line"></div>
                <i class="fas fa-plus divider-icon" aria-hidden="true"></i>
                <div class="divider-line"></div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-8">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="gallery-item">
                            <img src="/wp-content/uploads/2024/12/kab4.webp" class="img-fluid rounded w-100 gallery-img" alt="Кабинет клиники">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="gallery-item">
                            <img src="/wp-content/uploads/2024/12/xabout-kab1.jpg" class="img-fluid rounded w-100 gallery-img" alt="Кабинет клиники">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="gallery-item">
                            <img src="/wp-content/uploads/2024/12/kab3.jpg" class="img-fluid rounded w-100 gallery-img" alt="Кабинет клиники">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="gallery-item">
                            <img src="/wp-content/uploads/2024/12/O-EeTUh-W.jpg" class="img-fluid rounded w-100 gallery-img" alt="Процедурный кабинет">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="gallery-item gallery-item-tall">
                    <img src="/wp-content/uploads/2024/12/kab2.jpg" class="img-fluid rounded w-100 gallery-img gallery-img-tall" alt="Приёмная">
                </div>
            </div>
        </div>
    </div>

    <!-- Контакты и реквизиты -->
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h2 class="title">Контакты и реквизиты</h2>
            
        </div>
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="contact-box rounded">
                <h3 class="contact-subtitle">Основная информация</h3>
                <div class="contact-info">
                    <div class="info-item">
                        <i class="fas fa-hospital"></i>
                        <span><strong>Наименование:</strong> Медицинский центр «Юнимед-С»</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span><strong>Адрес:</strong> ЮЗАО ст. м. Юго-Западная, ул. 26 Бакинских комиссаров, д.11</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <span><strong>График работы:</strong> Пн-Пт: с 9:00 до 21:00, Сб: с 9:00 до 19:00, Вс: с 10:00 до 17:00</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="contact-box rounded">
                <h3 class="contact-subtitle">Связаться с нами</h3>
                <div class="contact-info">
                    <div class="info-item">
                        <i class="fas fa-phone-alt"></i>
                        <span><strong>Телефон:</strong> <a href="tel:84951355010" class="contact-link">+7 (495) 135-50-10</a></span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-headset"></i>
                        <span><strong>Круглосуточная поддержка:</strong> <a href="tel:+74951774736" class="contact-link">+7 (495) 177-47-36</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Лицензии -->
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h3 class="h3 mb-4">Лицензии</h3>
        </div>
        <div class="col-12">
            <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '130' ); } ?>
        </div>
    </div>

    <!-- Опыт и особенности -->
    <div class="row mb-5">
        <div class="col-md-6 mb-4 mb-md-0">
            <h2 class="title text-center">Наш опыт</h2>
            
            <div class="experience-box p-4 rounded">
                <p class="lead mb-0">Врачей много, хороших надо поискать. Мы знаем как это делать. Мы работаем с лучшими и самыми лучшими специалистами!</p>
            </div>
        </div>
        <div class="col-md-6">
            <h2 class="title text-center">Почему нас выбирают?</h2>
            
            <div class="why-us-box p-4 rounded">
                <p class="lead mb-0">Мы предпочитаем количеству качество, обратившиеся к нам люди чувствуют это и рекомендуют другим...</p>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-12">
            <h2 class="text-center mb-4">Наши особенности в работе</h2>
            <div class="features-box p-4 rounded text-center">
                <p class="lead mb-0">Мы не зарабатываем на анализах, мы не зарабатываем на назначениях препаратов, мы не занимаемся кросс продажами. Мы просто помогаем беречь Ваше здоровье, понимая что здоровье — это самое дорогое.</p>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>