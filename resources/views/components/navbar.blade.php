<nav class="fixed-top navbar navbar-expand-lg  navbar-custom">
  <div class="container-fluid">

    <a class="ynav navbar-brand" href="{{route('welcome')}}">    <img class="logo-custom"src="/image/logo,sito.png" alt="logo del sito"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        
        <li class="nav-item dropdown">
          <a class="ynav nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu">
            @foreach($categories as $category)
            <li><a class="dropdown-item ynav"  href="{{route('article.category' , compact('category'))}}">{{$category->name}}</a></li>
            @endforeach
          </ul>
        </li>
        <li class="nav-item">
          <a class="ynav nav-link" href="{{route('chisiamo')}}">Our Team</a>
        </li>
        <li class="nav-item">
          <a class="ynav nav-link" href="{{route('careers')}}">Lavora con noi</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="ynav nav-link" href="{{route('register')}}">Login/Registrati</a>
        </li>
        @else
        <li class="nav-item">
          <a class="ynav nav-link" href="{{route('article.index')}}">Tutti gli Articoli</a>
        </li>
        

          <li class="posRight d-flex nav-item dropdown">
            <a class="ynav nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->name}}
            </a>
          <ul class="dropdown-menu"> 
            @if (Auth::user()->is_admin)
            <li class="nav-item"><a class="ynav nav-link dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
        @endif
        <li><hr class="dropdown-divider"></li>
        @if (Auth::user()->is_revisor)
            <li><a class="dropdown-item ynav" href="{{route('revisor.dashboard')}}">Dashboard del revisore</a></li>
        @endif
        <li><hr class="dropdown-divider"></li>
        <li><a class=" ynav dropdown-item" href="{{route('article.create')}}">Crea Articolo</a></li>
        <li><hr class="dropdown-divider"></li>
            <li><a class="ynav dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a></li>
              <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
                @csrf
              </form>
            </ul>
          </li>
        </ul>
        @endguest
        <form class="d-flex spaziosearch" method="GET" action="{{route('article.search')}}">
          <input class=" form-control me-2" type="search" name="query" placeholder="Cosa stai cercando?" aria-label="Search">
          <button class="btn btn-outline-info" type="submit">Cerca</button>
        </form>
      </div>
    </div>
  </nav>
  
  
  