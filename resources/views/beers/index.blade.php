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
            <td><a class="btn btn-secondary" href="{{ route('beers.show', ['beer' => $beer["id"]]) }}"><i class="fas fa-eye"></i></a></td>
            <td><a class="btn btn-secondary" href="{{ route('beers.edit', ['beer' => $beer["id"]]) }}"><i class="fas fa-pen"></i></a></td>
            <td>
              <form action="{{ route('beers.destroy', ['beer' => $beer['id']]) }}" method="post">
                @csrf
                @method("delete")

                <button type="submit" class="btn btn-secondary"><i class="fas fa-trash-alt"></i></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>

    </table>

    <a class="btn btn-primary" href="{{ route("beers.create") }}">Aggiungi</a>
  </main>
@endsection
