@extends('layout.layout')
@section('content')
        <!-- Navigation-->
            @include('portion.header')
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" style="height:700px !important; width:auto" src="{{URL::to('/img/'. $books->image)}}" alt="{{$books->titre}}" /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder"> {{$books->titre}} </h1>
                        <h4 class="fw-bolder" style="color: #5A5A5A">{{$books->auteur->nom}}</h4>
                        <div class="fs-5 mb-5">
                            <span style="color:#E74C3C" >{{$books->prix}} FCFA</span>
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
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Vous pourriez aimer aussi</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                   @foreach ($booksAlea as $livres)
                   <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" style="height:320px !important; width:auto" src="{{URL::to('/img/'. $livres->image)}}" alt=" {{$livres->nom}} " />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$livres->nom}}</h5>
                                <h6 style="color: #5A5A5A">{{$livres->auteur->nom}}</h6>
                                <!-- Product price-->
                                <span class="" style="color:#E74C3C ">{{$livres->prix}} CFA</span>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{Route('Voir_livres',["id" => $livres->id])}}">Voir livre</a></div>
                        </div>
                    </div>
                </div>
                   @endforeach
   
                </div>
            </div>
        </section>
      @include('portion.footer')
      @endsection
  