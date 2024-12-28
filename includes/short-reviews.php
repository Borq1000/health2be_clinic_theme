<?php
/**
 * Шаблон для отображения коротких отзывов на главной странице
 */
?>
<section class="short-reviews py-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h6 class="text-primary text-uppercase mb-2">Отзывы пациентов</h6>
                <h2 class="h1 mb-4">Что говорят наши клиенты</h2>
                <div class="divider d-flex align-items-center justify-content-center gap-3">
                    <span class="line"></span>
                    <i class="fas fa-star" aria-hidden="true"></i>
                    <span class="line"></span>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $reviews = get_latest_five_star_reviews(3);
            if ($reviews) :
                foreach ($reviews as $review) :
                    $author = get_post_meta($review->ID, 'wpcr3_review_name', true);
                    $content = $review->post_content;
                    if (empty($content)) {
                        $content = get_post_meta($review->ID, 'wpcr3_review_text', true);
                    }
                    $content_short = wp_trim_words(wp_strip_all_tags($content), 35, '...');
                    $content_full = wp_strip_all_tags($content);
                    $date = get_the_date('d F Y', $review->ID);
            ?>
                <div class="col-lg-4 mb-4">
                    <div class="review-card h-100">
                        <div class="review-rating mb-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="review-content">
                            <blockquote class="review-text mb-4">
                                <div class="review-short"><?php echo $content_short; ?></div>
                                <div class="review-full"><?php echo $content_full; ?></div>
                            </blockquote>
                            <button class="read-more-btn">Читать полностью</button>
                        </div>
                        <div class="review-author">
                            <div class="author-name"><?php echo esc_html($author); ?></div>
                            <div class="review-date"><?php echo $date; ?></div>
                        </div>
                    </div>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-auto">
                <a href="/otzyvy/" class="btn btn-outline-primary">Смотреть все отзывы</a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const readMoreButtons = document.querySelectorAll('.read-more-btn');
    
    readMoreButtons.forEach(button => {
        button.addEventListener('click', function() {
            const reviewCard = this.closest('.review-card');
            const shortText = reviewCard.querySelector('.review-short');
            const fullText = reviewCard.querySelector('.review-full');
            
            if (reviewCard.classList.contains('expanded')) {
                shortText.style.display = 'block';
                fullText.style.display = 'none';
                this.textContent = 'Читать полностью';
                reviewCard.classList.remove('expanded');
            } else {
                shortText.style.display = 'none';
                fullText.style.display = 'block';
                this.textContent = 'Свернуть';
                reviewCard.classList.add('expanded');
            }
        });
    });
});
</script>