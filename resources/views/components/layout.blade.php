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