@extends('layout.layout')
@section('content')
@include('portion.header')

<style>
    .card-auteur{
        width: 300px;
        height: 350px;
        position: relative;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
    }
</style>

<section class="author-details p-5" style="background-color:#F1FDFB ">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-4" style="padding-left:35px">
                <div class="card-auteur">
                    <img  src="{{URL::to('img/auteurs/'. $auteur->image)}}" alt=" {{$auteur->nom}}" style="width:100%; height:100% ; border-radius:10px !important" />
                  </div>
            </div>
            <div class="col-md-7">
                <h2 class="fw-bold mt-5" style="color:#4D7971">{{$auteur->nom}}</h2>
                <p class="lead py-5" style="font-size:24px">{{$auteur->biographie}}</p>
              </div>
          </div>
    </div>   
</section>
<section class="author-books">
    <div class="container">
        <div class="row">
             <h2 style="font-size:40px; font-weight:bold" class="py-5">Découvrez les oeuvres du même <span style="color:#FE7D4E">auteur</span></h2>
        </div>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">

            @foreach ($livres as $livre)
            <div class="col mb-5">
                <a href="{{Route('Voir_livres',["id" => $livre->id])}}" class="cardlink" style="text-decoration:none">
                <div class="card" style="border:none;background-color:transparent">
                    <!-- Product image-->
                    <div class="card-img-top" style="height:300px !important; width:230px ">
                        <img  src="{{URL::to('img/'. $livre->image)}}" alt=" {{$livre->titre}}" style="width:100%; height:100% ; border-radius:10px !important" />
                    </div>
                    <!-- Product details-->
                    <div class="card-body" style="padding: 10px 0px">
                        <div class="text-left">
                            <!-- Product name-->
                            <h5 class="fw-bolder" style="font-size:25px; white-space:normal; color:#181823">{{$livre->titre}}</h5>
                            <!-- Product price-->
                            <span class="fw-bolder" style="color:#FE7D4E ">{{$livre->prix}} FCFA</span>
                        </div>
                    </div>
                    <!-- Product actions-->
                    {{-- <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="">Voir Livre</a></div>
                    </div> --}}
                </div>
                </a>
            </div> 
            @endforeach
            
        </div>
    </div>
</section>

@endsection