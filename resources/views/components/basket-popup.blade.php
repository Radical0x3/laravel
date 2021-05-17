<div style="display: none;" id="basket-popup" class="basket-popup">
  <div class="basket-popup__title">Корзина</div>
  <div class="container-fluid">
    @isset($content)
      <div class="row basket-popup__body">
        @foreach ($content as $item)
          <div class="col-12 basket-popup__item js-basket-popup-item">
            <div class="basket-popup__item-aside">
              <svg class="basket-popup__item-remove js-basket-popup-remove">
                <use href="{{ asset('images/icons/spritemap.svg#sprite-close') }}"></use>
              </svg>

              <div class="basket-popup__image-wrap">
                <div class="basket-popup__image-holder"></div>
                <a href="#">
                  <img data-src="{{ asset('images/basket-popup/basket-popup-' . $item['id'] . '.jpg') }}"
                    alt="basket popup image" class="basket-popup__image lozad">
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

  @empty($content)
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
