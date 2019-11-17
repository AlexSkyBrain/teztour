<?php
/*
Template Name: Корпоративным клиентам
*/

get_header();
?>

    <section class="exclisive-banner"  style="background-image: url(<?php echo get_template_directory_uri() ?>/images/banner.png);">
  <div class="container">
    <div class="exclisive-banner__content">
      <div class="exclisive-banner__left">
        <div class="exclisive-banner__text">Баннер с рекламой какого-либо эксклюзивного предложения</div>
        <a href="#" class="btn exclisive-banner_btn">Перейти</a>
      </div>
    </div>
  </div>
</section>
<section class="actual-offer actual-offer_corporation">
  <div class="container">
    <p class="h2 actual-offer__header">Актуальные предложения</p>
    <div class="actual-offer__wrap actual-offer__wrap_corporation">
      <a href="#" class="offer">
        <img src="<?php echo get_template_directory_uri() ?>/images/corp1.jpg" alt="Отдых">
        <div class="offer__overlay">
          Лучшие цены <br> от TEZ TOUR
        </div>
      </a>
      <a href="#" class="offer">
        <img src="<?php echo get_template_directory_uri() ?>/images/corp2.jpg" alt="Отдых">
        <div class="offer__overlay">
          Новогодние туры
        </div>
      </a>
    
      <a href="#" class="offer">
        <img src="<?php echo get_template_directory_uri() ?>/images/corp3.jpg" alt="Отдых">
        <div class="offer__overlay">
          Свадебные туры
        </div>
      </a>
      <a href="#" class="offer">
        <img src="<?php echo get_template_directory_uri() ?>/images/corp4.jpg" alt="Отдых">
        <div class="offer__overlay">
         VIP отдых и услуги
        </div>
      </a>
     <a href="#" class="offer">
        <img src="<?php echo get_template_directory_uri() ?>/images/corp1.jpg" alt="Отдых">
        <div class="offer__overlay">
          Лучшие цены <br> от TEZ TOUR
        </div>
      </a>
      <a href="#" class="offer">
        <img src="<?php echo get_template_directory_uri() ?>/images/corp2.jpg" alt="Отдых">
        <div class="offer__overlay">
          Новогодние туры
        </div>
      </a>
    
      <a href="#" class="offer">
        <img src="<?php echo get_template_directory_uri() ?>/images/corp3.jpg" alt="Отдых">
        <div class="offer__overlay">
          Свадебные туры
        </div>
      </a>
      <a href="#" class="offer">
        <img src="<?php echo get_template_directory_uri() ?>/images/corp4.jpg" alt="Отдых">
        <div class="offer__overlay">
         VIP отдых и услуги
        </div>
      </a>
    </div>
    <p class="actual-offer__more">
      <a href="#">Показать больше  <span>(еще 215)</span></a>
    </p>
  </div>
</section>
<section class="tour-text">
<div class="container"> 
   <div class="select-info__text">
       <p class="h2">SEO статья</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
           
       <p class="h3">Маленький заголовок</p>
   <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
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
                <p class="contact-form__warning">Нажимая на кнопу "Получить консультацию" вы соглашаетесь с условиями <a href="#">"Политики конфиденциальности"</a></p>
            </div>
        </form>
    </div>
</section>

<?php
get_footer();
