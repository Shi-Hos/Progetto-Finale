<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-4 text-center">ARTICOLI PER REDATTORE : {{$user->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row mt-5 justify-content-around">
          @foreach($user->articles as $article)
          <div class="col-12 col-lg-4">
            <x-card :article='$article'></x-card>
        </div>
        @endforeach
    </div>
      </div>
    

</x-layout>