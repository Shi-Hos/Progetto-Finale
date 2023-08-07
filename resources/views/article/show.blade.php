<x-layout>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mt-5">
              <fieldset>
                <h1 class="display-3 borderY text-center">ECCO IL TUO ARTICOLO</h1>
              </fieldset>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-5">
        <div class="row justify-content-center mt-3">
            <div class="col-12  col-md-4">
                <img src="{{Storage::url($article->img)}}" alt="" class="img-fluid">  

            </div>
            <div class="col-12 col-md-8">
                <h1>{{$article->title}}</h1>
                <h2 class="text-black">{{$article->subtitle}}</h2>
                <p class="text-black"> {{$article->body}}</p>
                <a href="{{ route('welcome') }}" class="btn m-1 bg-warning">TORNA INDIETRO</a>
                @if($article->category)
                <a href="{{route('article.category' , ['category' => $article->category->id])}}" class="small fst-italic text-capitalize">{{$article->category->name}}</a>
                @else
                <p class="small fst-italic text-capitalize">Non categorizzato</p>
                @endif
            </div>
        </div>
    </div>
    


    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                @if ((Auth::user()->is_revisor || Auth::user()->is_admin) && (!$article->is_accepted))
                <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-success me-1  my-5">Accetta articolo</a>
                <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-danger ms-1 my-5">Riufiuta articolo</a>
            @endif
            </div>
        </div>
    </div>
    



</x-layout>

