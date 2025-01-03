<?php

get_header();  ?>
            
            <div class="single-clinic-header-block">
                <div class="container">
                    <div class="header-property-detail">
                        <div class="content-top d-flex justify-content-between align-items-center">
                            <h3 class="title link fw-8"><?php the_title(); ?></h3>
                            <p class="meta-item"><span class="icon icon-mapPin"></span><span class="text-variant-1"><?php echo esc_html(get_post_meta(get_the_ID(), 'address', true)); ?></span></p>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div>
                

            </div>

            <section class="flat-section-v3 flat-property-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            
                          <!----------------------Фотографии клиники----------------------------------->              
                <?php
$photos = get_post_meta(get_the_ID(), 'photos', true);
if (!empty($photos)) {
    $photos_array = explode(',', $photos);
    echo '<div class="container">';
    echo '<div class="single-property-gallery">';
    echo '<div class="position-relative">';

    // Основной слайдер
    echo '<div dir="ltr" class="swiper sw-single">';
    echo '<div class="swiper-wrapper">';
    foreach ($photos_array as $photo_id) {
        $photo_url = wp_get_attachment_url($photo_id);
        if ($photo_url) {
            echo '<div class="swiper-slide">';
            echo '<div class="image-sw-single">';
            echo '<img src="' . esc_url($photo_url) . '" alt="Clinic Photo" class="main-slide-image">';
            echo '</div>';
            echo '</div>';
        }
    }
    echo '</div>'; // Закрываем .swiper-wrapper
    echo '</div>'; // Закрываем .sw-single

    // Навигация
    echo '<div class="box-navigation">';
    echo '<div class="navigation swiper-nav-next nav-next-single"><span class="icon icon-arr-l"></span></div>';
    echo '<div class="navigation swiper-nav-prev nav-prev-single"><span class="icon icon-arr-r"></span></div>';
    echo '</div>';

    echo '</div>'; // Закрываем .position-relative

    // Слайдер миниатюр
    echo '<div class="thumbs-sw-pagi-wrapper">';
    echo '<div dir="ltr" class="swiper thumbs-sw-pagi">';
    echo '<div class="swiper-wrapper">';
    foreach ($photos_array as $photo_id) {
        $photo_url = wp_get_attachment_url($photo_id);
        if ($photo_url) {
            echo '<div class="swiper-slide">';
            echo '<div class="img-thumb-pagi">';
            echo '<img src="' . esc_url($photo_url) . '" alt="Clinic Thumbnail" class="thumbnail-image">';
            echo '</div>';
            echo '</div>';
        }
    }
    echo '</div>'; // Закрываем .swiper-wrapper
    echo '</div>'; // Закрываем .thumbs-sw-pagi
    echo '</div>'; // Закрываем .thumbs-sw-pagi-wrapper

    echo '</div>'; // Закрываем .single-property-gallery
    echo '</div>'; // Закрываем .container
}
?>

<style>
/* Обновленные стили для слайдера */
.sw-single {
    border-radius: 12px;
    overflow: hidden;
    max-height: 500px; /* Уменьшаем максимальную высоту */
}

.image-sw-single {
    width: 100%;
    height: 100%;
    max-height: 500px; /* Уменьшаем максимальную высоту */
    border-radius: 12px;
    overflow: hidden;
}

.image-sw-single img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 12px;
}

.thumbs-sw-pagi {
    width: 100%;
    max-width: 400px;
    margin: 0 auto;
    padding-top: 10px;
}

.thumbs-sw-pagi-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    padding: 10px 0;
}

.thumbs-sw-pagi .swiper-wrapper {
    justify-content: center;
}

.thumbs-sw-pagi .swiper-slide {
    width: 80px;
    height: 80px;
    opacity: 0.6;
    transition: all 0.3s ease;
    border-radius: 8px;
    overflow: hidden;
}

.thumbs-sw-pagi .swiper-slide-thumb-active {
    opacity: 1;
}

.thumbs-sw-pagi .img-thumb-pagi {
    width: 100%;
    height: 100%;
    border-radius: 8px;
    overflow: hidden;
}

.thumbs-sw-pagi .img-thumb-pagi img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
}

@media (max-width: 768px) {
    .sw-single, .image-sw-single {
        max-height: 400px; /* Уменьшаем высоту на мобильных */
    }
    
    .thumbs-sw-pagi {
        max-width: 300px;
        padding-top: 8px;
    }
    
    .thumbs-sw-pagi-wrapper {
        padding: 8px 0;
    }
    
    .thumbs-sw-pagi .swiper-slide {
        width: 60px;
        height: 60px;
    }
}
</style>

  
   <!----------------------Фотографии клиники-----end------------------------------>      

                
  <!------------single clinic navs------------------>

 <div class="row-tab-clinic">
    <div class="container">
        <nav class="clinic-nav">
            <a class="nav-link active" href="#about-this-clinic">О клинике</a>
            <a class="nav-link" href="#single-clinic-prices">Цены</a>
            
            <a class="nav-link" href="#single-clinic-doctors">Врачи</a>
            <a class="nav-link" href="#single-clinic-living">Проживание</a>
            <a class="nav-link" href="#single-clinic-map">Местоположение</a>
        </nav>
    </div>
</div>
   
   <!------------single clinic navs--end---------------->
   
                             <!-- Описание клиники -->
                             <div class="single-clinic-desc">
                                 <div class="container">
                                 <div class="row">
                                     <div id="about-this-clinic" class="single-property-element single-property-desc single-clinic-desc">
                                <?php 
        while (have_posts()) : the_post(); 
            the_content(); // Вывод описания из редактора WordPress
        endwhile; 
        ?>
                            </div>
                                 </div>
                             </div>
                             </div>
      
   


                             
  <!-----------------Clinic Prices Section----------------------------------->   
  <section class="prices-section" id="single-clinic-prices">
    <div class="container">
        <div class="section-title">
            <h2>Стоимость медицинских услуг</h2>
            <p class="note-text">Клиника предлагает широкий спектр медицинских услуг высочайшего качества по конкурентоспособным ценам</p>
        </div>

        <div class="table-responsive">
            <table class="price-table table">
                <thead>
                    <tr>
                        <th>Наименование услуги</th>
                        <th>Длительность</th>
                        <th>Стоимость</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $prices = get_post_meta(get_the_ID(), 'clinic_prices', true);
                    if (!empty($prices)) {
                        foreach ($prices as $group) {
                            if (!empty($group['category'])) {
                                ?>
                                <tr class="category-row">
                                    <td colspan="3"><?php echo esc_html($group['category']); ?></td>
                                </tr>
                                <?php
                            }
                            if (!empty($group['services'])) {
                                foreach ($group['services'] as $service) {
                                    if (!empty($service['name'])) {
                                        ?>
                                        <tr>
                                            <td class="service-name"><?php echo esc_html($service['name']); ?></td>
                                            <td><?php echo esc_html($service['duration']); ?></td>
                                            <td class="price"><?php echo esc_html($service['price']); ?></td>
                                        </tr>
                                        <?php
                                    }
                                }
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <p class="note-text">* Указанные цены являются базовыми. Точная стоимость услуг определяется после консультации
            специалиста</p>
    </div>
</section>
<!------------clinic prices section end------------------>


<!-------------clinic doctors-------------------->

<section class="doctors-section" id="single-clinic-doctors">
    <div class="container">
        
        <div class="section-title">
            <h2>Врачи</h2>
        </div>
            
        

        <div class="row">
            <div class="col-md-6">
                <div class="doctor-card">
                    <div class="doctor-info-wrapper">
                        <div class="doctor-avatar">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Доктор">
                        </div>
                        <div class="doctor-info">
                            <h3 class="doctor-name">Александр Петров</h3>
                            <div class="doctor-specialty">Кардиолог</div>
                            <p class="doctor-description">Специалист высшей категории с 15-летним опытом. Эксперт по лечению сердечно-сосудистых заболеваний.</p>
                        </div>
                    </div>
                    <div class="doctor-action">
                        <a href="#" class="profile-link">Профиль врача</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="doctor-card">
                    <div class="doctor-info-wrapper">
                        <div class="doctor-avatar">
                            <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Доктор">
                        </div>
                        <div class="doctor-info">
                            <h3 class="doctor-name">Елена Соколова</h3>
                            <div class="doctor-specialty">Невролог</div>
                            <p class="doctor-description">Врач высшей категории, к.м.н. Специализируется на диагностике и лечении заболеваний нервной системы.</p>
                        </div>
                    </div>
                    <div class="doctor-action">
                        <a href="#" class="profile-link">Профиль врача</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="doctor-card">
                    <div class="doctor-info-wrapper">
                        <div class="doctor-avatar">
                            <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Доктор">
                        </div>
                        <div class="doctor-info">
                            <h3 class="doctor-name">Михаил Волков</h3>
                            <div class="doctor-specialty">Ортопед</div>
                            <p class="doctor-description">Ведущий специалист по спортивной медицине. Эксперт в области травматологии и ортопедии.</p>
                        </div>
                    </div>
                    <div class="doctor-action">
                        <a href="#" class="profile-link">Профиль врача</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="doctor-card">
                    <div class="doctor-info-wrapper">
                        <div class="doctor-avatar">
                            <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Доктор">
                        </div>
                        <div class="doctor-info">
                            <h3 class="doctor-name">Анна Морозова</h3>
                            <div class="doctor-specialty">Офтальмолог</div>
                            <p class="doctor-description">Специалист по микрохирургии глаза. Проводит сложные операции по восстановлению зрения.</p>
                        </div>
                    </div>
                    <div class="doctor-action">
                        <a href="#" class="profile-link">Профиль врача</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="doctor-card">
                    <div class="doctor-info-wrapper">
                        <div class="doctor-avatar">
                            <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Доктор">
                        </div>
                        <div class="doctor-info">
                            <h3 class="doctor-name">Дмитрий Иванов</h3>
                            <div class="doctor-specialty">Эндокринолог</div>
                            <p class="doctor-description">Доктор медицинских наук. Специализируется на лечении сахарного диабета и заболеваний щитовидной железы.</p>
                        </div>
                    </div>
                    <div class="doctor-action">
                        <a href="#" class="profile-link">Профиль врача</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="doctor-card">
                    <div class="doctor-info-wrapper">
                        <div class="doctor-avatar">
                            <img src="https://randomuser.me/api/portraits/women/3.jpg" alt="Доктор">
                        </div>
                        <div class="doctor-info">
                            <h3 class="doctor-name">Мария Козлова</h3>
                            <div class="doctor-specialty">Дерматолог</div>
                            <p class="doctor-description">Специалист в области дерматологии и косметологии. Эксперт по лечению сложных кожных заболеваний.</p>
                        </div>
                    </div>
                    <div class="doctor-action">
                        <a href="#" class="profile-link">Профиль врача</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="doctor-card">
                    <div class="doctor-info-wrapper">
                        <div class="doctor-avatar">
                            <img src="https://randomuser.me/api/portraits/men/4.jpg" alt="Доктор">
                        </div>
                        <div class="doctor-info">
                            <h3 class="doctor-name">Сергей Новиков</h3>
                            <div class="doctor-specialty">Хирург</div>
                            <p class="doctor-description">Ведущий хирург клиники. Специализируется на малоинвазивных операциях и лапароскопии.</p>
                        </div>
                    </div>
                    <div class="doctor-action">
                        <a href="#" class="profile-link">Профиль врача</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="doctor-card">
                    <div class="doctor-info-wrapper">
                        <div class="doctor-avatar">
                            <img src="https://randomuser.me/api/portraits/women/4.jpg" alt="Доктор">
                        </div>
                        <div class="doctor-info">
                            <h3 class="doctor-name">Ольга Смирнова</h3>
                            <div class="doctor-specialty">Гастроэнтеролог</div>
                            <p class="doctor-description">Специалист по диагностике и лечению заболеваний желудочно-кишечного тракта. Кандидат медицинских наук.</p>
                        </div>
                    </div>
                    <div class="doctor-action">
                        <a href="#" class="profile-link">Профиль врача</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!---------------------clinic doctors----------------------------------->

<div class="single-clinic-living-section" id="single-clinic-living">
    <div class="container">
        <div class="section-title">
            <h2>Проживание</h2>
        </div>
        
        <div class="row">
            <div class="single-clinic-living-block">
                <?php 
                $living_content = get_post_meta(get_the_ID(), 'clinic_living', true);
                if (!empty($living_content)) {
                    echo wp_kses_post($living_content);
                } else {
                    // Дефолтный контент, если поле пустое
                    ?>
                    
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>


<!---------------map-------------------->
<section class="map-section" id="single-clinic-map">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                     <h2 class="text-center mb-2">Расположение</h2>
                </div>
               
                <div class="clinic-description">
                    <?php
                    $location = get_post_meta(get_the_ID(), 'clinic_location', true);
                    if (!empty($location)) {
                        echo wp_kses_post($location);
                    } else {
                    ?>
                    
                    <?php } ?>
                </div>

                
                <div class="map-container">
                    <div class="map-responsive">
                    <?php
                    $map = get_post_meta(get_the_ID(), 'clinic_map', true);
                    if (!empty($map)) {
                        // Используем wp_kses вместо wp_kses_post для вывода iframe
                        $allowed_html = array(
                            'iframe' => array(
                                'src'             => true,
                                'width'           => true,
                                'height'          => true,
                                'frameborder'     => true,
                                'style'           => true,
                                'allowfullscreen' => true,
                                'class'           => true,
                                'id'             => true
                            )
                        );
                        echo wp_kses($map, $allowed_html);
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Map Section Styles */
.map-section {
    position: relative;
    padding: 20px 0;
    padding-bottom: 0px;
    background: #f8f9fa;
    margin-bottom: 0;
    z-index: 1;
}

.map-section::after {
    content: '';
    display: block;
    height: 60px;
    width: 100%;
    clear: both;
}

.location-content {
    max-width: 100%;
    margin: 0 auto 30px;
}

.location-content p {
    margin-bottom: 10px;
    line-height: 1.5em;
    color: #666;
    font-size: 18px;
    font-family: sans-serif;
    text-align: justify;
}

.map-container {
    position: relative;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
    margin-bottom: 0px;
}

.map-responsive {
    position: relative;
    
    height: 0;
    overflow: hidden;
    border-radius: 8px;
}

.map-responsive iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 8px;
}

@media (max-width: 768px) {
    .map-section {
        padding: 40px 0;
    }
    
    .map-container {
        padding: 15px;
        margin-bottom: 20px;
    }
    
    .location-content {
        padding: 0 15px;
        margin-bottom: 20px;
    }
}
</style>

<!----------------------------->
         
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="single-sidebar">
                                <div class="widget-box single-property-contact">
                                    <h5 class="title fw-6">Контактная информация</h5>
                                    <div class="box-avatar">
                                        <div class="info">
                                            <ul class="list">
                                                <li class="d-flex align-items-center gap-4 text-variant-1"><i class="fas fa-phone text-primary"></i><?php echo esc_html(get_post_meta(get_the_ID(), 'phone', true)); ?></li>
                                                <li class="d-flex align-items-center gap-4 text-variant-1">
                                                    <i class="fas fa-envelope text-primary"></i>
                                                    <span title="<?php echo esc_attr(get_post_meta(get_the_ID(), 'email', true)); ?>">
                                                        <?php echo esc_html(get_post_meta(get_the_ID(), 'email', true)); ?>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="contact-form">
                                    
                                        <?php echo do_shortcode('[contact-form-7 id="47ecbfb" title="Записаться на прием в клинику"]');  ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        <!------------second container---------------->        
                
<div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                          
            
           
                   
                        </div>
                       
                    </div>

                </div>
        <!---------second container end---------------------->
            </section>

           

            
            
<?php  get_footer();  ?>

<script>
// Инициализация слайдера миниатюр
var thumbsSwiper = new Swiper('.thumbs-sw-pagi', {
    spaceBetween: 10,
    slidesPerView: 4,
    watchSlidesProgress: true,
    centerInsufficientSlides: true,
    slideToClickedSlide: true,
    breakpoints: {
        320: {
            slidesPerView: 3,
        },
        480: {
            slidesPerView: 4,
        }
    }
});

// Инициализация основного слайдера
var mainSwiper = new Swiper('.sw-single', {
    spaceBetween: 10,
    navigation: {
        nextEl: '.swiper-nav-next',
        prevEl: '.swiper-nav-prev',
    },
    thumbs: {
        swiper: thumbsSwiper,
    },
});
</script>

<style>
/* Обновленные стили для слайдера */
.thumbs-sw-pagi {
    width: 100%;
    max-width: 400px;
    margin: 0 auto;
    padding-top: 10px;
}

.thumbs-sw-pagi-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    padding: 10px 0;
}

.thumbs-sw-pagi .swiper-wrapper {
    justify-content: center;
}

.thumbs-sw-pagi .swiper-slide {
    width: 80px;
    height: 80px;
    opacity: 0.6;
    transition: all 0.3s ease;
}

.thumbs-sw-pagi .swiper-slide-thumb-active {
    opacity: 1;
}

.thumbs-sw-pagi .img-thumb-pagi {
    width: 100%;
    height: 100%;
    border-radius: 8px;
    overflow: hidden;
}

.thumbs-sw-pagi .img-thumb-pagi img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

@media (max-width: 768px) {
    .thumbs-sw-pagi {
        max-width: 300px;
        padding-top: 8px;
    }
    
    .thumbs-sw-pagi-wrapper {
        padding: 8px 0;
    }
    
    .thumbs-sw-pagi .swiper-slide {
        width: 60px;
        height: 60px;
    }
}
</style>

<style>
/* Стили для секции врачей */
.doctors-section {
    padding: 40px 0;
}

.doctor-card {
    background: #fff;
    border-radius: 12px;
    padding: 15px 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.doctor-card:hover {
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.doctor-info-wrapper {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-bottom: 0px;
}

.doctor-avatar {
    flex-shrink: 0;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    overflow: hidden;
}

.doctor-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.doctor-info {
    flex-grow: 1;
    text-align: left;
    padding-top: 0;
}

.doctor-name {
    font-size: 18px;
    font-weight: 600;
    margin: 0 0 5px;
    color: #333;
    text-align: left;
    line-height: 1.2;
}

.doctor-specialty {
    font-size: 14px;
    color: #666;
    margin-bottom: 6px;
    text-align: left;
}

.doctor-description {
    font-size: 14px;
    color: #777;
    margin: 0;
    line-height: 1.4;
    text-align: left;
}

.doctor-action {
    text-align: center;
    margin-top: 0px;
}

.profile-link {
    display: inline-block;
    padding: 8px 24px;
    background: #7acacd;
    color: #fff;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
    transition: all 0.3s ease;
}

.profile-link:hover {
    background: #0099cc;
    transform: translateY(-1px);
}

@media (max-width: 768px) {
    .doctor-info-wrapper {
        gap: 15px;
    }
    
    .doctor-avatar {
        width: 50px;
        height: 50px;
    }
    
    .doctor-name {
        font-size: 16px;
    }
    
    .doctor-description {
        font-size: 13px;
    }
}
</style>