<?php
/*
Template Name: Главная
*/

get_header();
?>

    <section class="tour-search" id="tour-search">
    <div class="container tour-search__container">
        <form action="#" class="search-form">
            <div class="search-form__row">
                <p class="search-form__text">
                    Город вылета: <a href="#">Москва</a>
                </p>
                <input type="text" class="search-form__input form-control" placeholder="Доминикана">
                <input type="text" class="search-form__input form-control" placeholder="7 окт - 19 окт (10-15 ночей)">
                <div class="search-form__dropdown">
                    <input type="text" class="search-form__input form-control" placeholder="1 ребенок">
                    <ul class="search-form__dropdown-list d-none">
                        <li class="search-form__dropdown-item">1 ребенок</li>
                        <li class="search-form__dropdown-item">1 ребенок</li>
                        <li class="search-form__dropdown-item">1 ребенок</li>
                        <li class="search-form__dropdown-item">1 ребенок</li>
                    </ul>
                </div>
                <input type="submit" class="btn search-form_btn" value="НАйти тур">
            </div>
            <div class="row search-form__options">
                <div class="search-form__column search-form__column_food">
                    <p class="search-form__option-name">Питание</p>
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="without-food"  checked>
                        <label class="checkbox__label" for="without-food">
                          Без питания
                        </label>
                    </div>
                     <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="breakfast">
                        <label class="checkbox__label" for="breakfast">
                          Завтраки
                        </label>
                    </div>
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="two-eat">
                        <label class="checkbox__label" for="two-eat">
                          2-х разовое питание
                        </label>
                    </div>
                     <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="three-eat">
                        <label class="checkbox__label" for="three-eat">
                          3-х разовое питание
                        </label>
                    </div>
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="all-inclusive">
                        <label class="checkbox__label" for="all-inclusive">
                          Все включено
                        </label>
                    </div>
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="all-inclusive-ultra" checked>
                        <label class="checkbox__label" for="all-inclusive-ultra">
                          Ультра все включено
                        </label>
                    </div>   
                </div>
                <div class="search-form__column search-form__column_stars">
                    <p class="search-form__option-name">Звезды</p>
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="two-stars"  checked>
                        <label class="checkbox__label" for="two-stars">
                          <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="">
                          <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="">
                        </label>
                    </div>  
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="three-stars"  checked>
                        <label class="checkbox__label" for="three-stars">
                          <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="">
                          <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="">
                          <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="">
                        </label>
                    </div> 
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="four-stars">
                        <label class="checkbox__label" for="four-stars">
                          <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="">
                          <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="">
                          <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="">
                          <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="">
                        </label>
                    </div> 
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="five-stars">
                        <label class="checkbox__label" for="five-stars">
                          <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="">
                          <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="">
                          <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="">
                          <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="">
                          <img src="<?php echo get_template_directory_uri() ?>/images/star.svg" alt="">
                        </label>
                    </div> 
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="villas">
                        <label class="checkbox__label" for="villas">
                          Виллы
                        </label>
                    </div> 
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="apartments">
                        <label class="checkbox__label" for="apartments">
                          Апартаменты
                        </label>
                    </div>
                </div>
                <div class="search-form__column search-form__column_price">
                    <p class="search-form__option-name">Цена в рублях</p>
                    <div class="search-form__price-wrap slider">
                        <div class="search-form__price-slider slider__range"></div>
                       <div class="search-form__price-input">
                            <input type="text" class="slider__price slider__price_min form-control" id="value0" disabled>
                           <input type="text" id="value1" class="slider__price slider__price_max form-control" disabled>
                       </div>
                    </div>
                    <p class="search-form__option-name search-form__option-name_as">Оценки по отзывам</p>
                    <div class="search-form__option-reviews">
                        <div class="search-form__check-review checkbox">
                            <input type="checkbox" class="checkbox__check" id="seven-ratings">
                            <label class="checkbox__label" for="seven-ratings">
                              7+
                            </label>
                        </div> 
                        <div class="search-form__check-review checkbox">
                            <input type="checkbox" class="checkbox__check" id="eight-ratings">
                            <label class="checkbox__label" for="eight-ratings">
                              8+
                            </label>
                        </div> 
                        <div class="search-form__check-review checkbox">
                            <input type="checkbox" class="checkbox__check" id="nine-ratings">
                            <label class="checkbox__label" for="nine-ratings">
                              9+
                            </label>
                        </div> 
                        <div class="search-form__check-review checkbox">
                            <input type="checkbox" class="checkbox__check" id="without-ratings" checked>
                            <label class="checkbox__label" for="without-ratings">
                              Без оценок
                            </label>
                        </div> 
                    </div>                    
                </div>
                <div class="search-form__column search-form__column_beach">
                    <p class="search-form__option-name" id="beach">Пляж</p>
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="beach__sand"  checked>
                        <label class="checkbox__label" for="beach__sand">
                          Песок
                        </label>
                    </div>  
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="beach__first-line"  checked>
                        <label class="checkbox__label" for="beach__first-line">
                          Первая линия
                        </label>
                    </div> 
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="beach__hotel">
                        <label class="checkbox__label" for="beach__hotel">
                         Частный пляж отеля
                        </label>
                    </div> 
                </div>
                <div class="search-form__column search-form__column_operator">
                    <p class="search-form__option-name">Туроператоры</p>
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="operator__tez-tour"  checked>
                        <label class="checkbox__label" for="operator__tez-tour">
                          Тез тур
                        </label>
                    </div>  
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="operator__intourist">
                        <label class="checkbox__label" for="operator__intourist">
                          Интурист
                        </label>
                    </div> 
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="operator__pegas">
                        <label class="checkbox__label" for="operator__pegas">
                          Пегас
                        </label>
                    </div> 
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="operator__tui">
                        <label class="checkbox__label" for="operator__tui">
                          Туи
                        </label>
                    </div> 
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="operator__anex">
                        <label class="checkbox__label" for="operator__anex">
                         Анекс тур
                        </label>
                    </div> 
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="operator__koral">
                        <label class="checkbox__label" for="operator__koral">
                          Корал Тревел
                        </label>
                    </div>
                    <div class="search-form__check-wrap checkbox">
                        <input type="checkbox" class="checkbox__check" id="operator__sanmar">
                        <label class="checkbox__label" for="operator__sanmar">
                          Санмар
                        </label>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="top-tour">
    <div class="container top-tour__container">
        <p class="h1 top-tour__header">ТОП 10 туров на сегодня</p>
        <div class="top-tour__items">
            <a href="#" class="top-tour__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/tour1.jpg" alt="">
                <div class="top-tour__overlay">
                    <p class="top-tour__name">Коста-брава, Испания</p>
                    <p class="top-tour__cost">От 11 700 р</p>
                </div>
            </a>
            <a href="#" class="top-tour__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/tour2.jpg" alt="">
                <div class="top-tour__overlay">
                    <p class="top-tour__name">Коста-брава, Испания</p>
                    <p class="top-tour__cost">От 11 700 р</p>
                </div>
            </a>
             <a href="#" class="top-tour__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/tour3.jpg" alt="">
                <div class="top-tour__overlay">
                    <p class="top-tour__name">Коста-брава, Испания</p>
                    <p class="top-tour__cost">От 11 700 р</p>
                </div>
            </a>
             <a href="#" class="top-tour__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/tour4.jpg" alt="">
                <div class="top-tour__overlay">
                    <p class="top-tour__name">Коста-брава, Испания</p>
                    <p class="top-tour__cost">От 11 700 р</p>
                </div>
            </a>
             <a href="#" class="top-tour__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/tour5.jpg" alt="">
                <div class="top-tour__overlay">
                    <p class="top-tour__name">Коста-брава, Испания</p>
                    <p class="top-tour__cost">От 11 700 р</p>
                </div>
            </a>
            <a href="#" class="top-tour__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/tour1.jpg" alt="">
                <div class="top-tour__overlay">
                    <p class="top-tour__name">Коста-брава, Испания</p>
                    <p class="top-tour__cost">От 11 700 р</p>
                </div>
            </a>
            <a href="#" class="top-tour__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/tour2.jpg" alt="">
                <div class="top-tour__overlay">
                    <p class="top-tour__name">Коста-брава, Испания</p>
                    <p class="top-tour__cost">От 11 700 р</p>
                </div>
            </a>
             <a href="#" class="top-tour__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/tour6.jpg" alt="">
                <div class="top-tour__overlay">
                    <p class="top-tour__name">Коста-брава, Испания</p>
                    <p class="top-tour__cost">От 11 700 р</p>
                </div>
            </a>
             <a href="#" class="top-tour__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/tour7.jpg" alt="">
                <div class="top-tour__overlay">
                    <p class="top-tour__name">Коста-брава, Испания</p>
                    <p class="top-tour__cost">От 11 700 р</p>
                </div>
            </a>
             <a href="#" class="top-tour__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/tour5.jpg" alt="">
                <div class="top-tour__overlay">
                    <p class="top-tour__name">Коста-брава, Испания</p>
                    <p class="top-tour__cost">От 11 700 р</p>
                </div>
            </a>
        </div>
    </div>
</section>
<section class="advantages">
    <div class="container">
         <p class="h1 advantages__header">Наши преимущества</p>
         <div class="advantages__items">
             <div class="advantages__item">
                 <div class="advantages__item-content">
                     <div class="advantages__icon advantages__icon_percent">
                         <p class="advantages__circle"></p>
                         <img src="<?php echo get_template_directory_uri() ?>/images/percent.svg" alt="percent">
                     </div>
                     <p class="advantages__item-text">
                         <a href="#">Рассрочка</a> без процентов и предоплаты
                     </p>
                 </div>
             </div>
             <div class="advantages__item">
                 <div class="advantages__item-content">
                     <div class="advantages__icon advantages__icon_bag">
                         <p class="advantages__circle advantages__circle_bag"></p>
                         <img src="<?php echo get_template_directory_uri() ?>/images/bag.svg" alt="bag">
                     </div>
                     <p class="advantages__item-text">
                         Доставка документов курьером надом
                     </p>
                 </div>
             </div>
             <div class="advantages__item">
                 <div class="advantages__item-content">
                     <div class="advantages__icon advantages__icon_experience">
                         <p class="advantages__circle advantages__circle_experience"></p>
                         <img src="<?php echo get_template_directory_uri() ?>/images/experience.svg" alt="experience">
                     </div>
                     <p class="advantages__item-text">
                         20 лет работы <br> для вашего <br> комфорта
                     </p>
                 </div>
             </div>
             <div class="advantages__item">
                 <div class="advantages__item-content">
                     <div class="advantages__icon advantages__icon_price">
                         <p class="advantages__circle advantages__circle_price"></p>
                         <img src="<?php echo get_template_directory_uri() ?>/images/price.svg" alt="experience">
                     </div>
                     <p class="advantages__item-text">
                         Лучшие цены <br> на лучшие <br> туры
                     </p>
                 </div>
             </div>
         </div>
    </div>
</section>
<section class="contact-section">
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
<section class="hot-tours" id="hot-tours">
    <div class="container">
        <p class="h1 hot-tours__header">Горящие туры</p>
        <div class="hot-tours__items tuor-slider">
            <div class="hot-tour">
                <img src="<?php echo get_template_directory_uri() ?>/images/hot-tour1.jpg" class="hot-tour__image" alt="turkey">
                <div class="hot-tour__overlay">
                    <p class="hot-tour__name">Турция</p>
                    <div class="hot-tour__item">
                        <a href="#" class="hot-tour__place">Кемер</a>
                        <p class="hot-tour__cost">от 14 186 р./чел</p>
                    </div>
                      
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">Сиде</a>
                        <p class="hot-tour__cost">от 17 558 р./чел </p>
                    </div>
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">Белек</a>
                        <p class="hot-tour__cost">от 22 388 р./чел</p> 
                    </div>

                </div>
                
            </div>
            <div class="hot-tour">
                <img src="<?php echo get_template_directory_uri() ?>/images/hot-tour2.jpg" class="hot-tour__image" alt="Greece">
                <div class="hot-tour__overlay">
                    <p class="hot-tour__name">Греция</p>
                    <div class="hot-tour__item">
                        <a href="#" class="hot-tour__place">остров Крит</a>
                        <p class="hot-tour__cost">от 20 236 р./чел</p>
                    </div>
                      
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">остров Родос</a>
                        <p class="hot-tour__cost">от 20 959 р./чел</p>
                    </div>
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">остров Корфу</a>
                        <p class="hot-tour__cost">от 16 826 р./чел</p>
                    </div>
                </div>
            </div>
            <div class="hot-tour">
                <img src="<?php echo get_template_directory_uri() ?>/images/hot-tour3.jpg" class="hot-tour__image" alt="Greece">
                <div class="hot-tour__overlay">
                    <p class="hot-tour__name">Кипр</p>
                    <div class="hot-tour__item">
                        <a href="#" class="hot-tour__place">Айя-Напа </a>
                        <p class="hot-tour__cost">от 22 728 р./чел</p>
                    </div>
                      
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">Пафос </a>
                        <p class="hot-tour__cost">от 23 381 р./чел</p>
                    </div>
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">Протарас</a>
                        <p class="hot-tour__cost">от 21 214 р. /чел</p>
                    </div>
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">остров Сицилия</a>
                        <p class="hot-tour__cost">от 24 803 р./чел</p>
                    </div>
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">Лигурия  </a>
                        <p class="hot-tour__cost">от 28 582 р./чел</p>
                    </div>  
                </div>
            </div>
            <div class="hot-tour">
                <img src="<?php echo get_template_directory_uri() ?>/images/hot-tour4.jpg" class="hot-tour__image" alt="Greece">
                <div class="hot-tour__overlay">
                    <p class="hot-tour__name">Турция</p>
                    <div class="hot-tour__item">
                        <a href="#" class="hot-tour__place"> Кемер</a>
                        <p class="hot-tour__cost">от 14 186 р./чел</p>
                    </div>
                      
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">Сиде </a>
                        <p class="hot-tour__cost">от 17 558 р./чел</p>
                    </div>
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">Белек</a>
                        <p class="hot-tour__cost">от 22 388 р./чел</p>
                    </div>
                </div>
            </div>
             <div class="hot-tour">
                <img src="<?php echo get_template_directory_uri() ?>/images/hot-tour1.jpg" class="hot-tour__image" alt="turkey">
                <div class="hot-tour__overlay">
                    <p class="hot-tour__name">Турция</p>
                    <div class="hot-tour__item">
                        <a href="#" class="hot-tour__place">Кемер</a>
                        <p class="hot-tour__cost">от 14 186 р./чел</p>
                    </div>
                      
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">Сиде</a>
                        <p class="hot-tour__cost">от 17 558 р./чел </p>
                    </div>
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">Белек</a>
                        <p class="hot-tour__cost">от 22 388 р./чел</p> 
                    </div>

                </div>
                
            </div>
            <div class="hot-tour">
                <img src="<?php echo get_template_directory_uri() ?>/images/hot-tour2.jpg" class="hot-tour__image" alt="Greece">
                <div class="hot-tour__overlay">
                    <p class="hot-tour__name">Греция</p>
                    <div class="hot-tour__item">
                        <a href="#" class="hot-tour__place">остров Крит</a>
                        <p class="hot-tour__cost">от 20 236 р./чел</p>
                    </div>
                      
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">остров Родос</a>
                        <p class="hot-tour__cost">от 20 959 р./чел</p>
                    </div>
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">остров Корфу</a>
                        <p class="hot-tour__cost">от 16 826 р./чел</p>
                    </div>
                </div>
            </div>
            <div class="hot-tour">
                <img src="<?php echo get_template_directory_uri() ?>/images/hot-tour3.jpg" class="hot-tour__image" alt="Greece">
                <div class="hot-tour__overlay">
                    <p class="hot-tour__name">Кипр</p>
                    <div class="hot-tour__item">
                        <a href="#" class="hot-tour__place">Айя-Напа </a>
                        <p class="hot-tour__cost">от 22 728 р./чел</p>
                    </div>
                      
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">Пафос </a>
                        <p class="hot-tour__cost">от 23 381 р./чел</p>
                    </div>
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">Протарас</a>
                        <p class="hot-tour__cost">от 21 214 р. /чел</p>
                    </div>
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">остров Сицилия</a>
                        <p class="hot-tour__cost">от 24 803 р./чел</p>
                    </div>
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">Лигурия  </a>
                        <p class="hot-tour__cost">от 28 582 р./чел</p>
                    </div>  
                </div>
            </div>
            <div class="hot-tour">
                <img src="<?php echo get_template_directory_uri() ?>/images/hot-tour4.jpg" class="hot-tour__image" alt="Greece">
                <div class="hot-tour__overlay">
                    <p class="hot-tour__name">Турция</p>
                    <div class="hot-tour__item">
                        <a href="#" class="hot-tour__place"> Кемер</a>
                        <p class="hot-tour__cost">от 14 186 р./чел</p>
                    </div>
                      
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">Сиде </a>
                        <p class="hot-tour__cost">от 17 558 р./чел</p>
                    </div>
                    <div class="hot-tour__item">
                        <a href="" class="hot-tour__place">Белек</a>
                        <p class="hot-tour__cost">от 22 388 р./чел</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="advantages">
    <div class="container">
         <p class="h1 advantages__header">В каждый тур включено</p>
         <div class="advantages__items">
             <div class="advantages__item">
                 <div class="advantages__item-content">
                     <div class="advantages__icon advantages__icon_honeymoon">
                         <p class="advantages__circle advantages__circle advantages__circle_honeymoon"></p>
                         <img src="<?php echo get_template_directory_uri() ?>/images/honeymoon.png" alt="percent">
                     </div>
                     <p class="advantages__item-text">
                         Комфортный <br>перелет
                     </p>
                 </div>
             </div>
             <div class="advantages__item">
                 <div class="advantages__item-content">
                     <div class="advantages__icon advantages__icon_hotel">
                         <p class="advantages__circle advantages__circle_hotel"></p>
                         <img src="<?php echo get_template_directory_uri() ?>/images/hotel-adv.png" alt="bag">
                     </div>
                     <p class="advantages__item-text">
                         Проживание <br>в отеле
                     </p>
                 </div>
             </div>
             <div class="advantages__item">
                 <div class="advantages__item-content">
                     <div class="advantages__icon advantages__icon_eat">
                         <p class="advantages__circle advantages__circle_eat"></p>
                         <img src="<?php echo get_template_directory_uri() ?>/images/eat.png" alt="experience">
                     </div>
                     <p class="advantages__item-text">
                         Питание и<br> обслуживание
                     </p>
                 </div>
             </div>
             <div class="advantages__item">
                 <div class="advantages__item-content">
                     <div class="advantages__icon advantages__icon_guide">
                         <p class="advantages__circle advantages__circle_guide"></p>
                         <img src="<?php echo get_template_directory_uri() ?>/images/guide.png" alt="experience">
                     </div>
                     <p class="advantages__item-text">
                         Трансфер <br>и сопровождение
                     </p>
                 </div>
             </div>
         </div>
    </div>
</section>
<section class="tourist-guide">
    <div class="container">
        <p class="h1 tourist-guide__header">Справочник туриста</p>
        <div class="tourist-guide__items tourist-guide__items_main">
            <a href="#" class="tourist-guide__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/guide1.jpg" alt="">
                <div class="tourist-guide__item-overlay">
                    <p class="tourist-guide__name">
                        Песчаная буря в Египте
                    </p>
                    <div class="tourist-guide__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                    </div>
                    <div class="tourist-guide__item-info">
                        <p class="tourist-guide__info-content">
                            <img src="<?php echo get_template_directory_uri() ?>/images/view.png" alt="view" class="tourist-guide__inf-icon">
                            <span class="tourist-guide__info-count">155</span>
                        </p>
                         <p class="tourist-guide__info-content">
                            <img src="<?php echo get_template_directory_uri() ?>/images/comments.png" alt="view" class="tourist-guide__inf-icon">
                            <span class="tourist-guide__info-count">85</span>
                        </p>
                        <p class="tourist-guide__info-content">
                            <img src="<?php echo get_template_directory_uri() ?>/images/likes.png" alt="view" class="tourist-guide__inf-icon">
                            <span class="tourist-guide__info-count">987</span>
                        </p>
                    </div>
                </div>
            </a>
            <a href="#" class="tourist-guide__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/guide2.jpg" alt="">
                <div class="tourist-guide__item-overlay">
                    <p class="tourist-guide__name">
                        Как выбрать тур и сэкономить до 50%
                    </p>
                    <div class="tourist-guide__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                    </div>
                    <div class="tourist-guide__item-info">
                        <p class="tourist-guide__info-content">
                            <img src="<?php echo get_template_directory_uri() ?>/images/view.png" alt="view" class="tourist-guide__inf-icon">
                            <span class="tourist-guide__info-count">155</span>
                        </p>
                         <p class="tourist-guide__info-content">
                            <img src="<?php echo get_template_directory_uri() ?>/images/comments.png" alt="view" class="tourist-guide__inf-icon">
                            <span class="tourist-guide__info-count">85</span>
                        </p>
                        <p class="tourist-guide__info-content">
                            <img src="<?php echo get_template_directory_uri() ?>/images/likes.png" alt="view" class="tourist-guide__inf-icon">
                            <span class="tourist-guide__info-count">987</span>
                        </p>
                    </div>
                </div>
            </a>
            <a href="#" class="tourist-guide__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/guide3.jpg" alt="">
                <div class="tourist-guide__item-overlay">
                    <p class="tourist-guide__name">
                        Лучшие туры для семейного отдыха
                    </p>
                    <div class="tourist-guide__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                    </div>
                    <div class="tourist-guide__item-info">
                        <p class="tourist-guide__info-content">
                            <img src="<?php echo get_template_directory_uri() ?>/images/view.png" alt="view" class="tourist-guide__inf-icon">
                            <span class="tourist-guide__info-count">155</span>
                        </p>
                         <p class="tourist-guide__info-content">
                            <img src="<?php echo get_template_directory_uri() ?>/images/comments.png" alt="view" class="tourist-guide__inf-icon">
                            <span class="tourist-guide__info-count">85</span>
                        </p>
                        <p class="tourist-guide__info-content">
                            <img src="<?php echo get_template_directory_uri() ?>/images/likes.png" alt="view" class="tourist-guide__inf-icon">
                            <span class="tourist-guide__info-count">987</span>
                        </p>
                    </div>
                </div>
            </a>
            <a href="#" class="tourist-guide__item">
                <img src="<?php echo get_template_directory_uri() ?>/images/guide4.jpg" alt="">
                <div class="tourist-guide__item-overlay">
                    <p class="tourist-guide__name">
                        Лучшие туры для семейного отдыха
                    </p>
                    <div class="tourist-guide__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
                    </div>
                    <div class="tourist-guide__item-info">
                        <p class="tourist-guide__info-content">
                            <img src="<?php echo get_template_directory_uri() ?>/images/view.png" alt="view" class="tourist-guide__inf-icon">
                            <span class="tourist-guide__info-count">155</span>
                        </p>
                         <p class="tourist-guide__info-content">
                            <img src="<?php echo get_template_directory_uri() ?>/images/comments.png" alt="view" class="tourist-guide__inf-icon">
                            <span class="tourist-guide__info-count">85</span>
                        </p>
                        <p class="tourist-guide__info-content">
                            <img src="<?php echo get_template_directory_uri() ?>/images/likes.png" alt="view" class="tourist-guide__inf-icon">
                            <span class="tourist-guide__info-count">987</span>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <a href="#" class="tourist-guide__read-more">Читать еще  <span>(еще 215)</span></a>
    </div>
</section>

<?php
get_footer();
