<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js">
    <title>Fast News</title>
</head>
<body>
    <x-navbar></x-navbar>
    <header>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-caption">
                        <h1 class="w-1 page-title">Fast News</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Seconda Card Con Titolo --}}
    <div class="card-section">
        <div class="container">
            <div class="card-block bg-white card-borderY mb30">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- section-title -->
                        <div class="section-title mb-0">
                            <h2 class=" w-2 header-writers text-black">Il Sapere Di Essere Informati . Illuminiamo menti con sapienti ragioni, Scopri il sapere, è la nostra missione!</h2>
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


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif
    {{$slot}}
    <div class="min-vh-100">
        
    </div>



    <x-footer></x-footer>
</body>
</html>