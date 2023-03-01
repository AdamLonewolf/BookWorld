
@extends('layout.layout')
@section('content')
    
<!--Header de la page début-->
    @include('portion.header')
<!--Header de la page fin-->
<main>
    <!--Carousel de la page début-->
  @include('child.carousel')
  <!--Carousel de la page fin-->
  @if (session()->has('success'))
<div class="alert alert-success alerte" id="alert-success" role="alert">
  {{ session('success') }}
</div>
@endif

  <!--Avantages de la page début-->
  @include('child.avantages')
  <!--Avantages de la page fin-->

  <!--Partie nouveauté-->
  @include('child.nouveaute')

</main>

<!-- FOOTER -->
@include('portion.footer')

@endsection
      
