<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Каталог</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
  <link rel="stylesheet" href="{{ asset('css/catalog.css') }}">
</head>

<body id="home">
  <x-header />

  <main class="main">
    <x-mobile-menu />

    <div class="wrapper main__head">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 px-0">
            <div class="routes">
              <a href="#" class="routes__item">Test</a>
              <a href="#" class="routes__item">Каталог</a>
              <a href="#" class="routes__item">Запчасти</a>
            </div>
          </div>

          <div class="col-12 px-0">
            <div class="section-title section-title_sm">Запчасти</div>
          </div>
        </div>
      </div>
    </div>

    <div class="main-catalog">
      <div class="container-fluid main-catalog__body">
        <div class="row mx-0">
          <div class="main-catalog__column col-3 d-lg-block d-none">
            <aside class="catalog-sidebar">
              <div class="catalog-sidebar__item catalog-sidebar__item_toggle">
                <div class="catalog-sidebar__top js-sidebar-header active">
                  <div class="catalog-sidebar__header">Бренд</div>
                  <div class="arrow arrow_small arrow_down arrow_dark"></div>
                </div>

                <div class="catalog-sidebar__body js-sidebar-body">
                  <label class="checkbox">
                    <input type="checkbox" class="checkbox__input" />
                    <span class="checkbox__style"></span>
                    <span class="checkbox__text">Jrone</span>
                  </label>

                  <label class="checkbox">
                    <input type="checkbox" class="checkbox__input" />
                    <span class="checkbox__style"></span>
                    <span class="checkbox__text">Turbo</span>
                  </label>

                  <label class="checkbox">
                    <input type="checkbox" class="checkbox__input" />
                    <span class="checkbox__style"></span>
                    <span class="checkbox__text">E & E</span>
                  </label>

                  <label class="checkbox">
                    <input type="checkbox" class="checkbox__input" />
                    <span class="checkbox__style"></span>
                    <span class="checkbox__text">Garret</span>
                  </label>
                </div>
              </div>

              <div class="catalog-sidebar__item">
                <div class="catalog-sidebar__top">
                  <div class="catalog-sidebar__header">Модель</div>
                </div>

                <div class="catalog-option">
                  <div class="select catalog-option__select catalog-sidebar__select js-select">
                    <div class="select__header js-select__header">
                      <span class="select__current">Leon</span>
                      <div class="arrow arrow_small arrow_down arrow_dark"></div>
                    </div>

                    <div class="select__body js-select__body">
                      <div class="select__item js-select-item">
                        <span>Leon</span>
                      </div>

                      <div class="select__item js-select-item">
                        <span>Leon 2</span>
                      </div>

                      <div class="select__item js-select-item">
                        <span>Leon 3</span>
                      </div>

                      <div class="select__item js-select-item">
                        <span>Leon 4</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="catalog-sidebar__item">
                <div class="catalog-sidebar__top">
                  <div class="catalog-sidebar__header">Год выпуска</div>
                </div>

                <div class="catalog-option">
                  <div class="select catalog-option__select catalog-sidebar__select js-select">
                    <div class="select__header js-select__header">
                      <span class="select__current">Все</span>
                      <div class="arrow arrow_small arrow_down arrow_dark"></div>
                    </div>

                    <div class="select__body js-select__body">
                      <div class="select__item js-select-item">
                        <span>Все</span>
                      </div>

                      <div class="select__item js-select-item">
                        <span>2021</span>
                      </div>

                      <div class="select__item js-select-item">
                        <span>2020</span>
                      </div>

                      <div class="select__item js-select-item">
                        <span>2019</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="catalog-sidebar__item">
                <div class="catalog-sidebar__top">
                  <div class="catalog-sidebar__header">Цена</div>
                </div>

                <div class="row mx-0">
                  <div class="catalog-sidebar__column col-5 px-0">
                    <input class="catalog-sidebar__input js-range-from" type="number" placeholder="от 1847">
                  </div>

                  <div class="catalog-sidebar__column col-5 pr-0">
                    <input class="catalog-sidebar__input js-range-to" type="number" placeholder="до 19717">
                  </div>

                  <div class="col pr-0">
                    <div class="btn btn_submit">OK</div>
                  </div>
                </div>

                <input type="text" class="js-range-slider" name="my_range" value="" />
              </div>
            </aside>
          </div>

          <div class="main-catalog__column col">
            <div class="row">
              <div class="col-6 d-lg-block d-none">
                <div class="catalog-option">
                  <span class="catalog-option__text">Сортировать</span>

                  <div class="select catalog-option__select js-select">
                    <div class="select__header js-select__header">
                      <span class="select__current">По названию от А до Я</span>
                      <div class="arrow arrow_small arrow_down arrow_dark"></div>
                    </div>

                    <div class="select__body js-select__body">
                      <div class="select__item js-select-item">
                        <span>По названию от А до Я</span>
                      </div>

                      <div class="select__item js-select-item">
                        <span>По названию от Я до А</span>
                      </div>

                      <div class="select__item js-select-item">
                        <span>От дешевых к дорогим</span>
                      </div>

                      <div class="select__item js-select-item">
                        <span>От дорогих к дешевым</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-6 d-lg-flex d-none justify-content-end">
                <div class="catalog-option catalog-option_small">
                  <span class="catalog-option__text">Товаров на странице</span>

                  <div class="select catalog-option__select js-select">
                    <div class="select__header js-select__header">
                      <span class="select__current">9</span>
                      <div class="arrow arrow_small arrow_down arrow_dark"></div>
                    </div>

                    <div class="select__body js-select__body">
                      <div class="select__item js-select-item">
                        <span>6</span>
                      </div>

                      <div class="select__item js-select-item">
                        <span>9</span>
                      </div>

                      <div class="select__item js-select-item">
                        <span>12</span>
                      </div>

                      <div class="select__item js-select-item">
                        <span>15</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-m-6 col-12 d-lg-none d-block mb-m-6 mb-3">
                <button data-fancybox data-src="#filter-popup" class="mobile-button js-popup">
                  <span class="mobile-button__text">Фильтры</span>
                  <svg class="mobile-button__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-filter') }}"></use>
                  </svg>
                </button>
              </div>

              <div class="col-m-6 col-12 d-lg-none d-block mb-6">
                <button data-fancybox data-src="#sort-popup" class="mobile-button js-popup">
                  <span class="mobile-button__text">Сортировка</span>
                  <svg class="mobile-button__icon">
                    <use href="{{ asset('images/icons/spritemap.svg#sprite-sort') }}"></use>
                  </svg>
                </button>
              </div>

              <div class="col-12">
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
                      ['id' => 4, 'title' => 'Ружье Mossberg 590M Mag-Fed', 'label' => 'green', 'label-text' => 'Новинка', 'icons' => ['wish', 'compare', 'play'], 'rating' => '2', 'votes-count' => '46', 'price' => '32 509', 'new-price' => '27 632.65'],
                      ['id' => 5, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'icons' => ['wish', 'compare'], 'rating' => '1', 'votes-count' => '10', 'price' => '32 509', 'new-price' => '27 632.65'],
                      ['id' => 6, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'label' => 'red', 'label-text' => '-70%', 'icons' => ['wish', 'compare'], 'rating' => '4', 'votes-count' => '11', 'price' => '27 632.65'],
                      ['id' => 7, 'title' => 'Ружье Mossberg 590M Mag-Fed', 'icons' => ['wish', 'compare', 'play'], 'rating' => '2', 'votes-count' => '12', 'price' => '32 509', 'new-price' => '27 632.65'],
                      ['id' => 8, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'label' => 'blue', 'label-text' => 'Акция', 'icons' => ['wish', 'compare'], 'rating' => '5', 'votes-count' => '13', 'price' => '32 509', 'new-price' => '27 632.65'],
                      ['id' => 9, 'title' => 'Ружье Mossberg 590M Mag-Fed к.12 18.5" Synthetic', 'icons' => ['wish', 'compare'], 'rating' => '5', 'votes-count' => '13', 'price' => '27 632.65'],
                  ];
                @endphp
                <div class="row justify-content-m-between justify-content-center">
                  @foreach ($goods as $item)
                    <div class="main-catalog__inner col-xl-4 col-lg-6 col-md-4 col-m-6 col-12">
                      <div class="product main-catalog__product">
                        @if (array_key_exists('label', $item))
                          @php
                            $classes = 'label label_' . $item['label'];
                          @endphp
                        @else
                          @php
                            $classes = 'label label_grey';
                          @endphp
                        @endif

                        @if (array_key_exists('label-text', $item))
                          <div class="{{ $classes }}">{{ $item['label-text'] }}</div>
                        @endif

                        <div class="product__top">
                          <div class="product__wrap">
                            <a href="#">
                              <picture>
                                <source data-srcset="{{ asset('images/stuff.webp') }}" type="image/webp"
                                  class="lozad">
                                <img width="394" height="394" data-src="{{ asset('images/stuff.jpg') }}"
                                  alt="box image" class="product__img lozad">
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

                          <button class="product__buy" title="Купить">
                            <svg class="product__buy-icon">
                              <use href="{{ asset('images/icons/spritemap.svg#sprite-cart') }}"></use>
                            </svg>
                            <span class="product__buy-text">Купить</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  @endforeach

                  <div class="col-12">
                    <div class="pagination">
                      <div class="pagination__arrow">
                        <svg class="pagination__icon">
                          <use href="{{ asset('images/icons/spritemap.svg#sprite-arrow-left') }}"></use>
                        </svg>
                      </div>

                      <div class="pagination__list">
                        <div class="pagination__item">1</div>
                        <div class="pagination__item active">2</div>
                        <div class="pagination__item">3</div>
                        <div class="pagination__item">4</div>
                        <div class="pagination__item">5</div>
                      </div>

                      <div class="pagination__arrow">
                        <svg class="pagination__icon">
                          <use href="{{ asset('images/icons/spritemap.svg#sprite-arrow-right') }}"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <x-footer />
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
  <x-basket-popup :content="$basketItems" />
  <x-filter-popup />
  <x-sort-popup />
  <x-coockie />

  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
