<x-layout>
  <x-searchbar/>
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 mt-5">
          <fieldset>
            <h1 class="display-3 borderY text-center">TUTTI GLI ARTICOLI</h1>
          </fieldset>
        </div>
    </div>
</div>
    
    <div class="container mt-5">
        <div class="row mt-5 justify-content-around">
          @foreach($articles->where('is_accepted', true) as $article)
          <div class="col-12 col-lg-4">
            <x-card :article='$article'></x-card>
          </div>
          @endforeach
        </div>
      </div>

      @if($article->category)
      <a href="{{route('article.category' , ['category' => $article->category->id])}}" class="small fst-italic text-capitalize">{{$article->category->name}}</a>
      @else
      <p class="small fst-italic text-capitalize">Non categorizzato</p>
      @endif
    

</x-layout>