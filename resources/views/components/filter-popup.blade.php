<div style="display: none;" id="filter-popup" class="filter-popup">
  <div class="filter-popup__title">Фильтры</div>
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 px-0">
        <div class="catalog-sidebar">
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
              <div class="catalog-sidebar__column col-6 px-0">
                <input class="catalog-sidebar__input js-range-from" type="number" placeholder="от 1847">
              </div>
              <div class="catalog-sidebar__column col-6 pr-0">
                <input class="catalog-sidebar__input js-range-to" type="number" placeholder="до 19717">
              </div>
            </div>

            <input type="text" class="js-range-slider" name="my_range" value="" />
          </div>

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
</div>
