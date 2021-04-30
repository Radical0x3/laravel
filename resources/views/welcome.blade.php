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
  <header class="header">
    <div class="wrapper lock-padding">
      <div class="container-fluid px-0">
        <div class="row header-row mx-0 mb-md-3 d-xl-flex d-none align-items-center justify-content-between js-row-1">
          <div class="col-xxl-3 col-md-1 mr-xxl-5 mr-md-6 pl-0 js-logo-wrap">
            <a href="#">
              <svg class="logo">
                <use href="{{ asset('images/icons/spritemap.svg#sprite-wezom-logo') }}"></use>
              </svg>
            </a>
          </div>

          <div class="col mr-xxl-5 mr-0 d-flex align-items-center justify-content-between js-menu-wrap">
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
              <div class="phones__top js-accordion-header">
                <a href="tel:+380680000000" class="phones__text">+38 068 000 00 00</a>
                <div class="arrow arrow-down js-accordion-btn"></div>
              </div>
              <div class="phones__body js-accordion-body">
                <a href="tel:+380680000001" class="phones__text phones__body-text">+38 068 000 00 01</a>
                <a href="tel:+380680000002" class="phones__text phones__body-text">+38 068 000 00 02</a>
                <a href="tel:+380680000003" class="phones__text phones__body-text">+38 068 000 00 03</a>
              </div>
            </div>
          </div>

          <div class="col-xl-2 px-0 d-flex justify-content-end align-items-center js-lang-wrap">
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

        <div class="row header-row mx-0 js-row-2">
          <div class="col-1 px-0 align-items-center main-hamburger">
            <div class="hamburger js-main-hamburger">
              <div class="hamburger__body"></div>
            </div>
          </div>

          <div class="col-xl-3 d-xl-block d-none mr-xl-5 mr-0 pl-0">
            <div class="catalog">
              <div class="catalog__action">
                <div class="hamburger">
                  <div class="hamburger__body"></div>
                </div>
                <span class="catalog__text">каталог</span>
              </div>

              <a href="#" class="catalog__link link-decor">Все категории</a>
            </div>
          </div>

          <div class="col mr-xl-5 mr-0 d-flex align-items-center">
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
            class="col-xl-2 col-m-3 col-4 px-0 d-flex align-items-center justify-content-xl-start justify-content-end js-user-button-wrap">
            <div class="row _w100 justify-content-xl-start justify-content-end">
              <div class="col-4 user-button d-xl-flex d-none">
                <div class="user-button__body">
                  <svg class="user-button__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-top-compare') }}"></use>
                  </svg>
                </div>
              </div>

              <div class="col-4 user-button d-xl-flex d-none">
                <div class="user-button__body">
                  <svg class="user-button__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-top-wish') }}"></use>
                  </svg>
                </div>
              </div>

              <div class="col-xl-4 col-md-5 col-6 user-button cart-button mr-xl-0 mr-sm-2">
                <div class="user-button__body">
                  <svg class="user-button__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-top-cart') }}"></use>
                  </svg>
                  <div class="user-button__cloud">3</div>
                </div>
              </div>

              <div class="col-md-6 col-4 d-xl-none d-flex align-items-center justify-content-center pl-0">
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
    <div class="mobile js-mobile">
      <div class="container-fluid _h100">
        <div class="row _h100 justify-content-between">
          <div class="col-12 mb-3">
            <div class="row align-items-center mb-3">
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

            <div class="row mb-3">
              <div class="col-12">
                <div class="menu main-menu js-menu">
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
                </div>

                <div class="phones js-accordion">
                  <div class="phones__top js-accordion-header">
                    <a href="tel:+380680000000" class="phones__text">+38 068 000 00 00</a>
                    <div class="arrow arrow-down js-accordion-btn"></div>
                  </div>
                  <div class="phones__body js-accordion-body">
                    <a href="tel:+380680000001" class="phones__text phones__body-text">+38 068 000 00 01</a>
                    <a href="tel:+380680000002" class="phones__text phones__body-text">+38 068 000 00 02</a>
                    <a href="tel:+380680000003" class="phones__text phones__body-text">+38 068 000 00 03</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="catalog mobile-catalog js-accordion">
                  <div class="mobile-catalog__top js-accordion-header">
                    <span class="catalog__text mobile-catalog__text">каталог</span>
                    <div class="arrow arrow-down js-accordion-btn"></div>
                  </div>

                  <div class="mobile-catalog__body js-accordion-body">
                    <a href="#" class="catalog__text">Пункт 1</a>
                    <a href="#" class="catalog__text">Пункт 2</a>
                    <a href="#" class="catalog__text">Пункт 3</a>
                    <a href="#" class="catalog__text">Пункт 4</a>
                    <a href="#" class="catalog__text">Пункт 5</a>
                  </div>

                  <a href="#" class="catalog__link mt-2">Все категории</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 pb-2">
            <div class="row _h100 justify-content-center align-items-end">
              <div class="col-6 user-button user-mobile-button">
                <div class="user-button__body">
                  <svg class="user-button__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-top-compare') }}"></use>
                  </svg>
                </div>
              </div>

              <div class="col-6 user-button user-mobile-button">
                <div class="user-button__body">
                  <svg class="user-button__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-top-wish') }}"></use>
                  </svg>
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
          <header class="categories__top container-fluid">
            <div class="row align-items-center justify-content-sm-between justify-content-center">
              <div class="section-title col-md-8 col-sm-7 mb-sm-0 mb-3">Популярные категории</div>
              <a href="#" class="btn btn-sm btn-transparent btn-round col-md-4 col-sm-5">
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
                <a href="#" class="category__image-wrap">
                  <picture>
                    <source srcset="{{ asset('images/top-slider/category-' . $category['id'] . '.webp') }}"
                      type="image/webp">
                    <img src="{{ asset('images/top-slider/category-' . $category['id'] . '.jpg') }}"
                      alt="category poster" class="category__image">
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
        <div class="row col-12 justify-content-center">
          <p class="text">
            Тут должен быть какой то текст, потом придумаем какой точно будет =)
          </p>
        </div>
      </div>

      <div class="bottom">
        <div class="recall">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="recall__inner">
                <button class="btn btn-lg btn-gradient btn-svg btn-round ">
                  <span>замовити зворотній зв’язок</span>
                  <svg>
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

        @php
          $cards = [['text' => 'Текст карточки первый', 'duration' => 15], ['text' => 'Текст карточки второй', 'duration' => 20], ['text' => 'Текст карточки третий', 'duration' => 11], ['text' => 'Текст карточки последний', 'duration' => 9]];
        @endphp

        @isset($cards)
          <div class="cards">
            <div class="wrapper">
              <div class="container-fluid overflow-hidden">
                <div class="row align-items-stretch">
                  @foreach ($cards as $card)
                    <div class="col-lg-3 col-md-4 col-m-6 mb-3">
                      <div class="card">
                        <p class="card__text">{{ $card['text'] }}</p>
                        <div class="time">
                          <svg>
                            <use href="{{ asset('images/icons/spritemap.svg#sprite-clock') }}"></use>
                          </svg>
                          <span>&mdash; &nbsp;</span>
                          <span>{{ $card['duration'] }} min</span>
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

      <img src="{{ asset('images/pop.png') }}" alt="pop image" class="pop">
    </section>

    <section class="shop">
      <div class="container-fluid px-0">
        <div class="row">
          <div class="col col-xs-12 pr-xl-4 pr-lg-1 mb-lg-0 mb-md-4 mb-3">
            <div class="row">
              <div class="col-12 mb-lg-5 mb-md-4 mb-3">
                <div class="box">
                  <picture>
                    <source srcset="{{ asset('images/shop/shop-1.webp') }}" type="image/webp">
                    <img src="{{ asset('images/shop/shop-1.jpg') }}" alt="box image" class="box__img">
                  </picture>
                  <div class="box__blur"></div>
                  <a href="#" class="btn btn-rect  btn-transparent box-btn">
                    Снаряжение
                  </a>
                </div>
              </div>
              <div class="col-12">
                <div class="box">
                  <picture>
                    <source srcset="{{ asset('images/shop/shop-2.webp') }}" type="image/webp">
                    <img src="{{ asset('images/shop/shop-2.jpg') }}" alt="box image" class="box__img">
                  </picture>
                  <div class="box__blur"></div>
                  <a href="#" class="btn btn-rect  btn-transparent box-btn">
                    ножи и инструменты
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-m-6 col-12 pr-xl-4 pr-lg-1 mb-lg-0 mb-md-4 mb-3">
            <div class="row _h100">
              <div class="col">
                <div class="box box-h-100">
                  <picture>
                    <source srcset="{{ asset('images/shop/shop-3.webp') }}" type="image/webp">
                    <img src="{{ asset('images/shop/shop-3.jpg') }}" alt="box image" class="box__img">
                  </picture>
                  <div class="box__blur"></div>
                  <a href="#" class="btn btn-rect  btn-transparent box-btn">
                    Оружие
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="row">
              <div class="col-m-6 col-12 mb-lg-5 mb-md-4 mb-3">
                <div class="box">
                  <picture>
                    <source srcset="{{ asset('images/shop/shop-4.webp') }}" type="image/webp">
                    <img src="{{ asset('images/shop/shop-4.jpg') }}" alt="box image" class="box__img">
                  </picture>
                  <div class="box__blur"></div>
                  <a href="#" class="btn btn-rect  btn-transparent box-btn">
                    Патроны
                  </a>
                </div>
              </div>
              <div class="col-m-6 col-12 mb-lg-0 mb-md-4 mb-3">
                <div class="box">
                  <picture>
                    <source srcset="{{ asset('images/shop/shop-5.webp') }}" type="image/webp">
                    <img src="{{ asset('images/shop/shop-5.jpg') }}" alt="box image" class="box__img">
                  </picture>
                  <div class="box__blur"></div>
                  <a href="#" class="btn btn-rect  btn-transparent box-btn">
                    Аксессуары
                  </a>
                </div>
              </div>

              <div class="col-12">
                <div class="box">
                  <picture>
                    <source srcset="{{ asset('images/shop/shop-6.webp') }}" type="image/webp">
                    <img src="{{ asset('images/shop/shop-6.jpg') }}" alt="box image" class="box__img">
                  </picture>
                  <div class="box__blur"></div>
                  <a href="#" class="btn btn-rect  btn-transparent box-btn">
                    Тир
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
          ['id' => 2, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic1', 'label' => 'blue', 'label-text' => 'Акция', 'icons' => ['wish', 'compare'], 'rating' => '5', 'votes-count' => '2', 'price' => '32 509', 'new-price' => '27 632.65'],
          ['id' => 3, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic2', 'label' => 'red', 'label-text' => '-70%', 'icons' => ['wish', 'compare'], 'rating' => '3', 'votes-count' => '12', 'price' => '27 632.65'],
          ['id' => 4, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic3', 'label' => 'orange', 'label-text' => 'топ продаж', 'icons' => ['wish', 'compare', 'play'], 'rating' => '2', 'votes-count' => '46', 'price' => '32 509', 'new-price' => '27 632.65'],
          ['id' => 1, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic4', 'label' => 'green', 'label-text' => 'Новинка', 'icons' => ['wish', 'compare', 'play'], 'rating' => '1', 'votes-count' => '10', 'price' => '32 509', 'new-price' => '27 632.65'],
          ['id' => 2, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic5', 'label' => 'blue', 'label-text' => 'Акция', 'icons' => ['wish', 'compare'], 'rating' => '4', 'votes-count' => '11', 'price' => '32 509', 'new-price' => '27 632.65'],
          ['id' => 3, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic6', 'label' => 'red', 'label-text' => '-40%', 'icons' => ['wish', 'compare'], 'rating' => '2', 'votes-count' => '12', 'price' => '32 509', 'new-price' => '27 632.65'],
          ['id' => 4, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic7', 'label' => 'orange', 'label-text' => 'топ продаж', 'icons' => ['wish', 'compare', 'play'], 'rating' => '5', 'votes-count' => '13', 'price' => '27 632.65'],
      ];
    @endphp

    @isset($goods)
      <section class="goods custom-scrollbar overflow-x-auto">
        <div class="container-fluid px-0 goods__outer">
          <div class="row flex-nowrap align-items-stretch goods__inner" data-scrollbar>
            @foreach ($goods as $item)
              <div class="col-lg-3 col-md-4 col-m-6 col-12 pl-lg-4 pl-md-3 pl-2">
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
                          <source srcset="{{ asset('images/stuff.webp') }}" type="image/webp">
                          <img src="{{ asset('images/stuff.jpg') }}" alt="box image" class="product__img">
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
  </main>


  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
