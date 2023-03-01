@extends('layout.layout')
@section('content')
@include('portion.header')
 <!-- Banner-->
 <div class="bg-dark banner d-flex justify-content-center align-items-center" style="height: 350px !important; background-image:url(/img/banner.jpeg); background-position:center center; background-repeat:no-repeat; background-size:cover; position: relative;">
    <div class="overlay" style="width:100%; height:100%; background-color:#5A5A5A; position:absolute; opacity:0.4; z-index:1000"></div>
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder" style="z-index: 1000; position:relative"></h1>
        </div>
    </div>
</div>

<main class="p-5">
 
</main>
@endsection