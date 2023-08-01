<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 mt-5">
              <fieldset>
                <h1 class="display-3 borderY text-center">LAVORA CON NOI</h1>
              </fieldset>
            </div>
        </div>
    </div>
    
    <div class="container mt-5 my-5">
        <div class="row justify-content-start">
            <div class=" my-3 col-12 col-md-6 my-5">
                <h2>Become Admin</h2>
                <p class="ms-1">Il compito di un admin che gestisce un articolo è monitorare e moderare il contenuto, assicurandosi che sia conforme alle linee guida, rispondere ai commenti o interazioni degli utenti, e garantire la qualità e l'accuratezza del materiale pubblicato.</p>
            </div>
        </div>
    </div>
    <div class="container my-5 mt-5">
        <div class="row justify-content-end">
            <div class=" my-3 col-12 col-md-6 my-5 text-end ">
                <h2>Like a Revisor</h2>
                <p class="ms-1">Il compito di un revisore che gestisce un articolo è quello di analizzare attentamente il contenuto per verificarne l'accuratezza, la coerenza e la qualità. Il revisore si assicura che l'articolo sia ben scritto, privo di errori grammaticali o di informazioni fuorvianti, e che sia in linea con le linee guida e gli standard dell'editore o della piattaforma.</p>
            </div>
        </div>
    </div>
    <div class="container my-5 mt-5">
        <div class="row justify-content-center ">
            <div class="my-3  col-12 col-md-6 my-5">
                <h2>Im a Writer</h2>
                <p class="ms-1">Un writer è un professionista della scrittura che si occupa di creare contenuti scritti per diverse finalità e piattaforme. Il loro compito principale è quello di esprimere concetti, idee o informazioni in modo chiaro, coinvolgente e ben strutturato. I writer possono lavorare su una vasta gamma di materiali, come articoli, blog, contenuti per siti web, pubblicità, copie promozionali, script, storie, e molto altro. Essi devono adattarsi al tono e al linguaggio richiesto dal progetto, mantenendo sempre una comunicazione efficace con il pubblico target. La ricerca, l'organizzazione delle informazioni e la creatività sono elementi fondamentali per il successo del lavoro di un writer.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="p-5" action="{{route('careers.submit')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                            <select name="role" id="role" class="form-control">
                                <option value="">Scegli qui</option>
                                <option value="admin">Admin</option>
                                <option value="revisor">Revisore</option>
                                <option value="writer">Writer</option>
                            </select>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Parlaci di te</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Raccontaci la tua storia, descriviti come persona e perchè dovremmo assumerti">{{old('message')}}</textarea>
                            </div>
                            <div class="mt-2">
                                <button class="btn btn-info text-white">Invia candidatura</button>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



</x-layout>