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
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-3">
                <x-cardshow :article='$article'></x-cardshow>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (Auth::user()->is_revisor)
                    <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-success text-white my-5">Accetta articolo</a>
                    <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-danger text-white my-5">Riufiuta articolo</a>
                    
                @endif
            </div>
        </div>
    </div>
    



</x-layout>