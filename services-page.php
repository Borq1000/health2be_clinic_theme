<?php 
/*
Template Name: Страница услуг
*/

get_header(); ?>

<!-- Hero Section -->
<section class="hero-section position-relative">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="row min-vh-80 align-items-center">
            <div class="col-lg-7">
                <div class="hero-content text-white">
                    <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInUp">Вызов врача на дом. Платная скорая помощь.</h1>
                    <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">от 8000 руб. ежедневно 24/7</p>
                    <div class="hero-btns animate__animated animate__fadeInUp animate__delay-2s">
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
</section>

<!-- Main Content -->
<section class="services-content py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Left Column -->
            <div class="col-lg-8">
                <div class="content-card bg-white rounded-4 shadow-sm p-5 mb-4">
                    <h2 class="section-title mb-4">Вызов врача на дом | Платная скорая помощь</h2>
                    
                    <div class="service-info mb-5">
                        <h3 class="h4 mb-4">Когда вызывать врача?</h3>
                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="feature-content">
                                    <p>Если нужна плановая консультация или осмотр, и нет возможности ехать в клинику.</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="feature-content">
                                    <p>Взятие анализов на дому, в том числе анализ крови и мазки из носоглотки</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="feature-content">
                                    <p>Вы заболели, а запись или вызов участкового врача на дом в кратчайшие сроки невозможны.</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="feature-content">
                                    <p>Вам необходимо на дому выполнить УЗИ, ЭКГ, установить монитор АД.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-info mb-5">
                        <h3 class="h4 mb-4">В каком случае требуется вызов скорой помощи?</h3>
                        <div class="feature-list">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="feature-content">
                                    <p>Выезд бригады на дом и взятие анализов в круглосуточном режиме. Все виды анализов. Москва, область, регионы.</p>
                                </div>
                            </div>
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <div class="feature-content">
                                    <p>Состояние пациента носит неплановый характер. Требуется транспортировка в многопрофильную клинику или требуются специалисты интенсивной терапии.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-info mb-5">
                        <h3 class="h4 mb-4">Обследование и процедуры на дому</h3>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="service-box">
                                    <div class="service-box-icon">
                                        <i class="fas fa-heartbeat"></i>
                                    </div>
                                    <h4>ЭКГ</h4>
                                    <p>Диагностика изменений в работе сердца на ранних стадиях</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-box">
                                    <div class="service-box-icon">
                                        <i class="fas fa-stethoscope"></i>
                                    </div>
                                    <h4>УЗИ</h4>
                                    <p>Диагностика органов брюшной полости и малого таза</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="service-box">
                                    <div class="service-box-icon">
                                        <i class="fas fa-vial"></i>
                                    </div>
                                    <h4>Анализы</h4>
                                    <p>Все виды анализов с выездом на дом 24/7</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="service-info mb-5">
                        <h3 class="h4 mb-4">О нашей службе</h3>
                        <div class="service-description">
                            <p>Наша служба скорой медицинской помощи предоставляет высококвалифицированную медицинскую помощь на дому в Москве и Московской области. Мы работаем круглосуточно, без выходных и праздников, чтобы обеспечить вам своевременную медицинскую помощь.</p>
                            
                            <p>В нашей команде работают опытные врачи различных специализаций:</p>
                            <ul class="service-list">
                                <li>Терапевты и педиатры</li>
                                <li>Кардиологи</li>
                                <li>Неврологи</li>
                                <li>Хирурги</li>
                                <li>Реаниматологи</li>
                            </ul>

                            <p>Мы оснащены современным медицинским оборудованием и исполь��уем только сертифицированные препараты. Наши врачи постоянно повышают свою квалификацию и применяют современные методики лечения.</p>

                            <div class="service-highlight mt-4">
                                <h4>Почему выбирают нас:</h4>
                                <ul>
                                    <li>Быстрый приезд бригады (от 30 минут)</li>
                                    <li>Работаем 24/7 без выходных</li>
                                    <li>Современное оборудование</li>
                                    <li>Опытные врачи (стаж от 5 лет)</li>
                                    <li>Выдаем официальные медицинские документы</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-4">
                <div class="contact-card bg-white rounded-4 shadow-sm p-4 sticky-top">
                    <h3 class="h4 mb-4">Вызвать врача</h3>
                    <form class="contact-form">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nameInput" placeholder="Ваше имя" required>
                            <label for="nameInput">Ваше имя</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="phoneInput" placeholder="Телефон" required>
                            <label for="phoneInput">Телефон</label>
                        </div>
                        <div class="form-floating mb-4">
                            <textarea class="form-control" id="messageInput" placeholder="Опишите проблему" style="height: 100px"></textarea>
                            <label for="messageInput">Опишите проблему</label>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 rounded-pill">
                            <i class="fas fa-paper-plane me-2"></i>Отправить заявку
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Advantages Section -->
<section class="advantages-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Наши преимущества</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="advantage-card p-4 bg-white rounded-4 shadow-sm">
                    <div class="d-flex align-items-start">
                        <div class="advantage-icon me-3">
                            <img src="https://health2be.com/wp-content/uploads/vv-nearby.png" alt="Доступность">
                        </div>
                        <div>
                            <h4 class="mb-3">Доступность</h4>
                            <p>Операторы колл центра отвечают в течение 1-2 минут. Врач может приехать уже через 30 минут — 2 часа.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advantage-card p-4 bg-white rounded-4 shadow-sm">
                    <div class="d-flex align-items-start">
                        <div class="advantage-icon me-3">
                            <img src="https://health2be.com/wp-content/uploads/vv-any-time.png" alt="В любое время">
                        </div>
                        <div>
                            <h4 class="mb-3">В любое время</h4>
                            <p>Вызов врачебной бригады возможен круглосуточно. Выездные консультации — Россия, Турция, Тайланд, ЕС, ОАЭ.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advantage-card p-4 bg-white rounded-4 shadow-sm">
                    <div class="d-flex align-items-start">
                        <div class="advantage-icon me-3">
                            <img src="https://health2be.com/wp-content/uploads/we-know.png" alt="Опыт">
                        </div>
                        <div>
                            <h4 class="mb-3">Опыт и аналитика</h4>
                            <p>Ведущие специалисты клиник, включая научных сотрудников и врачей экспертного уровня.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advantage-card p-4 bg-white rounded-4 shadow-sm">
                    <div class="d-flex align-items-start">
                        <div class="advantage-icon me-3">
                            <img src="https://health2be.com/wp-content/uploads/vm-consult.png" alt="Профессионализм">
                        </div>
                        <div>
                            <h4 class="mb-3">Профессионализм</h4>
                            <p>Ведущие специалисты своей области медицины. Кандидаты и доктора наук.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advantage-card p-4 bg-white rounded-4 shadow-sm">
                    <div class="d-flex align-items-start">
                        <div class="advantage-icon me-3">
                            <img src="https://health2be.com/wp-content/uploads/vv-license.png" alt="Лицензия">
                        </div>
                        <div>
                            <h4 class="mb-3">Лицензия</h4>
                            <p>Медицинская клиника с лицензией. Все клиники-партнеры имеют медицинские лицензии.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advantage-card p-4 bg-white rounded-4 shadow-sm">
                    <div class="d-flex align-items-start">
                        <div class="advantage-icon me-3">
                            <img src="https://health2be.com/wp-content/uploads/vv-price.png" alt="Цены">
                        </div>
                        <div>
                            <h4 class="mb-3">Цены от 150 у.е.</h4>
                            <p>Платный вызов врачебной бригады на дом для консультации, анализов, ЭКГ и других услуг.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- When to Call Section -->
<section class="when-to-call py-5">
    <div class="container">
        <h2 class="text-center mb-5">Когда к нам обращаться</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-2 col-sm-4 col-6 text-center">
                <img src="https://health2be.com/wp-content/uploads/vv-headache.png" alt="Головные боли" class="mb-3">
                <p>Головные боли</p>
            </div>
            <div class="col-md-2 col-sm-4 col-6 text-center">
                <img src="https://health2be.com/wp-content/uploads/vv-heart.png" alt="Проблемы с сердцем" class="mb-3">
                <p>Проблемы с сердцем</p>
            </div>
            <div class="col-md-2 col-sm-4 col-6 text-center">
                <img src="https://health2be.com/wp-content/uploads/vv-stomatch.png" alt="Дискомфорт в животе" class="mb-3">
                <p>Дискомф��рт в животе</p>
            </div>
            <div class="col-md-2 col-sm-4 col-6 text-center">
                <img src="https://health2be.com/wp-content/uploads/vv-flue.png" alt="Простуда" class="mb-3">
                <p>Простуда</p>
            </div>
            <div class="col-md-2 col-sm-4 col-6 text-center">
                <img src="https://health2be.com/wp-content/uploads/vv-allergy.png" alt="Аллергия" class="mb-3">
                <p>Аллергия</p>
            </div>
            <div class="col-md-2 col-sm-4 col-6 text-center">
                <img src="https://health2be.com/wp-content/uploads/vv-other.png" alt="Другие проблемы" class="mb-3">
                <p>Другие проблемы со здоровьем</p>
            </div>
            <div class="col-md-2 col-sm-4 col-6 text-center">
                <img src="https://health2be.com/wp-content/uploads/vv-emergency.png" alt="Экстренные случаи" class="mb-3">
                <p>Экстренные случаи</p>
            </div>
        </div>
    </div>
</section>

<!-- How We Help Section -->
<section class="how-we-help py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Как мы помогаем</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="help-step text-center">
                    <div class="step-number mb-3">1</div>
                    <p>Сначала проведём осмотр, зададим вам вопросы и поставим предварительный диагноз.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="help-step text-center">
                    <div class="step-number mb-3">2</div>
                    <p>Потом займёмся облегчением вашего состояния: например, снимем болевой синдром или снизим повышенное артериальное давление.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="help-step text-center">
                    <div class="step-number mb-3">3</div>
                    <p>Расскажем, как Вам лечиться, нужно ли проходить обследование и возьмем необходимые анализы.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5">
    
<div class="container">
        <h2 class="text-center mb-5">Вопросы и ответы</h2>
        <div class="row">
            <div class="col-lg-6">
                <div class="accordion" id="faqAccordion1">
                    <div class="accordion-item mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Вы работаете с экстренными случаями?
                            </button>
                        </h3>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion1">
                            <div class="accordion-body">
                                Да, мы работаем. В таких случаях используются бригады скорой медицинской помощи и реанимационные бригады, которые выезжают к пациенту. Удаленность не имеет значения. Бригады выезжают по Москве и области, а также осуществляют выезды в города России и за границу.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                С какими экстренными ситуациями чаще всего обращаются?
                            </button>
                        </h3>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                            <div class="accordion-body">
                                Кардиология — гипертонический криз, нарушения мозгового кровообращения (инсульт), инфаркты, различные травмы, отравления алкоголем и препаратами для стимуляции сознания (наркотики), резкое ухудшение самочувствие, требующее стационарных условий обследования и лечения.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Сколько стоит вызов врача, от чего зависит цена?
                            </button>
                        </h3>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion1">
                            <div class="accordion-body">
                                Стоимость вызова по Москве стоит от 20 000р. Цена может варьировать в зависимости от времени суток, от удаленности пациента, научных регалий специалиста, который выезжает. Вызов бригады скорой или реанимационной бригады зависит от удаленности пациента и типа бригады, осуществляющей выезд.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion" id="faqAccordion2">
                    <div class="accordion-item mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Может ли врач выписать лист нетрудоспособности (больничный)?
                            </button>
                        </h3>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                            <div class="accordion-body">
                                Если в ходе осмотра и консультации врач примет обоснованное решение, что работа и физические нагрузки для вас противопоказаны в данный момент времени, то он откроет вам больничный (лист нетрудоспособности).
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Какие документы могут потребоваться при вызове врача на дом?
                            </button>
                        </h3>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                            <div class="accordion-body">
                                Для взрослых — паспорт. Данные документов вносятся в меицинскую карту вызова, а также в информированное добровольное согласие на медицинское вмешательство и обработку персональных данных.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                Какие документы оставит врач?
                            </button>
                        </h3>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                            <div class="accordion-body">
                                Врач выпишет бланк с результатами осмотра и планом лечения. Квитанция об оплате.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                                Осуществляем ли мы выезды к наркологическим пациентам?
                            </button>
                        </h3>
                        <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                            <div class="accordion-body">
                                Таких пациентов консультируют врачи — наркологи, если пациент тяжелый то приезжает наркологическая бригада и пациент транспортируется в наркологическую клинику, где им далее занимаются врачи наркологи. Важный момент: мы не осуществляем «прокапывание» данной категории пациентов на дому.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq8">
                                Пациент находится в области. Мы не хотим в районную больницу, вы приедете?
                            </button>
                        </h3>
                        <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion2">
                            <div class="accordion-body">
                                Да, мы приедем. Подберем подходящую клинику вместе с пациентом и родственниками и отвезем. Госпитализация в клинику возможна по каналу ОМС или каналу ПМУ.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="mb-4">24/7 для Вас доступен единый номер</h2>
                <p class="lead mb-4">Специалисты службы поддержки ответят на возможные вопросы и примут заявку</p>
                <button class="btn btn-primary btn-lg me-3" data-bs-toggle="modal" data-bs-target="#callDoctorModal">
                    Вызвать врача
                </button>
            </div>
            <div class="col-lg-4">
                <div class="text-center">
                    <img src="https://health2be.com/wp-content/uploads/we-ll-help-257x257-1.jpg" alt="Мы поможем" class="img-fluid rounded-circle mb-4">
                    <h3 class="h4 mb-3">Телефон</h3>
                    <a href="tel:+74951202332" class="h3 text-primary text-decoration-none">+7 (495) 120 23 32</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
:root {
    --primary: #7acacd;
    --primary-dark: #0099cc;
    --text-dark: #2c3e50;
    --text-light: #6c757d;
    --white: #ffffff;
    --light: #f8f9fa;
    --border-radius: 12px;
    --box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

/* Hero Section */
.hero-section {
    position: relative;
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                url('https://health2be.com/wp-content/uploads/xcall-doctor.jpg.pagespeed.ic.nYQaohu-B3.jpg') no-repeat center center;
    background-size: cover;
    background-attachment: fixed;
}

.min-vh-80 {
    min-height: 80vh;
}

.hero-content {
    position: relative;
    z-index: 2;
}

/* Content Cards */
.content-card {
    border-radius: var(--border-radius);
    transition: transform 0.3s ease;
}

.content-card:hover {
    transform: translateY(-5px);
}

/* Feature List */
.feature-list {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1.5rem;
    background: var(--light);
    border-radius: var(--border-radius);
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateX(10px);
    background: #edf2f7;
}

.feature-icon {
    flex-shrink: 0;
    width: 40px;
    height: 40px;
    background: var(--primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
}

.feature-content p {
    margin: 0;
    color: var(--text-dark);
}

/* Service Boxes */
.service-box {
    text-align: center;
    padding: 2rem;
    background: var(--light);
    border-radius: var(--border-radius);
    transition: all 0.3s ease;
}

.service-box:hover {
    transform: translateY(-5px);
    background: #edf2f7;
}

.service-box-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 1.5rem;
    background: var(--primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--white);
    font-size: 1.5rem;
}

.service-box h4 {
    color: var(--text-dark);
    margin-bottom: 1rem;
    font-size: 1.25rem;
}

.service-box p {
    color: var(--text-light);
    margin: 0;
}

/* Стили для блока описания услуг */
.service-description {
    color: var(--text-dark);
    line-height: 1.6;
}

.service-description p {
    margin-bottom: 1.5rem;
}

.service-list {
    list-style: none;
    padding-left: 1.5rem;
    margin-bottom: 1.5rem;
}

.service-list li {
    position: relative;
    padding-left: 1.5rem;
    margin-bottom: 0.75rem;
}

.service-list li:before {
    content: "•";
    color: var(--primary);
    font-size: 1.5rem;
    position: absolute;
    left: 0;
    top: -0.25rem;
}

.service-highlight {
    background: var(--light);
    padding: 2rem;
    border-radius: var(--border-radius);
    border-left: 4px solid var(--primary);
}

.service-highlight h4 {
    color: var(--text-dark);
    margin-bottom: 1rem;
}

.service-highlight ul {
    list-style: none;
    padding-left: 0;
    margin-bottom: 0;
}

.service-highlight li {
    position: relative;
    padding-left: 1.75rem;
    margin-bottom: 0.75rem;
}

.service-highlight li:last-child {
    margin-bottom: 0;
}

.service-highlight li:before {
    content: "✓";
    color: var(--primary);
    position: absolute;
    left: 0;
    top: 0;
}

/* Contact Form */
.contact-card {
    border-radius: var(--border-radius);
}

.form-floating > .form-control {
    border-radius: 8px;
    border: 1px solid #e2e8f0;
}

.form-floating > .form-control:focus {
    border-color: var(--primary);
    box-shadow: 0 0 0 0.25rem rgba(122, 202, 205, 0.25);
}

.btn-primary {
    background: var(--primary);
    border-color: var(--primary);
    padding: 0.75rem 1.5rem;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background: var(--primary-dark);
    border-color: var(--primary-dark);
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 991px) {
    .hero-content {
        text-align: center;
        padding: 4rem 0;
    }
    
    .contact-card {
        position: static !important;
        margin-top: 2rem;
    }
}

@media (max-width: 767px) {
    .hero-content h1 {
        font-size: 2.5rem;
    }
    
    .feature-item {
        padding: 1rem;
    }
    
    .service-box {
        margin-bottom: 1rem;
    }
}
</style>

<?php get_footer(); ?>