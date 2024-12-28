<?php
/*
Template Name: Контакты
*/

get_header(); ?>

<main class="contacts-page py-5">
    <div class="container">
        <h1>Контакты</h1>
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form">
                    <h3 class="mb-4">Напишите нам</h3>
                    <?php echo do_shortcode('[contact-form-7 id="85ed683" title="Напишите нам - контакты"]');  ?>
</div>
            </div>

            <!-- Правая колонка с информацией -->
            <div class="col-lg-4">
                <!-- Блок с вопросами -->
                <div class="info-block mb-4">
                    <h2>ВОЗНИКЛИ ВОПРОСЫ?</h2>
                    <p>Звоните нам по телефону или пишите на <a href="mailto:info@health2be.com">электронную почту</a></p>
                </div>

                <!-- Блок с поддержкой -->
                <div class="support-block mb-4">
                    <h3>Круглосуточная поддержка Health2Be:</h3>
                    <div class="phone-number">
                        <a href="tel:+74951202332">+7 (495) 120 23 32</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-4">
                <!-- Табы с информацией -->
                <div class="nav-tabs-wrapper">
                    <div class="nav nav-tabs" id="transportTabs" role="tablist">
                        <button class="nav-link active" id="car-tab" data-bs-toggle="tab" data-bs-target="#car" type="button" role="tab" aria-controls="car" aria-selected="true">
                            <span>Я на машине</span>
                        </button>
                        <button class="nav-link" id="metro-tab" data-bs-toggle="tab" data-bs-target="#metro" type="button" role="tab" aria-controls="metro" aria-selected="false">
                            <span>Я на метро</span>
                        </button>
                    </div>
                    <div class="tab-content" id="transportTabsContent">
                        <div class="tab-pane fade show active" id="car" role="tabpanel" aria-labelledby="car-tab">
                            <div class="info-card">
                                <p>Клиника расположена не далеко от метро Юго-Западная, имеет общую с жилым комплексом парковку, въезд через шлагбаум. В редких случаях, парковка для автомобилей затруднительна из-за большого количества посетителей.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="metro" role="tabpanel" aria-labelledby="metro-tab">
                            <div class="info-card">
                                <p>Как пройти от метро Юго-Западная:<br>
                                Из метро первый вагон из центра, налево на улицу, далее — по улице 26 Бакинских комиссаров 250 метров в сторону Ленинского проспекта, по правой стороне можно увидеть отдельно стоящее здание медицинского центра — Вы пришли.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Часы работы -->
                <div class="schedule-block">
                    <h3>Часы работы клиники</h3>
                    <table class="schedule-table">
                        <tr>
                            <td>Пн-Пт:</td>
                            <td>с 9:00 до 21:00</td>
                        </tr>
                        <tr>
                            <td>Сб:</td>
                            <td>с 9:00 до 19:00</td>
                        </tr>
                        <tr>
                            <td>Вс:</td>
                            <td>с 10:00 до 17:00</td>
                        </tr>
                    </table>
                    <p class="medical-hours">Часы работы медицинской службы – круглосуточно</p>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- 3D тур -->
                <div class="tour-image">
                    <a href="https://zoon.ru/msk/medical/meditsinskij_tsentr_yunimed-s_na_metro_yugo-zapadnaya/3d_tour/" target="_blank">
                        <img src="https://health2be.com/wp-content/uploads/x3d-unimed.jpg.pagespeed.ic.ZsJpm5O6Eb.jpg" alt="3D-Тур по клинике" class="img-fluid rounded">
                    </a>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="map-container">
                    <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8020.393019444442!2d37.4824384818353!3d55.660354041223954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54d0ac3078907%3A0x4bf16fd03f0f9de5!2sUlitsa+26+Bakinskikh+Komissarov%2C+11%2C+Moskva%2C+Russia%2C+119571!5e0!3m2!1sen!2sua!4v1536421737769" width="100%" height="400" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>