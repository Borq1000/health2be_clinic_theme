<section class="statistics py-5" style="background: #fafbfc;">
    <div class="container">
        <div class="section-header text-center">
            <h6 class="text-primary text-uppercase mb-2">Наши достижения</h6>
            <h2 class="title">Почему нас выбирают</h2>
            <div class="title-divider">
                <div class="divider-line"></div>
                <i class="fas fa-plus divider-icon"></i>
                <div class="divider-line"></div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Работаем 24/7 -->
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="stat-number">
                        <span class="counter">365</span>
                    </div>
                    <h3 class="stat-title">Работаем 24/7/365</h3>
                    <p class="stat-description">Круглосуточная забота о вашем здоровье</p>
                </div>
            </div>

            <!-- Медицинские учреждения -->
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="stat-number">
                        <span class="counter">58</span>
                    </div>
                    <h3 class="stat-title">Ведущих медицинских учреждений</h3>
                    <p class="stat-description">Сеть современных клиник</p>
                </div>
            </div>

            <!-- Врачи -->
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="stat-number">
                        <span class="counter">1296</span>
                    </div>
                    <h3 class="stat-title">Квалифицированных врачей</h3>
                    <p class="stat-description">Опытные специалисты высшей категории</p>
                </div>
            </div>

            <!-- Направления -->
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="stat-number">
                        <span class="counter">52</span>
                    </div>
                    <h3 class="stat-title">Направления лечения</h3>
                    <p class="stat-description">Полный спектр медицинских услуг</p>
                </div>
            </div>

            <!-- Пациенты -->
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="stat-number">
                        <span class="counter">16598</span>
                    </div>
                    <h3 class="stat-title">Довольных пациентов</h3>
                    <p class="stat-description">Успешно пролеченных пациентов</p>
                </div>
            </div>

            <!-- Консилиумы -->
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="stat-number">
                        <span class="counter">4697</span>
                    </div>
                    <h3 class="stat-title">Проведенных консилиумов</h3>
                    <p class="stat-description">Комплексный подход к лечению</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Подключаем Counter-Up -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<script>
if (!window.counterUpInitialized) {
    jQuery(document).ready(function($) {
        $('.counter').each(function() {
            var $this = $(this);
            var finalValue = $this.text();
            
            $this.waypoint(function() {
                $this.counterUp({
                    delay: 10,
                    time: 1000,
                    offset: '75%'
                });
                this.destroy(); // Предотвращаем повторное срабатывание
            }, {
                offset: '75%'
            });
        });
    });
    window.counterUpInitialized = true;
}
</script>