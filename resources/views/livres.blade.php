@extends('layout.layout')
@section('content')
        <!-- Navigation-->
            @include('portion.header')
        <!-- Product section-->
        <section class="py-5" style="background-color: #FFECE5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" style="height:600px !important; width:auto" src="{{URL::to('/img/'. $books->image)}}" alt="{{$books->titre}}" /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder"> {{$books->titre}} </h1>
                        <div class="infos-auteur d-flex justify-content-between align-items-center py-5">
                            <div class="" style="display: block">
                                <h4 class="fw-bolder py-1" style="font-size:25px"><span style="color:#181823">Auteur </h4>
                                <span class="" style="color:#FE7D4E; font-size:25px">{{$books->auteur->nom}}</span>   
                            </div>
                            <div class="" style="display: block">
                                <h4 class="fw-bolder py-1" style="font-size:25px"><span style="color:#181823">Prix</h4>
                                <span class=""  style="color:#FE7D4E; font-size:25px"> {{$books->prix}} FCFA</span>   
                            </div>
                            <div class="" style="display: block">
                                <h4 class="fw-bolder  py-1" style="font-size:25px"><span style="color:#181823">Genre</h4>
                                <span class="" style="color:#FE7D4E; font-size:25px">{{$books->genre->nom}}</span>   
                            </div>
                        </div>
                        <p class="lead">{{$books->resume}}</p>
                        <div class="d-flex mt-5">
                            <form action="{{route('addCart')}}" method="post">
                                @csrf
                                <div class="d-inline-flex justify-center align-items-center" style="">
                                <input type="hidden" name="id" value="{{$books->id}}">
                                <div class="quantity-input" style="">
                                    <input class="form-control text-center quantite" type="num" value="" style="max-width: 3rem; margin-right:10px" name="quantite"/>
                                </div>
                                <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                                    <i class="bi-cart-fill me-1"></i>
                                    Ajouter au panier
                                </button>
                            </div>
                        </form>        
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 ">
                <h2 class="mb-5" style="font-size:45px; font-weight:bold;">Vous pourriez aimer <span style="color:#FE7D4E">aussi</span></h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                   @foreach ($booksAlea as $livres)
                   <div class="col mb-5">
                    <a href="{{Route('Voir_livres',["id" => $livres->id])}}" class="cardlink" style="text-decoration:none">
                    <div class="card" style="border:none; background-color:transparent">
                        <!-- Product image-->
                        <div class="card-img-top" style="height:300px !important; width:230px ">
                            <img  src="{{URL::to('img/'. $livres->image)}}" alt=" {{$livres->titre}}" style="width:100%; height:100% ; border-radius:10px !important" />
                        </div>
                        <!-- Product details-->
                        <div class="card-body" style="padding: 10px 0px">
                            <div class="text-left">
                                <!-- Product name-->
                                <h5 class="fw-bolder" style="font-size:25px; white-space:normal; color:#181823">{{$livres->titre}}</h5>
                                <h6 class="fw-bolder" style="font-size:18px; color:#FE7D4E"><span style="opacity: 0.5">par</span> {{$livres->auteur->nom}}</h6>
                                <!-- Product price-->
                                <span class="fw-bolder" style="color:#FE7D4E ">{{$livres->prix}} FCFA</span>
                            </div>
                        </div>
                    </div>
                    </a>
                </div> 
                   @endforeach
   
                </div>
            </div>
        </section>
      @include('portion.footer')
      @endsection
  