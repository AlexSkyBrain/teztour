<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mtgagency.ru
 */

?>

<footer class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="footer__wrap">
                <div class="footer__info">
                    <div class="footer__columns">
                        <div class="footer__column">
                            <p class="footer__column-name">
                              Виды отдыха  
                            </p>
                            <ul class="footer__menu">
                                 <li><a href="#">Лучшие цены от TEZ TOUR </a></li>
                                 <li><a href="#">Новогодние туры </a></li>
                                 <li><a href="#">Свадебные туры </a></li>
                                 <li><a href="#">VIP отдых и услуги </a></li>
                                 <li><a href="#">Отдых на островах </a></li>
                                 <li><a href="#">Морские круизы </a></li>
                                 <li><a href="#">Детский отдых </a></li>
                                 <li><a href="#">Отдых с детьми </a></li>
                                 <li><a href="#">Корпоративный отдых </a></li>
                                 <li><a href="#"> Экскурсионный отдых </a></li>
                                 <li><a href="#">Пляжный отдых </a></li>
                                 <li><a href="#"> Горнолыжные туры</a></li>
                            </ul>                    
                        </div>
                        <div class="footer__column">
                            <p class="footer__column-name">
                             Туристам 
                            </p>
                            <ul class="footer__menu">
                                <li><a href="#">Туристам</a>
                                <li><a href="#">Акции и спецпредложения</a>
                                <li><a href="#">Памятка туриста</a>
                                <li><a href="#">Новости</a>
                                <li><a href="#">Подарочные сертификаты</a>
                                <li><a href="#">Как купить тур</a>
                                <li><a href="#">Раннее бронирование</a>
                                <li><a href="#">Горящие туры</a>
                                <li><a href="#">Туры в рассрочку</a>
                            </ul>                    
                        </div>
                        <div class="footer__column">
                            <p class="footer__column-name">
                             MICE 
                            </p>
                            <ul class="footer__menu">
                                <li><a href="#">Для корпоративных клиентов</a>
                                <li><a href="#">Примеры корпоративных программ</a>
                                <li><a href="#">Отели с конференц-залами</a>
                                <li><a href="#">Нестандартные размеще</a>
                            </ul>                    
                        </div>
                        <div class="footer__column footer__column_contacts">
                            <div class="footer__phone">
                                <div class="footer__phone-wrap">
                                    <p class="footer__phone-text">Звонок бесплатный</p>
                                    <a href="tel:78866873587" class="footer__phone-number">+7 886 687 35 87</a>
                                </div>
                                    <a href="#" class="btn footer__btn consultation">Консультация</a>
                               
                            </div>
                        </div>
                    </div>
                    <a href="/" class="logo footer__logo">
                        <img src="<?php echo get_template_directory_uri() ?>/images/logo.svg" alt=""  class="logo__img">

                        <img src="<?php echo get_template_directory_uri() ?>/images/logo-mobile.svg" class="logo__img-mob" alt="">
                    </a>
                </div>
                <div class="footer__subscribe">
                    <form action="#" class="subscribe-form">
                        <img src="<?php echo get_template_directory_uri() ?>/images/mail-footer.png" alt="" class="subscribe-form__icon">
                        <p class="subscribe-form__head">Подпишитесь на рассылку</p>
                        <p class="subscribe-form__text">И получайте информацию <br> о горящих предложениях онлайн</p>
                        <input type="text" class="form-control subscribe-form__input" name="name" placeholder="Имя">
                        <input type="text" class="form-control subscribe-form__input" name="phone" placeholder="Телефон">
                        <input type="submit" value="Подписаться" class="btn subscribe-form__btn">                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__grey">
        <div class="container">
            <div class="footer__grey-content">
                <p class="footer__socials">
                   Мы в социальных сетях:
                   <span>
                        <img src="<?php echo get_template_directory_uri() ?>/images/vk-blue.png" alt=""> 
                       <img src="<?php echo get_template_directory_uri() ?>/images/fb-blue.png" alt=""> 
                       <img src="<?php echo get_template_directory_uri() ?>/images/instagram-blue.png" alt=""> 
                       <img src="<?php echo get_template_directory_uri() ?>/images/youtube-blue.png" alt=""> 
                   </span>
                </p>
                <p class="footer__line"></p>
                <p class="footer__pay">
                    Оплата удобным способом:
                    <span>
                        <img src="<?php echo get_template_directory_uri() ?>/images/pay-card.png" alt="card">
                        <img src="<?php echo get_template_directory_uri() ?>/images/pay-card2.png" alt="maestro">
                        <img src="<?php echo get_template_directory_uri() ?>/images/pay-cardsber.png" alt="sberbank">
                        <img src="<?php echo get_template_directory_uri() ?>/images/pay-cardalpha.png" alt="alphabank">
                        <img src="<?php echo get_template_directory_uri() ?>/images/pay-iphone.png" alt="apple-pay">
                    </span>
                </p>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__bottom-content">
                <p>TEZTRAVEL.RU</p>
                <p>Сайт разработан в студии SVA</p>
            </div>
        </div>
    </div>
</footer>

<script src="js/jquery-3.4.1.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
