<style>
  .card {
  width: 190px;
  height: 254px;
  background: rgb(236, 236, 236);
  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
}
</style>

<section class="carousel-section" style="padding: 30px">
  <div class="container">
  <h2>Top Tendances</h2>
   <!-- Swiper -->
   <div class="swiper mySwiper " style="padding:50px 0px">
    <div class="swiper-wrapper">
      @foreach ($booksAlea as $book)
      <div class="swiper-slide" style=" height:400px; ">
        <div class="card-wrapper" style="flex-direction: column;">
          <div class="card">
            <img  src="{{URL::to('img/'. $book->image)}}" alt=" {{$book->titre}}" style="width:100%; height:100% ; border-radius:10px !important" />
          </div>
          <div class="content-text">
            <h5 class="fw-bolder py-4" style="font-size:22px; white-space:normal; color:#181823">{{$book->titre}}</h5>
          </div>
        </div>
      </div> 
      @endforeach
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

</section>