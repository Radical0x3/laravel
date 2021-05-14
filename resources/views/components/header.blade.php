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

            <a href="/catalog" class="catalog__link link-decor">Все категории</a>

            <div class="main-list main-list_shadow main-list_rounded js-main-list">
              <div class="row main-list__body">
                <div class="col-12 main-list__item main-list__item_rounded js-main-list-item" data-category-id="1">
                  <a href="#" class="main-list__link">
                    <svg class="main-list__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-power') }}"></use>
                    </svg>
                    <span class="main-list__text">Турбины</span>
                    <div class="arrow arrow_medium arrow_right"></div>
                  </a>
                </div>

                <div class="col-12 main-list__item main-list__item_rounded js-main-list-item" data-category-id="2">
                  <a href="#" class="main-list__link">
                    <svg class="main-list__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-cartridge') }}"></use>
                    </svg>
                    <span class="main-list__text">Картриджи</span>
                    <div class="arrow arrow_medium arrow_right"></div>
                  </a>
                </div>

                <div class="col-12 main-list__item main-list__item_rounded js-main-list-item" data-category-id="3">
                  <a href="#" class="main-list__link">
                    <svg class="main-list__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-geometry') }}"></use>
                    </svg>
                    <span class="main-list__text">Геометрии</span>
                    <div class="arrow arrow_medium arrow_right"></div>
                  </a>
                </div>

                <div class="col-12 main-list__item main-list__item_rounded js-main-list-item" data-category-id="4">
                  <a href="#" class="main-list__link">
                    <svg class="main-list__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-aktuator') }}"></use>
                    </svg>
                    <span class="main-list__text">Актуаторы</span>
                    <div class="arrow arrow_medium arrow_right"></div>
                  </a>
                </div>

                <div class="col-12 main-list__item main-list__item_rounded js-main-list-item" data-category-id="5">
                  <a href="#" class="main-list__link">
                    <svg class="main-list__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-servoprivod') }}"></use>
                    </svg>
                    <span class="main-list__text">Сервоприводы</span>
                    <div class="arrow arrow_medium arrow_right"></div>
                  </a>
                </div>

                <div class="col-12 main-list__item main-list__item_rounded js-main-list-item" data-category-id="6">
                  <a href="#" class="main-list__link">
                    <svg class="main-list__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-prokladki') }}"></use>
                    </svg>
                    <span class="main-list__text">Прокладки</span>
                    <div class="arrow arrow_medium arrow_right"></div>
                  </a>
                </div>

                <div class="col-12 main-list__item main-list__item_rounded js-main-list-item" data-category-id="7">
                  <a href="#" class="main-list__link">
                    <svg class="main-list__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-zapchasti') }}"></use>
                    </svg>
                    <span class="main-list__text">Прочие запчасти</span>
                    <div class="arrow arrow_medium arrow_right"></div>
                  </a>
                </div>

                <div class="col-12 main-list__item main-list__item_rounded js-main-list-item" data-category-id="8">
                  <a href="#" class="main-list__link">
                    <svg class="main-list__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-aktuator-2') }}"></use>
                    </svg>
                    <span class="main-list__text">Электронновакуумные актуаторы</span>
                    <div class="arrow arrow_medium arrow_right"></div>
                  </a>
                </div>

                <div class="col-12 main-list__item main-list__item_rounded js-main-list-item" data-category-id="9">
                  <a href="#" class="main-list__link">
                    <svg class="main-list__icon">
                      <use href="{{ asset('images/icons/spritemap.svg#sprite-body-tourbine') }}"></use>
                    </svg>
                    <span class="main-list__text">Корпуса турбины</span>
                    <div class="arrow arrow_medium arrow_right"></div>
                  </a>
                </div>

                <div class="col-12 main-list__item main-list__item_rounded js-main-list-item" data-category-id="10">
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
