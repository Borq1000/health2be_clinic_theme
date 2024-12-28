// FAQ Toggle Functionality
document.addEventListener('DOMContentLoaded', function () {
    const toggles = document.querySelectorAll('.vc_toggle_title');

    toggles.forEach(toggle => {
        toggle.addEventListener('click', function () {
            const parent = this.closest('.vc_toggle');
            const content = parent.querySelector('.vc_toggle_content');

            // Close all other toggles
            document.querySelectorAll('.vc_toggle').forEach(item => {
                if (item !== parent && item.classList.contains('vc_toggle_active')) {
                    item.classList.remove('vc_toggle_active');
                    item.querySelector('.vc_toggle_content').style.display = 'none';
                }
            });

            // Toggle current item
            parent.classList.toggle('vc_toggle_active');

            if (parent.classList.contains('vc_toggle_active')) {
                content.style.display = 'block';
            } else {
                content.style.display = 'none';
            }
        });
    });

    // Инициализация переключателей для feature-content
    const featureContents = document.querySelectorAll('.feature-content');
    
    featureContents.forEach(content => {
        content.addEventListener('click', function() {
            // Закрываем все остальные активные блоки
            featureContents.forEach(other => {
                if (other !== content && other.classList.contains('active')) {
                    other.classList.remove('active');
                }
            });
            
            // Переключаем текущий блок
            this.classList.toggle('active');
        });
    });

    // Hero Banner Image Rotation
    function initHeroBanner() {
        const slider = document.querySelector('.hero-banner');
        if (!slider) return;

        const slides = slider.querySelectorAll('.slide');
        const prevBtn = slider.querySelector('.slide-nav.prev');
        const nextBtn = slider.querySelector('.slide-nav.next');
        const heroTitle = slider.querySelector('.hero-title');
        const heroSubtitle = slider.querySelector('.hero-subtitle');

        if (!slides.length || !heroTitle || !heroSubtitle) return;

        let currentSlide = 0;
        let touchStartX = 0;
        let touchEndX = 0;

        // Функция обновления слайда
        function updateSlide(nextSlide) {
            // Сохраняем текущий слайд
            const currentSlideElement = slides[currentSlide];
            
            // Подготавливаем следующий слайд
            slides[nextSlide].style.opacity = '0';
            slides[nextSlide].style.transform = 'scale(1)';
            slides[nextSlide].style.transition = 'none';
            
            setTimeout(() => {
                // Запускаем анимацию следующего слайда
                slides[nextSlide].style.transition = 'opacity 1.5s ease-in-out, transform 7s ease-in-out';
                slides[nextSlide].style.opacity = '1';
                slides[nextSlide].style.transform = 'scale(1.1)';
                
                // Обновляем текст
                heroTitle.textContent = slides[nextSlide].dataset.title || '';
                heroSubtitle.textContent = slides[nextSlide].dataset.subtitle || '';
                
                // Скрываем текущий слайд
                currentSlideElement.style.opacity = '0';
            }, 50);
            
            currentSlide = nextSlide;
        }

        // Функция следующего слайда
        function nextSlide() {
            const next = (currentSlide + 1) % slides.length;
            updateSlide(next);
        }

        // Функция предыдущего слайда
        function prevSlide() {
            const prev = (currentSlide - 1 + slides.length) % slides.length;
            updateSlide(prev);
        }

        // Обработчики для свайпов на мобильных
        slider.addEventListener('touchstart', function(e) {
            touchStartX = e.touches[0].clientX;
        }, false);
        
        slider.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].clientX;
            handleSwipe();
        }, false);
        
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
            }
        }

        // Обработчики кнопок
        if (prevBtn && nextBtn) {
            prevBtn.addEventListener('click', prevSlide);
            nextBtn.addEventListener('click', nextSlide);
        }

        // Автоматическое переключение
        let autoplayInterval = setInterval(nextSlide, 5000);

        // Останавливаем автопереключение при взаимодействии
        slider.addEventListener('mouseenter', () => clearInterval(autoplayInterval));
        slider.addEventListener('touchstart', () => clearInterval(autoplayInterval));

        // Возобновляем автопереключение после окончания взаимодействия
        slider.addEventListener('mouseleave', () => {
            autoplayInterval = setInterval(nextSlide, 5000);
        });
        slider.addEventListener('touchend', () => {
            setTimeout(() => {
                autoplayInterval = setInterval(nextSlide, 5000);
            }, 1000);
        });

        // Инициализация первого слайда
        slides[0].style.opacity = '1';
        slides[0].style.transform = 'scale(1.1)';
        slides[0].style.transition = 'transform 7s ease-in-out';
    }

    initHeroBanner();

    // Карусель врачей
    jQuery(document).ready(function ($) {
        const carousel = $('.doctors-carousel');
        const cards = $('.doctor-card');
        const cardWidth = cards.first().outerWidth(true);
        const visibleCards = 4;
        let currentPosition = 0;
        const maxPosition = cards.length - visibleCards;

        // Обработчик клика на кнопку "Следующий"
        $('.carousel-next').click(function () {
            if (currentPosition < maxPosition) {
                currentPosition++;
                updateCarousel();
            }
        });

        // Обработчик клика на кнопку "Предыдущий"
        $('.carousel-prev').click(function () {
            if (currentPosition > 0) {
                currentPosition--;
                updateCarousel();
            }
        });

        // Функция обновления позиции карусели
        function updateCarousel() {
            const offset = -currentPosition * cardWidth;
            carousel.css('transform', `translateX(${offset}px)`);

            // Обновляем состояние кнопок
            $('.carousel-prev').toggleClass('disabled', currentPosition === 0);
            $('.carousel-next').toggleClass('disabled', currentPosition === maxPosition);
        }

        // Инициализация состояния кнопок
        updateCarousel();
    });

    // Инициализация карусели врачей
    jQuery(document).ready(function ($) {
        $('.doctors-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            navText: [
                '<i class="fas fa-chevron-left"></i>',
                '<i class="fas fa-chevron-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
    });
});