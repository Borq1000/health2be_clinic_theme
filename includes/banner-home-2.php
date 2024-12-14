<?php
/**
 * Main Top Banner Template
 */
?>
<section class="hero-banner">
    <div class="container-fluid p-0">
        <div class="hero-wrapper">
            <div class="hero-content">
                <div class="container position-relative">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="hero-text">
                                <h1 class="hero-title">Международный уровень медицинской помощи</h1>
                                <p class="hero-subtitle">Организация лечения в ведущих клиниках России и мира</p>
                                
                                <div class="hero-features">
                                    <div class="feature-item">
                                        <i class="icon icon-24-7"></i>
                                        <span>Поддержка 24/7</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="icon icon-global"></i>
                                        <span>Международная экспертиза</span>
                                    </div>
                                    <div class="feature-item">
                                        <i class="icon icon-doctor"></i>
                                        <span>Личный врач-координатор</span>
                                    </div>
                                </div>

                                <div class="hero-search mt-4">
                                    <form class="search-form" action="#" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Поиск клиник, врачей или услуг">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="icon icon-search"></i>
                                                Найти
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="hero-actions mt-4">
                                    <a href="#" class="btn btn-outline-light btn-lg me-3">
                                        <i class="icon icon-phone"></i>
                                        Заказать звонок
                                    </a>
                                    <a href="#" class="btn btn-primary btn-lg">
                                        <i class="icon icon-consultation"></i>
                                        Консультация
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <!-- Здесь будет фоновое изображение через CSS -->
            </div>
        </div>
    </div>
</section>

<style>
.hero-banner {
    position: relative;
    overflow: hidden;
    background-color: #f8f9fa;
}

.hero-wrapper {
    position: relative;
    min-height: 600px;
    display: flex;
    align-items: center;
}

.hero-image {
    position: absolute;
    top: 0;
    right: 0;
    width: 55%;
    height: 100%;
    background: url('https://devvspace.ru/wp-content/uploads/2024/12/med_tourizm.jpg') no-repeat center center;
    background-size: cover;
    clip-path: polygon(10% 0, 100% 0%, 100% 100%, 0% 100%);
}


.hero-content {
    position: relative;
    width: 100%;
    z-index: 2;
    padding: 80px 0;
}

.hero-text {
    position: relative;
    padding-right: 20px;
}

.hero-title {
    font-size: 3.5rem;
    font-weight: 700;
    color: #00b5e8;
    line-height: 1.2;
    margin-bottom: 20px;
}

.hero-subtitle {
    font-size: 1.5rem;
    color: #666;
    margin-bottom: 30px;
}

.hero-features {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 30px;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.9);
    padding: 10px 20px;
    border-radius: 50px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.feature-item i {
    font-size: 24px;
    color: #00b5e8;
}

.feature-item span {
    font-size: 1rem;
    color: #333;
    font-weight: 500;
}

.hero-search .form-control {
    height: 60px;
    border-radius: 30px;
    padding: 0 30px;
    font-size: 1.1rem;
    border: none;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
}

.hero-search .btn {
    height: 60px;
    padding: 0 30px;
    border-radius: 30px;
    font-size: 1.1rem;
    background: #00b5e8;
    border: none;
}

.hero-search .btn i {
    margin-right: 10px;
}

.hero-actions .btn {
    padding: 15px 30px;
    border-radius: 30px;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.hero-actions .btn i {
    font-size: 20px;
}

.btn-primary {
    background: #00b5e8;
    border-color: #00b5e8;
}

.btn-outline-light {
    border-color: #00b5e8;
    color: #00b5e8;
}

@media (max-width: 1200px) {
    .hero-title {
        font-size: 3rem;
    }
}

@media (max-width: 991px) {
    .hero-image {
        width: 100%;
        opacity: 0.15;
        clip-path: none;
    }

    .hero-text {
        text-align: center;
        padding-right: 0;
    }

    .hero-features {
        justify-content: center;
    }

    .hero-actions {
        justify-content: center;
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }
}

@media (max-width: 768px) {
    .hero-wrapper {
        min-height: 500px;
    }

    .hero-title {
        font-size: 2.5rem;
    }

    .hero-subtitle {
        font-size: 1.2rem;
    }

    .hero-content {
        padding: 60px 0;
    }
}

@media (max-width: 576px) {
    .hero-title {
        font-size: 2rem;
    }

    .feature-item {
        width: 100%;
        justify-content: center;
    }
}
</style>
