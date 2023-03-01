<header >
  <nav class=" my-navbar navbar navbar-expand-lg navbar-light fixed-top" style="position: relative !important;">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}" style="font-size: 25px; font-weight:bold"><i class="fa-solid fa-book mx-3"></i>Book<span style="color: #FEBE8C">W</span>orld</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('boutique')}}">Boutique</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('auteur_list')}}">Auteurs</a>
          </li>
        </ul>
      </div>
      <div class="div-panier" style="margin-left:40px">
        <a href="{{route('cart')}}" style=""><i class="fa-solid fa-cart-shopping" style="color: #262626; font-size:17px; Margin: 0px 10px"></i></a>
      </div>
      @if(auth()->check())
        {{-- si l'utilisateur est connecté, alors le bouton devient "se déconnecter" --}}
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" style="margin-left:40px;" class="btn-logout"><i class="fa-solid fa-right-to-bracket" style="color: #262626; font-size:17px; Margin: 0px 10px"></i>Se déconnecter</button>
        </form>
        @else
        {{-- si l'utilisateur n'est, alors le bouton devient "se connecter" --}}
        <div class="div-auth" style="margin-left:40px">
          <a href="{{route('login_page')}}" style=""></i>Se connecter</a>
        </div>
        @endif
    </div>
  </nav>
</header>