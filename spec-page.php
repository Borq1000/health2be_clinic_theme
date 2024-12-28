<?php 
/*
Template Name: Специализации
*/

get_header();  ?>

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

<section class="flat-section">
    <div class="container">
        <div class="row">
            <!-- Группа А -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="specialty-card">
                    <span class="letter-title">А</span>
                    <ul class="specialty-list">
                        <li><a href="/departments-allergologiya/">Аллергология</a></li>
                    </ul>
                </div>
            </div>

            <!-- Группа Г -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="specialty-card">
                    <span class="letter-title">Г</span>
                    <ul class="specialty-list">
                        <li><a href="/departments-gastroenterologiya/">Гастроэнтерология</a></li>
                        <li><a href="/departments-gepatologiya/">Гепатология</a></li>
                        <li><a href="/departments-ginekologiya/">Гинекология</a></li>
                    </ul>
                </div>
            </div>

            <!-- Группа Д -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="specialty-card">
                    <span class="letter-title">Д</span>
                    <ul class="specialty-list">
                        <li><a href="/departments-dermatologiya/">Дерматология</a></li>
                        <li><a href="/departments-diagnostika">Диагностика</a></li>
                    </ul>
                </div>
            </div>

            <!-- Группа К -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="specialty-card">
                    <span class="letter-title">К</span>
                    <ul class="specialty-list">
                        <li><a href="/departments-kardiologiya/">Кардиология</a></li>
                        <li><a href="/departments-kosmetologiya/">Косметология</a></li>
                    </ul>
                </div>
            </div>

            <!-- Группа М -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="specialty-card">
                    <span class="letter-title">М</span>
                    <ul class="specialty-list">
                        <li><a href="/departments-mikrohirurgiya/">Микрохирургия</a></li>
                    </ul>
                </div>
            </div>

            <!-- Группа Н -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="specialty-card">
                    <span class="letter-title">Н</span>
                    <ul class="specialty-list">
                        <li><a href="/departments-nevrologiya/">Неврология</a></li>
                        <li><a href="/departments-nejrohirurgiya/">Нейрохирургия</a></li>
                        <li><a href="/departments-nefrologiya/">Нефрология</a></li>
                    </ul>
                </div>
            </div>

            <!-- Группа О -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="specialty-card">
                    <span class="letter-title">О</span>
                    <ul class="specialty-list">
                        <li><a href="/departments-obshhaya-hirurgiya/">Общая хирургия</a></li>
                        <li><a href="/departments-onkologiya/">Онкология</a></li>
                        <li><a href="/departments-onkourologiya/">Онкоурология</a></li>
                    </ul>
                </div>
            </div>

            <!-- Группа П -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="specialty-card">
                    <span class="letter-title">П</span>
                    <ul class="specialty-list">
                        <li><a href="/departments-plasticheskaya-hirurgiya/">Пластическая хирургия</a></li>
                        <li><a href="/departments-proktologiya-koloproktologiya/">Проктология (колопроктология)</a></li>
                        <li><a href="/departments-pulmonologiya/">Пульмонология</a></li>
                    </ul>
                </div>
            </div>

            <!-- Группа Р -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="specialty-card">
                    <span class="letter-title">Р</span>
                    <ul class="specialty-list">
                        <li><a href="/departments-revmatologiya/">Ревматология</a></li>
                    </ul>
                </div>
            </div>

            <!-- Группа С -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="specialty-card">
                    <span class="letter-title">С</span>
                    <ul class="specialty-list">
                        <li><a href="/departments-serdechno-sosudistaya-hirurgiya/">Сердечно-сосудистая хирургия</a></li>
                    </ul>
                </div>
            </div>

            <!-- Группа Т -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="specialty-card">
                    <span class="letter-title">Т</span>
                    <ul class="specialty-list">
                        <li><a href="/departments-terapiya/">Терапия</a></li>
                        <li><a href="/departments-torakalnaya-hirurgiya/">Торакальная хирургия</a></li>
                        <li><a href="/departments-travmatologiya-i-ortopediya/">Травматология и ортопедия</a></li>
                    </ul>
                </div>
            </div>

            <!-- Группа У -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="specialty-card">
                    <span class="letter-title">У</span>
                    <ul class="specialty-list">
                        <li><a href="/urologiya/">Урология</a></li>
                    </ul>
                </div>
            </div>

            <!-- Группа Э -->
            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                <div class="specialty-card">
                    <span class="letter-title">Э</span>
                    <ul class="specialty-list">
                        <li><a href="/endokrinologiya/">Эндокринология</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
    
<?php get_footer(); ?>