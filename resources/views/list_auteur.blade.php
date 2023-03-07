@extends('layout.layout')
@section('content')

@include('portion.header')

<style>
    .mycard {
  width: 270px;
  height: 350px;
  position: relative;
  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
}

</style>

<main class="">
    <div class="bg-dark banner d-flex justify-content-center align-items-center" style="height: 350px !important; background-image:url(assets/dddepth-320.jpg); background-position:center center; background-repeat:no-repeat; background-size:cover; position: relative;">
        <div class="overlay" style="width:100%; height:100%; background-color:#5A5A5A; position:absolute; opacity:0.2; z-index:1000"></div>
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder" style="z-index: 1000; position:relative">Liste des auteurs</h1>
            </div>
        </div>
    </div>
    <section class="auteurs p-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row justify-content-center align-items-center">
                @foreach ($auteur as $aut)
                <div class="col-3">
                    <a href="{{route('auteurs', ["id" => $aut->id])}}" style="text-decoration:none">
                    <div class="card-wrapper" style="flex-direction: column;">
                        <div class="mycard">
                          <img  src="{{URL::to('img/auteurs/'. $aut->image)}}" alt=" {{$aut->nom}}" style="width:100%; height:100% ; border-radius:10px !important" />
                        </div>
                        <div class="content-text">
                          <h5 class="fw-bolder py-4" style="font-size:22px; white-space:normal; color:#181823">{{$aut->nom}}</h5>
                        </div>
                      </div>  
                    </a>
                </div>
                @endforeach
            </div>
        </div> 
    </section>
    
    <div class="d-flex justify-content-center align-items-center mt-5">
        {{$auteur->links()}}
    </div>
</main>
@endsection