<?php

// Добавление поддержки тем
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
add_theme_support('post-thumbnails');
add_theme_support('custom-header');
add_theme_support('custom-logo');

// Регистрация меню
function theme_register_nav_menu() {
    register_nav_menu('primary', 'Primary Menu');
}
add_action('after_setup_theme', 'theme_register_nav_menu');

// Подключение кастомного навигационного Walker
require_once('wp_bootstrap_navwalker.php');

// Регистрация виджетов
function register_my_widgets() {
    register_sidebar(array(
        'name'          => "Виджет - Сайдбар1",
        'id'            => 'right-sidebar1',
        'before_widget' => '<div class="single_sidebar margin-top-40">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="sidebar_head text-center textwhite"><h6>',
        'after_title'   => '</h6><div class="main-nav-border"></div></div>',
        'description'   => 'Эти виджеты будут показаны в правой колонке сайта'
    ));

    register_sidebar(array(
        'name'          => "footer1",
        'id'            => 'footer1',
        'before_widget' => '<p>',
        'after_widget'  => '</p>',
        'before_title'  => '<h4 style="color: #800080" class="title">',
        'after_title'   => '</h4>',
        'description'   => 'Этот виджет будет показан в подвале сайта.'
    ));

    register_sidebar(array(
        'name'          => "home_vidget",
        'id'            => 'home',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h4 style="color: #800080" class="title">',
        'after_title'   => '</h4>',
        'description'   => 'Это виджет, который отображается на главной странице сайта.'
    ));
}
add_action('widgets_init', 'register_my_widgets');

// Настройка длины отрывков
function new_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

// Настройка комментариев
function comments_feed_template_callback($comment, $args, $depth) {
    global $comment; ?>
    <div style="border:1px solid #eaeaea;border-radius: 4px;padding: 25px;margin-bottom: 20px;" class="media">
        <a href="<?php echo get_comment_author_url(); ?>" class="pull-left"><?php echo get_avatar(''); ?></a>
        <div class="media-body">
            <a href="<?php echo get_comment_author_url(); ?>">
                <h5 class="media-heading"><?php echo get_comment_author(); ?></h5>
            </a>
            <small><?php echo comment_date(); ?> в <?php echo comment_time(); ?></small>
            <div style="width: 400px"><?php wordwrap(comment_text(), 100, "<br />\n"); ?></div>
            <?php comment_reply_link(array_merge($args, array(
                'reply_text' => __('<strong>Ответ</strong> <i class="fa fa-reply" aria-hidden="true"></i>'),
                'depth'      => $depth,
                'max_depth'  => $args['max_depth']
            ))); ?>
        </div>
    </div>
<?php }

// Настройка "Читать далее"
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more) {
    global $post;
    return '<a href="' . get_permalink($post->ID) . '"> Читать дальше...</a>';
}

// Функция пагинации
function wp_corenavi() {
    global $wp_query;
    $max = $wp_query->max_num_pages;
    if ($max > 1) {
        echo '<div class="pagination_area text-center margin-top-50">';
        echo '<ul class="pagination"><li>' . paginate_links(array(
            'base'      => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
            'total'     => $max,
            'current'   => max(1, get_query_var('paged')),
            'mid_size'  => 3,
            'end_size'  => 1,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
        )) . '</li></ul>';
        echo '</div>';
    }
}

// Регистрация типа записи "Клиника"
// ==========================================

//============================================================

// Регистрация типа записи "Клиника"
function register_clinic_post_type() {
    $labels = array(
        'name'               => 'Клиники',
        'singular_name'      => 'Клиника',
        'add_new'            => 'Добавить клинику',
        'add_new_item'       => 'Добавить новую клинику',
        'edit_item'          => 'Редактировать клинику',
        'new_item'           => 'Новая клиника',
        'all_items'          => 'Все клиники',
        'view_item'          => 'Просмотр клиники',
        'search_items'       => 'Поиск клиник',
        'not_found'          => 'Кл��ники не найдены',
        'not_found_in_trash' => 'В корзине клиники не найдены',
        'menu_name'          => 'Клиники',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'clinics', 'with_front' => false),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('clinic', $args);
}
add_action('init', 'register_clinic_post_type');

// Метабоксы для клиник
function clinic_meta_boxes() {
    add_meta_box(
        'clinic_details',
        'Детали клиники',
        'clinic_meta_box_callback',
        'clinic',
        'normal',
        'high'
    );

    add_meta_box(
        'clinic_photos',
        'Фотографии клиники',
        'clinic_photos_meta_box_callback',
        'clinic',
        'normal',
        'high'
    );

    add_meta_box(
        'clinic_prices',
        'Услуги и цены',
        'clinic_prices_meta_box_callback',
        'clinic',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'clinic_meta_boxes');

// Детали клиники
function clinic_meta_box_callback($post) {
    wp_nonce_field('save_clinic_meta', 'clinic_meta_nonce');

    $fields = array(
        'address' => 'Адрес',
        'phone' => 'Телефон',
        'email' => 'E-mail',
        'facebook' => 'Facebook',
        'instagram' => 'Instagram',
        'twitter' => 'Twitter',
        'specializations' => 'Специализации',
        'country' => 'Страна',
        'city' => 'Город'
    );

    foreach ($fields as $field => $label) {
        $value = get_post_meta($post->ID, $field, true);
        echo "<p><label for='{$field}'>{$label}:</label><br>";
        echo "<input type='text' id='{$field}' name='{$field}' value='" . esc_attr($value) . "' class='widefat' /></p>";

        // Добавляем редакторы после поля "Город"
        if ($field === 'city') {
            // Поле "Проживание"
            echo '<p><label for="clinic_living">Проживание:</label><br>';
            wp_editor(
                get_post_meta($post->ID, 'clinic_living', true),
                'clinic_living',
                array(
                    'textarea_name' => 'clinic_living',
                    'media_buttons' => true,
                    'tinymce' => true,
                    'textarea_rows' => 10,
                    'teeny' => false
                )
            );
            echo '</p>';

            // Поле "Расположение"
            echo '<p><label for="clinic_location">Расположение:</label><br>';
            wp_editor(
                get_post_meta($post->ID, 'clinic_location', true),
                'clinic_location',
                array(
                    'textarea_name' => 'clinic_location',
                    'media_buttons' => true,
                    'tinymce' => true,
                    'textarea_rows' => 10,
                    'teeny' => false
                )
            );
            echo '</p>';

            // Поле "Карта"
            echo '<p><label for="clinic_map">Карта (вставьте iframe карты):</label><br>';
            echo '<textarea id="clinic_map" name="clinic_map" class="widefat" rows="5">' . 
                  esc_textarea(get_post_meta($post->ID, 'clinic_map', true)) . 
                  '</textarea>';
            echo '<small>Вставьте сюда код iframe карты Google Maps или Яндекс.Карт</small></p>';

            // Отображение серийного номера
            $serial = get_post_meta($post->ID, 'clinic_serial', true);
            if (!empty($serial)) {
                echo '<p><label>Серийный номер клиники:</label><br>';
                echo '<input type="text" value="' . esc_attr($serial) . '" readonly class="widefat" style="background:#f0f0f1;" />';
                echo '</p>';
            }
        }
    }
}

// Фотографии клиники
function clinic_photos_meta_box_callback($post) {
    wp_nonce_field('save_clinic_photos', 'clinic_photos_nonce');
    $photos = get_post_meta($post->ID, 'photos', true);
    ?>
    <div id="clinic-photos-container">
        <?php
        if (!empty($photos)) {
            $photos_array = explode(',', $photos);
            foreach ($photos_array as $photo_id) {
                $photo_url = wp_get_attachment_url($photo_id);
                if ($photo_url) {
                    echo '<div class="clinic-photo-item" style="display:inline-block; margin-right:10px; text-align:center;">';
                    echo '<img src="' . esc_url($photo_url) . '" style="width:100px; height:auto; display:block; margin-bottom:5px;">';
                    echo '<input type="hidden" name="clinic_photos[]" value="' . esc_attr($photo_id) . '">';
                    echo '<button type="button" class="remove-clinic-photo button">Удалить</button>';
                    echo '</div>';
                }
            }
        }
        ?>
    </div>
    <button type="button" id="add-clinic-photo" class="button">Добавить фотографии</button>
    <?php
}

// Метабокс для цен клиники
function add_clinic_prices_meta_box() {
    add_meta_box(
        'clinic_prices',
        'Услуги и цены',
        'clinic_prices_meta_box_callback',
        'clinic',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_clinic_prices_meta_box');

// Callback для метабокса цен
function clinic_prices_meta_box_callback($post) {
    wp_nonce_field('save_clinic_prices', 'clinic_prices_nonce');
    ?>
    <div id="clinic-prices-container">
        <div id="groups-container">
            <?php
            $groups = get_post_meta($post->ID, 'price_groups', true);
            if (!empty($groups) && is_array($groups)) {
                foreach ($groups as $group_index => $group) {
                    ?>
                    <div class="price-group" data-group-index="<?php echo esc_attr($group_index); ?>">
                        <h3>Группа услуг</h3>
                        <input type="text" name="price_groups[<?php echo esc_attr($group_index); ?>][name]" 
                               value="<?php echo esc_attr($group['name']); ?>" 
                               class="widefat group-name" 
                               placeholder="Название группы">
                        <button type="button" class="button remove-group">Удалить группу</button>
                        
                        <div class="services-container">
                            <?php
                            if (!empty($group['services']) && is_array($group['services'])) {
                                foreach ($group['services'] as $service_index => $service) {
                                    ?>
                                    <div class="service-item" data-service-index="<?php echo esc_attr($service_index); ?>">
                                        <input type="text" 
                                               name="price_groups[<?php echo esc_attr($group_index); ?>][services][<?php echo esc_attr($service_index); ?>][name]" 
                                               value="<?php echo esc_attr($service['name']); ?>" 
                                               class="widefat" 
                                               placeholder="Название услуги">
                                        <input type="text" 
                                               name="price_groups[<?php echo esc_attr($group_index); ?>][services][<?php echo esc_attr($service_index); ?>][price]" 
                                               value="<?php echo esc_attr($service['price']); ?>" 
                                               class="widefat" 
                                               placeholder="Цена">
                                        <button type="button" class="button remove-service">Удалить услугу</button>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <button type="button" class="button add-service">Добавить услугу</button>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <button type="button" id="add-price-group" class="button">Добавить группу услуг</button>
    </div>
    <?php
}

// Сохранение данных
function save_clinic_prices($post_id) {
    if (!isset($_POST['clinic_prices_nonce']) || !wp_verify_nonce($_POST['clinic_prices_nonce'], 'save_clinic_prices')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['price_groups'])) {
        $price_groups = array();
        foreach ($_POST['price_groups'] as $group_index => $group) {
            if (!empty($group['name'])) {
                $price_groups[$group_index] = array(
                    'name' => sanitize_text_field($group['name']),
                    'services' => array()
                );
                
                if (!empty($group['services'])) {
                    foreach ($group['services'] as $service_index => $service) {
                        if (!empty($service['name'])) {
                            $price_groups[$group_index]['services'][$service_index] = array(
                                'name' => sanitize_text_field($service['name']),
                                'price' => sanitize_text_field($service['price'])
                            );
                        }
                    }
                }
            }
        }
        update_post_meta($post_id, 'price_groups', $price_groups);
    } else {
        delete_post_meta($post_id, 'price_groups');
    }
}
add_action('save_post', 'save_clinic_prices');

// Подключение скриптов и стилей
function enqueue_clinic_prices_scripts($hook) {
    global $post;
    
    if (($hook == 'post.php' || $hook == 'post-new.php') && isset($post) && 'clinic' === $post->post_type) {
        wp_enqueue_style('dashicons');
        // Добавляем time() как версию, чтобы избежать кэширования
        wp_enqueue_style('clinic-prices-styles', get_template_directory_uri() . '/css/clinic-prices.css', array(), time());
        wp_enqueue_script('clinic-prices-script', get_template_directory_uri() . '/js/clinic-prices.js', array('jquery'), time(), true);
    }
}
add_action('admin_enqueue_scripts', 'enqueue_clinic_prices_scripts');

// Сохранение данных клиники
function save_clinic_meta($post_id) {
    if (!isset($_POST['clinic_meta_nonce']) || !wp_verify_nonce($_POST['clinic_meta_nonce'], 'save_clinic_meta')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $fields = array('address', 'phone', 'email', 'facebook', 'instagram', 'twitter', 'specializations', 'country', 'city');

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }

    // Сохраняем поле проживания
    if (isset($_POST['clinic_living'])) {
        update_post_meta($post_id, 'clinic_living', wp_kses_post($_POST['clinic_living']));
    }

    // Сохраняем поле расположения
    if (isset($_POST['clinic_location'])) {
        update_post_meta($post_id, 'clinic_location', wp_kses_post($_POST['clinic_location']));
    }

    // Сохраняем поле карты
    if (isset($_POST['clinic_map'])) {
        $allowed_html = array(
            'iframe' => array(
                'src'             => true,
                'width'           => true,
                'height'          => true,
                'frameborder'     => true,
                'style'           => true,
                'allowfullscreen' => true,
                'class'           => true,
                'id'             => true
            )
        );
        update_post_meta($post_id, 'clinic_map', wp_kses($_POST['clinic_map'], $allowed_html));
    }
}
add_action('save_post', 'save_clinic_meta');

// Сохранение фотографий клиники
function save_clinic_photos($post_id) {
    if (!isset($_POST['clinic_photos_nonce']) || !wp_verify_nonce($_POST['clinic_photos_nonce'], 'save_clinic_photos')) {
        return;
    }

    if (isset($_POST['clinic_photos']) && is_array($_POST['clinic_photos'])) {
        $photos = array_map('intval', $_POST['clinic_photos']);
        update_post_meta($post_id, 'photos', implode(',', $photos));
    } else {
        delete_post_meta($post_id, 'photos');
    }
}
add_action('save_post', 'save_clinic_photos');

// Устранение 404 ошибок
function fix_rewrite_rules() {
    flush_rewrite_rules();
}
add_action('init', 'fix_rewrite_rules', 99);

// Функция транслитерации русского текста
function transliterate($string) {
    $converter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',   'г' => 'g',   'д' => 'd',
        'е' => 'e',   'ё' => 'e',   'ж' => 'zh',  'з' => 'z',   'и' => 'i',
        'й' => 'y',   'к' => 'k',   'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',   'с' => 's',   'т' => 't',
        'у' => 'u',   'ф' => 'f',   'х' => 'h',   'ц' => 'c',   'ч' => 'ch',
        'ш' => 'sh',  'щ' => 'sch', 'ь' => '',    'ы' => 'y',   'ъ' => '',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
        'А' => 'A',   'Б' => 'B',   'В' => 'V',   'Г' => 'G',   'Д' => 'D',
        'Е' => 'E',   'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',   'И' => 'I',
        'Й' => 'Y',   'К' => 'K',   'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',   'С' => 'S',   'Т' => 'T',
        'У' => 'U',   'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',   'Ч' => 'Ch',
        'Ш' => 'Sh',  'Щ' => 'Sch', 'Ь' => '',    'Ы' => 'Y',   'Ъ' => '',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya'
    );
    return strtr($string, $converter);
}

// Функция генерации серийного номера для клиники
function generate_clinic_serial_number($post_id) {
    $title = get_the_title($post_id);
    $first_letter = mb_substr($title, 0, 1, 'UTF-8');
    
    // Транслитерация если буква русская
    if (preg_match('/[А-Яа-яЁё]/u', $first_letter)) {
        $first_letter = transliterate($first_letter);
    }
    
    $first_letter = strtolower($first_letter);
    
    // Получаем все существующие серийные номера
    $args = array(
        'post_type' => 'clinic',
        'posts_per_page' => -1,
        'meta_query' => array(
            array(
                'key' => 'clinic_serial',
                'compare' => 'EXISTS'
            )
        )
    );
    $clinics = get_posts($args);
    
    // Находим максимальный номер
    $max_number = 0;
    foreach ($clinics as $clinic) {
        $serial = get_post_meta($clinic->ID, 'clinic_serial', true);
        if (preg_match('/\d+$/', $serial, $matches)) {
            $number = intval($matches[0]);
            $max_number = max($max_number, $number);
        }
    }
    
    // Генерируем новый номер
    $new_number = str_pad($max_number + 1, 2, '0', STR_PAD_LEFT);
    return "#cl{$first_letter}{$new_number}";
}

// Автоматическая генерация серийного номера при создании/обновлении клиники
function save_clinic_serial_number($post_id) {
    // Проверяем тип поста
    if (get_post_type($post_id) !== 'clinic') {
        return;
    }
    
    // Проверяем, есть ли уже серийный номер
    $serial = get_post_meta($post_id, 'clinic_serial', true);
    if (empty($serial)) {
        $serial = generate_clinic_serial_number($post_id);
        update_post_meta($post_id, 'clinic_serial', $serial);
    }
}
add_action('save_post', 'save_clinic_serial_number');

// Генерация серийных номеров для существующих клиник
function generate_serials_for_existing_clinics() {
    $args = array(
        'post_type' => 'clinic',
        'posts_per_page' => -1,
        'meta_query' => array(
            array(
                'key' => 'clinic_serial',
                'compare' => 'NOT EXISTS'
            )
        )
    );
    
    $clinics = get_posts($args);
    foreach ($clinics as $clinic) {
        $serial = generate_clinic_serial_number($clinic->ID);
        update_post_meta($clinic->ID, 'clinic_serial', $serial);
    }
}
// Запускаем генерацию при активации темы
add_action('after_switch_theme', 'generate_serials_for_existing_clinics');

// Регистрация типа записи "Врач"
function register_doctor_post_type() {
    $labels = array(
        'name'               => 'Врачи',
        'singular_name'      => 'Врач',
        'menu_name'          => 'Врачи',
        'add_new'            => 'Добавить врача',
        'add_new_item'       => 'Добавить нового врача',
        'edit_item'          => 'Редактировать врача',
        'new_item'           => 'Новый врач',
        'view_item'          => 'Просмотреть врача',
        'search_items'       => 'Найти врача',
        'not_found'          => 'Врачи не найдены',
        'not_found_in_trash' => 'В корзине врачей не найдено'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'            => array(
            'slug'       => 'doctors',
            'with_front' => false
        ),
        'menu_position'       => 5,
        'menu_icon'          => 'dashicons-businessman',
        'supports'           => array('title', 'editor', 'thumbnail'),
        'show_in_rest'       => true
    );

    register_post_type('doctor', $args);

    // Регистрация таксономии для специальностей врачей
    $taxonomy_labels = array(
        'name'              => 'Специальности',
        'singular_name'     => 'Специальность',
        'search_items'      => 'Поиск специальностей',
        'all_items'         => 'Все специальности',
        'edit_item'         => 'Редактировать специальность',
        'update_item'       => 'Обновить специальность',
        'add_new_item'      => 'Добавить специальность',
        'new_item_name'     => 'Новая специальность',
        'menu_name'         => 'Специальности'
    );

    register_taxonomy('doctor_specialty', 'doctor', array(
        'hierarchical'      => true,
        'labels'           => $taxonomy_labels,
        'show_ui'          => true,
        'show_admin_column' => true,
        'query_var'        => true,
        'rewrite'          => array(
            'slug'         => 'specialty',
            'with_front'   => false
        ),
        'show_in_rest'     => true
    ));
}
add_action('init', 'register_doctor_post_type');

// Функция для исправления конфликта URL
function doctor_post_type_rewrite_rules($rules) {
    $new_rules = array();
    
    // Добавляем правила для врачей перед остальными правилами
    $new_rules['doctors/([^/]+)/?$'] = 'index.php?doctor=$matches[1]';
    $new_rules['doctors/?$'] = 'index.php?post_type=doctor';
    $new_rules['specialty/([^/]+)/?$'] = 'index.php?doctor_specialty=$matches[1]';
    
    return $new_rules + $rules;
}
add_filter('rewrite_rules_array', 'doctor_post_type_rewrite_rules');

// Добавление метабоксов для врача
function doctor_meta_boxes() {
    add_meta_box(
        'doctor_details',
        'Детали врача',
        'doctor_meta_box_callback',
        'doctor',
        'normal',
        'high'
    );

    add_meta_box(
        'doctor_additional_photos',
        'Фотографии врача',
        'doctor_photos_meta_box_callback',
        'doctor',
        'normal',
        'high'
    );

    add_meta_box(
        'doctor_clinic',
        'Клиника',
        'doctor_clinic_meta_box_callback',
        'doctor',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'doctor_meta_boxes');

// Callback для основных деталей врача
function doctor_meta_box_callback($post) {
    wp_nonce_field('save_doctor_meta', 'doctor_meta_nonce');

    $fields = array(
        'doctor_experience' => array(
            'label' => 'Стаж работы (лет)',
            'type' => 'number'
        ),
        'doctor_education' => array(
            'label' => 'Образование',
            'type' => 'textarea'
        ),
        'doctor_certificates' => array(
            'label' => 'Сертификаты и дипломы',
            'type' => 'textarea'
        ),
        'doctor_degree' => array(
            'label' => 'Ученая степень',
            'type' => 'text'
        ),
        'doctor_phone' => array(
            'label' => 'Телефон',
            'type' => 'text'
        ),
        'doctor_email' => array(
            'label' => 'Email',
            'type' => 'email'
        ),
        'doctor_price' => array(
            'label' => 'Стоимость консультации',
            'type' => 'number'
        ),
        'doctor_languages' => array(
            'label' => 'Владение языками',
            'type' => 'text'
        )
    );

    foreach ($fields as $field_id => $field) {
        $value = get_post_meta($post->ID, $field_id, true);
        echo '<div class="doctor-field-group">';
        echo '<label for="' . $field_id . '">' . $field['label'] . ':</label>';
        
        if ($field['type'] === 'textarea') {
            echo '<textarea id="' . $field_id . '" name="' . $field_id . '" rows="3" style="width:100%">' . esc_textarea($value) . '</textarea>';
        } else {
            echo '<input type="' . $field['type'] . '" id="' . $field_id . '" name="' . $field_id . '" value="' . esc_attr($value) . '" style="width:100%">';
        }
        echo '</div>';
    }
}

// Callback для фотографий
function doctor_photos_meta_box_callback($post) {
    wp_nonce_field('save_doctor_photos', 'doctor_photos_nonce');
    $photos = get_post_meta($post->ID, 'doctor_photos', true);
    ?>
    <div id="doctor-photos-container">
        <?php
        if (!empty($photos) && is_array($photos)) {
            foreach ($photos as $photo_id) {
                $photo_url = wp_get_attachment_url($photo_id);
                if ($photo_url) {
                    echo '<div class="doctor-photo-item">';
                    echo '<img src="' . esc_url($photo_url) . '" width="100">';
                    echo '<input type="hidden" name="doctor_photos[]" value="' . esc_attr($photo_id) . '">';
                    echo '<button type="button" class="remove-photo button">Удалить</button>';
                    echo '</div>';
                }
            }
        }
        ?>
    </div>
    <button type="button" id="add-doctor-photo" class="button">Добавить фото</button>
    <p class="description">Добавьте до 4 фотографий</p>
    <?php
}

// Callback для выбора клиники
function doctor_clinic_meta_box_callback($post) {
    wp_nonce_field('save_doctor_clinic', 'doctor_clinic_nonce');
    
    $current_clinic = get_post_meta($post->ID, 'clinic_id', true);
    
    // Получаем все клиники
    $clinics = get_posts(array(
        'post_type' => 'clinic',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC'
    ));

    echo '<select name="clinic_id" id="clinic_id" style="width:100%">';
    echo '<option value="">Выберите клинику</option>';
    
    foreach ($clinics as $clinic) {
        echo '<option value="' . esc_attr($clinic->ID) . '" ' . selected($current_clinic, $clinic->ID, false) . '>';
        echo esc_html($clinic->post_title);
        echo '</option>';
    }
    
    echo '</select>';
}

// Сохранение метаданных врача
function save_doctor_meta($post_id) {
    if (!isset($_POST['doctor_meta_nonce']) || !wp_verify_nonce($_POST['doctor_meta_nonce'], 'save_doctor_meta')) {
        return;
    }

    $fields = array(
        'doctor_experience',
        'doctor_education',
        'doctor_certificates',
        'doctor_degree',
        'doctor_phone',
        'doctor_email',
        'doctor_price',
        'doctor_languages'
    );

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post_doctor', 'save_doctor_meta');

// Сохранение фотографий
function save_doctor_photos($post_id) {
    if (!isset($_POST['doctor_photos_nonce']) || !wp_verify_nonce($_POST['doctor_photos_nonce'], 'save_doctor_photos')) {
        return;
    }

    if (isset($_POST['doctor_photos']) && is_array($_POST['doctor_photos'])) {
        $photos = array_slice($_POST['doctor_photos'], 0, 4); // Ограничиваем 4 фотографиями
        update_post_meta($post_id, 'doctor_photos', $photos);
    } else {
        delete_post_meta($post_id, 'doctor_photos');
    }
}
add_action('save_post_doctor', 'save_doctor_photos');

// Сохранение связи с клиникой
function save_doctor_clinic($post_id) {
    if (!isset($_POST['doctor_clinic_nonce']) || !wp_verify_nonce($_POST['doctor_clinic_nonce'], 'save_doctor_clinic')) {
        return;
    }

    if (isset($_POST['clinic_id'])) {
        update_post_meta($post_id, 'clinic_id', sanitize_text_field($_POST['clinic_id']));
    }
}
add_action('save_post_doctor', 'save_doctor_clinic');

// Подключение скриптов для админки
function enqueue_doctor_admin_scripts($hook) {
    if ('post.php' === $hook || 'post-new.php' === $hook) {
        global $post;
        if ($post && 'doctor' === $post->post_type) {
            wp_enqueue_media();
            wp_enqueue_script('doctor-admin-script', get_template_directory_uri() . '/js/doctor-admin.js', array('jquery'), null, true);
            wp_enqueue_style('doctor-admin-style', get_template_directory_uri() . '/css/doctor-admin.css');
        }
    }
}
add_action('admin_enqueue_scripts', 'enqueue_doctor_admin_scripts');

// Подключение стилей для страниц врачей
function enqueue_doctor_styles() {
    if (is_post_type_archive('doctor') || is_singular('doctor') || is_tax('doctor_specialty')) {
        wp_enqueue_style('doctor-styles', get_template_directory_uri() . '/css/doctor-styles.css', array(), '1.0.0');
    }
}

add_action('wp_enqueue_scripts', 'enqueue_doctor_styles');

// Добавляем поддержку шорткодов в виджетах
add_filter('widget_text', 'do_shortcode');

// Добавляем поддержку шорткодов в отзывах
add_filter('wpcr3_content', 'do_shortcode');

// Обработка формы подписки
function handle_subscription() {
    if (isset($_POST['email']) && wp_verify_nonce($_POST['_wpnonce'], 'subscribe_nonce')) {
        $email = sanitize_email($_POST['email']);
        
        // Здесь можно добавить подписчика в вашу базу данных или 
        // интегрировать с плагином рассылки по вашему выбору
        
        // Пример использования wp_mail
        $to = get_option('admin_email');
        $subject = 'Новый подписчик';
        $message = 'Новый подписчик: ' . $email;
        wp_mail($to, $subject, $message);
        
        // Добавьте здесь код для сохранения email в базу данных или 
        // интеграции с вашей системой рассылки
    }
}
add_action('init', 'handle_subscription');

/**
 * Добавляем шорткод [exec] для выполнения PHP кода
 */
function exec_php_code($atts, $content = null) {
    // Проверяем, является ли пользователь администратором
    if (!current_user_can('administrator')) {
        return 'Access denied';
    }

    // Очищаем контент от лишних тегов и пробелов
    $content = trim($content);
    
    // Убираем экранирование кавычек
    $content = stripslashes($content);
    
    // Проверяем наличие опасных функций
    $dangerous_functions = array(
        'system', 'exec', 'passthru', 'shell_exec', 
        'popen', 'proc_open', 'eval', 'assert'
    );
    
    foreach ($dangerous_functions as $func) {
        if (stripos($content, $func) !== false) {
            return 'Dangerous function detected: ' . $func;
        }
    }

    // Создаем временный буфер для вывода
    ob_start();
    
    try {
        // Выполняем PHP код
        eval('?>' . $content);
    } catch (Exception $e) {
        return 'Error: ' . $e->getMessage();
    }
    
    // Получаем содержимое буфера
    $output = ob_get_clean();
    
    return $output;
}
add_shortcode('exec', 'exec_php_code');

/**
 * Отключаем автоформатирование для шорткода [exec]
 */
function disable_wpautop_for_exec($content) {
    if (has_shortcode($content, 'exec')) {
        remove_filter('the_content', 'wpautop');
    }
    return $content;
}
add_filter('the_content', 'disable_wpautop_for_exec', 9);

/**
 * Получение последних отзывов с рейтингом 5 звезд
 */
function get_latest_five_star_reviews($limit = 3) {
    $args = array(
        'post_type' => 'wpcr3_review',
        'posts_per_page' => $limit,
        'orderby' => 'date',
        'order' => 'DESC',
        'meta_query' => array(
            array(
                'key' => 'wpcr3_review_rating',
                'value' => '5',
                'compare' => '='
            )
        )
    );
    
    $query = new WP_Query($args);
    return $query->posts;
}

/**
 * Шорткоды для подключения PHP файлов
 */

// Шорткод для отображения врачей
function our_doctors_shortcode() {
    ob_start();
    $file_path = get_template_directory() . '/includes/our-doctors.php';
    if (file_exists($file_path)) {
        include $file_path;
    } else {
        return 'Error: File not found';
    }
    return ob_get_clean();
}
add_shortcode('our_doctors', 'our_doctors_shortcode');

// Шорткод для отображения отзывов
function short_reviews_shortcode() {
    ob_start();
    $file_path = get_template_directory() . '/includes/short-reviews.php';
    if (file_exists($file_path)) {
        include $file_path;
    } else {
        return 'Error: File not found';
    }
    return ob_get_clean();
}
add_shortcode('short_reviews', 'short_reviews_shortcode');

// Шорткод для отображения лучших мировых клиник
function best_world_clinics_shortcode() {
    ob_start();
    $file_path = get_template_directory() . '/includes/best-world-clinics.php';
    if (file_exists($file_path)) {
        include $file_path;
    } else {
        return 'Error: File not found';
    }
    return ob_get_clean();
}
add_shortcode('best_world_clinics', 'best_world_clinics_shortcode');

// Добавление метабокса с информацией о шорткодах
function add_shortcodes_metabox() {
    $screens = ['post', 'page'];
    foreach ($screens as $screen) {
        add_meta_box(
            'available_shortcodes',
            'Доступные шорткоды',
            'shortcodes_metabox_callback',
            $screen,
            'side'
        );
    }
}
add_action('add_meta_boxes', 'add_shortcodes_metabox');

// Callback-функция для отображения содержимого метабокса
function shortcodes_metabox_callback($post) {
    ?>
    <div class="shortcodes-info">
        <p><strong>Список доступных шорткодов:</strong></p>
        <ul style="margin-left: 15px; list-style-type: disc;">
            <li><code>[our_doctors]</code> - Отображает блок с врачами</li>
            <li><code>[short_reviews]</code> - Отображает блок с отзывами</li>
            <li><code>[best_world_clinics]</code> - Отображает блок с лучшими мировыми клиниками</li>
        </ul>
    </div>
    <?php
}

// Разрешаем iframe в контенте
function allow_iframe_in_content($allowed_tags) {
    $allowed_tags['iframe'] = array(
        'src'             => true,
        'width'           => true,
        'height'          => true,
        'frameborder'     => true,
        'style'           => true,
        'allowfullscreen' => true,
        'class'           => true,
        'id'             => true
    );
    return $allowed_tags;
}
add_filter('wp_kses_allowed_html', 'allow_iframe_in_content', 10, 2);

// Удаляем автоматические <p> теги из Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// Отключаем форматирование Contact Form 7
function do_not_wrap_cf7_fields_in_p_tags() {
    remove_filter('wpcf7_form_elements', 'wpcf7_autop');
}
add_action('wpcf7_init', 'do_not_wrap_cf7_fields_in_p_tags');

// Добавляем серийный номер и название клиники в CF7
function add_clinic_serial_to_cf7_hidden_field($form) {
    // Проверяем, что мы на странице клиники
    if (is_singular('clinic')) {
        $post_id = get_the_ID();
        $serial = get_post_meta($post_id, 'clinic_serial', true);
        $title = get_the_title($post_id);
        
        if (!empty($serial)) {
            // Добавляем скрытые поля в начало формы
            $hidden_fields = '<input type="hidden" name="clinic-serial" value="' . esc_attr($serial) . '">';
            $hidden_fields .= '<input type="hidden" name="clinic-title" value="' . esc_attr($title) . '">';
            
            // Заменяем оба тега на скрытые поля
            $form = preg_replace('/\[clinic-serial[^\]]*\]/', $hidden_fields, $form);
            $form = str_replace('[clinic-title]', '', $form); // Удаляем тег clinic-title, так как поле уже добавлено
        }
    }
    return $form;
}
add_filter('wpcf7_form_elements', 'add_clinic_serial_to_cf7_hidden_field', 20);

// Добавляем серийный номер и название клиники в тему и тело письма
function add_clinic_serial_to_cf7_mail($components) {
    if (isset($_POST['clinic-serial']) && isset($_POST['clinic-title'])) {
        $serial = sanitize_text_field($_POST['clinic-serial']);
        $title = sanitize_text_field($_POST['clinic-title']);
        
        // Заменяем теги в теме письма
        if (!empty($components['subject'])) {
            $components['subject'] = str_replace('[clinic-serial]', $serial, $components['subject']);
            $components['subject'] = str_replace('[clinic-title]', $title, $components['subject']);
        }
        
        // Заменяем теги в теле письма
        if (!empty($components['body'])) {
            $components['body'] = str_replace('[clinic-serial]', $serial, $components['body']);
            $components['body'] = str_replace('[clinic-title]', $title, $components['body']);
        }
    }
    return $components;
}
add_filter('wpcf7_mail_components', 'add_clinic_serial_to_cf7_mail', 20);
