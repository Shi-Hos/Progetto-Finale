<x-layout>
    <x-searchbar/>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mt-5">
              <fieldset>
                <h1 class="display-3 borderY text-center">ARTICOLI PER CATEGORIA : {{$category->name}}</h1>
              </fieldset>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row mt-5 justify-content-around">
            @if ($category->articles->isNotEmpty())
          @foreach($category->articles as $article)
          <div class="col-12 col-lg-4">
            <x-card :article='$article'></x-card>
        </div>
        @endforeach
        @else
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h5 class="text-center">NON CI SONO ARTICOLI PER LA CATEGORIA : {{$category->name}}</h5>
                </div>
            </div>
        </div>
        @endif
    </div>
      </div>
    

</x-layout>