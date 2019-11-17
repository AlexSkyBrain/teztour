<?php
/*
Template Name: Туры
*/

get_header();
?>

    <section class="tour-search" id="tour-search">
    <div class="container tour-search__container">
        <form action="#" class="search-form search-form_tour">
            <p class="search-form__header h2">Подбор тура</p>
            <div class="search-form__row">
                 <label class="search-form__lbl-left search-form__input-header">
                    Откуда
                    <div class="search-form__dropdown search-form__dropdown_mt">
                        <input type="text" class="search-form__input form-control" placeholder="Москва">
                        <ul class="search-form__dropdown-list d-none">
                            <li class="search-form__dropdown-item">Киев</li>
                            <li class="search-form__dropdown-item">Минск</li>
                            <li class="search-form__dropdown-item">Санкт-петербург</li>
                            <li class="search-form__dropdown-item">Вильнюс</li>
                            <li class="search-form__dropdown-item">Новосибирск</li>
                        </ul>
                     </div>
                 </label>
                 <label class="search-form__lbl-left search-form__input-header ">
                    Куда
                    <div class="search-form__dropdown search-form__dropdown_mt">
                        <input type="text" class="search-form__input form-control" placeholder="Москва">
                        <ul class="search-form__dropdown-list d-none">
                            <li class="search-form__dropdown-item">Киев</li>
                            <li class="search-form__dropdown-item">Минск</li>
                            <li class="search-form__dropdown-item">Санкт-петербург</li>
                            <li class="search-form__dropdown-item">Вильнюс</li>
                            <li class="search-form__dropdown-item">Новосибирск</li>
                        </ul>
                     </div>
                 </label>
                 <label class="search-form__input-header search-form__input-calendar">
                    Заезд
                     <div class="search-form__calendar">
                         <input type="text" class="form-control calendar search-form__date" />
                     </div>
                 </label>
                 <label class="search-form__input-header search-form__input-header_last search-form__input-calendar">
                    Выезд
                     <div class="search-form__calendar">
                         <input type="text" class="form-control calendar search-form__date" />
                     </div>
                 </label>
                    
            </div>
            <div class="row search-form__options search-form__options_tour">
                <div class="search-form__column search-form__column_full">
                    <label class="search-form__input-header search-form__input-header-m">Курорт</label>
                   <div class="search-form__hotel-wrap">
                        <div class="search-form__hotel">
                           <div class="search-form__check-wrap search-form__check-all-hotel checkbox">
                               <input type="checkbox" class="checkbox__check" id="all-resorts">
                               <label class="checkbox__label " for="all-resorts">
                                 Все курорты
                               </label>
                           </div>
                           <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="antalya">
                               <label class="checkbox__label" for="antalya">
                                 Анталия
                               </label>
                           </div>
                           <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="belek">
                               <label class="checkbox__label" for="belek">
                                Белек
                               </label>
                           </div>
                           <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="bordum">
                               <label class="checkbox__label" for="bordum">
                                Бордум
                               </label>
                           </div>
                           <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="gocek">
                               <label class="checkbox__label" for="gocek">
                                Гёчек
                               </label>
                           </div>
                           <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="didim">
                               <label class="checkbox__label" for="didim">
                                Дидим
                               </label>
                           </div>
                           <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="ing">
                               <label class="checkbox__label" for="ing">
                                Инжеком - Анталия
                               </label>
                           </div>
                           <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="kemer">
                               <label class="checkbox__label" for="kemer">
                                Кемер
                               </label>
                           </div>
                            <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="kemer1">
                               <label class="checkbox__label" for="kemer1">
                                Кемер
                               </label>
                           </div>
                          <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="kemer2">
                               <label class="checkbox__label" for="kemer2">
                                Кемер
                               </label>
                           </div>
                           <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="kemer3">
                               <label class="checkbox__label" for="kemer3">
                                Кемер
                               </label>
                           </div>
                           <div class="search-form__shadow"></div>
                       </div>
                   </div>
                </div>
                <div class="search-form__column search-form__column_full">
                    <label class="search-form__input-header search-form__input-header-m">Отель</label>
                    <div class="search-form__hotel-row">
                        <div class="search-form__hotel-row-wr">
                            <div class="search-form__dropdown search-form__dropdown_hotel">
                               <input type="text" class="search-form__input form-control" placeholder="Special Cat.">
                               <ul class="search-form__dropdown-list d-none">
                                   <li class="search-form__dropdown-item">Киев</li>
                                   <li class="search-form__dropdown-item">Минск</li>
                                   <li class="search-form__dropdown-item">Санкт-петербург</li>
                                   <li class="search-form__dropdown-item">Вильнюс</li>
                                   <li class="search-form__dropdown-item">Новосибирск</li>
                               </ul>
                           </div> 
                           <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="better-hotel">
                               <label class="checkbox__label" for="better-hotel">
                                И лучше
                               </label>
                           </div>
                       </div>
                       <div class="search-form__hotel-row-wr">
                            <div class="search-form__dropdown search-form__dropdown_hotel">
                               <input type="text" class="search-form__input form-control" placeholder="Без питания">
                               <ul class="search-form__dropdown-list d-none">
                                   <li class="search-form__dropdown-item">Только завтраки</li>
                                   <li class="search-form__dropdown-item">Минск</li>
                                   <li class="search-form__dropdown-item">Санкт-петербург</li>
                                   <li class="search-form__dropdown-item">Вильнюс</li>
                                   <li class="search-form__dropdown-item">Новосибирск</li>
                               </ul>
                           </div> 
                           <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="better-food">
                               <label class="checkbox__label" for="better-food">
                                И лучше
                               </label>
                           </div>
                       </div>
                    </div>
                    <label class="search-form__input-header search-form__filter-header">Фильтр по названию</label>
                     <div class="search-form__hotel-wrap">
                        <div class="search-form__hotel search-form__filter">
                           <div class="search-form__check-wrap search-form__check-all-hotel checkbox">
                               <p class="search-form__input-header search-form__input-header_filter">
                                   текст    
                               </p> 
                           </div>
                           <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="gocek1">
                               <label class="checkbox__label" for="gocek1">
                                Гёчек
                               </label>
                           </div>
                           <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="didim1">
                               <label class="checkbox__label" for="didim1">
                                Дидим
                               </label>
                           </div>
                           <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="antalya2">
                               <label class="checkbox__label" for="antalya2">
                                 Анталия
                               </label>
                           </div>
                            <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="belek">
                               <label class="checkbox__label" for="belek">
                                Белек
                               </label>
                           </div>
                           <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="bordum2">
                               <label class="checkbox__label" for="bordum2">
                                Бордум
                               </label>
                           </div>
                           <div class="search-form__check-wrap checkbox">
                               <input type="checkbox" class="checkbox__check" id="gocek2">
                               <label class="checkbox__label" for="gocek2">
                                Гёчек
                               </label>
                           </div>
                           
                           <div class="search-form__shadow"></div>
                       </div>
                   </div>
                </div>
                <div class="search-form__column search-form__column3 search-form__column_full">
                    <label class="search-form__input-header search-form__input-header-m">Количество ночей</label>
                    <div class="search-form__row-count-night">
                         <label class="search-form__night-count-lbl">От  
                            <input type="text" class="form-control search-form__night-count" placeholder="3">
                        </label>
                         <label class="search-form__night-count-lbl">До  
                            <input type="text" class="form-control search-form__night-count" placeholder="5">
                        </label>
                     </div>

                    <label class="search-form__lbl-left search-form__input-header search-form__input-header-m search-form__lbl-right">
                       Тип размещения
                        <div class="search-form__dropdown search-form__dropdown-type search-form__dropdown_mt">
                            <input type="text" class="search-form__input form-control" placeholder="2 взрослых">
                            <ul class="search-form__dropdown-list d-none">
                                <li class="search-form__dropdown-item">Киев</li>
                                <li class="search-form__dropdown-item">Минск</li>
                                <li class="search-form__dropdown-item">Санкт-петербург</li>
                                <li class="search-form__dropdown-item">Вильнюс</li>
                                <li class="search-form__dropdown-item">Новосибирск</li>
                            </ul>
                         </div>
                     </label>
                     <div class="search-form__child-row">
                        <label class="search-form__lbl-left search-form__input-header search-form__input-m">
                       Возраст ребенка
                          <div class="search-form__dropdown  search-form__dropdown-type search-form__dropdown_mt">
                              <input type="text" class="search-form__input search-form__input-old form-control" placeholder="Лет">
                              <ul class="search-form__dropdown-list d-none">
                                  <li class="search-form__dropdown-item">1</li>
                                  <li class="search-form__dropdown-item">2</li>
                                  <li class="search-form__dropdown-item">3</li>
                                  <li class="search-form__dropdown-item">4</li>
                                  <li class="search-form__dropdown-item">5</li>
                              </ul>
                           </div>
                       </label>
                       <div class="search-form__plus"></div>
                     </div>

                    <label class="search-form__input-header search-form__input-header-m">Стоимость Руб.</label>
                    <div class="search-form__row-count-night">
                         <label class="search-form__night-count-lbl">От  
                            <input type="text" class="form-control search-form__night-count" placeholder="">
                        </label>
                         <label class="search-form__night-count-lbl">До  
                            <input type="text" class="form-control search-form__night-count" placeholder="580000">
                        </label>
                     </div>
                     <div class="search-form__button-row">
                       <div class="search-form__check-wrap search-form__check-rocomendate checkbox">
                           <input type="checkbox" class="checkbox__check" id="recomendate">
                           <label class="checkbox__label" for="recomendate">
                            Туры рекомендованные Tez
                           </label>
                       </div>
                       <img src="<?php echo get_template_directory_uri() ?>/images/recomendate.png" alt="">
                       <input type="submit" value="Поиск" class="btn search-form__btn-send">
                     </div>
                    </div>
                </div>
        </form>
    </div>
</section>
<section class="tours">
  <div class="container">
    <div class="tour">
      <div class="tour__image">
        <img src="<?php echo get_template_directory_uri() ?>/images/image-tour.jpg" alt="Derin luxury hotel 3">
      </div>
      <div class="tour__info">
        <div class="tour__info-col">
          <p class="tour__info-count">
            <span>6 ночей</span>
            <span>2 взрослых</span>
          </p>
          <p class="tour__info-date">
            <span>19.09</span> - <span>25.09</span>
          </p>
          <p class="tour__info-icons">
            <img src="<?php echo get_template_directory_uri() ?>/images/airplane.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/images/home.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/images/car.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/images/med.png" alt="">
          </p>
        </div>
        <div class="tour__info-col tour__info-col_2">
          <p class="tour__address">
            Турция, Кемер
          </p>
          <p class="tour__hotel-name">Derin luxury hotel 3</p>
          <p class="tour__hotel-info">Номера: Standart</p>
          <p class="tour__hotel-info">Питание: Только завтраки</p>
          <p class="tour__hotel-info"><a href="#">Показать варианты в этот отель (17)</a></p>
        </div>
        <div class="tour__info-col tour__info-col_3">
          <a href="Купить онлайн" class="tour__buy-online">Купить онлайн</a>   
          <p class="tour__cost">33 980 ₽</p>
          <a href="#" class="tour__order btn З">Заказать</a>    
        </div>
      </div>
    </div>
    <div class="tour">
      <div class="tour__image">
        <img src="<?php echo get_template_directory_uri() ?>/images/image-tour2.jpg" alt="Derin luxury hotel 3">
      </div>
      <div class="tour__info">
        <div class="tour__info-col">
          <p class="tour__info-count">
            <span>6 ночей</span>
            <span>2 взрослых</span>
          </p>
          <p class="tour__info-date">
            <span>19.09</span> - <span>25.09</span>
          </p>
          <p class="tour__info-icons">
            <img src="<?php echo get_template_directory_uri() ?>/images/airplane.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/images/home.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/images/car.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/images/med.png" alt="">
          </p>
        </div>
        <div class="tour__info-col tour__info-col_2">
          <p class="tour__address">
            Турция, Кемер
          </p>
          <p class="tour__hotel-name">Derin luxury hotel 3</p>
          <p class="tour__hotel-info">Номера: Standart</p>
          <p class="tour__hotel-info">Питание: Только завтраки</p>
          <p class="tour__hotel-info"><a href="#">Показать варианты в этот отель (17)</a></p>
        </div>
        <div class="tour__info-col tour__info-col_3">
          <a href="Купить онлайн" class="tour__buy-online">Купить онлайн</a>   
          <p class="tour__cost">33 980 ₽</p>
          <a href="#" class="tour__order btn З">Заказать</a>    
        </div>
      </div>
    </div>
    <div class="tour">
      <div class="tour__image">
        <img src="<?php echo get_template_directory_uri() ?>/images/image-tour3.jpg" alt="Derin luxury hotel 3">
      </div>
      <div class="tour__info">
        <div class="tour__info-col">
          <p class="tour__info-count">
            <span>6 ночей</span>
            <span>2 взрослых</span>
          </p>
          <p class="tour__info-date">
            <span>19.09</span> - <span>25.09</span>
          </p>
          <p class="tour__info-icons">
            <img src="<?php echo get_template_directory_uri() ?>/images/airplane.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/images/home.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/images/car.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/images/med.png" alt="">
          </p>
        </div>
        <div class="tour__info-col tour__info-col_2">
          <p class="tour__address">
            Турция, Кемер
          </p>
          <p class="tour__hotel-name">Derin luxury hotel 3</p>
          <p class="tour__hotel-info">Номера: Standart</p>
          <p class="tour__hotel-info">Питание: Только завтраки</p>
          <p class="tour__hotel-info"><a href="#">Показать варианты в этот отель (17)</a></p>
        </div>
        <div class="tour__info-col tour__info-col_3">
          <a href="Купить онлайн" class="tour__buy-online">Купить онлайн</a>   
          <p class="tour__cost">33 980 ₽</p>
          <a href="#" class="tour__order btn З">Заказать</a>    
        </div>
      </div>
    </div>
    <div class="tour">
      <div class="tour__image">
        <img src="<?php echo get_template_directory_uri() ?>/images/image-tour4.jpg" alt="Derin luxury hotel 3">
      </div>
      <div class="tour__info">
        <div class="tour__info-col">
          <p class="tour__info-count">
            <span>6 ночей</span>
            <span>2 взрослых</span>
          </p>
          <p class="tour__info-date">
            <span>19.09</span> - <span>25.09</span>
          </p>
          <p class="tour__info-icons">
            <img src="<?php echo get_template_directory_uri() ?>/images/airplane.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/images/home.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/images/car.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/images/med.png" alt="">
          </p>
        </div>
        <div class="tour__info-col tour__info-col_2">
          <p class="tour__address">
            Турция, Кемер
          </p>
          <p class="tour__hotel-name">Derin luxury hotel 3</p>
          <p class="tour__hotel-info">Номера: Standart</p>
          <p class="tour__hotel-info">Питание: Только завтраки</p>
          <p class="tour__hotel-info"><a href="#">Показать варианты в этот отель (17)</a></p>
        </div>
        <div class="tour__info-col tour__info-col_3">
          <a href="Купить онлайн" class="tour__buy-online">Купить онлайн</a>   
          <p class="tour__cost">33 980 ₽</p>
          <a href="#" class="tour__order btn З">Заказать</a>    
        </div>
      </div>
    </div>
    <a href="#" class="tours__more">Показать больше  <span>(еще 215)</span></a>
  </div>
</section>
<section class="advantages advantages_order">
    <div class="container">
         <p class="h1 advantages__header">Как заказать онлайн?</p>
         <div class="advantages__items advantages__items_order">
             <div class="advantages__item">
                 <div class="advantages__item-content">
                     <div class="advantages__icon advantages__icon_country">
                         <p class="advantages__circle  advantages__circle_country"></p>
                         <img src="<?php echo get_template_directory_uri() ?>/images/earth.png" alt="percent">
                     </div>
                     <p class="advantages__item-text">
                         Выберите страну, даты вылета и <br>кол-во человек
                     </p>
                 </div>
             </div>
             <div class="advantages__item">
                 <div class="advantages__item-content">
                     <div class="advantages__icon advantages__icon_home2">
                         <p class="advantages__circle advantages__circle_home2"></p>
                         <img src="<?php echo get_template_directory_uri() ?>/images/home2.png" alt="bag">
                     </div>
                     <p class="advantages__item-text">
                         Кликните на понравившийся <br>вам отель
                     </p>
                 </div>
             </div>
             <div class="advantages__item">
                 <div class="advantages__item-content">
                     <div class="advantages__icon advantages__icon_food2">
                         <p class="advantages__circle advantages__circle_food2"></p>
                         <img src="<?php echo get_template_directory_uri() ?>/images/food.png" alt="experience">
                     </div>
                     <p class="advantages__item-text">
                        Выберите <br>параметры тура
                     </p>
                 </div>
             </div>
             <div class="advantages__item">
                 <div class="advantages__item-content">
                     <div class="advantages__icon advantages__icon_beach">
                         <p class="advantages__circle advantages__circle_beach"></p>
                         <img src="<?php echo get_template_directory_uri() ?>/images/beach.png" alt="experience">
                     </div>
                     <p class="advantages__item-text">
                         Нажмите "Подобрать" и выберите тур из предложенных
                     </p>
                 </div>
             </div>
             <div class="advantages__item">
                 <div class="advantages__item-content">
                     <div class="advantages__icon advantages__icon_pay">
                         <p class="advantages__circle advantages__circle_pay"></p>
                         <img src="<?php echo get_template_directory_uri() ?>/images/card2.png" alt="experience">
                     </div>
                     <p class="advantages__item-text">Проведите оплату банковской картой онлайн</p>
                 </div>
             </div>
         </div>
    </div>
</section>
<section class="buy-section">
  <div class="container">
    <div class="buy-section__wrap">
      <div class="buy-section__left">
        <p class="buy-section__header h1">Купить On-line</p>
        <p class="buy-section__buy-step">Оформление покупки - 10 минут</p>
        <p class="buy-section__buy-step">Личный онлайн консультант (телефон / чат)</p>
        <p class="buy-section__buy-step">Доставка документов надом</p>
        <a href="" class="buy-section__btn btn">Купить тур On-Line</a>
      </div>
       <div class="buy-section__right">
        <p class="buy-section__header h1">Купить в офисе</p>
        <p class="buy-section__buy-step">5 офисов по Москве в 3 минутах от метро</p>
        <p class="buy-section__buy-step">Личный консультант, вкусный кофе, живое общение</p>
        <p class="buy-section__buy-step">Оформление тура и выдача док-ов в течение 30 минут</p>
        <a href="" class="buy-section__btn btn">Купить в офисе</a>
      </div>
    </div>
  </div>
</section>
<section class="reviews-sect">
  <div class="container">
    <div class="reviews-sect__header-wrap">
      <p class="h1 reviews-sect__header">Отзывы клиентов Tez Tour</p>
      <p class="review__count-wr">
        <span class="review__current-num">1</span>  /  
        <span class="review__count">1</span>
      </p>
    </div>
    
    <div class="reviews-sect__reviews">
      <div class="review">
        <div class="review__top-row">
          <div class="review__name-wrap">
            <div class="review__avatar-wr">
              <img src="<?php echo get_template_directory_uri() ?>/images/avatar.png" alt="">
            </div>
            <div class="review__signature">
              <p class="review__name">Олег и Вика</p>
              <p class="review__desc">свадебное путешествие</p>
            </div>
          </div>
          <div class="review__text">
           <p> Неизвестные вечером в четверг, 16 февраля, похитили 42-летнюю женщину на юге Москвы. Об этом сообщается на сайте столичного управления Следственного комитета России (СКР). По данным ведомства, инцидент произошел во дворе одного из жилых домов по улице Красного Маяка. Злоумышленники силой посадили женщину в машину Lada Priora и увезли в неизвестном направлении.</p>
             Неизвестные вечером в четверг, 16 февраля, похитили 42-летнюю женщину на юге Москвы.
             Об этом сообщается на сайте столичного управления Следственного комитета России (СКР). По данным ведомства, инцидент произошел во дворе одного из жилых домов по улице Красного Маяка.</p>
             <p> Неизвестные вечером в четверг, 16 февраля, похитили 42-летнюю женщину на юге Москвы. Об этом сообщается на сайте столичного управления Следственного комитета России (СКР). По данным ведомства, инцидент произошел во дворе одного из жилых домов по улице Красного Маяка. Злоумышленники силой посадили женщину в машину Lada Priora и увезли в неизвестном направлении.</p>
             Неизвестные вечером в четверг, 16 февраля, похитили 42-летнюю женщину на юге Москвы.
             Об этом сообщается на сайте столичного управления Следственного комитета России (СКР). По данным ведомства, инцидент произошел во дворе одного из жилых домов по улице Красного Маяка.</p>
          </div>
        </div>
        <div class="review__bottom-row"> 
          <div class="review__photo-hotel">
            <p class="h3 review__title">Фото отеля</p>
            <div class="review__photos-hotel-wrap">
              <div class="review__photo-hotel-wrap">
                <img src="<?php echo get_template_directory_uri() ?>/images/hotel1.jpg" alt="">
              </div>
              <div class="review__photo-hotel-wrap">
                <img src="<?php echo get_template_directory_uri() ?>/images/hotel2.jpg" alt="">
              </div>
              <div class="review__photo-hotel-wrap">
                <img src="<?php echo get_template_directory_uri() ?>/images/hotel3.jpg" alt="">
              </div>
              <div class="review__photo-hotel-wrap">
                <img src="<?php echo get_template_directory_uri() ?>/images/hotel1.jpg" alt="">
                <p class="review__photo-more">+3</p>
              </div>
            </div>
          </div>
          <div class="review__bottom-right">
            <div class="review__desctiption-hotel">
              <p class="h3 review__title">Описание отеля</p>
              <div class="review__stars">
                <p class="review__stars-item">
                  <span  class="review__stars-item-name">Звезды:</span>
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                </p>
                <p class="review__stars-item"><span class="review__stars-item-name">Пляж:</span> <span>В отеле</span></p>
                <p class="review__stars-item"><span class="review__stars-item-name">Тип:</span> <span>All INCLUSIVE</span></p>
                 <p class="review__stars-item review__stars-item_r">
                  <span  class="review__stars-item-name-r">Kemer - Savane</span>
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                </p>
                <p class="review__stars-item">
                  <span  class="review__stars-item-name-r">Turkey Kemer</span>
                </p>
              </div>
            </div>
            <div class="review__look-hotel">
               <div class="review__look-hotel-wrap">
                  <p class="h3 review__title">Понравился отель?</p>
                  <p  class="review__look-hotel">Вы можете выбрать его</p>
              </div>
              <a href="#" class="btn review__look-btn">Посмотреть отель</a>
            </div>
          </div>
        </div>
      </div>
      <div class="review">
        <div class="review__top-row">
          <div class="review__name-wrap">
            <div class="review__avatar-wr">
              <img src="<?php echo get_template_directory_uri() ?>/images/avatar.png" alt="">
            </div>
            <div class="review__signature">
              <p class="review__name">Олег и Вика</p>
              <p class="review__desc">свадебное путешествие</p>
            </div>
          </div>
          <div class="review__text">
           <p> Неизвестные вечером в четверг, 16 февраля, похитили 42-летнюю женщину на юге Москвы. Об этом сообщается на сайте столичного управления Следственного комитета России (СКР). По данным ведомства, инцидент произошел во дворе одного из жилых домов по улице Красного Маяка. Злоумышленники силой посадили женщину в машину Lada Priora и увезли в неизвестном направлении.</p>
             Неизвестные вечером в четверг, 16 февраля, похитили 42-летнюю женщину на юге Москвы.
             Об этом сообщается на сайте столичного управления Следственного комитета России (СКР). По данным ведомства, инцидент произошел во дворе одного из жилых домов по улице Красного Маяка.</p>
             <p> Неизвестные вечером в четверг, 16 февраля, похитили 42-летнюю женщину на юге Москвы. Об этом сообщается на сайте столичного управления Следственного комитета России (СКР). По данным ведомства, инцидент произошел во дворе одного из жилых домов по улице Красного Маяка. Злоумышленники силой посадили женщину в машину Lada Priora и увезли в неизвестном направлении.</p>
             Неизвестные вечером в четверг, 16 февраля, похитили 42-летнюю женщину на юге Москвы.
             Об этом сообщается на сайте столичного управления Следственного комитета России (СКР). По данным ведомства, инцидент произошел во дворе одного из жилых домов по улице Красного Маяка.</p>
          </div>
        </div>
        <div class="review__bottom-row"> 
          <div class="review__photo-hotel">
            <p class="h3 review__title">Фото отеля</p>
            <div class="review__photos-hotel-wrap">
              <div class="review__photo-hotel-wrap">
                <img src="<?php echo get_template_directory_uri() ?>/images/image-tour.jpg" alt="">
              </div>
              <div class="review__photo-hotel-wrap">
                <img src="<?php echo get_template_directory_uri() ?>/images/hotel2.jpg" alt="">
              </div>
              <div class="review__photo-hotel-wrap">
                <img src="<?php echo get_template_directory_uri() ?>/images/hotel3.jpg" alt="">
              </div>
              <div class="review__photo-hotel-wrap">
                <img src="<?php echo get_template_directory_uri() ?>/images/image-tour2.jpg" alt="">
                <p class="review__photo-more">+3</p>
              </div>
            </div>
          </div>
          <div class="review__bottom-right">
            <div class="review__desctiption-hotel">
              <p class="h3 review__title">Описание отеля</p>
              <div class="review__stars">
                <p class="review__stars-item">
                  <span  class="review__stars-item-name">Звезды:</span>
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                </p>
                <p class="review__stars-item"><span class="review__stars-item-name">Пляж:</span> <span>В отеле</span></p>
                <p class="review__stars-item"><span class="review__stars-item-name">Тип:</span> <span>All INCLUSIVE</span></p>
                 <p class="review__stars-item">
                  <span  class="review__stars-item-name-r">Kemer - Savane</span>
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                  <img src="<?php echo get_template_directory_uri() ?>/images/Star.png" alt="">
                </p>
                <p class="review__stars-item">
                  <span  class="review__stars-item-name-r">Turkey Kemer</span>
                </p>
              </div>
            </div>
            <div class="review__look-hotel">
              <div class="review__look-hotel-wrap">
                  <p class="h3 review__title">Понравился отель?</p>
                  <p  class="review__look-hotel">Вы можете выбрать его</p>
              </div>
              <a href="#" class="btn review__look-btn">Посмотреть отель</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>  
</section>

<section class="tour-text">
<div class="container"> 
   <div class="select-info__text">
    <h2> Подбор тура в режиме онлайн</h2>
       <p>Привычка проводить отпуск вдали от дома наполняет жизнь впечатлениями, словно дуновение свежего морского бриза в жаркий летний день. Ощущение праздника не покидает путешественника в течение долгих месяцев после возвращения из удачного вояжа. Первые и самые важные шаги в ходе подготовки к загранпоездке – выбор страны, приобретение путёвки и билетов. На данном этапе вы можете связаться с представителем туроператора ТЕЗ ТУР по телефону либо воспользоваться сервисом подбора тура онлайн из Москвы и других крупных городов России.</p>
     
       <h3>Возможности системы online-бронирования</h3>
   <p>Уникальная программа разработана специально для удобства и быстроты поиска туров:</p>
       <p> С помощью бесплатного сервиса вы узнаете о направлениях, отелях, типах размещения и питания, предлагаемых на заданные даты. Все страны, города, отели перед вами как на ладони!</p>
       <p> Для приобретения путёвки не обязательно ехать в офис туроператора, достаточно иметь доступ к сети интернет. Выбор сделать несложно, а заказ и бронирование тура на сайте занимают несколько минут.</p>
        <p>Оплата осуществляется при помощи банковских карт MasterCard и Viza.</p>
        <p>Сервис на официальном сайте работает круглосуточно, для пользования не требуется специальной подготовки, только ваше желание хорошо отдохнуть</p>
       <h3> Порядок поиска и бронирования туров</h3>
      <p>Выберите город отправления, страну, в которую хотите поехать, один или несколько подходящих курортов.</p>
        <p>  В фильтре укажите ваши предпочтения: категорию отеля, систему питания, тип размещения.</p>
      <p>Отметьте предполагаемые даты заезда, число ночей пребывания, количество туристов, в т.ч. детей (с указанием возраста).</p>
      <p>Нажмите кнопку «Поиск» и получите результат – список отелей выбранной вами категории с указанием стоимости размещения.</p>
      <p>Открыв вкладку с описанием и фотографиями гостиницы, вы найдёте на странице подробную информацию о расположении, транспортной доступности, характерных особенностях данного отеля, типах номеров и питания.</p>
      <p>Покупка тура online занимает минимум времени. Напечатайте в открывшейся форме ваши контактные данные и нажмите кнопку «Заказать».</p>
      <p>Менеджер компании свяжется с вами по телефону для согласования организационных вопросов и предоставления консультации в случае необходимости.</p>
      <p>Сервис работает в режиме реального времени. Данные о странах, перелётах и отелях постоянно обновляются. Не упустите шанс приобрести горящие туры, которые периодически появляются на сайте туроператора. Взаимодействуйте по телефону с представителями компании, которые охотно ответят на любые вопросы и помогут с выбором.</p>
      <p>Пользуйтесь преимуществами системы подбора туров онлайн от TEZ TOUR, приобретайте лучшие путёвки и удобные авиарейсы через интернет, отдыхайте с комфортом и с удовольствием.</p>
  </div>
</div>   
</section>
<section class="contact-section contact-section_inner">
    <div class="container contact-section__container">
        <form action="#" class="contact-form">
            <img src="<?php echo get_template_directory_uri() ?>/images/form-men.png" alt=""  class="contact-form__image">
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
