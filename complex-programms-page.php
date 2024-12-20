<?php 
/*
Template Name: Комплексные программы 
*/

get_header(); ?>

<section class="hero-banner compact">
    <div class="hero-image">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="hero-content">
                        <h2 class="text-white fw-bold mb-3 animate__animated animate__fadeInUp">
                            Комплексные обследования
                        </h2>
                        <p class="text-white mb-4 animate__animated animate__fadeInUp animate__delay-1s" style="line-height: 1.8;">
                            Полное обследование организма (чекап)<br>позволет удостовериться в том, что вы полностью <br>здоровы, или найти проблемы, с которыми можно будет <br>разобраться до того, как они станут болезнью.
                        </p>
                        <div class="d-flex align-items-center mb-4 animate__animated animate__fadeInUp animate__delay-1s">
                            <span class="price-badge">от 38 000 руб.</span>
                            <span class="availability-badge ms-3">
                                <i class="fas fa-calendar-check me-1"></i>Check-UP
                            </span>
                        </div>
                        <div class="hero-buttons animate__animated animate__fadeInUp animate__delay-2s">
                            <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#checkupModal">
                                <i class="fas fa-clipboard-check me-2"></i>Записаться на Check-UP
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

<!---- CHECKUP INFO -->
<section class="checkup-info py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="section-title fw-bold mb-4">Что такое Check-Up?</h2>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="info-card h-100 p-4">
                    <h3 class="h4 mb-3">Это обследование организма</h3>
                    <p class="mb-0">Которое Вы проходите, чтобы узнать больше о своем здоровье</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-card h-100 p-4">
                    <h3 class="h4 mb-3">Check-up позволяет</h3>
                    <p class="mb-0">своевременно диагностировать или исключить заболевания, которые могут протекать без жалоб и плохого самочувствия (безсимптомно).</p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="info-card h-100 p-4">
                    <h3 class="h4 mb-3">Результат check-up —</h3>
                    <p class="mb-0">это медицинское заключение о состоянии здоровья, выявленных отклонениях от нормы, а также рекомендации по лечению и профилактических методиках</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-card h-100 p-4">
                    <h3 class="h4 mb-3">Международные стандарты</h3>
                    <p class="mb-0">Рекомендовано проходить медицинское обследование ежегодно</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--exam body-->
<section class="exam-steps py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="section-title fw-bold mb-4">Как проходит обследование</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="steps-wrapper position-relative">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="step-card text-center">
                                <div class="step-number mb-4">1</div>
                                <div class="step-icon mb-4">
                                    <i class="fas fa-calendar-check fa-2x"></i>
                                </div>
                                <p class="step-text">Согласовать дату и записаться на прием к врачу</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="step-card text-center">
                                <div class="step-number mb-4">2</div>
                                <div class="step-icon mb-4">
                                    <i class="fas fa-user-md fa-2x"></i>
                                </div>
                                <p class="step-text">Доктор проведет консультацию, пообщается с вами. Вместе вы составите подходящую программу обследования</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="step-card text-center">
                                <div class="step-number mb-4">3</div>
                                <div class="step-icon mb-4">
                                    <i class="fas fa-file-medical fa-2x"></i>
                                </div>
                                <p class="step-text">Получить заключение на почту или прийти на повторный прием и обсудить результаты с врачом</p>
                            </div>
                        </div>
                    </div>

                    <div class="steps-connection d-none d-md-block"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--what in-->
<section class="whatin-section py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="section-title fw-bold mb-4">Что входит?</h2>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-3 text-center mb-4 mb-lg-0">
                <div class="whatin-image">
                    <img src="/wp-content/uploads/2024/12/chekup-icon.png" alt="Список услуг" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="services-list">
                    <ul class="list-unstyled mb-0">
                        <li class="service-item">
                            <i class="fas fa-user-md me-3"></i>
                            Консультация терапевта
                        </li>
                        <li class="service-item">
                            <i class="fas fa-stethoscope me-3"></i>
                            Консультации специалистов
                        </li>
                        <li class="service-item">
                            <i class="fas fa-flask me-3"></i>
                            Лабораторные анализы
                        </li>
                        <li class="service-item">
                            <i class="fas fa-x-ray me-3"></i>
                            УЗИ, КТ, МРТ – исследования
                        </li>
                        <li class="service-item">
                            <i class="fas fa-users me-3"></i>
                            Консилиумы специалистов
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="whatin-info">
                    <div class="service-note mb-4">
                        <i class="fas fa-info-circle me-2"></i>
                        <p class="mb-0">Все исследования и консультации специалистов пошагово согласуются с Вами</p>
                    </div>

                    <button class="btn btn-primary w-100 popmake-5887 pum-trigger">
                        <i class="fas fa-calendar-check me-2"></i>
                        Записаться
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!--checkups examples-->
<section class="checkup-examples py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 class="section-title fw-bold mb-4">Примеры CHECK-UP</h2>
            </div>
        </div>

        <div class="row g-4">
            <!-- Пример 1 -->
            <div class="col-lg-4">
                <div class="example-card h-100">
                    <div class="example-image">
                        <img src="/wp-content/uploads/2024/12/woman-35.png" class="img-fluid" alt="Женщина 35">
                    </div>
                    <div class="example-content">
                        <h3 class="example-title">ПАЦИЕНТ</h3>
                        <ul class="patient-info">
                            <li><i class="fas fa-female me-2"></i>Женщина 36 лет</li>
                            <li><i class="fas fa-smoking me-2"></i>Курит в течение 7 лет</li>
                            <li><i class="fas fa-school me-2"></i>Работает в школе</li>
                            <li><i class="fas fa-history me-2"></i>У отца в 56 лет диагностирован рак предстательной железы</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Пример 2 -->
            <div class="col-lg-8">
                <div class="example-card h-100">
                    <h3 class="example-title">СОСТАВ CHECK-UP</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkup-list">
                                <h4 class="list-title">
                                    <i class="fas fa-clipboard-list me-2"></i>
                                    Основные назначения
                                </h4>
                                <ul class="checkup-items">
                                    <li><i class="fas fa-check me-2"></i>Консультация терапевта</li>
                                    <li><i class="fas fa-check me-2"></i>Клинический анализ крови</li>
                                    <li><i class="fas fa-check me-2"></i>Клинический анализ мочи</li>
                                    <li><i class="fas fa-check me-2"></i>Биохимический анализ крови</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkup-list">
                                <h4 class="list-title">
                                    <i class="fas fa-clipboard-check me-2"></i>
                                    Дополнительные назначения
                                </h4>
                                <ul class="checkup-items">
                                    <li><i class="fas fa-check me-2"></i>Анализ крови на RW, ВИЧ, гепатиты</li>
                                    <li><i class="fas fa-check me-2"></i>Рентген органов грудной клетки</li>
                                    <li><i class="fas fa-check me-2"></i>Гастроскопия</li>
                                    <li><i class="fas fa-check me-2"></i>УЗИ органов брюшной полости</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Пример 3 -->
            <div class="col-lg-4">
                <div class="example-card h-100">
                    <div class="example-image">
                        <img src="/wp-content/uploads/2024/12/man-20.png" class="img-fluid" alt="Мужчина 20">
                    </div>
                    <div class="example-content">
                        <h3 class="example-title">ПАЦИЕНТ</h3>
                        <ul class="patient-info">
                            <li><i class="fas fa-male me-2"></i>Мужчина 25 лет</li>
                            <li><i class="fas fa-smoking me-2"></i>Курит в течение 6 лет</li>
                            <li><i class="fas fa-check me-2"></i>Чувствует себя здоровым</li>
                            <li><i class="fas fa-plane me-2"></i>Много путешествует</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Пример 4 -->
            <div class="col-lg-8">
                <div class="example-card h-100">
                    <h3 class="example-title">СОСТАВ CHECK-UP</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkup-list">
                                <h4 class="list-title">
                                    <i class="fas fa-clipboard-list me-2"></i>
                                    Основные назначения
                                </h4>
                                <ul class="checkup-items">
                                    <li><i class="fas fa-check me-2"></i>Консультация терапевта</li>
                                    <li><i class="fas fa-check me-2"></i>Клинический анализ крови</li>
                                    <li><i class="fas fa-check me-2"></i>Клинический анализ мочи</li>
                                    <li><i class="fas fa-check me-2"></i>Биохимический анализ крови</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkup-list">
                                <h4 class="list-title">
                                    <i class="fas fa-clipboard-check me-2"></i>
                                    Дополнительные назначения
                                </h4>
                                <ul class="checkup-items">
                                    <li><i class="fas fa-check me-2"></i>Анализ крови на RW, ВИЧ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Пример 5 -->
            <div class="col-lg-4">
                <div class="example-card h-100">
                    <div class="example-image">
                        <img src="/wp-content/uploads/2024/12/woman-60.png" class="img-fluid" alt="Женщина 60">
                    </div>
                    <div class="example-content">
                        <h3 class="example-title">ПАЦИЕНТ</h3>
                        <ul class="patient-info">
                            <li><i class="fas fa-female me-2"></i>Женщина 68 лет</li>
                            <li><i class="fas fa-times me-2"></i>Не курит</li>
                            <li><i class="fas fa-wheelchair me-2"></i>Физическая активность снижена</li>
                            <li><i class="fas fa-heart me-2"></i>Гипертоническая болезнь</li>
                            <li><i class="fas fa-legs me-2"></i>Варикозное расширение вен н/конечностей</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Пример 6 -->
            <div class="col-lg-8">
                <div class="example-card h-100">
                    <h3 class="example-title">СОСТАВ CHECK-UP</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkup-list">
                                <h4 class="list-title">
                                    <i class="fas fa-clipboard-list me-2"></i>
                                    Основные назначения
                                </h4>
                                <ul class="checkup-items">
                                    <li><i class="fas fa-check me-2"></i>Консультация терапевта</li>
                                    <li><i class="fas fa-check me-2"></i>Консультация хирурга</li>
                                    <li><i class="fas fa-check me-2"></i>Клинический анализ крови</li>
                                    <li><i class="fas fa-check me-2"></i>Клинический анализ мочи</li>
                                    <li><i class="fas fa-check me-2"></i>Биохимический анализ крови</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkup-list">
                                <h4 class="list-title">
                                    <i class="fas fa-clipboard-check me-2"></i>
                                    Дополнительные назначения
                                </h4>
                                <ul class="checkup-items">
                                    <li><i class="fas fa-check me-2"></i>Гормоны щитовидной железы</li>
                                    <li><i class="fas fa-check me-2"></i>ЭКГ в нагрузке</li>
                                    <li><i class="fas fa-check me-2"></i>ЭХО-КГ</li>
                                    <li><i class="fas fa-check me-2"></i>КТ органов грудной клетки</li>
                                    <li><i class="fas fa-check me-2"></i>Онкомаркеры</li>
                                    <li><i class="fas fa-check me-2"></i>Консультация гинеколога</li>
                                    <li><i class="fas fa-check me-2"></i>Доплерография сосудов</li>
                                    <li><i class="fas fa-check me-2"></i>Маммография</li>
                                    <li><i class="fas fa-check me-2"></i>УЗИ органов брюшной полости</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- faq -->
<section class="faq-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2>Вопросы и ответы</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="faq-column">
                    <div class="vc_toggle vc_toggle_round vc_toggle_color_turquoise vc_toggle_color_inverted vc_toggle_size_md">
                        <div class="vc_toggle_title"><h4>Зачем вообще нужен Check-up?</h4><i class="vc_toggle_icon"></i></div>
                        <div class="vc_toggle_content"><p>Обследование необходимо для того чтобы получить информацию, что Вы здоровы. Обследование необходимо для диагностирования факторов риска и эпизодов начальных отклонений от нормальных значений. . Для человека с&nbsp;установленными диагнозами – это&nbsp; мониторинг медицинских показателей в динамике и профилактика &nbsp;осложнений.</p></div>
                    </div>
                    <div class="vc_toggle vc_toggle_round vc_toggle_color_turquoise vc_toggle_color_inverted vc_toggle_size_md">
                        <div class="vc_toggle_title"><h4>Почему у вас нет универсального набора обследований, подходящего для всех, который я могу регулярно проходить?</h4><i class="vc_toggle_icon"></i></div>
                        <div class="vc_toggle_content"><p>В различных медицинских исследованиях демонстрируется важность регулярных обследований организма (скрининга). Абсолютно каждому вне &nbsp;зависимости от&nbsp;пола и&nbsp;возраста, необходимы регулярные обследования организма. Сложно&nbsp; учесть множество разных параметров и&nbsp;создать единую программу обследования и диагностики для всех. Работа с&nbsp;каждым пациентом проводится индивидуально, на основе данных анамнеза и озвученных пожеланий, акцентов.</p></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="faq-column">
                    <div class="vc_toggle vc_toggle_round vc_toggle_color_turquoise vc_toggle_color_inverted vc_toggle_size_md">
                        <div class="vc_toggle_title"><h4>Я прошел обследование, что дальше?</h4><i class="vc_toggle_icon"></i></div>
                        <div class="vc_toggle_content"><p>Вы получите рекомендации от врача по ведению здорового образа жизни, получите ответы на интересующие Вас вопросы о здоровье и его поддержании. Итогом обследования может быть и рекомендации по проведению дополнительных исследований и консультаций.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- cta -->

<section class="cta-section">
    <div class="container">
        <div class="text-wrapper text-center">
            <p class="main-text">По результатам проведенного обследования мы предложим Вам индивидуальную программу годового обслуживания</p>
            <p class="sub-text">Выбирайте понравившуюся Клинику, удобный для обследования день и начинайте заботу о себе с программы Check Up Обследование от Health2Be.</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>