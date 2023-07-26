<x-layout>
    
    <div class="container-fluid bg-success">
        <div class="row justify-contenent-center">
            <div class="col-12">
                <h1 class="text-center">DETTAGLIO CARD</h1>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-4">
                <x-card :article='$article'></x-card>
            </div>
        </div>
    </div>
    



</x-layout>