@extends("layouts.layout-main")

@section("content")
  <main id="update_section" class="container">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif

      <form action="{{ route("beers.update", ["beer" => $beer->id]) }}" method="post">
        @csrf
        @method("PUT")

        <div class="form-group">
          <label for="brand">Marca della Birra</label>
          <input type="text" class="form-control" name="brand" id="brand" placeholder="inserisci il brand" value="{{ $beer->brand }}">
        </div>

        <div class="form-group">
          <label for="type">Tipo della Birra</label>
          <input type="text" class="form-control" name="type" id="type" placeholder="inserisci il tipo" value="{{ $beer->type }}">
        </div>

        <textarea name="description" rows="5" placeholder="inserisci una descrizione del prodotto">{{ $beer->description }}</textarea>

        <div class="form-group">
          <label for="alcohol_content">Grado alcolico</label>
          <input type="text" class="form-control" name="alcohol_content" id="alcohol_content" placeholder="inserisci il grado alcolico con il simbolo %" value="{{ $beer->alcohol_content }}">
        </div>

        <div class="form-group">
          <label for="price">Prezzo</label>
          <input type="text" class="form-control" name="price" id="price" placeholder="inserisci il prezzo" value="{{ $beer->price }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </main>
@endsection
