<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Prova</title>
  </head>
  <body>
    @include("../templates/header")

    @yield("content")

    @include("../templates/footer")
  </body>
</html>
