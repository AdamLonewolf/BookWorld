    @extends('layout.layout')
    @section('content')

    <!-- Header-->
    @include('portion.header')
    <!-- Banner-->
    <div class="bg-dark banner d-flex justify-content-center align-items-center" style="height: 350px !important; background-image:url(/img/banner.jpeg); background-position:center center; background-repeat:no-repeat; background-size:cover; position: relative;">
        <div class="overlay" style="width:100%; height:100%; background-color:#5A5A5A; position:absolute; opacity:0.4; z-index:1000"></div>
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder" style="z-index: 1000; position:relative">Boutique</h1>
            </div>
        </div>
    </div>

    <!--categories-->

    <ul class="category">
        <li><a href=" {{route('boutique')}} ">Tous</a></li>
        @foreach ($genres as $genre)
        <li><a href=" {{route('genre', ["id"=> $genre->id])}} "> {{$genre->nom}} </a></li>
        @endforeach
        
    </ul>
    <div class="d-flex justify-content-center align-items-center">
        <hr class="w-75" >
    </div>
    
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @if(isset($genre))
                <!-- Afficher tous les livres du genre sélectionné sans pagination -->
                @foreach($books as $book)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" style="max-height: 370px !important;" src="{{URL::to('img/'. $book->image)}}" alt=" {{$book->titre}}" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$book->titre}}</h5>
                                <h6 class="fw-bolder">{{$book->auteur->nom}}</h6>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="" style="color:#E74C3C ">{{$book->prix}} FCFA</span>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{Route('Voir_livres',["id" => $book->id])}}">Voir Livre</a></div>
                        </div>
                    </div>
                </div> 
                @endforeach
            @else
                <!-- Afficher tous les livres paginés -->
                @foreach($books as $book)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" style="max-height: 370px !important;" src="{{URL::to('img/'. $book->image)}}" alt=" {{$book->titre}}" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$book->titre}}</h5>
                                <h6 class="fw-bolder">{{$book->auteur->nom}}</h6>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="" style="color:#E74C3C ">{{$book->prix}} FCFA</span>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{Route('Voir_livres',["id" => $book->id])}}">Voir Livre</a></div>
                        </div>
                    </div>
                </div> 
                @endforeach
            
                {{ $books->links() }}
            @endif
                           
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-center align-items-center">
        {{$books->links()}}
    </div>
    
    @include('portion.footer')
    @endsection
      