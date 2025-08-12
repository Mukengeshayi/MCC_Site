@extends('layouts.front')

@section('content')
  <section id="hero" class="hero section">
      <div class="hero-container">
        <img src="{{asset('assets/img/st.png') }}" class="video-background" alt="">
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

     <!-- Section À propos (résumé) -->
        {{-- <section id="about" class="about">
            <div class="container">
                <div class="row gx-0">
                    <div class="col-lg-6 d-flex align-items-center">
                        <img src="{{asset('assets/img/student-line.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <div class="content">
                            <h3>Notre École</h3>
                            <h2>Une éducation holistique pour former les leaders de demain</h2>
                            <p>
                                Fondé en [année], Messiah Christian College s'engage à fournir une éducation de qualité...
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="about.html" class="btn-read-more">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section id="stats" class="stats">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Élèves</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Enseignants</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Classes</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Ans d'expérience</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section id="gallery" class="gallery">
            <div class="container">
                <div class="section-header">
                    <h2>Galerie</h2>
                    <p>Quelques moments capturés</p>
                </div>
                <div class="row gy-4 gallery-container">
                    <div class="col-lg-3 col-md-6 gallery-item">
                        <img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt="">
                    </div>
                    <!-- Répéter pour 7 autres images -->
                </div>
                <div class="text-center mt-4">
                    <a href="events.html" class="btn-see-more">Voir toute la galerie</a>
                </div>
            </div>
        </section> --}}
         <!-- Section Vie Scolaire (extrait) -->
        {{-- <section id="student-life" class="student-life">
            <div class="container">
                <div class="section-header">
                    <h2>Vie Scolaire</h2>
                    <p>Découvrez la vie dynamique de nos élèves</p>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="life-card">
                            <img src="assets/img/activities/sport.jpg" class="img-fluid" alt="">
                            <h3>Activités Sportives</h3>
                            <p>Football, basketball, athlétisme et plus</p>
                        </div>
                    </div>
                    <!-- Répéter pour autres activités -->
                </div>
                <div class="text-center mt-4">
                    <a href="students-life.html" class="btn-see-more">Voir toute la vie scolaire</a>
                </div>
            </div>
        </section>
         <section id="contact-cta" class="contact-cta">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h3>Intéressé par notre école?</h3>
                        <p>Contactez-nous pour plus d'informations ou pour planifier une visite</p>
                        <a href="contact.html" class="btn-contact">Nous contacter</a>
                    </div>
                </div>
            </div>
        </section> --}}
    <section id="students-life-block" class="students-life-block section">

      <!-- Section Title -->
       <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Vie Scolaire</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center gy-4">
          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
            <div class="students-life-img position-relative">
              <img src="{{asset('assets/img/student-line.jpg')}}" class="img-fluid rounded-4 shadow-sm" alt="Students Life">
              <div class="img-overlay">
                <h3>Découvrez la vie dynamique de nos élèves</h3>
                <a href="{{ route('students-life') }}" class="explore-btn">Explore More <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-left" data-aos-delay="300">
            <div class="students-life-content">

              <div class="row g-4 mb-4">
                <div class="col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                  <div class="student-activity-item">
                    <div class="icon-box">
                      <i class="bi bi-people"></i>
                    </div>
                    <h4>Student Clubs</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam purus.</p>
                  </div>
                </div>

                <div class="col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                  <div class="student-activity-item">
                    <div class="icon-box">
                      <i class="bi bi-trophy"></i>
                    </div>
                    <h4>Sports Events</h4>
                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
                </div>

                <div class="col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
                  <div class="student-activity-item">
                    <div class="icon-box">
                      <i class="bi bi-music-note-beamed"></i>
                    </div>
                    <h4>Arts &amp; Culture</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                  </div>
                </div>

                <div class="col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="500">
                  <div class="student-activity-item">
                    <div class="icon-box">
                      <i class="bi bi-globe-americas"></i>
                    </div>
                    <h4>Global Experiences</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                  </div>
                </div>
              </div>

              <div class="students-life-cta aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                <a href="students-life.html" class="btn btn-primary">View All Student Activities</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>


@endsection
