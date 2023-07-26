<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-2 text-center">I NOSTRI ARTICOLI</h1>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
          <x-card
          :article ="$article"
          />
        </div>
    </div>
    

</x-layout>