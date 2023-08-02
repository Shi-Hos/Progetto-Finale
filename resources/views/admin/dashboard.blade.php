<x-layout>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mt-5">
              <fieldset>
                <h1 class="display-3 borderY text-center">BENTORNATO ADMIN {{Auth::user()->name}}</h1>
              </fieldset>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class=" row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo Amministratore</h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore"></x-requests-table>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class=" row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo Revisore</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisore"></x-requests-table>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class=" row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo Redattore</h2>
                <x-requests-table :roleRequests="$writerRequests" role="redattore"></x-requests-table>
            </div>
        </div>
    </div>


</x-layout>