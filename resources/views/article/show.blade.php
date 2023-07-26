<x-layout>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-2 text-center">ECCO IL TUO ARTICOLO</h1>
            </div>
        </div>
    </div>


    <div class="container-fluid mt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-4">
                <x-cardshow :article='$article'></x-cardshow>
            </div>
        </div>
    </div>
    



</x-layout>