    @extends('layout.layout')
    @section('content')

    <!-- Header-->
    @include('portion.header')
    <!-- Banner-->
    <div class="bg-dark banner d-flex justify-content-center align-items-center" style="height: 350px !important; background-image:url(assets/dddepth-345.jpg); background-position:center center; background-repeat:no-repeat; background-size:cover; position: relative;">
        <div class="overlay" style="width:100%; height:100%; background-color:#181818; position:absolute; opacity:0.4; z-index:1000"></div>
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder" style="z-index: 1000; position:relative">Boutique</h1>
            </div>
        </div>
    </div>

    <!--categories-->
    <section class="boutique py-5">
    <div class="container">
        <h2 style="font-size:45px; font-weight:bold">Les <span style="color:#FE7D4E">catégories</span></h2>
    <div class="row">
        <div class="col">
            <ul class="category">
                <li><a href=" {{route('boutique')}} ">Tous</a></li>
                @foreach ($genres as $genre)
                <li><a href=" {{route('genre', ["id"=> $genre->id])}} "> {{$genre->nom}} </a></li>
                @endforeach      
            </ul>
        </div>
    </div>
    
    <div class="d-flex justify-content-center align-items-center">
        <hr class="w-75" >
    </div>
    </div>
    <!-- Section-->
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
               @foreach ($books as $book)
               <div class="col mb-5">
                <a href="{{Route('Voir_livres',["id" => $book->id])}}" class="cardlink" style="text-decoration:none">
                <div class="card" style="border:none;">
                    <!-- Product image-->
                    <div class="card-img-top" style="height:300px !important; width:230px ">
                        <img  src="{{URL::to('img/'. $book->image)}}" alt=" {{$book->titre}}" style="width:100%; height:100% ; border-radius:10px !important" />
                    </div>
                    <!-- Product details-->
                    <div class="card-body" style="padding: 10px 0px">
                        <div class="text-left">
                            <!-- Product name-->
                            <h5 class="fw-bolder" style="font-size:25px; white-space:normal; color:#181823">{{$book->titre}}</h5>
                            <h6 class="fw-bolder" style="font-size:18px; color:#FE7D4E"><span style="opacity: 0.5">par</span> {{$book->auteur->nom}}</h6>
                            <!-- Product price-->
                            <span class="fw-bolder" style="color:#FE7D4E ">{{$book->prix}} FCFA</span>
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
    <div class="d-flex justify-content-center align-items-center">
        {{$books->links()}}
    </div>
    
    @include('portion.footer')
    @endsection
      