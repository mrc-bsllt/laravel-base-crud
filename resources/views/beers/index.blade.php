{{-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Prova</title>
  </head>
  <body>
    <header>
      <h1>Birre</h1>
    </header>

    <footer></footer>
  </body>
</html> --}}

@extends("../layouts.layout-main")

@section("content")
  <main id=table_section>

    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>BRAND</th>
          <th>TYPE</th>
          <th>DESCRIPTION</th>
          <th>ALCOHOL CONTENT</th>
          <th>PRICE</th>
          <th>CREATED AT</th>
          <th>UPDATED AT</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($beers as $beer)
          <tr>
            <td>{{ $beer->id }}</td>
            <td>{{ $beer->brand }}</td>
            <td>{{ $beer->type }}</td>
            <td>{{ substr($beer->description, 0, 15)."..." }}</td>
            <td>{{ $beer->alcohol_content }}</td>
            <td>{{ $beer->price }}</td>
            <td>{{ $beer->created_at }}</td>
            <td>{{ $beer->updated_at }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
