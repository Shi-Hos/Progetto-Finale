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


    <div class="container-fluid  mt-5">
        <div class="row justify-content-center mt-3">
            <div class="col-12 justify-content-center d-flex col-md-3 ">
                <x-cardshow :article='$article'></x-cardshow>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                @if (Auth::user()->is_revisor)
                    <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-success me-1  my-5">Accetta articolo</a>
                    <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-danger ms-1 my-5">Riufiuta articolo</a>                   
                @endif
            </div>
        </div>
    </div>
    



</x-layout>