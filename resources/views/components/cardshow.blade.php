<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-4">
          <div class="card" style="width: 18rem;">
            {{-- QUESTA L'HO INSERITA DI DEFAULT SENNO' DAVA ERRORE, SENZA L'IMMAGINE NON MI PASSAVA L'ARTICOLO, POI LO IMPLEMENTEREMO --}}
            <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="immagine articolo">
            <div class="card-body">
              <h3 class="card-title">{{$article->title}}</h3>
              <h5 class="card-text">{{$article->body}}</h5>
              <a href="" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
              <div class="mt-1 card-footer text-muted d-flex justify-content-between align-items-center">
                Redatto il {{$article->created_at->format('d/m/Y H:i:s')}} da <a href="" class="text-decoration-none">{{$article->author}}</a>
              </div>
            <a href="{{route('welcome')}}" class="btn m-1 bg-warning">TORNA INDIETRO</a>
            <a href="{{route('article.edit', compact('article'))}}" class="btn btn-danger m-1">MODIFICA</a>
            </div>
          </div>
        </div>
    </div>
  </div>