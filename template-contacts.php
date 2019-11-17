<?php
/*
Template Name: Контакты
*/

get_header();
?>

    <section class="bread">
  <div class="container">
    <p class="bread__row">
      <a href="#" class="bread__prev-link"><img src="<?php echo get_template_directory_uri() ?>/images/prev-info.png" alt="">Назад</a>
      <a href="#">Главная</a>
      <a href="#">Контакты</a>
    </p>
  </div>
</section>
<section class="contacts-offices">
  <div class="container">
    <div class="contacts-offices__item">
      <div class="contacts-offices__item-photo">
        <img src="<?php echo get_template_directory_uri() ?>/images/office1.jpg" alt="">
      </div>
      <div class="contacts-offices__item-info">
        <p class="contacts-offices__item-name h2">м. Коньково </p>
        <div class="contacts-offices__item-info-wrap">
          <p>Уполномоченное агентство TEZ TOUR</p>
          <p><b>Адрес:</b> 117647, г. Москва, ул. Профсоюзная, д. 109</p>
          <p><b>Телефон:</b> +7 (495) 420-27-11, (495) 788-83-87, <br>   online1 427-374-615 (Петрова Людмила)</p>
          <p><b>skype</b> ico  skype teztourkonkovo</p>
            <p><b>График работы пн-пт:</b> 10:00 - 20:00 сб, вс: 11:00 - 18:00</p>
        </div>
        <a href="#" class="btn contacts-offices__location">
          <img src="<?php echo get_template_directory_uri() ?>/images/location.png" alt="">
          Показать на карте
        </a>
      </div>
    </div>
    <div class="contacts-offices__item">
      <div class="contacts-offices__item-photo">
        <img src="<?php echo get_template_directory_uri() ?>/images/office2.jpg" alt="">
      </div>
      <div class="contacts-offices__item-info">
        <p class="contacts-offices__item-name h2">м. Лубянка</p>
        <div class="contacts-offices__item-info-wrap">
          <p>Уполномоченное агентство TEZ TOUR</p>
          <p><b>Адрес:</b> 109012, г. Москва, ул. Никольская, д. 25, ТЦ "Наутилус"</p>
          <p><b>Телефон:</b> +7 (495) 626-29-29</p>
          <p><b>График работы:</b> пн-пт: 10:00 - 21:00 сб, вс: 11:00 - 19:00</p>
        </div>
        <a href="#" class="btn contacts-offices__location">
          <img src="<?php echo get_template_directory_uri() ?>/images/location.png" alt="">
          Показать на карте
        </a>
      </div>
    </div>
    <div class="contacts-offices__item">
      <div class="contacts-offices__item-photo">
        <img src="<?php echo get_template_directory_uri() ?>/images/office3.jpg" alt="">
      </div>
      <div class="contacts-offices__item-info">
        <p class="contacts-offices__item-name h2">м. Серпуховская </p>
        <div class="contacts-offices__item-info-wrap">
          <p>Уполномоченное агентство TEZ TOUR</p>
            <p><b>Адрес:</b> 115093, г. Москва, ул. Большая Серпуховская, д.14/13, стр. 1, 2-й этаж, офис 23 <br>  один выход из метро, из стеклянных дверей направо, затем по улице прямо, идти 2 минуты, слева будет офисное здание, ориентир 4 металлические двери, вывеска при входе с правой стороны "ТЕЗ ТУР".</p>
          <p><b>Телефон:</b> +7 (495) 626-26-00 (многоканальный)</p>
             <p><b>E-mail:</b> office@tezclub.com</p>
          <p><b>График работы:</b> пн - пт: 10:00 - 20:00 сб, вс: выходные</p>
        </div>
        <a href="#" class="btn contacts-offices__location">
          <img src="<?php echo get_template_directory_uri() ?>/images/location.png" alt="">
          Показать на карте
        </a>
      </div>
    </div>
     <div class="contacts-offices__item">
      <div class="contacts-offices__item-photo">
        <img src="<?php echo get_template_directory_uri() ?>/images/office4.jpg" alt="">
      </div>
      <div class="contacts-offices__item-info">
        <p class="contacts-offices__item-name h2">м. Чертановская</p>
        <div class="contacts-offices__item-info-wrap">
        <p>Уполномоченное агентство TEZ TOUR</p>
        <p><b>Адрес:</b> 117639, Москва, Балаклавский просп., 5А, <br> 
         ТЦ "Штаер", 1-й этаж, офис 3-161А.</p>
        <p><b>Телефон:</b> +7 (495) 721-01-80</p>
        <p><b>График работы</b> пн, вт, ср, чт, пт, сб, вс: 10:00 - 21:00</p>
        </div>
        <a href="#" class="btn contacts-offices__location">
          <img src="<?php echo get_template_directory_uri() ?>/images/location.png" alt="">
          Показать на карте
        </a>
      </div>
    </div>
  </div>
</section>
<section class="contact-section contact-section_inner">
    <div class="container contact-section__container">
        <form action="#" class="contact-form">
            <img src="<?php echo get_template_directory_uri() ?>/images/women.png" alt=""  class="contact-form__image">
            <p class="contact-form__text">
                Получите бесплатную консультацию <br>по подбору тура
            </p>
            <div class="contact-form__input-wrap">
                <div class="contact-form__input-content">
                   <input type="text" class="form-control contact-form__input" placeholder="Имя"> 
                   <input type="text" class="form-control contact-form__input" placeholder="Телефон">
                   <input type="submit" class="btn contact-form__btn" value="Получить консультацию">
                </div>
                <p class="contact-form__warning>Нажимая на кнопу "Получить консультацию" вы соглашаетесь с условиями <a href="#">"Политики конфиденциальности"</a></p>
            </div>
        </form>
    </div>
</section>

<?php
get_footer();
