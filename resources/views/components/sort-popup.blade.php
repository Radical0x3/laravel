<div style="display: none;" id="sort-popup" class="sort-popup">
  <div class="sort-popup__title">Сортировка</div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 px-0">
        <div class="sort-popup__list">
          <label class="sort-popup__item">
            <input type="radio" name="sort-by" class="sort-popup__input" checked />
            <div class="sort-popup__item-text">По названию от А до Я</div>
          </label>

          <label class="sort-popup__item">
            <input type="radio" name="sort-by" class="sort-popup__input" />
            <div class="sort-popup__item-text">По названию от Я до А</div>
          </label>

          <label class="sort-popup__item">
            <input type="radio" name="sort-by" class="sort-popup__input" />
            <div class="sort-popup__item-text">От дешевых к дорогим</div>
          </label>

          <label class="sort-popup__item">
            <input type="radio" name="sort-by" class="sort-popup__input" />
            <div class="sort-popup__item-text">От дорогих к шедевым</div>
          </label>
        </div>
      </div>

      <div class="col-12 px-0">
        <div class="sort-popup__subtitle">Товаров на странице</div>
        <div class="sort-popup__list">
          <label class="sort-popup__item">
            <input type="radio" name="products-to-show" class="sort-popup__input" />
            <div class="sort-popup__item-text">6</div>
          </label>

          <label class="sort-popup__item">
            <input type="radio" name="products-to-show" class="sort-popup__input" checked />
            <div class="sort-popup__item-text">9</div>
          </label>

          <label class="sort-popup__item">
            <input type="radio" name="products-to-show" class="sort-popup__input" />
            <div class="sort-popup__item-text">12</div>
          </label>

          <label class="sort-popup__item">
            <input type="radio" name="products-to-show" class="sort-popup__input" />
            <div class="sort-popup__item-text">15</div>
          </label>
        </div>
      </div>

      <div class="col-12 px-0">
        <a href="#" class="btn btn_main">
          <span class="btn__text">Применить</span>
          <svg class="btn__svg">
            <use href="{{ asset('images/icons/spritemap.svg#sprite-enter') }}"></use>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>
