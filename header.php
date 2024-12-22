<!DOCTYPE html>
<html ang="ru">

<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
       <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
     <title><?php wp_title( '|', true, 'right' ); ?></title>
   
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- font -->
   <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/fonts/fonts.css">
   <!-- Icons -->
   <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/fonts/font-icons.css">
   <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css?v=<?php echo time(); ?>">
   <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/swiper-bundle.min.css">
   <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/animate.css">
   <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/styles.css?v=<?php echo time(); ?>"/>
   <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css?v=<?php echo time(); ?>">
   <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/clinic-detail.css?v=<?php echo time(); ?>">
   <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/media.css?v=<?php echo time();  ?>"/>
   <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/footer-mobile.css?v=<?php echo time();  ?>"/>
   
   <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/custom.css?v=<?php echo time();  ?>"/>
   <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/custom-new.css?v=<?php echo time();  ?>"/>

   <script src="https://kit.fontawesome.com/b0b0842921.js" crossorigin="anonymous"></script>
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/images/favicon.ico"/>
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url') ?>/images/logo/favicon.png">
<?php wp_head(); ?>
</head>


<body class="body">
    


    <div id="wrapper">
        <div id="pagee" class="clearfix">

            <!-- Main Header -->
            <header class="main-header">
    <div class="container">
        <div class="header-inner">
            <div class="row align-items-center">
                <!-- Логотип -->
                <div class="col-md-4">
                    <div class="logo-box">
                        <a href="<?php echo home_url(); ?>" class="logo">
                            <img src="/wp-content/uploads/2024/12/logoclinic.png" alt="Health2be">
                        </a>
                    </div>
                </div>

                <!-- Контакты -->
                <div class="col-md-4">
                    <div class="header-contact">
                        <div class="contact-badge">
                            <img src="/wp-content/uploads/2024/12/24-7-365.png" class="support-badge" alt="24/7">
                            <div class="contact-details">
                                <span class="contact-label">Консультация специалиста</span>
                                <a href="tel:+74951202332" class="contact-phone">+7 495 120-23-32</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Кнопки -->
                <div class="col-md-4">
                    <div class="header-actions">
                        <a href="" class="header-btn call-doctor">
                            <i class="fas fa-user-md"></i>
                            <span>Вызвать врача</span>
                        </a>
                        <a href="" class="header-btn consultation">
                            <i class="fas fa-comments"></i>
                            <span>Консультация</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
            <!-- End Main Header -->
                       
              <!---------------------------main menu start------------------------------------------>
              <div class="main-top-menu-wrapper">
                                 <?php
            wp_nav_menu( array(
                'menu'              => 'Primary Menu',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => '',
                'container_class'   => '',
        'container_id'      => '',
                'menu_class'        => 'nav navbar-nav navbar-left text-uppercase',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
                           </div>


       <!-------------------main menu end----------------------------------------------------->       
  