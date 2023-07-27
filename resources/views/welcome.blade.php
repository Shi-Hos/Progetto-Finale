<x-layout>

  <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="display-2 text-center">ULTIMI ARTICOLI</h1>
        </div>
    </div>
</div>


{{-- PER DAVIDE, DA CONTROLLARE --}}
  {{-- <div class="container">
<div class="row justify-content-center">
  <div class="col-lg-4" id="animation-container">
    <script>
      let animation = bodymovin.loadAnimation({
        container: document.getElementById('animation-container'),
        path: 'animazionepanino.json',
        renderer:'svg',
        loop: true,
        autoplay: true,
        name: 'panino',
      })
    </script>
  </div>
</div> --}}

  </div>

    <div class="container mt-5">
        <div class="row mt-5 justify-content-around">
          @foreach($articles as $article)
          <div class="col-12 col-lg-4">
            <x-card :article='$article'></x-card>
          </div>
          @endforeach
        </div>
      </div>
</x-layout>