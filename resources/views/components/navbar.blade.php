<nav class="fixed-top navbar navbar-expand-lg transparente navbar-custom">
    <div class="container-xl">

        <a class="ynav navbar-brand" href="{{ route('welcome') }}"> <img class="logo-custom" src="/image/logo,sito.png"
                alt="logo del sito"></a>
        <button class="navbar-toggler text-inst" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-arrow-down fa-bounce fa-xs text-inst"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0">


                <li class="nav-item dropdown">
                    <a class="ynav nav-link dropdown-toggle text-inst" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu text-inst">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item text-inst"
                                    href="{{ route('article.category', compact('category')) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="ynav nav-link" href="{{ route('chisiamo') }}">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="ynav nav-link" href="{{ route('careers') }}">Lavora con noi</a>
                </li>
                @guest
                    <li class="nav-item">                        
                        <a class="ynav nav-link fa-solid fa-user-plus fa-2x" href="{{ route('register') }}"></a>                     
                    </li>
                @else
                    <li class="nav-item">
                        <a class="ynav nav-link" href="{{ route('article.index') }}">Tutti gli Articoli</a>
                    </li>


                    <li class="posRight d-flex nav-item dropdown">
                        <a class="ynav nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Benvenuto {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            @if (Auth::user()->is_admin)
                                <li><a class="dropdown-item ynav " href="{{ route('admin.dashboard') }}">Dashboard
                                        Admin</a></li>
                            @endif
                            @if (Auth::user()->is_revisor)
                                <li><a class="dropdown-item ynav" href="{{ route('revisor.dashboard') }}">Dashboard del
                                        revisore</a></li>
                            @endif
                            <li><a class=" ynav dropdown-item" href="{{ route('article.create') }}">Crea Articolo</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="ynav dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            <form action="{{ route('logout') }}" id="logout-form" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    @endguest
                </ul>
            <form action="{{route('article.search')}} me-5" method="get" class="d-flex">
                <input type="search" class="me-1 form-control" name="query" placeholder="Cosa Stai Cercando?" aria-label="Search">
                <button class="btn btn-outline-info" type="submit">
                    Search
                </button>
            </form>
        </div>
    </div>
</nav>