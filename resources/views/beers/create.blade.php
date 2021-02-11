@extends('../layouts.layout-main')

@section("content")
  <main id="form-section" class="container">

      <form action="{{ route("beers.store") }}" method="post">
        @csrf
        @method("POST")

        <div class="form-group">
          <label for="brand">Marca della Birra</label>
          <input type="text" class="form-control" name="brand" id="brand" placeholder="inserisci il brand">
        </div>

        <div class="form-group">
          <label for="type">Tipo della Birra</label>
          <input type="text" class="form-control" name="type" id="type" placeholder="inserisci il tipo">
        </div>

        <textarea name="description" rows="5" placeholder="inserisci una descrizione del prodotto"></textarea>

        <div class="form-group">
          <label for="alcohol_content">Grado alcolico</label>
          <input type="text" class="form-control" name="alcohol_content" id="alcohol_content" placeholder="inserisci il grado alcolico con il simbolo %">
        </div>

        <div class="form-group">
          <label for="price">Prezzo</label>
          <input type="text" class="form-control" name="price" id="price" placeholder="inserisci il prezzo">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  </main>
@endsection
