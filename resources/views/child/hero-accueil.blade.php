<section class="hero-section">
    <div>
        <div class="container">
            <div class="hero-wrapper d-flex justify-content-between align-items-center" >
                <div class="hero-text">
                    <h1>Découvrez les  <br> nouveautés de la semaine !</h1>
                    <h5 class="py-3">Vous ne savez pas quoi lire ? Explorez notre catalogue dès maintenant !</h5>
                    <a class="btn_style-1" href="{{route('boutique')}}">Explorer maintenant ! <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <style>
                          .slide-6 {
                            animation: slide-6 0.2s infinite alternate both cubic-bezier(1, -0.01, 0, 0.98);
                          }
                          @keyframes slide-6 {
                            100% {
                              transform: translateX(2px)
                            }
                          }
                        </style>
                       
                        <path class="slide-6" fill="#0A0A30" fill-rule="evenodd" d="M13.155 16.834a.714.714 0 001.006-.091l3.564-4.277a.711.711 0 000-.932L14.16 7.257a.714.714 0 00-1.097.915l2.565 3.078H7.9a.75.75 0 000 1.5h7.73l-2.565 3.078a.714.714 0 00.091 1.006z" clip-rule="evenodd"/>
                      </svg>
                      </a>
                </div>
                <div class="hero-image">
                    <img src="{{URL::to('assets/book.png')}}"  alt="">
                </div>
            </div>
        </div>
    </div>
</section>