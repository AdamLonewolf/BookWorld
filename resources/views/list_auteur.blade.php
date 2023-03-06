@extends('layout.layout')
@section('content')

@include('portion.header')


<main class="p-5">
    <div class="banner">
        <h3>Liste des auteurs</h3>
    </div>
<div class="container px-4 px-lg-5 mt-5">
    <div class="row justify-content-center align-items-center">
        @foreach ($auteur as $aut)
        <div class="col-3">
            <div class="element my-5 mx-5" style="width:220px; height:300px; border-radius:20px">
                <a href="{{route('auteurs', ["id" => $aut->id])}}">
                    <img src="{{URL::to('img/auteurs/'.$aut->image)}}" class="" alt="{{$aut->image}}" style="border-radius:20px ; height:100%; width:100%;">
                    <p class="mt-2 fs-5 mx-2">{{$aut->nom}}</p>
                </a>      
            </div> 
        </div>
        @endforeach
    </div>
</div>   
    <div class="d-flex justify-content-center align-items-center mt-5">
        {{$auteur->links()}}
    </div>
</main>
@endsection