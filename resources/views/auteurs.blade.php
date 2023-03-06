@extends('layout.layout')
@section('content')

@include('portion.header')

<section class="author-details p-5" style="background-color:#F5CBA7 ">
    <div class="container">
        <div class="row featurette">
            <div class="col-md-4" style="padding-left:35px">
                <div class="image-auteur" style="width: 350px; height:auto; border-radius: 20px">
                    <img src="{{URL::to('img/auteurs/'. $auteur->image )}}" alt="{{$auteur->nom}}" style="width:100%; height:100%; border-radius: 18px">
                </div>                
            </div>
            <div class="col-md-7">
                <h2 class="fw-bold mt-5">{{$auteur->nom}}</h2>
                <p class="lead py-5">{{$auteur->biographie}}</p>
              </div>
          </div>
    </div>   
</section>
<section class="author-books">
    <div class="container">
        <div class="row">
            <h2 style="font-size:26px; padding:20px">Découvrez les oeuvres du même auteur</h2>
        </div>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4">

            @foreach ($livres as $livre)
            <div class="col mb-5">
             <div class="card h-100">
                 <!-- Product image-->
                 <img class="card-img-top" style="max-height: 370px !important;" src="{{URL::to('img/'. $livre->image)}}" alt=" {{$livre->titre}}" />
                 <!-- Product details-->
                 <div class="card-body p-4">
                     <div class="text-center">
                         <!-- Product name-->
                         <h5 class="fw-bolder">{{$livre->titre}}</h5>
                         <h6 class="fw-bolder">{{$livre->auteur->nom}}</h6>
                         <!-- Product reviews-->
                         <div class="d-flex justify-content-center small text-warning mb-2">
                             <div class="bi-star-fill"></div>
                             <div class="bi-star-fill"></div>
                             <div class="bi-star-fill"></div>
                             <div class="bi-star-fill"></div>
                             <div class="bi-star-fill"></div>
                         </div>
                         <!-- Product price-->
                         <span class="" style="color:#E74C3C ">{{$livre->prix}} FCFA</span>
                     </div>
                 </div>
                 <!-- Product actions-->
                 <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                     <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{Route('Voir_livres',["id" => $livre->id])}}">Voir Livre</a></div>
                 </div>
             </div>
         </div> 
            @endforeach
            
        </div>
    </div>
</section>

@endsection