@extends('layouts.front')

@section('content')
  <section id="hero" class="hero section">
      <div class="hero-container">
        <img src="assets/img/st.png" class="video-background" alt="">
        <div class="overlay"></div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 aos-init aos-animate" data-aos="zoom-out" data-aos-delay="100">
              <div class="hero-content">
                <h1 class=" text-white pb-4" data-aos="fade-up" >Former aujourd’hui les leaders de demain</h1>
                <p>Un enseignement de qualité, des activités enrichissantes et des infrastructures modernes pour un avenir meilleur.</p>
                <div class="cta-buttons">
                  <a href="#" class="btn-primary btn-blue">Voir nos cycles</a>
                  <a href="#" class="btn-secondary btn-yellow">Visiter l'ecole </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
