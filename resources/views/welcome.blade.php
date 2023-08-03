<x-layout>
  <header>
    <x-searchbar/>
    <div class="page-header">
        <div class="container-fluid">
          
            <div class="row justify-content-center">             
                <div class="col-xl-8 col-lg-9 col-md-12 col-sm-12 col-12 vh-100 d-flex justify-content-center align-items-center p-0">
                  <img class="logo-header" src="./image/logo,sito.png" alt="logo">
                  <h2 class="ps-5 text">
                    <span id="testo"></span>
                    <script type="text/javascript">
                      // testo da mostrare    
                      var testo = "Restare aggiornati non è mai stato così semplice!";
                      // output
                      var output = "";
                      // incrementatore
                      var i = 0;
                      // velocità di scrittura
                      var speed = 100;
                      // dichiaro la funzione
                      function scrivi() {
                          // creo l'output
                          output += testo.charAt(i);
                          // incremento
                          i++;
                          // scrittura
                          document.getElementById("testo").innerHTML = output;
                          // se è finito il testo
                          if(i >= testo.length) {
                              // fine
                              clearInterval(s);
                          }
                      }
                      // richiamo la funzione a intervalli
                      s = setInterval("scrivi()",speed);
                  </script>
                  </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Seconda Card Con Titolo --}}
    <div class="card-section">
        <div class="container-fluid">
            <div class="card-block bg-white card-borderY mb30">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- section-title -->
                        <div class="section-title mb-0">
                            <h2 class=" w-2 header-writers text-black">Il sapere di essere informati . Illuminiamo menti con sapienti ragioni, scopri il sapere, è la nostra missione!</h2>
                            <p class="header-writers text-black mt-4">Articoli da tutto il mondo, portiamo il sapere anche dove non è concesso, la nostra forza siete voi </p>
                                <h3 class="w-3 header-writers text-black display-6">Grazie</h3>
                        </div>
                        <!-- /.section-title -->
                    </div>
                </div>
            </div>
            {{-- Inseriremo il Created By --}}
             </div>
            </div> 
  
    
       
    </header> 





  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 mt-5">
          <fieldset>
            <h1 class="display-3 borderY text-center">I NOSTRI ULTIMI ARTICOLI</h1>
          </fieldset>
        </div>
    </div>
</div>

  </div>

    <div class="container mt-5">
        <div class="row mt-5 ms-5 justify-content-center">
          @foreach($articles as $article)
          <div class="col-12 col-lg-4 ">
            <x-card :article='$article'></x-card>
          </div>
          @endforeach
        </div>
      </div>
</x-layout>