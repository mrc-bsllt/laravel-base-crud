@extends("../layouts.layout-main")

@section("title")
  <title>Beer detail</title>
@endsection

@section("content")
  <main id="show_detail">

    <table class="table table-dark table-striped table-bordered">
      @foreach ($beer->toArray() as $key => $value)
      <tr>
        <th>{{ $key }}</th>
        <td>{{ $value }}</td>
      </tr>
    @endforeach
    </table>

  </main>
@endsection
