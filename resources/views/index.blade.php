<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name') }}</title>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel='stylesheet' id='x-google-fonts-css' href='//fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C700%2C700italic%2C600%7CLato%3A700&subset=latin%2Clatin-ext&ver=5.2.5' type='text/css' media='all' />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather|Roboto:400">
  <link rel="stylesheet" href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css">

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app"></div>
</body>
</html>
