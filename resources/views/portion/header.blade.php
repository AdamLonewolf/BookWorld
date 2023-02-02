<header>
  <nav class=" my-navbar navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{URL::to('/')}}" style="font-size: 25px; font-weight:bold"><i class="fa-solid fa-book mx-3"></i>Book<span style="color: #FEBE8C">W</span>orld</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{URL::to('/')}}">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL::to('/boutique')}}">Boutique</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">A propos</a>
          </li>
        </ul>
        <div class="div-panier" style="margin-left:40px">
          <a href="" style=""><i class="fa-solid fa-cart-shopping" style="color: #262626; font-size:17px; Margin: 0px 10px"></i> Mon panier</a>
        </div>
      </div>
    </div>
  </nav>
</header>