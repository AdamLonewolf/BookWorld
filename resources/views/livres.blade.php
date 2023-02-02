!<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>
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
        <!-- Navigation-->
            @include('portion.header')
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" style="height:700px !important; width:auto" src="{{URL::to('/img/'. $books->image)}}" alt="{{$books->titre}}" /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder"> {{$books->titre}} </h1>
                        <h4 class="fw-bolder" style="color: #5A5A5A">{{$books->auteur}}</h4>
                        <div class="fs-5 mb-5">
                            <span style="color:#E74C3C" >{{$books->prix}} FCFA</span>
                        </div>
                        <p class="lead">{{$books->resume}}</p>
                        <div class="d-flex mt-5">
                        <div class="d-inline-flex justify-center align-items-center" style="">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Ajouter au panier
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" style="height:320px !important; width:auto" src="/img/horreur3.jpg" alt="ça" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">ça</h5>
                                    <h6 style="color: #5A5A5A">Stephen King</h6>
                                    <!-- Product price-->
                                    <span class="" style="color:#E74C3C ">4500 FCFA</span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="">Voir livre</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" style="height:320px !important; width:auto" src="/img/romance4.jpg" alt="After" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">After</h5>
                                    <h6 style="color: #5A5A5A">Anna Todd</h6>
                                    <!-- Product price-->
                                    <span class="" style="color:#E74C3C ">7000 FCFA</span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="">Voir livre</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" style="height:320px !important; width:auto" src="/img/thriller2.jpg" alt="Dix Petits Negres" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Dix Petits Nègres</h5>
                                    <h6 style="color: #5A5A5A">Agatha Christie</h6>
                                    <!-- Product price-->
                                    <span class="" style="color:#E74C3C ">3500 FCFA</span>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="">Voir livre</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>