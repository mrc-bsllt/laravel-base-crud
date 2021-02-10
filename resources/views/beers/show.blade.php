@extends("../layouts.layout-main")

@section("title")
  <title>Beer detail</title>
@endsection

@section("content")
  <main id="show_detail">
    <table class="table table-dark table-striped table-bordered">
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
      </tbody>
    </table>

  </main>
@endsection
