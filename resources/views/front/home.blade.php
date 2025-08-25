@extends('layouts.front')

@section('content')
  <section id="hero" class="hero section">
      <div class="hero-container">
        <img src="{{asset('assets/img/st.png') }}" class="video-background" alt="">
        <div class="overlay"></div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7" data-aos="zoom-out" data-aos-delay="100">
              <div class="hero-content">
                <h1 class="text-white pb-4" data-aos="fade-up" data-aos-delay="200">Former aujourd'hui les leaders de demain</h1>
                <p data-aos="fade-up" data-aos-delay="300">Un enseignement de qualité, des activités enrichissantes et des infrastructures modernes pour un avenir meilleur.</p>
                <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
                  <a href="#" class="btn-primary btn-blue">Voir nos cycles</a>
                  <a href="#" class="btn-secondary btn-yellow">Visiter l'ecole </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="highlights-container container">
        <div class="row gy-4">
          <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
            <div class="highlight-item">
              <div class="icon">
                <i class="bi bi-emoji-heart-eyes-fill"></i>
              </div>
              <h3>Crèche & Maternelle <small class="d-block">(dès 9 mois)</small></h3>
              <p>Éveil et développement des tout-petits dans un environnement sécurisé.</p>
              <a href="{{route('education-levels.preschool')}}" class="card-link">En savoir plus →</a>
            </div>
          </div>
          <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
            <div class="highlight-item">
              <div class="icon">
                <i class="bi bi-pencil-fill"></i>
              </div>
              <h3>École Primaire</h3>
              <p>Acquisition des fondamentaux avec un encadrement bienveillant et personnalisé.</p>
              <a href="{{route('education-levels.primary')}}" class="card-link">En savoir plus →</a>
            </div>
          </div>
          <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
            <div class="highlight-item">
                <div class="icon">
                <i class="bi bi-journal-bookmark-fill"></i>
                </div>
                <h3>Secondaire <small class="d-block">(7ème EB - 8ème CTEB)</small></h3>
                <p>Programme complet préparant aux humanités avec développement des compétences clés</p>
                <a href="{{route('education-levels.high-school')}}" class="card-link">En savoir plus →</a>
            </div>
          </div>
          <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
            <div class="highlight-item">
              <div class="icon">
                <i class="bi bi-mortarboard-fill"></i>
              </div>
              <h3>Humanités</h3>
              <p>Orientation Sciences, Littéraire, Commerciale ou Informatique avec accompagnement expert.</p>
              <a href="{{route('education-levels.high-school')}}" class="card-link">En savoir plus →</a>
            </div>
          </div>
        </div>
      </div>
       <div class="event-banner" data-aos="fade-up" data-aos-delay="500">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-2">
              <div class="event-date">
                <span class="month">SEPT</span>
                <span class="day">2</span>
              </div>
            </div>
            <div class="col-md-8">
              <h3>Session d'Inscription 2024-2025</h3>
              <p>Inscrivez vos enfants dès maintenant pour l'année scolaire à venir. Places limitées.</p>
            </div>
            <div class="col-md-2">
              <a href="#" class="btn-register">Contactez-nous</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="students-life-block" class="students-life-block section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Vie Scolaire</h2>
        <p>Une école dynamique où les élèves s'épanouissent à travers diverses activités éducatives et culturelles.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center gy-4">
        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="students-life-img position-relative">
            <img src="{{asset('assets/img/student-line.jpg')}}" class="img-fluid rounded-4 shadow-sm" alt="Vie scolaire MCC">
            <div class="img-overlay">
                <h3>Découvrez la vie dynamique de nos élèves</h3>
                <a href="{{ route('students-life') }}" class="explore-btn"> En savoir plus <i class="bi bi-arrow-right"></i></a>
            </div>
            </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="students-life-content">

            <div class="row g-4 mb-4">
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="student-activity-item">
                    <div class="icon-box">
                    <i class="bi bi-lightbulb"></i>
                    </div>
                    <h4>Clubs scientifiques</h4>
                    <p>Encourager la curiosité et l'innovation grâce à des projets et expériences pratiques.</p>
                </div>
                </div>

                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="student-activity-item">
                    <div class="icon-box">
                    <i class="bi bi-music-note-beamed"></i>
                    </div>
                    <h4>Théâtre, musique & chorale</h4>
                    <p>Développer le talent artistique et l'expression créative des élèves.</p>
                </div>
                </div>

                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="student-activity-item">
                    <div class="icon-box">
                    <i class="bi bi-trophy"></i>
                    </div>
                    <h4>Activités sportives</h4>
                    <p>Compétitions et tournois pour promouvoir la santé et l'esprit d'équipe.</p>
                </div>
                </div>

                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="500">
                <div class="student-activity-item">
                    <div class="icon-box">
                    <i class="bi bi-people"></i>
                    </div>
                    <h4>Sorties & journées culturelles</h4>
                    <p>Excursions, visites et portes ouvertes pour enrichir la formation des élèves.</p>
                </div>
                </div>
            </div>

            <div class="students-life-cta" data-aos="fade-up" data-aos-delay="600">
                <a href="{{ route('students-life') }}" class="btn btn-primary">Voir toutes les activités scolaires</a>
            </div>
            </div>
        </div>
        </div>
    </div>
   </section>

@endsection
