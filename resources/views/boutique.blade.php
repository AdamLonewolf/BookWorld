<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{URL::to('css/bootstrap.min.css')}} " rel="stylesheet" />
        <link href="{{URL::to('css/style.css')}} " rel="stylesheet" />
    </head>
    <body>
        
        @include('portion.header')
        <!-- Header-->
        <div class="bg-dark banner d-flex justify-content-center align-items-center" style="height: 350px !important; background-image:url(img/banner.jpeg); background-position:center center; background-repeat:no-repeat; background-size:cover; position: relative;">
            <div class="overlay" style="width:100%; height:100%; background-color:#5A5A5A; position:absolute; opacity:0.4; z-index:1000"></div>
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder" style="z-index: 1000; position:relative">Boutique</h1>
                </div>
            </div>
        </div>

        <!--categories-->

        <ul class="category">
            <li><a href="">Romance</a></li>
            <li><a href="">Théâtre</a></li>
            <li><a href="">Horreur</a></li>
            <li><a href="">Thriller</a></li>
            <li><a href="">Fantastique</a></li>
            <li><a href="">Contes</a></li>
        </ul>
        <div class="d-flex justify-content-center align-items-center">
            <hr class="w-75" >
        </div>
        
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                   @foreach ($books as $book)
                   <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" style="max-height: 370px !important;" src="{{URL::to('/img/'. $book->image)}}" alt=" {{$book->titre}}" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$book->titre}}</h5>
                                <h6 class="fw-bolder">{{$book->auteur}}</h6>
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
                              
                </div>
            </div>
        </section>
        <!-- Footer-->
       @include('portion.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>