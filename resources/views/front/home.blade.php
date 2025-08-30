@extends('layouts.front')

@section('title', $title)

@section('meta_description', 'Messiah Christian College - École d\'excellence à Kinshasa. Découvrez nos niveaux d\'éducation : Crèche & Maternelle, Primaire, Secondaire et Humanités. Formation de qualité avec valeurs chrétiennes.')

@section('meta_keywords', 'Messiah Christian College, école Kinshasa, crèche maternelle, primaire, secondaire, humanités, éducation RDC, école chrétienne, formation excellence')

@section('og_title', 'Messiah Christian College - Former aujourd\'hui les leaders de demain')

@section('og_description', 'Découvrez Messiah Christian College, école d\'excellence à Kinshasa. Nos niveaux d\'éducation de la crèche aux humanités, avec un enseignement de qualité et des valeurs chrétiennes.')

@section('og_image', asset('assets/img/logo-mcc.png'))

@section('twitter_title', 'Messiah Christian College - École d\'excellence à Kinshasa')

@section('twitter_description', 'Formation de qualité de la crèche aux humanités. Découvrez nos programmes éducatifs et nos valeurs chrétiennes.')

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
                  <a href="#" class="btn-primary btn-blue">Découvrir l’école</a>
                  <a href="#" class="btn-secondary btn-yellow">Voir nos cycles </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="highlights-container container">
        <div class="row gy-4">
          @forelse($educationLevels as $index => $level)
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
              <div class="highlight-item">
                <div class="icon">
                  <i class="bi {{ $level->icon }}"></i>
                </div>
                <h3>
                  {{ $level->name }}
                  @if($level->subtitle)
                    <small class="d-block">{{ $level->subtitle }}</small>
                  @endif
                </h3>
                <p>{{ Str::limit($level->description, 120) }}</p>
                <a href="{{ $level->route }}" class="card-link"
                   title="Découvrir le programme {{ $level->name }} - Messiah Christian College"
                   aria-label="En savoir plus sur {{ $level->name }}">
                  <span>Détail du programme</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          @empty
            <div class="col-12 text-center">
              <div class="alert alert-info">
                <i class="bi bi-info-circle"></i>
                Les niveaux d'éducation seront bientôt disponibles.
              </div>
            </div>
          @endforelse
        </div>
      </div>
       <div class="event-banner" data-aos="fade-up" data-aos-delay="500">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-2">
              <div class="event-date">
                <span class="month">EN</span>
                <span class="day">COURS</span>
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

    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <div class="content">
              <h3>Formons l'Excellence, Cultivons la Sagesse</h3>
              <p>Messiah Christian College, situé à Kinshasa en RDC, s'engage à promouvoir l'avenir des enfants à travers une éducation de qualité et des valeurs chrétiennes.</p>

              <!-- Valeurs -->
              <div class="values-section mb-3">
                <div class="values-grid">
                  <div class="value-item">
                    <div class="value-icon">
                      <i class="bi bi-lightbulb-fill text-primary"></i>
                    </div>
                    <div class="value-content">
                      <h5>Potentiel</h5>
                    </div>
                  </div>
                  <div class="value-item">
                    <div class="value-icon">
                      <i class="bi bi-book-fill text-success"></i>
                    </div>
                    <div class="value-content">
                      <h5>Sagesse</h5>
                    </div>
                  </div>
                  <div class="value-item">
                    <div class="value-icon">
                      <i class="bi bi-trophy-fill text-warning"></i>
                    </div>
                    <div class="value-content">
                      <h5>Excellence</h5>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Brève Histoire -->
              <div class="history-brief mb-3">
                <p><i class="bi bi-clock-history text-info me-2"></i>L'établissement a vu le jour le 11 septembre 2017, grâce à l'initiative du couple apostolique Jean Baptiste Sumbela et la prophétesse Lyly Hulda Sumbela, qui a reconnu le besoin crucial d'une éducation accessible et de qualité dans la région.</p>
              </div>

              <a href="{{ route('about') }}" class="btn-learn-more">
                Découvrir Notre Histoire
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="image-wrapper">
              <img src="{{asset('assets/img/st.png')}}" alt="Batiment mcc" class="img-fluid">
              <div class="experience-badge">
                <div class="years">7+</div>
                <div class="text">Années d'Excellence</div>
              </div>
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
                        <img src="{{asset('assets/img/student.png')}}" class="img-fluid rounded-4 shadow-sm" alt="Vie scolaire MCC">
                        <div class="img-overlay">
                            <h3>Découvrez la vie dynamique de nos élèves</h3>
                            <a href="{{ route('students-life') }}" class="explore-btn"> En savoir plus <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="students-life-content">
                        <div class="row g-4 mb-4">
                            <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                                <div class="simple-activity-card">
                                    <div class="card-icon">
                                        <i class="bi bi-music-note-beamed"></i>
                                    </div>
                                    <h4>Clubs de Musique</h4>
                                    <p>Développer le talent musical et l'expression artistique des élèves à travers la chorale et les instruments.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                                <div class="simple-activity-card">
                                    <div class="card-icon">
                                        <i class="bi bi-water"></i>
                                    </div>
                                    <h4>Natation</h4>
                                    <p>Apprentissage de la natation et compétitions aquatiques pour développer les compétences physiques.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                                <div class="simple-activity-card">
                                    <div class="card-icon">
                                        <i class="bi bi-palette"></i>
                                    </div>
                                    <h4>Théâtre & Art</h4>
                                    <p>Expression créative à travers le théâtre et les arts plastiques pour stimuler l'imagination.</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6" data-aos="zoom-in" data-aos-delay="500">
                                <div class="simple-activity-card">
                                    <div class="card-icon">
                                        <i class="bi bi-trophy"></i>
                                    </div>
                                    <h4>Activités Sportives</h4>
                                    <p>Compétitions et tournois pour promouvoir la santé et l'esprit d'équipe chez nos élèves.</p>
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

    <!-- Campus Gallery Section -->
    <section class="campus-gallery-section section">
        <div class="container">
            <!-- Section Title -->
            <div class="section-title text-center" data-aos="fade-up">
                <h2>Notre École en Images</h2>
                <p>Découvrez les espaces d'apprentissage et les installations modernes du Messiah Christian College</p>
            </div>

            <!-- Gallery Filter Tabs -->
            <div class="gallery-filter-wrapper" data-aos="fade-up" data-aos-delay="100">
                <div class="gallery-filter-tabs">
                    <button class="filter-tab active" data-filter="all">
                        <i class="bi bi-grid-3x3-gap"></i>
                        <span>Toutes</span>
                    </button>
                    <button class="filter-tab" data-filter="activities">
                        <i class="bi bi-people-fill"></i>
                        <span>Vie Scolaires</span>
                    </button>
                    <button class="filter-tab" data-filter="events">
                        <i class="bi bi-calendar-event"></i>
                        <span>Événements</span>
                    </button>
                    <button class="filter-tab" data-filter="infrastructure">
                        <i class="bi bi-building"></i>
                        <span>Infrastructures</span>
                    </button>
                </div>
            </div>

            <!-- Gallery Grid -->
            <div class="gallery-grid" id="campus-gallery" data-aos="fade-up" data-aos-delay="200">
                <!-- Activités Scolaires - Salle de classe -->
                <div class="gallery-item" data-category="activities" data-aos="zoom-in" data-aos-delay="100">
                    <a href="{{asset('assets/img/st.png')}}"
                       class="glightbox"
                       data-gallery="campus-gallery"
                       data-title="Activités Scolaires - Salle de Classe"
                       data-description="Découvrez le quotidien des élèves dans nos salles de classe modernes, équipées des dernières technologies éducatives."
                       data-type="image">
                        <div class="gallery-image-wrapper">
                            <img src="{{asset('assets/img/st.png')}}"
                                 alt="Activités scolaires en classe"
                                 class="gallery-image"
                                 loading="lazy">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <div class="overlay-icon">
                                        <i class="bi bi-zoom-in"></i>
                                    </div>
                                    <div class="overlay-text">
                                        <h4>Activités Scolaires</h4>
                                        <p>Apprentissage actif</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Infrastructures - Bibliothèque -->
                <div class="gallery-item" data-category="infrastructure" data-aos="zoom-in" data-aos-delay="150">
                    <a href="{{asset('assets/img/st.png')}}"
                       class="glightbox"
                       data-gallery="campus-gallery"
                       data-title="Infrastructures - Bibliothèque Centrale"
                       data-description="Notre bibliothèque moderne avec plus de 15,000 ouvrages, zones de travail collaboratif et ressources numériques."
                       data-type="image">
                        <div class="gallery-image-wrapper">
                            <img src="{{asset('assets/img/st.png')}}"
                                 alt="Bibliothèque centrale"
                                 class="gallery-image"
                                 loading="lazy">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <div class="overlay-icon">
                                        <i class="bi bi-zoom-in"></i>
                                    </div>
                                    <div class="overlay-text">
                                        <h4>Infrastructures</h4>
                                        <p>Bibliothèque moderne</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Infrastructures - Laboratoire -->
                <div class="gallery-item" data-category="infrastructure" data-aos="zoom-in" data-aos-delay="200">
                    <a href="{{asset('assets/img/st.png')}}"
                       class="glightbox"
                       data-gallery="campus-gallery"
                       data-title="Infrastructures - Laboratoire Informatique"
                       data-description="Notre laboratoire informatique équipé des dernières technologies pour l'apprentissage numérique et la programmation."
                       data-type="image">
                        <div class="gallery-image-wrapper">
                            <img src="{{asset('assets/img/st.png')}}"
                                 alt="Laboratoire informatique"
                                 class="gallery-image"
                                 loading="lazy">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <div class="overlay-icon">
                                        <i class="bi bi-zoom-in"></i>
                                    </div>
                                    <div class="overlay-text">
                                        <h4>Infrastructures</h4>
                                        <p>Lab informatique</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Événements - Activités sportives -->
                <div class="gallery-item" data-category="events" data-aos="zoom-in" data-aos-delay="250">
                    <a href="{{asset('assets/img/st.png')}}"
                       class="glightbox"
                       data-gallery="campus-gallery"
                       data-title="Événements - Activités Sportives"
                       data-description="Découvrez nos événements sportifs et les activités qui favorisent le développement physique et l'esprit d'équipe."
                       data-type="image">
                        <div class="gallery-image-wrapper">
                            <img src="{{asset('assets/img/st.png')}}"
                                 alt="Événements sportifs"
                                 class="gallery-image"
                                 loading="lazy">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <div class="overlay-icon">
                                        <i class="bi bi-zoom-in"></i>
                                    </div>
                                    <div class="overlay-text">
                                        <h4>Événements</h4>
                                        <p>Activités sportives</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Activités Scolaires - Cafétéria -->
                <div class="gallery-item" data-category="activities" data-aos="zoom-in" data-aos-delay="300">
                    <a href="{{asset('assets/img/st.png')}}"
                       class="glightbox"
                       data-gallery="campus-gallery"
                       data-title="Activités Scolaires - Espace de Restauration"
                       data-description="La cafétéria, cœur de la vie quotidienne des élèves, avec vue sur le campus et repas équilibrés."
                       data-type="image">
                        <div class="gallery-image-wrapper">
                            <img src="{{asset('assets/img/st.png')}}"
                                 alt="Activités scolaires - cafétéria"
                                 class="gallery-image"
                                 loading="lazy">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <div class="overlay-icon">
                                        <i class="bi bi-zoom-in"></i>
                                    </div>
                                    <div class="overlay-text">
                                        <h4>Activités Scolaires</h4>
                                        <p>Espace convivial</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Infrastructures - Auditorium -->
                <div class="gallery-item" data-category="infrastructure" data-aos="zoom-in" data-aos-delay="350">
                    <a href="{{asset('assets/img/st.png')}}"
                       class="glightbox"
                       data-gallery="campus-gallery"
                       data-title="Infrastructures - Auditorium Principal"
                       data-description="Notre auditorium de 300 places, équipé des dernières technologies audiovisuelles pour les événements scolaires."
                       data-type="image">
                        <div class="gallery-image-wrapper">
                            <img src="{{asset('assets/img/st.png')}}"
                                 alt="Infrastructures - auditorium"
                                 class="gallery-image"
                                 loading="lazy">
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <div class="overlay-icon">
                                        <i class="bi bi-zoom-in"></i>
                                    </div>
                                    <div class="overlay-text">
                                        <h4>Infrastructures</h4>
                                        <p>Auditorium 300 places</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Gallery CTA -->
            <div class="gallery-cta text-center" data-aos="fade-up" data-aos-delay="500">
                <a href="#" class="btn btn-primary btn-lg">
                    <i class="bi bi-images me-2"></i>
                    Voir toute la galerie
                </a>
                <p class="gallery-subtitle">Découvrez l'excellence de nos activités et infrastructures éducatives</p>
            </div>
        </div>
    </section>


    <section id="events" class="events section">

      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Événements</h2>
        <p>Découvrez les prochains événements et activités organisés par notre école</p>
      </div><!-- End Section Title -->

      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
            <div class="event-item">
              <div class="event-image">
                <img src="{{asset('assets/img/activities/theatre-art.jpg')}}" alt="Festival de Théâtre" class="img-fluid">
                <div class="event-date-overlay">
                  <span class="date">MAR<br>18</span>
                </div>
              </div>
              <div class="event-details">
                <div class="event-category">
                  <span class="badge arts">Arts & Culture</span>
                  <span class="event-time">14:00</span>
                </div>
                <h3>Festival de Théâtre des Élèves</h3>
                <p>Venez assister aux représentations théâtrales de nos élèves talentueux. Une journée dédiée à l'art dramatique et à la créativité.</p>
                <div class="event-info">
                  <div class="info-row">
                    <i class="bi bi-geo-alt"></i>
                    <span>Auditorium Principal</span>
                  </div>
                  <div class="info-row">
                    <i class="bi bi-people"></i>
                    <span>Ouvert au public</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
            <div class="event-item">
              <div class="event-image">
                <img src="{{asset('assets/img/activities/swimming.jpg')}}" alt="Compétition de Natation" class="img-fluid">
                <div class="event-date-overlay">
                  <span class="date">AVR<br>05</span>
                </div>
              </div>
              <div class="event-details">
                <div class="event-category">
                  <span class="badge sports">Compétition Sportive</span>
                  <span class="event-time">09:00</span>
                </div>
                <h3>Championnat Inter-Classes de Natation</h3>
                <p>Compétition de natation entre les différentes classes. Démonstrations de techniques et remise de médailles pour les meilleurs nageurs.</p>
                <div class="event-info">
                  <div class="info-row">
                    <i class="bi bi-geo-alt"></i>
                    <span>Piscine de l'École</span>
                  </div>
                  <div class="info-row">
                    <i class="bi bi-people"></i>
                    <span>Classes 5ème à 8ème</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
            <div class="event-item">
              <div class="event-image">
                <img src="{{asset('assets/img/activities/music-club.jpg')}}" alt="Concert de Musique" class="img-fluid">
                <div class="event-date-overlay">
                  <span class="date">AVR<br>12</span>
                </div>
              </div>
              <div class="event-details">
                <div class="event-category">
                  <span class="badge arts">Concert Musical</span>
                  <span class="event-time">18:00</span>
                </div>
                <h3>Concert de Printemps</h3>
                <p>Spectacle musical présenté par notre club de musique. Orchestre, chorale et solistes vous feront découvrir la richesse de la musique classique et moderne.</p>
                <div class="event-info">
                  <div class="info-row">
                    <i class="bi bi-geo-alt"></i>
                    <span>Salle de Concert</span>
                  </div>
                  <div class="info-row">
                    <i class="bi bi-people"></i>
                    <span>300 places disponibles</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
            <div class="event-item">
              <div class="event-image">
                <img src="{{asset('assets/img/activities/football.jpg')}}" alt="Tournoi de Football" class="img-fluid">
                <div class="event-date-overlay">
                  <span class="date">MAI<br>03</span>
                </div>
              </div>
              <div class="event-details">
                <div class="event-category">
                  <span class="badge sports">Tournoi Sportif</span>
                  <span class="event-time">10:00</span>
                </div>
                <h3>Tournoi de Football Inter-Écoles</h3>
                <p>Compétition de football opposant notre école aux autres établissements de la région. Esprit sportif et fair-play au programme.</p>
                <div class="event-info">
                  <div class="info-row">
                    <i class="bi bi-geo-alt"></i>
                    <span>Terrain de Football</span>
                  </div>
                  <div class="info-row">
                    <i class="bi bi-people"></i>
                    <span>8 équipes participantes</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
            <div class="event-item">
              <div class="event-image">
                <img src="{{asset('assets/img/activities/basketball.jpg')}}" alt="Match de Basketball" class="img-fluid">
                <div class="event-date-overlay">
                  <span class="date">MAI<br>15</span>
                </div>
              </div>
              <div class="event-details">
                <div class="event-category">
                  <span class="badge sports">Match de Basketball</span>
                  <span class="event-time">15:00</span>
                </div>
                <h3>Finale du Championnat de Basketball</h3>
                <p>Match décisif pour le titre de champion de basketball. Nos équipes s'affrontent dans une ambiance électrique et compétitive.</p>
                <div class="event-info">
                  <div class="info-row">
                    <i class="bi bi-geo-alt"></i>
                    <span>Salle de Basketball</span>
                  </div>
                  <div class="info-row">
                    <i class="bi bi-people"></i>
                    <span>Équipes 7ème et 8ème</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
            <div class="event-item">
              <div class="event-image">
                <img src="{{asset('assets/img/activities/athletics.jpg')}}" alt="Compétition d'Athlétisme" class="img-fluid">
                <div class="event-date-overlay">
                  <span class="date">JUIN<br>02</span>
                </div>
              </div>
              <div class="event-details">
                <div class="event-category">
                  <span class="badge sports">Compétition d'Athlétisme</span>
                  <span class="event-time">08:00</span>
                </div>
                <h3>Championnat d'Athlétisme</h3>
                <p>Compétition d'athlétisme avec épreuves de course, saut et lancer. Découvrez les talents de nos jeunes athlètes et encouragez-les.</p>
                <div class="event-info">
                  <div class="info-row">
                    <i class="bi bi-geo-alt"></i>
                    <span>Piste d'Athlétisme</span>
                  </div>
                  <div class="info-row">
                    <i class="bi bi-people"></i>
                    <span>Tous les niveaux</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="events-navigation aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
          <div class="row align-items-center">
            <div class="col-md-8">
              <div class="filter-tabs">
                <button class="filter-tab active" data-filter="all">Tous les Événements</button>
                <button class="filter-tab" data-filter="sports">Sports</button>
                <button class="filter-tab" data-filter="arts">Arts & Culture</button>
                <button class="filter-tab" data-filter="academic">Académique</button>
              </div>
            </div>
            <div class="col-md-4 text-end">
              <a href="{{ route('event') }}" class="view-calendar-btn">
                <i class="bi bi-calendar-event me-2"></i>
                Voir tous les événements
              </a>
            </div>
          </div>
        </div>

      </div>

    </section>
    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Pour toute question, inscription ou demande d’informations, notre équipe est à votre disposition. N’hésitez pas à nous écrire ou à nous appeler.</p>
        </div><!-- End Section Title -->
      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-main-wrapper">
          <div class="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3599.7381248561605!2d15.262593078785999!3d-4.440845467880991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2scd!4v1756109732722!5m2!1sen!2scd"
                width="100%"
                height="100%"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>

          <div class="contact-content">
            <div class="contact-cards-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="contact-text">
                  <h4>Adresse</h4>
                  <p>146-150, Route Bypass, Q/ Pumbu, C/ Mont-Ngafula</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="contact-text">
                  <h4>Email</h4>
                  <p>info@messiahchristiancollege.org</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="contact-text">
                  <h4>Téléphone</h4>
                  <p>+243 810 000 971</p>
                </div>
              </div>

              <div class="contact-card">
                <div class="icon-box">
                  <i class="bi bi-clock"></i>
                </div>
                <div class="contact-text">
                  <h4>Heures d'ouverture</h4>
                  <p>Lundi - Samedi : 7h00 - 18h00</p>
                </div>
              </div>
            </div>

            <div class="contact-form-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
              <h3>Entrer en contact</h3>
              <p>N’hésitez pas à nous écrire pour toute question ou demande d’information. Nous vous répondrons dans les plus brefs délais.</p>

              @if(session('success'))
                <div class="alert alert-success mb-3">{{ session('success') }}</div>
              @endif
              @if ($errors->any())
                <div class="alert alert-danger mb-3">
                  <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              <form action="{{ route('contact.send') }}" method="POST" class="php-email-form">
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Entrer votre nom" required="">
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Entrer votre e-mail" required="">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Entrer votre objet" required="">
                    @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Entrez votre message" required=""></textarea>
                    @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="my-3">
                  <div class="loading">Envoi en cours…</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Votre message a été envoyé. Merci !</div>
                </div>

                <div class="form-submit">
                  <button type="submit">Envoyez message</button>
                  <div class="social-links">
                    <a href="https://www.tiktok.com/@messiah.christian" class="social-link tiktok"><i class="bi bi-tiktok"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=61578662350805"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/ecolemessiahchristianmcc1?igsh=N3IybTFicHlkc2V4"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/feed/update/urn:li:activity:7358932188370726913"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
