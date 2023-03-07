
@extends('layout.layout')
@section('content')
    
<!--Header de la page début-->
    @include('portion.header')
<!--Header de la page fin-->
<main>
 
  @include('child.hero-accueil')
  @include('child.nouveautes')
  @include('child.carousel')
  @include('child.best-book')

</main>

<!-- FOOTER -->
@include('portion.footer')

@endsection
      
