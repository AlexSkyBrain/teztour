<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mtgagency.ru
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/main.css">

	<?php wp_head(); ?>
</head>

<body> 


	<!-- <header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$mtgagency_ru_description = get_bloginfo( 'description', 'display' );
			if ( $mtgagency_ru_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $mtgagency_ru_description; ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mtgagency-ru' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</header> -->

    <div class="contact-modal">
         <form action="#" class="subscribe-form">
            <input type="text" class="form-control subscribe-form__input" name="name" placeholder="Имя">
            <input type="text" class="form-control subscribe-form__input" name="phone" placeholder="Телефон">
            <input type="submit" value="Подписаться" class="btn subscribe-form__btn">
            <p class="subscribe-form__warning">Нажимая на кнопу "Получить консультацию" вы соглашаетесь с условиями <a href="#">"Политики конфиденциальности"</a></p>
            <div class="subscribe-form__row"> 
            </div>                        
        </form>
    </div>
    <div class="mobile-menu">
        <div class="header-contacts__pone">
            <p class="header-contacts__pone-text">Звонок бесплатный </p>
            <a class="header-contacts__pone-number" href="tel:78866873587">+7 886 687 35 87</a>
        </div>
        <div class="header-contacts__social">
            <a class="header-contacts__social-item" href="#">
                <img src="<?php echo get_template_directory_uri() ?>/images/vk.png" alt="vkontakte">
            </a>
            <a class="header-contacts__social-item"  href="#">
                <img src="<?php echo get_template_directory_uri() ?>/images/fb.png" alt="facebook">
            </a>
            <a class="header-contacts__social-item"  href="#">
                <img src="<?php echo get_template_directory_uri() ?>/images/instagram.png" alt="instagram">
            </a>
            <a class="header-contacts__social-item"  href="#">
                <img src="<?php echo get_template_directory_uri() ?>/images/youtube.png" alt="youtube">
            </a>
        </div>
        <nav class="main-menu">
            <ul class="main-menu__wrap">
                <li class="main-menu__item"><a href="#">Главная </a></li>
                <li class="main-menu__item"><a href="#">Туры </a></li>
                <li class="main-menu__item"><a href="#">Страны </a></li>
                <li class="main-menu__item"><a href="#">Виды отдыха </a></li>
                <li class="main-menu__item"><a href="#">Корпоративным клиентам </a></li>
                <li class="main-menu__item"><a href="#">Туристам </a></li>
                <li class="main-menu__item"><a href="#">О компании</a></li>
            </ul>
        </nav> 
         <ul class="top-menu__wrap">
                      <li class="top-menu__item">
                        <a href="#">Подобрать тур</a></li>
                      <li class="top-menu__item top-menu__item-sub">
                        <a href="#">Как и где купить?</a>
                        <ul class="top-menu__submenu">
                            <li class="top-menu__submenu-item top-menu__submenu-item_btn">
                                 <a href="#">Купить онлайн</a> 
                            </li>
                            <li class="top-menu__submenu-item">
                                 <a href="#">Купить в агентстве</a> 
                            </li>
                        </ul>
                     </li>
                      <li class="top-menu__item">
                        <a href="#">Контакты</a>
                      </li>  
                    </ul>
    </div>
    <p class="c-hamburger c-hamburger--htx mobile-icon">
      <span><span>toggle menu</span></span>
    </p>
<header class="header" id="header">
    <div class="header-top">
        <div class="container header-top__container">
            <div class="row header-top__row">
                <div class="top-menu">
                    <ul class="top-menu__wrap">
                      <li class="top-menu__item">
                        <a href="#">Подобрать тур</a></li>
                      <li class="top-menu__item top-menu__item-sub">
                        <a href="#">Как и где купить?</a>
                        <ul class="top-menu__submenu">
                            <li class="top-menu__submenu-item top-menu__submenu-item_btn">
                                 <a href="#">Купить онлайн</a> 
                            </li>
                            <li class="top-menu__submenu-item">
                                 <a href="#">Купить в агентстве</a> 
                            </li>
                        </ul>
                     </li>
                      <li class="top-menu__item">
                        <a href="#">Контакты</a>
                      </li>  
                    </ul>
                    
                </div>
                <div class="header-contacts">
                    <div class="header-contacts__social">
                        <a class="header-contacts__social-item" href="#">
                            <img src="<?php echo get_template_directory_uri() ?>/images/vk.png" alt="vkontakte">
                        </a>
                        <a class="header-contacts__social-item"  href="#">
                            <img src="<?php echo get_template_directory_uri() ?>/images/fb.png" alt="facebook">
                        </a>
                        <a class="header-contacts__social-item"  href="#">
                            <img src="<?php echo get_template_directory_uri() ?>/images/instagram.png" alt="instagram">
                        </a>
                        <a class="header-contacts__social-item"  href="#">
                            <img src="<?php echo get_template_directory_uri() ?>/images/youtube.png" alt="youtube">
                        </a>
                    </div>
                    <div class="header-contacts__pone">
                        <p class="header-contacts__pone-text">Звонок бесплатный </p>
                        <a class="header-contacts__pone-number" href="tel:78866873587">+7 886 687 35 87</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container header-main__container">
            <div class="row header-main__row">
                
                <a href="/" class="logo header-main__logo">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt=""  class="logo__img">

                    <img src="<?php echo get_template_directory_uri() ?>/images/logo-mobile.svg" class="logo__img-mob" alt="">
                </a>
                <!-- <div class="header-main__right"> -->
                   <nav class="main-menu">
                        <ul class="main-menu__wrap">
                            <li class="main-menu__item"><a href="#">Главная </a></li>
                            <li class="main-menu__item"><a href="#">Туры </a></li>
                            <li class="main-menu__item"><a href="#">Страны </a></li>
                            <li class="main-menu__item"><a href="#">Виды отдыха </a></li>
                            <li class="main-menu__item"><a href="#">Корпоративным клиентам </a></li>
                            <li class="main-menu__item"><a href="#">Туристам </a></li>
                            <li class="main-menu__item"><a href="#">О компании</a></li>
                        </ul>
                    </nav>  
                    <a href="#" class="btn header-main__btn">Купить тур On-Line</a>
                <!-- </div> -->
                
            </div>
        </div>
    </div>

</header>
