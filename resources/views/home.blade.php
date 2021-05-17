<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Главная</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body id="home">
  <x-header />

  <main class="main">
    <x-mobile-menu />

    <section class="top">
      <div class="categories">
        <div class="wrapper">
          <header class="categories__top container-fluid px-0">
            <div class="categories__row row align-items-center justify-content-sm-between justify-content-center">
              <div class="section-title categories__title col-md-8 col-sm-7 px-0">Популярные категории</div>
              <a href="/catalog" class="btn btn_sm btn_round col-md-4 col-sm-5">
                Все категории
              </a>
            </div>
          </header>
        </div>

        @php
          $categories = [['id' => 1, 'text' => 'Косметика и гигиена'], ['id' => 2, 'text' => 'Техника и электроника'], ['id' => 3, 'text' => 'Повседневная одежда'], ['id' => 4, 'text' => 'Одежда и обувь'], ['id' => 5, 'text' => 'Сапоги и туфли'], ['id' => 6, 'text' => 'Универсальное'], ['id' => 7, 'text' => 'Сумки и кошельки'], ['id' => 8, 'text' => 'Нижнее бельё'], ['id' => 9, 'text' => 'Спортивная обувь'], ['id' => 10, 'text' => 'Сапоги и туфли']];
        @endphp

        @isset($categories)
          <div class="categories__list js-categories-list">
            @foreach ($categories as $category)
              <div class="category">
                <div class="category__inner">
                  <a data-fancybox="gallery" data-caption="{{ $category['text'] }}"
                    href="{{ asset('images/top-slider/category-' . $category['id'] . '.jpg') }}"
                    class="category__image-wrap js-category-image">
                    <picture>
                      <source data-srcset="{{ asset('images/top-slider/category-' . $category['id'] . '.webp') }}"
                        type="image/webp" class="lozad">
                      <img width="311" height="446"
                        data-src="{{ asset('images/top-slider/category-' . $category['id'] . '.jpg') }}"
                        alt="category poster lozad" class="category__image">
                    </picture>
                  </a>

                  <div class="circle-gradient"></div>
                </div>
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

      <img width="841" height="944" data-src="{{ asset('images/pop.png') }}" alt="pop image" class="pop lozad">
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
                            class="lozad">
                          <img data-src="{{ asset('images/shop/shop-' . $id . '.jpg') }}" alt="box image"
                            class="box__img lozad">
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
      <section class="goods js-scrollbar">
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
                          <source data-srcset="{{ asset('images/stuff.webp') }}" type="image/webp" class="lozad">
                          <img width="394" height="394" data-src="{{ asset('images/stuff.jpg') }}" alt="box image"
                            class="product__img lozad">
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
  <x-coockie />

  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
