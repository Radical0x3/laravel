<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Document</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body id="home">
  <header class="header js-accordion-group">
    <div class="wrapper lock-padding">
      <div class="container-fluid px-0">
        <div class="row header__row d-xl-flex d-none align-items-center justify-content-between js-row-1">
          <div class="header__column col-xxl-3 col-md-1 px-0 js-logo-wrap">
            <a href="#">
              <svg class="logo">
                <use href="{{ asset('images/icons/spritemap.svg#sprite-wezom-logo') }}"></use>
              </svg>
            </a>
          </div>

          <div class="header__column col px-0 d-flex align-items-center justify-content-between js-menu-wrap">
            <nav class="menu main-menu js-menu">
              <div class="menu__item main-menu__item js-menu-item active">
                <a href="#" class="menu__link link-decor">О Компании</a>
              </div>
              <div class="menu__item main-menu__item js-menu-item">
                <a href="#" class="menu__link">Политика конфиденциальности</a>
              </div>
              <div class="menu__item main-menu__item js-menu-item">
                <a href="#" class="menu__link">Доставка и оплата</a>
              </div>
              <div class="menu__item main-menu__item js-menu-item">
                <a href="#" class="menu__link">Гарантия</a>
              </div>
            </nav>
            <div class="phones js-accordion">
              <div class="phones__top js-accordion-header js-accordion-header-to-hide">
                <a href="tel:+380680000000" class="phones__text">+38 068 000 00 00</a>
                <div class="arrow arrow_small arrow_down js-accordion-btn"></div>
              </div>
              <div class="phones__body js-accordion-body js-accordion-body-to-hide">
                <a href="tel:+380680000001" class="phones__text phones__body-text">+38 068 000 00 01</a>
                <a href="tel:+380680000002" class="phones__text phones__body-text">+38 068 000 00 02</a>
                <a href="tel:+380680000003" class="phones__text phones__body-text">+38 068 000 00 03</a>
              </div>
            </div>
          </div>

          <div class="header__column col-xl-2 px-0 d-flex justify-content-end align-items-center js-lang-wrap">
            <div class="menu lang-menu mr-xxl-6 mr-0">
              <div class="menu__item lang-menu__item">
                <a href="#" class="menu__link menu__link_dark">Ua</a>
              </div>
              <div class="menu__item lang-menu__item">
                <a href="#" class="menu__link menu__link_dark">Ru</a>
              </div>
            </div>
            <a href="#" class="user-action mr-3">
              <span class="user-action__text">Войти</span>
              <svg class="user-action__icon">
                <use href="{{ asset('images/icons/spritemap.svg#sprite-top-user') }}"></use>
              </svg>
            </a>
          </div>
        </div>

        <div class="row header__row js-row-2 align-items-center">
          <div class="header__column col-1 px-0 align-items-center main-hamburger">
            <svg class="hamburger js-main-hamburger" viewBox="0 0 100 80" width="25" height="25">
              <rect class="hamburger__line hamburger__line-1" width="100" height="12" rx="8"></rect>
              <rect class="hamburger__line hamburger__line-2" y="37" width="72" height="12" rx="8"></rect>
              <rect class="hamburger__line hamburger__line-3" y="75" width="100" height="12" rx="8"></rect>
            </svg>
          </div>

          <div class="header__column col-xl-3 d-xl-block d-none px-0">
            <div class="catalog js-catalog">
              <div class="catalog__action js-catalog-action">
                <svg class="hamburger js-hamburger" viewBox="0 0 100 80" width="25" height="25">
                  <rect class="hamburger__line hamburger__line-1" width="100" height="12" rx="8"></rect>
                  <rect class="hamburger__line hamburger__line-2" y="37" width="72" height="12" rx="8"></rect>
                  <rect class="hamburger__line hamburger__line-3" y="75" width="100" height="12" rx="8"></rect>
                </svg>
                <span class="catalog__text">каталог</span>
              </div>

              <a href="#" class="catalog__link link-decor">Все категории</a>

              <div class="main-list main-list_shadow main-list_rounded js-main-list">
                <div class="row main-list__body">
                  <div class="col-12 main-list__item js-main-list-item" data-category-id="1">
                    <a href="#" class="main-list__link">
                      <svg class="main-list__icon">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-power') }}"></use>
                      </svg>
                      <span class="main-list__text">Турбины</span>
                      <div class="arrow arrow_medium arrow_right"></div>
                    </a>
                  </div>

                  <div class="col-12 main-list__item js-main-list-item" data-category-id="2">
                    <a href="#" class="main-list__link">
                      <svg class="main-list__icon">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-cartridge') }}"></use>
                      </svg>
                      <span class="main-list__text">Картриджи</span>
                      <div class="arrow arrow_medium arrow_right"></div>
                    </a>
                  </div>

                  <div class="col-12 main-list__item js-main-list-item" data-category-id="3">
                    <a href="#" class="main-list__link">
                      <svg class="main-list__icon">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-geometry') }}"></use>
                      </svg>
                      <span class="main-list__text">Геометрии</span>
                      <div class="arrow arrow_medium arrow_right"></div>
                    </a>
                  </div>

                  <div class="col-12 main-list__item js-main-list-item" data-category-id="4">
                    <a href="#" class="main-list__link">
                      <svg class="main-list__icon">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-aktuator') }}"></use>
                      </svg>
                      <span class="main-list__text">Актуаторы</span>
                      <div class="arrow arrow_medium arrow_right"></div>
                    </a>
                  </div>

                  <div class="col-12 main-list__item js-main-list-item" data-category-id="5">
                    <a href="#" class="main-list__link">
                      <svg class="main-list__icon">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-servoprivod') }}"></use>
                      </svg>
                      <span class="main-list__text">Сервоприводы</span>
                      <div class="arrow arrow_medium arrow_right"></div>
                    </a>
                  </div>

                  <div class="col-12 main-list__item js-main-list-item" data-category-id="6">
                    <a href="#" class="main-list__link">
                      <svg class="main-list__icon">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-prokladki') }}"></use>
                      </svg>
                      <span class="main-list__text">Прокладки</span>
                      <div class="arrow arrow_medium arrow_right"></div>
                    </a>
                  </div>

                  <div class="col-12 main-list__item js-main-list-item" data-category-id="7">
                    <a href="#" class="main-list__link">
                      <svg class="main-list__icon">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-zapchasti') }}"></use>
                      </svg>
                      <span class="main-list__text">Прочие запчасти</span>
                      <div class="arrow arrow_medium arrow_right"></div>
                    </a>
                  </div>

                  <div class="col-12 main-list__item js-main-list-item" data-category-id="8">
                    <a href="#" class="main-list__link">
                      <svg class="main-list__icon">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-aktuator-2') }}"></use>
                      </svg>
                      <span class="main-list__text">Электронновакуумные актуаторы</span>
                      <div class="arrow arrow_medium arrow_right"></div>
                    </a>
                  </div>

                  <div class="col-12 main-list__item js-main-list-item" data-category-id="9">
                    <a href="#" class="main-list__link">
                      <svg class="main-list__icon">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-body-tourbine') }}"></use>
                      </svg>
                      <span class="main-list__text">Корпуса турбины</span>
                      <div class="arrow arrow_medium arrow_right"></div>
                    </a>
                  </div>

                  <div class="col-12 main-list__item js-main-list-item" data-category-id="10">
                    <a href="#" class="main-list__link">
                      <svg class="main-list__icon">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-zapchasti-2') }}"></use>
                      </svg>
                      <span class="main-list__text">Запчасти для сервопривода</span>
                      <div class="arrow arrow_medium arrow_right"></div>
                    </a>
                  </div>
                </div>

                <div class="main-sublist">
                  <div class="row main-sublist__content">
                    <div class="col-12 main-sublist__item active js-main-sublist-item" data-category-id="1">
                      <ul>
                        <li>Товар №1</li>
                        <li>Товар №1</li>
                        <li>Товар №1</li>
                        <li>Товар №1</li>
                        <li>Товар №1</li>
                        <li>Товар №1</li>
                        <li>Товар №1</li>
                      </ul>
                    </div>

                    <div class="col-12 main-sublist__item js-main-sublist-item" data-category-id="2">
                      <ul>
                        <li>Товар №2</li>
                        <li>Товар №2</li>
                        <li>Товар №2</li>
                        <li>Товар №2</li>
                        <li>Товар №2</li>
                        <li>Товар №2</li>
                        <li>Товар №2</li>
                        <li>Товар №2</li>
                        <li>Товар №2</li>
                      </ul>
                    </div>

                    <div class="col-12 main-sublist__item js-main-sublist-item" data-category-id="3">
                      <ul>
                        <li>Товар №3</li>
                        <li>Товар №3</li>
                        <li>Товар №3</li>
                        <li>Товар №3</li>
                      </ul>
                    </div>

                    <div class="col-12 main-sublist__item js-main-sublist-item" data-category-id="4">
                      <ul>
                        <li>Товар №4</li>
                        <li>Товар №4</li>
                        <li>Товар №4</li>
                        <li>Товар №4</li>
                        <li>Товар №4</li>
                        <li>Товар №4</li>
                        <li>Товар №4</li>
                      </ul>
                    </div>

                    <div class="col-12 main-sublist__item js-main-sublist-item" data-category-id="5">
                      <ul>
                        <li>Товар №5</li>
                        <li>Товар №5</li>
                        <li>Товар №5</li>
                        <li>Товар №5</li>
                        <li>Товар №5</li>
                        <li>Товар №5</li>
                        <li>Товар №5</li>
                        <li>Товар №5</li>
                        <li>Товар №5</li>
                        <li>Товар №5</li>
                        <li>Товар №5</li>
                        <li>Товар №5</li>
                      </ul>
                    </div>

                    <div class="col-12 main-sublist__item js-main-sublist-item" data-category-id="6">
                      <ul>
                        <li>Товар №6</li>
                        <li>Товар №6</li>
                        <li>Товар №6</li>
                        <li>Товар №6</li>
                        <li>Товар №6</li>
                        <li>Товар №6</li>
                        <li>Товар №6</li>
                        <li>Товар №6</li>
                      </ul>
                    </div>

                    <div class="col-12 main-sublist__item js-main-sublist-item" data-category-id="7">
                      <ul>
                        <li>Товар №7</li>
                        <li>Товар №7</li>
                        <li>Товар №7</li>
                        <li>Товар №7</li>
                        <li>Товар №7</li>
                        <li>Товар №7</li>
                        <li>Товар №7</li>
                      </ul>
                    </div>

                    <div class="col-12 main-sublist__item js-main-sublist-item" data-category-id="8">
                      <ul>
                        <li>Товар №8</li>
                        <li>Товар №8</li>
                        <li>Товар №8</li>
                      </ul>
                    </div>

                    <div class="col-12 main-sublist__item js-main-sublist-item" data-category-id="9">
                      <ul>
                        <li>Товар №9</li>
                        <li>Товар №9</li>
                        <li>Товар №9</li>
                        <li>Товар №9</li>
                        <li>Товар №9</li>
                        <li>Товар №9</li>
                        <li>Товар №9</li>
                      </ul>
                    </div>

                    <div class="col-12 main-sublist__item js-main-sublist-item" data-category-id="10">
                      <ul>
                        <li>Товар №10</li>
                        <li>Товар №10</li>
                        <li>Товар №10</li>
                        <li>Товар №10</li>
                        <li>Товар №10</li>
                        <li>Товар №10</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="header__column col-7 d-flex align-items-center">
            <form action="#" class="form">
              <input type="text" name="search" class="form__search" placeholder="Поиск, например “турбина”">
              <div class="form__submit js-search-submit">
                <svg class="form__icon">
                  <use href="{{ asset('images/icons/spritemap.svg#sprite-search') }}"></use>
                </svg>
              </div>
            </form>
          </div>

          <div
            class="header__column col-xl-2 col-4 px-0 d-flex align-items-center justify-content-xl-start justify-content-end js-user-button-wrap">
            <div class="row justify-content-xl-start justify-content-end">
              <div class="header__inner col-4 user-button d-xl-flex d-none">
                <div class="user-button__body">
                  <svg class="user-button__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-top-compare') }}"></use>
                  </svg>
                  <div class="user-button__cloud hidden">0</div>
                </div>
              </div>

              <div class="header__inner col-4 px-0 user-button d-xl-flex d-none">
                <div class="user-button__body">
                  <svg class="user-button__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-top-wish') }}"></use>
                  </svg>
                  <div class="user-button__cloud hidden">0</div>
                </div>
              </div>

              <div class="header__inner col-xl-4 col-md-5 col-7 px-0 user-button cart-button js-cart-button">
                <a data-fancybox data-src="#basket-popup" href="javascript:;" class="cart-button__body js-popup">
                  <div class="user-button__body">
                    <svg class="user-button__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-top-cart') }}"></use>
                    </svg>
                    <div class="user-button__cloud js-cart-count">3</div>
                  </div>
                </a>
                <div class="cart-info js-cart-info">
                  <div class="cart-info__body">
                    <div class="cart-info__top">
                      <p class="cart-info__text">В корзине <span class="cart-info__text_bold">3 товара</span></p>
                      <p class="cart-info__text">На сумму <span class="cart-info__text_bold">30 000</span> ₴</p>
                    </div>

                    <a href="#" class="btn btn_main cart-info__btn">
                      <span class="btn__text">Оформить заказ</span>
                      <svg class="btn__svg">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-cart') }}"></use>
                      </svg>
                    </a>

                    <a href="#" class="underlined-link">Редактировать заказ</a>
                  </div>

                  <svg class="cart-info__triangle">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-triangle') }}"></use>
                  </svg>
                </div>
              </div>

              <div class="header__inner col-md-4 col-3 d-xl-none d-flex align-items-center justify-content-end px-0">
                <a href="#" class="user-action log-in d-xl-none d-flex">
                  <span class="user-action__text">Войти</span>
                  <svg class="user-action__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-top-user') }}"></use>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="main">
    <div class="mobile js-mobile js-accordion-group">
      <div class="container-fluid _h100 px-0">
        <div class="row _h100 justify-content-between">
          <div class="col-12 mobile__column mb-3">
            <div class="row align-items-center mb-5 mx-0">
              <div class="col-6">
                <a href="#">
                  <svg class="logo mobile-logo">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-wezom-logo') }}"></use>
                  </svg>
                </a>
              </div>

              <div class="col-6 d-flex justify-content-end">
                <div class="menu lang-menu mr-xxl-6 mr-0">
                  <div class="menu__item lang-menu__item">
                    <a href="#" class="menu__link menu__link_dark">Ua</a>
                  </div>
                  <div class="menu__item lang-menu__item">
                    <a href="#" class="menu__link menu__link_dark">Ru</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="main-list main-mobile-list js-main-list">
              <div class="row main-list__body">
                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-mobile-list-item"
                  data-menu="menu">
                  <a class="main-list__link main-mobile-list__link">
                    <div class="arrow arrow_medium arrow_left"></div>
                    <span class="main-list__text main-mobile-list__text">Меню</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-mobile-list-item"
                  data-menu="catalog">
                  <a class="main-list__link main-mobile-list__link">
                    <div class="arrow arrow_medium arrow_left"></div>
                    <span class="main-list__text main-mobile-list__text">Каталог</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-mobile-list-item"
                  data-menu="contacts">
                  <a class="main-list__link main-mobile-list__link">
                    <div class="arrow arrow_medium arrow_left"></div>
                    <span class="main-list__text main-mobile-list__text">Контакты</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-mobile-list-item"
                  data-menu="dopmenu">
                  <a class="main-list__link main-mobile-list__link">
                    <div class="arrow arrow_medium arrow_left"></div>
                    <span class="main-list__text main-mobile-list__text">Доп меню</span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 pb-2 px-0">
            <div class="row _h100 justify-content-center align-items-end mx-0">
              <div class="col-auto user-button user-mobile-button px-0">
                <div class="user-button__body">
                  <svg class="user-button__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-top-compare') }}"></use>
                  </svg>
                </div>
              </div>

              <div class="col-auto user-button user-mobile-button px-0">
                <div class="user-button__body">
                  <svg class="user-button__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-top-wish') }}"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mobile__column">
          <div class="mobile-sublist js-mobile-sublist" data-menu="menu">
            <div class="mobile-sublist__title">Меню</div>

            <a class="mobile-sublist__back js-mobile-sublist-back">
              <span class="main-list__text main-mobile-list__text">Назад</span>
              <div class="arrow arrow_medium arrow_right"></div>
            </a>

            <div class="main-list main-mobile-list js-main-list">
              <div class="row main-list__body">
                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">О Компании</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">Политика конфиденциальности</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">Доставка и оплата</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">Гарантия</span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="mobile-sublist js-mobile-sublist" data-menu="catalog">
            <div class="mobile-sublist__title">Каталог</div>

            <a class="mobile-sublist__back js-mobile-sublist-back">
              <span class="main-list__text main-mobile-list__text">Назад</span>
              <div class="arrow arrow_medium arrow_right"></div>
            </a>

            <div class="main-list main-mobile-list js-main-list">
              <div class="row main-list__body">
                <div class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <svg class="main-list__icon mobile-sublist__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-power') }}"></use>
                    </svg>
                    <span class="main-list__text">Турбины</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <svg class="main-list__icon mobile-sublist__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-cartridge') }}"></use>
                    </svg>
                    <span class="main-list__text">Картриджи</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <svg class="main-list__icon mobile-sublist__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-geometry') }}"></use>
                    </svg>
                    <span class="main-list__text">Геометрии</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <svg class="main-list__icon mobile-sublist__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-aktuator') }}"></use>
                    </svg>
                    <span class="main-list__text">Актуаторы</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <svg class="main-list__icon mobile-sublist__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-servoprivod') }}"></use>
                    </svg>
                    <span class="main-list__text">Сервоприводы</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <svg class="main-list__icon mobile-sublist__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-prokladki') }}"></use>
                    </svg>
                    <span class="main-list__text">Прокладки</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <svg class="main-list__icon mobile-sublist__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-zapchasti') }}"></use>
                    </svg>
                    <span class="main-list__text">Прочие запчасти</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <svg class="main-list__icon mobile-sublist__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-aktuator-2') }}"></use>
                    </svg>
                    <span class="main-list__text">Электронновакуумные актуаторы</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <svg class="main-list__icon mobile-sublist__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-body-tourbine') }}"></use>
                    </svg>
                    <span class="main-list__text">Корпуса турбины</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <svg class="main-list__icon mobile-sublist__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-zapchasti-2') }}"></use>
                    </svg>
                    <span class="main-list__text">Запчасти для сервопривода</span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="mobile-sublist js-mobile-sublist" data-menu="contacts">
            <div class="mobile-sublist__title">Контакты</div>

            <a class="mobile-sublist__back js-mobile-sublist-back">
              <span class="main-list__text main-mobile-list__text">Назад</span>
              <div class="arrow arrow_medium arrow_right"></div>
            </a>

            <div class="main-list main-mobile-list js-main-list">
              <div class="row main-list__body">
                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="tel:+380680000000" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">+38 068 000 00 00</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="tel:+380680000001" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">+38 068 000 00 01</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="tel:+380680000002" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">+38 068 000 00 02</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="tel:+380680000003" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">+38 068 000 00 03</span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="mobile-sublist js-mobile-sublist" data-menu="dopmenu">
            <div class="mobile-sublist__title">Доп меню</div>

            <a class="mobile-sublist__back js-mobile-sublist-back">
              <span class="main-list__text main-mobile-list__text">Назад</span>
              <div class="arrow arrow_medium arrow_right"></div>
            </a>

            <div class="main-list main-mobile-list js-main-list">
              <div class="row main-list__body">
                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">Доп меню 1</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">Доп меню 2</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">Доп меню 3</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item js-main-mobile-list-item"
                  data-menu="podmenu">
                  <a class="main-list__link main-mobile-list__link">
                    <div class="arrow arrow_medium arrow_left"></div>
                    <span class="main-list__text main-mobile-list__text">Подменю</span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="mobile-sublist js-mobile-sublist" data-menu="podmenu">
            <div class="mobile-sublist__title">Подменю</div>

            <a class="mobile-sublist__back js-mobile-sublist-back">
              <span class="main-list__text main-mobile-list__text">Назад</span>
              <div class="arrow arrow_medium arrow_right"></div>
            </a>

            <div class="main-list main-mobile-list js-main-list">
              <div class="row main-list__body">
                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">Подменю 1</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">Подменю 2</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">Подменю 3</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">Подменю 4</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">Подменю 5</span>
                  </a>
                </div>

                <div
                  class="col-12 mobile__column main-list__item main-list__item_bordered main-mobile-list__item js-main-list-item">
                  <a href="#" class="main-list__link main-mobile-list__link">
                    <span class="main-list__text main-mobile-list__text">Подменю 6</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="main-blur js-main-blur"></div>

    <section class="top">
      <div class="categories">
        <div class="wrapper">
          <header class="categories__top container-fluid px-0">
            <div class="categories__row row align-items-center justify-content-sm-between justify-content-center">
              <div class="section-title categories__title col-md-8 col-sm-7 px-0">Популярные категории</div>
              <a href="#" class="btn btn_sm btn_round col-md-4 col-sm-5">
                Все категории
              </a>
            </div>
          </header>
        </div>

        @php
          $categories = [['id' => 1, 'text' => 'Косметика и гигиена'], ['id' => 2, 'text' => 'Техника и электроника'], ['id' => 3, 'text' => 'Повседневная одежда'], ['id' => 4, 'text' => 'Одежда и обувь'], ['id' => 5, 'text' => 'Сапоги и туфли'], ['id' => 6, 'text' => 'Универсальное'], ['id' => 7, 'text' => 'Сумки и кошельки'], ['id' => 8, 'text' => 'Нижнее бельё'], ['id' => 9, 'text' => 'Спортивная обувь'], ['id' => 10, 'text' => 'Сапоги и туфли']];
        @endphp

        @isset($categories)
          <div class="categories__list">
            @foreach ($categories as $category)
              <div class="category">
                <a data-fancybox="gallery" data-caption="{{ $category['text'] }}"
                  href="{{ asset('images/top-slider/category-' . $category['id'] . '.jpg') }}"
                  class="category__image-wrap">
                  <picture>
                    <source data-srcset="{{ asset('images/top-slider/category-' . $category['id'] . '.webp') }}"
                      type="image/webp" class="lazyload">
                    <img data-src="{{ asset('images/top-slider/category-' . $category['id'] . '.jpg') }}"
                      alt="category poster lazyload" class="category__image">
                  </picture>
                  <div class="circle-gradient"></div>
                </a>
                <a href="#" class="category__link">{{ $category['text'] }}</a>
              </div>
            @endforeach
          </div>
        @endisset

        @empty($categories)
          <p class="empty-section">
            Категории отсутствуют
          </p>
        @endempty

        <div class="circle-wrap circle-sm"></div>
        <div class="circle-wrap circle-lg circle-xl"></div>
      </div>
    </section>

    <section class="other">
      <div class="container-fluid text-section">
        <div class="row justify-content-center">
          <div class="col-12">
            <p class="text">
              Тут должен быть какой то текст, потом придумаем какой точно будет =)
            </p>
          </div>
        </div>
      </div>

      <div class="bottom">
        <div class="recall">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="recall__inner">
                  <button class="btn btn_lg btn_round ">
                    <span class="btn__text">замовити зворотній зв’язок</span>
                    <svg class="btn__svg">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-right-arrow') }}"></use>
                    </svg>
                  </button>
                  <svg class="circle-vector">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-circle') }}"></use>
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>

        @php
          $cards = [['text' => 'Текст карточки первый', 'duration' => 15], ['text' => 'Текст карточки второй', 'duration' => 20], ['text' => 'Текст карточки третий', 'duration' => 11], ['text' => 'Текст карточки последний', 'duration' => 9]];
        @endphp

        @isset($cards)
          <div class="cards">
            <div class="wrapper">
              <div class="cards__container container-fluid overflow-hidden px-0">
                <div class="row align-items-stretch">
                  @foreach ($cards as $card)
                    <div class="cards__inner col-lg-3 col-md-4 col-m-6 px-0">
                      <div class="card">
                        <p class="card__text">{{ $card['text'] }}</p>
                        <div class="time">
                          <svg>
                            <use href="{{ asset('images/icons/spritemap.svg#sprite-clock') }}"></use>
                          </svg>
                          <span class="time__dash">—</span>
                          <span class="time__duration">{{ $card['duration'] }} min</span>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        @endisset

        @empty($cards)
          <p class="empty-section">
            Карточки отсутствуют
          </p>
        @endempty
      </div>

      <img data-src="{{ asset('images/pop.png') }}" alt="pop image" class="pop lazyload">
    </section>

    @php
      $shopItems = ['Снаряжение', 'Ножи и инструменты', 'Оружие', 'Патроны', 'Аксессуары', 'Тир'];
    @endphp

    @isset($shopItems)
      <section class="shop">
        <div class="container-fluid">
          <div class="row px-0">
            @php
              $id = 1;
            @endphp

            @for ($i = 0; $i < 3; $i++)
              @php
                if ($i == 2) {
                    $classes = 'shop__column col-lg-6 col-12 px-0';
                } else {
                    $classes = 'shop__column col-lg-3 col-m-6 col-12 px-0';
                }
              @endphp

              <div class="{{ $classes }}">
                <div class="row mx-0">
                  @php
                    switch ($i) {
                        case '0':
                            $count = 2;
                            break;
                        case '1':
                            $count = 1;
                            break;
                        case '2':
                            $count = 3;
                            break;
                        default:
                            $count = 1;
                            break;
                    }
                  @endphp

                  @for ($j = 0; $j < $count; $j++)
                    @php
                      if ($count == 3) {
                          if ($j == 2) {
                              $innerClasses = 'col-12 px-0';
                          } else {
                              $innerClasses = 'shop__inner col-m-6 col-12 px-0';
                          }
                      } else {
                          $innerClasses = 'shop__inner col-12 px-0';
                      }
                    @endphp

                    <div class="{{ $innerClasses }}">
                      <div class="box">
                        <picture>
                          <source data-srcset="{{ asset('images/shop/shop-' . $id . '.webp') }}" type="image/webp"
                            class="lazyload">
                          <img data-src="{{ asset('images/shop/shop-' . $id . '.jpg') }}" alt="box image"
                            class="box__img lazyload">
                        </picture>
                        <div class="box__blur"></div>
                        <a href="#" class="btn btn_rect">
                          {{ $shopItems[$id - 1] }}
                        </a>
                      </div>
                    </div>

                    @php
                      $id++;
                    @endphp
                  @endfor
                </div>
              </div>
            @endfor
          </div>
        </div>
      </section>
    @endisset

    @empty($shopItems)
      <p class="empty-section">
        Блоки отсутствуют
      </p>
    @endempty

    @php
      $goods = [
          [
              'id' => 1,
              'title' => 'Ружье Mossberg 590M Mag-Fed',
              'label' => 'green',
              'label-text' => 'Новинка',
              'icons' => ['wish', 'compare', 'play'],
              'rating' => '4',
              'votes-count' => '10',
              'price' => '32 509',
              'new-price' => '27 632.65',
          ],
          ['id' => 2, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'label' => 'blue', 'label-text' => 'Акция', 'icons' => ['wish', 'compare'], 'rating' => '5', 'votes-count' => '2', 'price' => '32 509', 'new-price' => '27 632.65'],
          ['id' => 3, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'label' => 'red', 'label-text' => '-70%', 'icons' => ['wish', 'compare'], 'rating' => '3', 'votes-count' => '12', 'price' => '27 632.65'],
          ['id' => 4, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'label' => 'orange', 'label-text' => 'топ продаж', 'icons' => ['wish', 'compare', 'play'], 'rating' => '2', 'votes-count' => '46', 'price' => '32 509', 'new-price' => '27 632.65'],
          ['id' => 1, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'label' => 'green', 'label-text' => 'Новинка', 'icons' => ['wish', 'compare', 'play'], 'rating' => '1', 'votes-count' => '10', 'price' => '32 509', 'new-price' => '27 632.65'],
          ['id' => 2, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'label' => 'blue', 'label-text' => 'Акция', 'icons' => ['wish', 'compare'], 'rating' => '4', 'votes-count' => '11', 'price' => '32 509', 'new-price' => '27 632.65'],
          ['id' => 3, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'label' => 'red', 'label-text' => '-40%', 'icons' => ['wish', 'compare'], 'rating' => '2', 'votes-count' => '12', 'price' => '32 509', 'new-price' => '27 632.65'],
          ['id' => 4, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'label' => 'orange', 'label-text' => 'топ продаж', 'icons' => ['wish', 'compare', 'play'], 'rating' => '5', 'votes-count' => '13', 'price' => '27 632.65'],
      ];
    @endphp

    @isset($goods)
      <section class="goods custom-scrollbar">
        <div class="goods__outer container-fluid">
          <div class="row flex-nowrap align-items-stretch goods__inner" data-scrollbar>
            @foreach ($goods as $item)
              <div class="js-scroll-item col-lg-3 col-md-4 col-m-6 col-12 pl-lg-4 pl-md-3 pl-2">
                <div class="product">
                  @if (array_key_exists('label', $item))
                    @php
                      $classes = 'label label_' . $item['label'];
                    @endphp
                  @else
                    @php
                      $classes = 'label label_grey';
                    @endphp
                  @endif

                  <div class="{{ $classes }}">{{ $item['label-text'] }}</div>

                  <div class="product__top">
                    <div class="product__wrap">
                      <a href="#">
                        <picture>
                          <source data-srcset="{{ asset('images/stuff.webp') }}" type="image/webp" class="lazyload">
                          <img data-src="{{ asset('images/stuff.jpg') }}" alt="box image"
                            class="product__img lazyload">
                        </picture>
                      </a>

                      <svg class="product__gift">
                        <use href='{{ asset('images/icons/spritemap.svg#sprite-gift-box') }}'></use>
                      </svg>

                      <div class="product__actions">
                        @foreach ($item['icons'] as $icon)
                          <svg class="{{ $icon }}">
                            <use href='{{ asset('images/icons/spritemap.svg#sprite-' . $icon) }}'></use>
                          </svg>
                        @endforeach
                      </div>
                    </div>

                    <a href="#" class="product__title">{{ $item['title'] }}</a>

                    <div class="rating">
                      <div class="rating__list" data-total-value="{{ $item['rating'] }}">
                        @for ($i = 0; $i < 5; $i++)
                          <svg class="rating__icon">
                            <use href="{{ asset('images/icons/spritemap.svg#sprite-star') }}"></use>
                          </svg>
                        @endfor
                      </div>
                      <a href="#" class="rating__votes">{{ $item['votes-count'] }} отзывов</a>
                    </div>
                  </div>

                  <div class="product__bottom">
                    <div class="prices">
                      @if (array_key_exists('new-price', $item))
                        <span class="price prices__old">{{ $item['price'] }}<span>₴</span></span>
                        <span class="price prices__new">{{ $item['new-price'] }}<span>₴</span></span>
                      @else
                        <span class="price">{{ $item['price'] }}<span>₴</span></span>
                      @endif
                    </div>

                    <button class="product__buy">
                      <svg>
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-cart') }}"></use>
                      </svg>
                      <span>Купить</span>
                    </button>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
    @endisset

    @empty($goods)
      <p class="empty-section">
        Товары отсутствуют
      </p>
    @endempty
  </main>

  @php
    $basketItems = [
        [
            'id' => 1,
            'title' => '070-150-017 Картридж турбины для Mercedes E-klasse (W211) 2.7CDI',
            'price' => '5 000',
            'count' => 4,
            'services' => ['Регенерация турбины 500₴', 'Регенерация турбины за 1 день 500₴', 'Регенерация турбины за 1 день 500₴'],
        ],
        [
            'id' => 2,
            'title' => '070-150-017 Картридж турбины для Mercedes E-klasse',
            'price' => '5 000',
            'count' => 1,
            'services' => ['Регенерация турбины за 1 день 500₴'],
        ],
        [
            'id' => 3,
            'title' => '070-150-017 Картридж турбины E-klasse (W211)',
            'price' => '5 000',
            'count' => 1,
            'services' => ['Регенерация турбины за 1 день 500₴'],
        ],
    ];
  @endphp

  <div style="display: none;" id="basket-popup" class="basket-popup">
    <div class="basket-popup__title">Корзина</div>
    <div class="container-fluid">
      @isset($basketItems)
        <div class="row basket-popup__body">
          @foreach ($basketItems as $item)
            <div class="col-12 basket-popup__item js-basket-popup-item">
              <div class="basket-popup__item-aside">
                <svg class="basket-popup__item-remove js-basket-popup-remove">
                  <use href="{{ asset('images/icons/spritemap.svg#sprite-close') }}"></use>
                </svg>
                <div class="basket-popup__image-wrap">
                  <div class="basket-popup__image-holder"></div>
                  <a href="#">
                    <img data-src="{{ asset('images/basket-popup/basket-popup-' . $item['id'] . '.jpg') }}"
                      alt="basket popup image" class="basket-popup__image lazyload">
                  </a>
                </div>
              </div>
              <div class="basket-popup__item-content">
                <a href="#" class="basket-popup__item-link">{{ $item['title'] }}</a>
                <div class="basket-popup__item-inner">
                  <div class="basket-popup__item-services">
                    <p class="basket-popup__item-price">Стоимость товара: <span>{{ $item['price'] }}</span> ₴</p>

                    @for ($i = 0; $i < count($item['services']); $i++)
                      <div class="service">
                        <span class="service__text">Доп. услуга:</span>
                        <span class="service__title">{{ $item['services'][$i] }}</span>
                      </div>
                    @endfor
                  </div>
                  <div class="basket-popup__item-summary">
                    <div class="basket-count">
                      <svg class="basket-count__action js-basket-popup-button" data-basket-action="minus">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-minus') }}"></use>
                      </svg>

                      <div class="basket-count__body js-basket-popup-text">
                        <span class="basket-count__body-text">{{ $item['count'] }}</span>
                      </div>

                      <svg class="basket-count__action js-basket-popup-button" data-basket-action="plus">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-plus') }}"></use>
                      </svg>
                    </div>
                    <div class="basket-popup__item-total"><span>21 000</span> ₴
                    </div>
                  </div>
                </div>
              </div>

              @if ($loop->last)
                <div class="total-line">
                  <span class="total-line__text">Итого</span>
                </div>
              @endif
            </div>
          @endforeach
        </div>

        <div class="row">
          <div class="col-12 px-0">
            <div class="basket-popup__total"><span>32 000</span> ₴</div>
          </div>
        </div>

        <div class="row basket-popup__bottom">
          <div class="basket-popup__bottom-column col-sm-6 col-12 pl-0 pr-sm-2 pr-0">
            <a href="#" class="btn btn_main">Продолжить покупки</a>
          </div>
          <div class="basket-popup__bottom-column col-sm-6 col-12 px-0 d-flex justify-content-sm-end">
            <a href="#" class="btn btn_main">
              <span class="btn__text">Оформить заказ</span>
              <svg class="btn__svg">
                <use href="{{ asset('images/icons/spritemap.svg#sprite-cart') }}"></use>
              </svg>
            </a>
          </div>
        </div>
      @endisset
    </div>

    @empty($basketItems)
      <div class="row">
        <div class="col-12">
          <p class="empty-section">
            Корзина пустая
          </p>
        </div>
      </div>

      <div class="row basket-popup__bottom">
        <div class="col-12 d-flex justify-content-center">
          <a href="#" class="btn btn_main">Начать покупки</a>
        </div>
      </div>
    @endempty
  </div>

  <footer class="footer js-footer js-accordion-group">
    <div class="footer__body">
      <div class="container-fluid px-0">
        <div class="row footer__row">
          <div
            class="footer__column col-xl-5 col-lg-4 col-12 d-lg-block d-flex justify-content-center align-items-center px-0">
            <a href="#" class="footer-logo">
              <svg class="logo ">
                <use href="{{ asset('images/icons/spritemap.svg#sprite-wezom-logo') }}"></use>
              </svg>
            </a>

            <div class="menu-social">
              <a href="https://www.instagram.com/" target="_blank" class="menu-social__item">
                <svg class="menu-social__icon">
                  <use href="{{ asset('images/icons/spritemap.svg#sprite-instagram') }}"></use>
                </svg>
              </a>
              <a href="https://www.facebook.com/" target="_blank" class="menu-social__item">
                <svg class="menu-social__icon">
                  <use href="{{ asset('images/icons/spritemap.svg#sprite-facebook') }}"></use>
                </svg>
              </a>
              <a href="https://www.facebook.com/" target="_blank" class="menu-social__item">
                <svg class="menu-social__icon">
                  <use href="{{ asset('images/icons/spritemap.svg#sprite-twitter') }}"></use>
                </svg>
              </a>
              <a href="https://youtube.com/" target="_blank" class="menu-social__item">
                <svg class="menu-social__icon">
                  <use href="{{ asset('images/icons/spritemap.svg#sprite-youtube') }}"></use>
                </svg>
              </a>
            </div>

            <div class="payments payments-top">
              <a href="https://novaposhta.ua/ru" target="_blank" class="nova-poshta">
                <svg class="nova-poshta__icon">
                  <use href="{{ asset('images/icons/spritemap.svg#sprite-nova-poshta') }}"></use>
                </svg>
              </a>

              <div class="menu-payments">
                <a href="https://www.visa.com.ua/" target="_blank" class="menu-payments__item">
                  <svg class="menu-payments__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-visa') }}"></use>
                  </svg>
                </a>
                <a href="https://www.mastercard.ua/uk-ua.html" target="_blank" class="menu-payments__item">
                  <svg class="menu-payments__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-mastercard') }}"></use>
                  </svg>
                </a>
                <a href="https://www.mastercard.ua/uk-ua.html" target="_blank" class="menu-payments__item">
                  <svg class="menu-payments__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-maestro') }}"></use>
                  </svg>
                </a>
                <a href="https://www.paypal.com/ru/home" target="_blank" class="menu-payments__item">
                  <svg class="menu-payments__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-paypal') }}"></use>
                  </svg>
                </a>
              </div>
            </div>
          </div>

          <div class="footer__column col-lg-5 col-md-6 col-m-7 col-12 d-m-flex _w100 px-0">
            <div class="row">
              <div class="footer__inner col-xl-auto col-m-6 col-12 px-0">
                <div class="links-list js-accordion">
                  <div class="links-list__top js-accordion-header">
                    <a href="#" class="links-list__header">Каталог</a>
                    <div class="arrow arrow_small arrow_down js-accordion-btn"></div>
                  </div>
                  <div class="links-list__body js-accordion-body">
                    <a href="#" class="links-list__item">Ноутбуки</a>
                    <a href="#" class="links-list__item">Планшеты</a>
                    <a href="#" class="links-list__item">Аксессуары для планшетов и электронных книг</a>
                    <a href="#" class="links-list__item">Кабели и переходники</a>
                    <a href="#" class="links-list__item">Сумки для ноутбуков</a>
                    <a href="#" class="links-list__item">Автотовары</a>
                    <a href="#" class="links-list__item">Сантехника</a>
                    <a href="#" class="links-list__item">Ремонт</a>
                  </div>
                </div>
              </div>

              <div class="footer__inner col-xl-auto col-m-6 col-12 px-0">
                <div class="links-list js-accordion">
                  <div class="links-list__top js-accordion-header">
                    <a href="#" class="links-list__header">Клиентам</a>
                    <div class="arrow arrow_small arrow_down js-accordion-btn"></div>
                  </div>
                  <div class="links-list__body js-accordion-body">
                    <a href="#" class="links-list__item">Политика конфиденциальности</a>
                    <a href="#" class="links-list__item">Доставка и оплата</a>
                    <a href="#" class="links-list__item">Способы оплаты</a>
                    <a href="#" class="links-list__item">Гарантия</a>
                    <a href="#" class="links-list__item">Регенерация турбины</a>
                    <a href="#" class="links-list__item">Контакты</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="footer__column col-xl-2 col-md-3 col-sm-4 col-m-5 col-12 d-m-flex justify-content-xl-start justify-content-m-center px-0">
            <div class="links-list phones-list js-accordion">
              <div class="links-list__top js-accordion-header">
                <a href="#" class="links-list__header">Горячая линия</a>
                <div class="arrow arrow_small arrow_down js-accordion-btn"></div>
              </div>
              <div class="links-list__body js-accordion-body">
                <a href="tel:0800000000" class="links-list__item links-list__item_big">0 800 000 000</a>
                <a href="tel:+380680000000" class="links-list__item links-list__item_medium">+38 068 000 00 00</a>
                <a href="tel:+380990000000" class="links-list__item links-list__item_medium">+38 099 000 00 00</a>
                <a href="tel:+380960000000" class="links-list__item links-list__item_medium">+38 096 000 00 00</a>
              </div>
            </div>
          </div>

          <div class="col-12 d-xxl-none px-0">
            <div class="row align-items-sm-center align-items-end justify-content-center">
              <div class="col-9 d-lg-none">
                <div class="payments">
                  <a href="#" class="nova-poshta">
                    <svg class="nova-poshta__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-nova-poshta') }}"></use>
                    </svg>
                  </a>

                  <div class="menu-payments">
                    <a href="#" class="menu-payments__item">
                      <svg class="menu-payments__icon">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-visa') }}"></use>
                      </svg>
                    </a>
                    <a href="#" class="menu-payments__item">
                      <svg class="menu-payments__icon">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-mastercard') }}"></use>
                      </svg>
                    </a>
                    <a href="#" class="menu-payments__item">
                      <svg class="menu-payments__icon">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-maestro') }}"></use>
                      </svg>
                    </a>
                    <a href="#" class="menu-payments__item">
                      <svg class="menu-payments__icon">
                        <use href="{{ asset('images/icons/spritemap.svg#sprite-paypal') }}"></use>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-auto d-lg-none">
                <div class="scroll-up">
                  <div class="scroll-up__body">
                    <a href="#home" class="arrow arrow_big arrow_up js-scroll-to"></a>
                  </div>
                  <span>Вверх</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid px-0">
        <div class="row justify-content-between align-items-center">
          <div class="col-4">
            <span class="copyright">2020 © Test</span>
          </div>
          <div class="col-md-3 col-8">
            <a href="https://wezom.com.ua/" target="_blank" class="developed-by">Разработка \\ Wezom</a>
          </div>
        </div>
      </div>
    </div>

    <div class="scroll-up scroll-up-abs">
      <div class="scroll-up__body">
        <a href="#home" class="arrow arrow_big arrow_up js-scroll-to"></a>
      </div>
      <span>Вверх</span>
    </div>
  </footer>

  <div class="coockie js-coockie">
    <div class="container-fluid px-0">
      <div class="coockie__row row justify-content-center align-items-center">
        <div class="coockie__column col-md-10 col-12 px-0">
          <p class="coockie__text">
            Этот сайт использует файлы cookies для более комфортной работы пользователя. Продолжая просмотр страниц
            сайта, вы соглашаетесь с использованием файлов cookies. Если вам нужна дополнительная информация или вы не
            хотите соглашаться с использованием cookies, пожалуйста, посетите страницу <a href="#">"Про cookies"</a>
          </p>
        </div>

        <div class="coockie__column col-md-2 col-12 d-flex justify-content-md-end justify-content-center px-0">
          <button class="btn coockie__btn js-coockie-btn">
            Согласен
          </button>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
