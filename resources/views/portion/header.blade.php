<header >
  <nav class=" my-navbar navbar navbar-expand-lg navbar-light" style="position: relative !important;">
    <div class="container">
      <a class="navbar-brand" href="{{route('home')}}" style="font-size: 25px; font-weight:bold">Book<span style="color: #FE7D4E">W</span>orld.</a>
  
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
            <button type="submit" style="margin-left:40px; position: relative; top:10px" class="btn-logout d-flex justify-content-center align-items-center"><i class="fa-solid fa-right-to-bracket" style=" font-size:16px; Margin: 0px 6px"></i>Se déconnecter</button>
        </form>
        @else
        {{-- si l'utilisateur n'est, alors le bouton devient "se connecter" --}}
        <div class="div-auth" style="margin-left:40px">
          <a href="{{route('login_page')}}" class="btn-login" style=""></i>Se connecter</a>
        </div>
        @endif
    </div>
  </nav>
</header>