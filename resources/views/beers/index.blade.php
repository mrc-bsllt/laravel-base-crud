@extends("../layouts.layout-main")

@section("title")
  <title>Beers Table</title>
@endsection

@section("content")
  <main id=table_section>

    <table class="table table-dark table-striped table-bordered">
      <thead>
        <tr>
          {{-- <th>ID</th>
          <th>BRAND</th>
          <th>TYPE</th>
          <th>DESCRIPTION</th>
          <th>ALCOHOL CONTENT</th>
          <th>PRICE</th>
          <th>CREATED AT</th>
          <th>UPDATED AT</th>
          <th>LINK</th> --}}
          @foreach ($beers->toArray()[0] as $key => $value)
            <th>{{ $key }}</th>
          @endforeach
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
            <td><a href="{{ route('beers.show', ['beer' => $beer->id]) }}">Dettaglio</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
