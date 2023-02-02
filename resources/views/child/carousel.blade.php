
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="image-container">
            <img src=" {{URL::to('/img/car1.png')}} " alt="">
        </div>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Découvrez les nouveautés de la semaine !</h1>
            <p>Nous avons de nouveaux livres disponibles dans notre boutique !</p>      
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="image-container">
          <img src=" {{URL::to('/img/car2.png')}} " alt="">
      </div>
        <div class="container">
          <div class="carousel-caption">
            <h1>Les différents Best Sellers 2022</h1>
            <p>Jettez un oeil aux meilleurs ouvrages de 2022</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="image-container">
          <img src=" {{URL::to('/img/car3.png')}} " alt="">
      </div>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Des livres pour tous les goûts</h1>
            <p>Explorez nos diverses catégories d'ouvrages afin de trouver celui qui vous convient le plus !</p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
