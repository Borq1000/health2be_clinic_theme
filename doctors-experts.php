<?php
/*
Template Name: Врачи эксперты
*/

get_header(); ?>

<section class="page-subheader">
    <div class="container">
        <h2 class="page-title"><?php the_title(); ?></h2>
        <ul class="breadcrumbs-list">
            <?php
            if (function_exists('bcn_display')) {
                bcn_display();
            }
            ?>
        </ul>
    </div>
</section>

<section class="doctors-section py-5">
    <div class="container">
        <!-- Фильтры специальностей -->
        <div class="specialty-filters mb-4">
            <ul class="nav nav-pills justify-content-center flex-wrap" id="doctorsTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="allergologiya-tab" data-bs-toggle="pill" data-bs-target="#filter-allergologiya" type="button">
                        Аллергология
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="infektsiologiya-tab" data-bs-toggle="pill" data-bs-target="#filter-infektsiologiya" type="button">
                        Инфекциология
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="nevrologiya-tab" data-bs-toggle="pill" data-bs-target="#filter-nevrologiya" type="button">
                        Неврология
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="nejrohirurgiya-tab" data-bs-toggle="pill" data-bs-target="#filter-nejrohirurgiya" type="button">
                        Нейрохирургия
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pediatriya-tab" data-bs-toggle="pill" data-bs-target="#filter-pediatriya" type="button">
                        Педиатрия
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="plasticheskaya-hirurgiya-tab" data-bs-toggle="pill" data-bs-target="#filter-plasticheskaya-hirurgiya" type="button">
                        Пластическая хирургия
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pulmonologiya-tab" data-bs-toggle="pill" data-bs-target="#filter-pulmonologiya" type="button">
                        Пульмонология
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="urologiya-tab" data-bs-toggle="pill" data-bs-target="#filter-urologiya" type="button">
                        Урология
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="epileptologiya-tab" data-bs-toggle="pill" data-bs-target="#filter-epileptologiya" type="button">
                        Эпилептология
                    </button>
                </li>
            </ul>
        </div>

        <!-- Контент специальностей -->
        <div class="tab-content" id="doctorsTabContent">
            <!-- Аллергология -->
            <div class="tab-pane fade show active" id="filter-allergologiya" role="tabpanel">
                <div class="doctors-grid">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="doctor-card">
                                <div class="doctor-image">
                                    <img src="/wp-content/uploads/2024/12/knn.jpg" alt="Княжеская Надежда Павловна" class="img-fluid">
                                    <div class="doctor-overlay">
                                        <a href="/doktor-knyazheskaya-nadezhda-pavlovna/" class="btn-details">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="doctor-info">
                                    <h3 class="doctor-name">Княжеская Надежда Павловна</h3>
                                    <p class="doctor-specialty">Пульмонолог, Аллерголог</p>
                                    <a href="/doktor-knyazheskaya-nadezhda-pavlovna/" class="btn btn-outline-primary btn-sm">
                                        Подробная информация
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Инфекциология -->
            <div class="tab-pane fade" id="filter-infektsiologiya" role="tabpanel">
                <div class="doctors-grid">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="doctor-card">
                                <div class="doctor-image">
                                    <img src="/wp-content/uploads/2024/12/meksina.jpg" alt="Мескина Елена Руслановна" class="img-fluid">
                                    <div class="doctor-overlay">
                                        <a href="/doktor-meskina-elena-ruslanovna/" class="btn-details">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="doctor-info">
                                    <h3 class="doctor-name">Мескина Елена Руслановна</h3>
                                    <p class="doctor-specialty">Педиатр, инфекционист</p>
                                    <a href="/doktor-meskina-elena-ruslanovna/" class="btn btn-outline-primary btn-sm">
                                        Подробная информация
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Неврология -->
            <div class="tab-pane fade" id="filter-nevrologiya" role="tabpanel">
                <div class="doctors-grid">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="doctor-card">
                                <div class="doctor-image">
                                    <img src="/wp-content/uploads/2024/12/semenov.jpg" alt="Семенов Роман Валерьевич" class="img-fluid">
                                    <div class="doctor-overlay">
                                        <a href="/doktor-semenov-roman-valerevich/" class="btn-details">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="doctor-info">
                                    <h3 class="doctor-name">Семенов Роман Валерьевич</h3>
                                    <p class="doctor-specialty">Невролог</p>
                                    <a href="/doktor-semenov-roman-valerevich/" class="btn btn-outline-primary btn-sm">
                                        Подробная информация
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Нейрохирургия -->
            <div class="tab-pane fade" id="filter-nejrohirurgiya" role="tabpanel">
                <div class="doctors-grid">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="doctor-card">
                                <div class="doctor-image">
                                    <img src="/wp-content/uploads/2024/12/spirin.jpg" alt="Спирин Дмитрий Сергеевич" class="img-fluid">
                                    <div class="doctor-overlay">
                                        <a href="/doktor-spirin-dmitrij-sergeevich/" class="btn-details">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="doctor-info">
                                    <h3 class="doctor-name">Спирин Дмитрий Сергеевич</h3>
                                    <p class="doctor-specialty">К.м.н., нейрохирург</p>
                                    <a href="/doktor-spirin-dmitrij-sergeevich/" class="btn btn-outline-primary btn-sm">
                                        Подробная информация
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="doctor-card">
                                <div class="doctor-image">
                                    <img src="/wp-content/uploads/2024/12/tsarenko-s-v-270x285-1.jpg" alt="Царенко Сергей Васильевич" class="img-fluid">
                                    <div class="doctor-overlay">
                                        <a href="/doktor-carenko-sergej-vasilevich/" class="btn-details">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="doctor-info">
                                    <h3 class="doctor-name">Царенко Сергей Васильевич</h3>
                                    <p class="doctor-specialty">Анестезиолог-реаниматолог</p>
                                    <a href="/doktor-carenko-sergej-vasilevich/" class="btn btn-outline-primary btn-sm">
                                        Подробная информация
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Педиатрия -->
            <div class="tab-pane fade" id="filter-pediatriya" role="tabpanel">
                <div class="doctors-grid">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="doctor-card">
                                <div class="doctor-image">
                                    <img src="/wp-content/uploads/2024/12/meksina.jpg" alt="Мескина Елена Руслановна" class="img-fluid">
                                    <div class="doctor-overlay">
                                        <a href="/doktor-meskina-elena-ruslanovna/" class="btn-details">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="doctor-info">
                                    <h3 class="doctor-name">Мескина Елена Руслановна</h3>
                                    <p class="doctor-specialty">Педиатр, инфекционист</p>
                                    <a href="/doktor-meskina-elena-ruslanovna/" class="btn btn-outline-primary btn-sm">
                                        Подробная информация
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Пластическая хирургия -->
            <div class="tab-pane fade" id="filter-plasticheskaya-hirurgiya" role="tabpanel">
                <div class="doctors-grid">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="doctor-card">
                                <div class="doctor-image">
                                    <img src="/wp-content/uploads/2024/12/chkadua-t-z-285x285-1.jpg" alt="Чкадуа Тамара Зурабовна" class="img-fluid">
                                    <div class="doctor-overlay">
                                        <a href="/doktor-chkadua-tamara-zurabovna/" class="btn-details">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="doctor-info">
                                    <h3 class="doctor-name">Чкадуа Тамара Зурабовна</h3>
                                    <p class="doctor-specialty">Пластический хирург</p>
                                    <a href="/doktor-chkadua-tamara-zurabovna/" class="btn btn-outline-primary btn-sm">
                                        Подробная информация
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Пульмонология -->
            <div class="tab-pane fade" id="filter-pulmonologiya" role="tabpanel">
                <div class="doctors-grid">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="doctor-card">
                                <div class="doctor-image">
                                    <img src="/wp-content/uploads/2024/12/knn.jpg" alt="Княжеская Надежда Павловна" class="img-fluid">
                                    <div class="doctor-overlay">
                                        <a href="/doktor-knyazheskaya-nadezhda-pavlovna/" class="btn-details">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="doctor-info">
                                    <h3 class="doctor-name">Княжеская Надежда Павловна</h3>
                                    <p class="doctor-specialty">Пульмонолог, Аллерголог</p>
                                    <a href="/doktor-knyazheskaya-nadezhda-pavlovna/" class="btn btn-outline-primary btn-sm">
                                        Подробная информация
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Урология -->
            <div class="tab-pane fade" id="filter-urologiya" role="tabpanel">
                <div class="doctors-grid">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="doctor-card">
                                <div class="doctor-image">
                                    <img src="/wp-content/uploads/2024/12/denshikov-m-b-285x285-1.jpg" alt="Денщиков Михаил Борисович" class="img-fluid">
                                    <div class="doctor-overlay">
                                        <a href="/doktor-denshhikov-mihail-borisovich/" class="btn-details">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="doctor-info">
                                    <h3 class="doctor-name">Денщиков Михаил Борисович</h3>
                                    <p class="doctor-specialty">Уролог</p>
                                    <a href="/doktor-denshhikov-mihail-borisovich/" class="btn btn-outline-primary btn-sm">
                                        Подробная информация
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Эпилептология -->
            <div class="tab-pane fade" id="filter-epileptologiya" role="tabpanel">
                <div class="doctors-grid">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="doctor-card">
                                <div class="doctor-image">
                                    <img src="/wp-content/uploads/2024/12/prof-elger-275x285-1.jpg" alt="Профессор Эльгер" class="img-fluid">
                                    <div class="doctor-overlay">
                                        <a href="/professor-elger/" class="btn-details">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="doctor-info">
                                    <h3 class="doctor-name">Профессор Эльгер</h3>
                                    <p class="doctor-specialty">Эпилептолог</p>
                                    <a href="/professor-elger/" class="btn btn-outline-primary btn-sm">
                                        Подробная информация
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>