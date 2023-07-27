<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('welcome')}}">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
        <ul class="dropdown-menu">
          @foreach($categories as $category)
          <li><a class="dropdown-item" href="{{route('article.category' , compact('category'))}}">{{$category->name}}</a></li>
          @endforeach
        </ul>
      </li>
        @guest







        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Login/Registrati</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">Tutti gli Articoli</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('article.create')}}">Crea Articolo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a></li>
            <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
              @csrf
            </form>
          </ul>
        </li>
      </ul>
      @endguest
    </div>
  </div>
</nav>


