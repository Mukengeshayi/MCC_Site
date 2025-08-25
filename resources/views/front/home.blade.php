@extends('layouts.front')

@section('content')
  <section id="hero" class="hero section">
      <div class="hero-container">
        <img src="{{asset('assets/img/st.png')}}" class="video-background"
            data-src="{{asset('assets/img/st.png')}}"
            class="lazy-image"
            alt="hero"
            loading="lazy"
        >
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
{{--
    <section class="campus-gallery py-5">
        <div class="container">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Notre Ecole en Images</h2>
                <p>Découvrez les espaces d'apprentissage et les installations du Messiah Christian College</p>
            </div><!-- End Section Title -->

            <div class="gallery-grid" id="campus-gallery">
                <!-- Salle de classe -->
                <div class="gallery-item aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <a href="{{asset('assets/img/st.png')}}"
                    class="glightbox"
                    data-gallery="campus-gallery"
                    data-title="Salle de classe moderne"
                    data-description="Espace d'apprentissage équipé avec les dernières technologies éducatives"
                    data-type="image">
                        <img src="{{asset('assets/img/st.png')}}"
                            alt="Salle de classe moderne"
                            class="gallery-image"
                            loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <i class="bi bi-zoom-in"></i>
                                <span class="overlay-text">Agrandir</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Bibliothèque -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                    <a href="{{asset('assets/img/st.png')}}"
                    class="glightbox"
                    data-gallery="campus-gallery"
                    data-title="Bibliothèque centrale"
                    data-description="Espace de recherche et d'étude avec plus de 15,000 ouvrages"
                    data-type="image">
                        <img src="{{asset('assets/img/st.png')}}"
                            alt="Bibliothèque centrale"
                            class="gallery-image"
                            loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <i class="bi bi-zoom-in"></i>
                                <span class="overlay-text">Agrandir</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Laboratoire informatique -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                    <a href="{{asset('assets/img/st.png')}}"
                    class="glightbox"
                    data-gallery="campus-gallery"
                    data-title="Laboratoire informatique"
                    data-description="Équipements de pointe pour l'apprentissage des technologies"
                    data-type="image">
                        <img src="{{asset('assets/img/st.png')}}"
                            alt="Laboratoire informatique"
                            class="gallery-image"
                            loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <i class="bi bi-zoom-in"></i>
                                <span class="overlay-text">Agrandir</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Terrain de sport -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                    <a href="{{asset('assets/img/st.png')}}"
                    class="glightbox"
                    data-gallery="campus-gallery"
                    data-title="Installations sportives"
                    data-description="Terrain multifonctionnel pour tous les sports"
                    data-type="image">
                        <img src="{{asset('assets/img/st.png')}}"
                            alt="Installations sportives"
                            class="gallery-image"
                            loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <i class="zoom-icon">🔍</i>
                                <span class="overlay-text">Agrandir</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Cafétéria -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="500">
                    <a href="{{asset('assets/img/st.png')}}"
                    class="glightbox"
                    data-gallery="campus-gallery"
                    data-title="Espace de restauration"
                    data-description="Cafétéria moderne avec vue sur le campus"
                    data-type="image">
                        <img src="{{asset('assets/img/st.png')}}"
                            alt="Espace de restauration"
                            class="gallery-image"
                            loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <i class="bi bi-zoom-in"></i>
                                <span class="overlay-text">Agrandir</span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Auditorium -->
                <div class="gallery-item" data-aos="zoom-in" data-aos-delay="600">
                    <a href="{{asset('assets/img/st.png')}}"
                    class="glightbox"
                    data-gallery="campus-gallery"
                    data-title="Auditorium principal"
                    data-description="Salle de spectacle et de conférences de 300 places"
                    data-type="image">
                        <img src="{{asset('assets/img/st.png')}}"
                            alt="Auditorium principal"
                            class="gallery-image"
                            loading="lazy">
                        <div class="gallery-overlay">
                            <div class="overlay-content">
                                <i class="bi bi-zoom-in"></i>
                                <span class="overlay-text">Agrandir</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Bouton pour voir plus -->
            <div class="text-center mt-2 " data-aos="fade-up" data-aos-delay="500">
                <a href="#" class="btn btn-outline-primary btn-lg">
                    <i class="bi bi-images me-2"></i>
                    Voir toutes nos installations
                </a>
            </div>
        </div>
    </section> --}}
    <section id="contact" class="contact section">
        <div class="student-gallery mt-5 pt-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
           <div class="container section-title" data-aos="fade-up">
                <h2>Notre Ecole en Images</h2>
                <p>Découvrez les espaces d'apprentissage et les installations du Messiah Christian College</p>
            </div><!-- End Section Title -->

          <div class="row g-3">
            <div class="col-md-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
              <a href="assets/img/st.png" class="gallery-item glightbox">
                <img src="assets/img/st.png" class="img-fluid" loading="lazy" alt="Student Life">
                <div class="gallery-overlay">
                  <i class="bi bi-plus-circle"></i>
                </div>
              </a>
            </div>

            <div class="col-md-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
              <a href="assets/img/st.png" class="gallery-item glightbox">
                <img src="assets/img/st.png" class="img-fluid" loading="lazy" alt="Student Life">
                <div class="gallery-overlay">
                  <i class="bi bi-plus-circle"></i>
                </div>
              </a>
            </div>

            <div class="col-md-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
              <a href="assets/img/st.png" class="gallery-item glightbox">
                <img src="assets/img/st.png" class="img-fluid" loading="lazy" alt="Student Life">
                <div class="gallery-overlay">
                  <i class="bi bi-plus-circle"></i>
                </div>
              </a>
            </div>

            <div class="col-md-4 aos-init" data-aos="zoom-in" data-aos-delay="400">
              <a href="assets/img/st.png" class="gallery-item glightbox">
                <img src="assets/img/st.png" class="img-fluid" loading="lazy" alt="Student Life">
                <div class="assets/img/st.png">
                  <i class="bi bi-plus-circle"></i>
                </div>
              </a>
            </div>

            <div class="col-md-4 aos-init" data-aos="zoom-in" data-aos-delay="500">
              <a href="assets/img/st.png" class="gallery-item glightbox">
                <img src="assets/img/st.png" class="img-fluid" loading="lazy" alt="Student Life">
                <div class="gallery-overlay">
                  <i class="bi bi-plus-circle"></i>
                </div>
              </a>
            </div>

            <div class="col-md-4 aos-init" data-aos="zoom-in" data-aos-delay="600">
              <a href="assets/img/st.png" class="gallery-item glightbox">
                <img src="assets/img/st.png" class="img-fluid" loading="lazy" alt="Student Life">
                <div class="gallery-overlay">
                  <i class="bi bi-plus-circle"></i>
                </div>
              </a>
            </div>
          </div>
        </div>
    </section>
    <section id="contact" class="contact section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Nous sommes à votre écoute pour toute question ou demande d'information</p>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-6 rounded-lg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3599.7381248561605!2d15.262593078785999!3d-4.440845467880991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2scd!4v1756109732722!5m2!1sen!2scd"
                    width="600"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="col-lg-6 rounded-lg">
            <form action="{{ route('contact.send') }}" method="POST" class="php-email-form"  >
                @csrf
                <div class="row gy-4">
                <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Entrer votre nom" required="Entrer votre nom">
                </div>
                <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Entrer votre adresse mail" required="Entrer votre adresse mail">
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Entrez l'objet de votre message" required="Entrez l'objet de votre message">
                </div>
                <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Entrez votre Message" required="Entrez votre Message"></textarea>
                </div>
                <div class="col-12 text-center">
                    <button type="submit">Envoyez le message</button>
                </div>
                </div>
            </form>
            </div><!-- End Contact Form -->
        </div>
        </div>
    </section><!-- /Contact Section -->

@endsection
