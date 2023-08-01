<x-layout>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mt-5">
              <fieldset>
                <h1 class="display-1 borderY text-center">HAI CERCATO:  {{$query}}</h1>
              </fieldset>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3 my-2">
                    <div class="card">
                        <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->subtitle}}</p>
                            <a href="{{route('article.byCategory', ['category' => $article->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</a>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between align-center">
                            <a class="" href="{{route('article.byUser', ['user' => $article->user->id])}}">Redatto il {{$article->created_at->format('d/m/y')}} da {{$article->user->name}}</a>
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi</a>
                        </div>
                    </div>
                </div>                
            @endforeach
        </div>
    </div>
</x-layout>