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

    // Hero Banner Image Rotation
    function initHeroBanner() {
        const slides = document.querySelectorAll('.hero-banner .slide');
        const prevBtn = document.querySelector('.hero-banner .prev');
        const nextBtn = document.querySelector('.hero-banner .next');
        const heroTitle = document.querySelector('.hero-banner .hero-title');
        const heroSubtitle = document.querySelector('.hero-banner .hero-subtitle');
        
        if (!slides.length || !heroTitle || !heroSubtitle) return;

        let currentSlide = 0;
        let nextSlide = 1;
        let isAnimating = false;

        // Показываем первый слайд
        slides[currentSlide].style.opacity = '1';
        slides[currentSlide].style.transform = 'scale(1.1)';
        slides[currentSlide].style.transition = 'opacity 1.5s ease-in-out, transform 7s ease-in-out';

        function updateContent(slideIndex) {
            const slide = slides[slideIndex];
            const title = slide.getAttribute('data-title');
            const subtitle = slide.getAttribute('data-subtitle');

            // Анимация исчезновения текста
            heroTitle.style.opacity = '0';
            heroSubtitle.style.opacity = '0';

            setTimeout(() => {
                heroTitle.textContent = title;
                heroSubtitle.textContent = subtitle;

                // Анимация появления текста
                heroTitle.style.opacity = '1';
                heroSubtitle.style.opacity = '1';
            }, 750); // Половина времени перехода слайда
        }

        function changeSlide(direction = 'next') {
            if (isAnimating) return;
            isAnimating = true;

            // Определяем следующий слайд
            if (direction === 'next') {
                nextSlide = (currentSlide + 1) % slides.length;
            } else {
                nextSlide = (currentSlide - 1 + slides.length) % slides.length;
            }

            // Подготавливаем следующий слайд
            slides[nextSlide].style.opacity = '0';
            slides[nextSlide].style.transform = 'scale(1)';
            slides[nextSlide].style.transition = 'none';
            
            setTimeout(() => {
                // Запускаем анимацию следующего слайда
                slides[nextSlide].style.transition = 'opacity 1.5s ease-in-out, transform 7s ease-in-out';
                slides[nextSlide].style.opacity = '1';
                slides[nextSlide].style.transform = 'scale(1.1)';

                // Скрываем текущий слайд
                slides[currentSlide].style.opacity = '0';
                slides[currentSlide].style.transform = 'scale(1)';

                // Обновляем текст
                updateContent(nextSlide);

                // Обновляем индекс текущего слайда
                currentSlide = nextSlide;

                // Разрешаем следующую анимацию через 1.5 секунды
                setTimeout(() => {
                    isAnimating = false;
                }, 1500);
            }, 50);
        }

        // Добавляем стили для анимации текста
        heroTitle.style.transition = 'opacity 0.75s ease-in-out';
        heroSubtitle.style.transition = 'opacity 0.75s ease-in-out';

        // Обработчики событий для кнопок
        if (prevBtn) {
            prevBtn.addEventListener('click', () => changeSlide('prev'));
        }
        if (nextBtn) {
            nextBtn.addEventListener('click', () => changeSlide('next'));
        }

        // Автоматическая смена слайдов
        let slideInterval = setInterval(() => changeSlide('next'), 7000);

        // Останавливаем автоматическую смену при наведении на баннер
        const heroBanner = document.querySelector('.hero-banner');
        if (heroBanner) {
            heroBanner.addEventListener('mouseenter', () => {
                clearInterval(slideInterval);
            });

            heroBanner.addEventListener('mouseleave', () => {
                slideInterval = setInterval(() => changeSlide('next'), 7000);
            });
        }
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