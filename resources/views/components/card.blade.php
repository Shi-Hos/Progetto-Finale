<div class="container-fluid">
  <div class="row">
      <div class="col-12 col-md-4">
        <div class="card" style="width: 18rem;">
          {{-- QUESTA L'HO INSERITA DI DEFAULT SENNO' DAVA ERRORE, SENZA L'IMMAGINE NON MI PASSAVA L'ARTICOLO, POI LO IMPLEMENTEREMO --}}
          <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="immagine articolo">
          <div class="card-body">
            <h3 class="card-title">{{$article->title}}</h3>
            <h5 class="card-text">{{$article->body}}</h5>
            <p class="card-title">{{$article->author}}</p>
          <a href="{{route('article.show' , compact('article'))}}" class="btn btn-primary">DETTAGLIO</a>
          <a href="{{route('welcome')}}" class="btn btn-primary m-1">TORNA INDIETRO</a>
          </div>
        </div>
      </div>
  </div>
</div>

    

