@extends("../layouts.layout-main")

@section("title")
  <title>Beers Table</title>
@endsection

@section("content")
  <main id=table_section>

    <table class="table table-dark table-striped table-bordered">

      <thead>
        <tr>
          @foreach ($beers->toArray()[0] as $key => $value)
            <th>{{ $key }}</th>
          @endforeach
        </tr>
      </thead>

      <tbody>
        @foreach ($beers->toArray() as $beer)
          <tr>
            @foreach ($beer as $key => $value)
              <td>{{ $key == "description" ? substr($value, 0, 15)."...": $value }}</td>
            @endforeach
            <td><a href="{{ route('beers.show', ['beer' => $beer["id"]]) }}">Dettaglio</a></td>
          </tr>
        @endforeach
      </tbody>
      
    </table>
  </main>
@endsection
