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

<body>
  <x-header />

  <main class="main">
    <x-mobile-menu />
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
