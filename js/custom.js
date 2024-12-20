// FAQ Toggle Functionality
document.addEventListener('DOMContentLoaded', function() {
    const toggles = document.querySelectorAll('.vc_toggle_title');
    
    toggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
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
});

// Карусель врачей
jQuery(document).ready(function($) {
    const carousel = $('.doctors-carousel');
    const cards = $('.doctor-card');
    const cardWidth = cards.first().outerWidth(true);
    const visibleCards = 4;
    let currentPosition = 0;
    const maxPosition = cards.length - visibleCards;

    // Обработчик клика на кнопку "Следующий"
    $('.carousel-next').click(function() {
        if (currentPosition < maxPosition) {
            currentPosition++;
            updateCarousel();
        }
    });

    // Обработчик клика на кнопку "Предыдущий"
    $('.carousel-prev').click(function() {
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
jQuery(document).ready(function($) {
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