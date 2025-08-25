{{-- <div>
    <div class="admin-access-link">
        @auth
            <a href="{{ route('dashboard') }}" title="Administration">
                <i class="fas fa-cog"></i>
            </a>
        @else
            <a href="{{ route('admin.access') }}" title="Accès admin">
                <i class="fas fa-lock"></i>
            </a>
        @endauth
    </div>
</div> --}}

{{--
<footer id="footer" class="footer position-relative dark-background" style="background-color: var(--background-color); color: var(--default-color);">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ url('/') }}" class="logo d-flex align-items-center" style="text-decoration: none;">
            <img src="{{ asset('assets/img/logo-MCC.png') }}" alt="logo MCC" style="height: 40px; margin-right: 10px;">
            <div class="d-flex flex-column">
                <span class="school-line1" style="color: var(--heading-color); font-family: var(--heading-font); font-size: 22px;">MESSIAH</span>
                <span class="school-line2" style="color: var(--accent-color); font-family: var(--heading-font); font-size: 14px;">CHRISTIAN COLLEGE</span>
            </div>
          </a>
          <div class="footer-contact pt-3">
            <p style="color: var(--default-color);">146-150, Route Bypass, Q/ Pumbu, C/ Mont-Ngafula</p>
            <p style="color: var(--default-color);">Kinshasa, RDC</p>
            <p class="mt-3"><strong style="color: var(--accent-color);">Tél :</strong> <span style="color: var(--default-color);">+243 810 000 971</span></p>
            <p><strong style="color: var(--accent-color);">Email :</strong> <span style="color: var(--default-color);">contact@mcc.cd</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="#" style="background: none; border: 1px solid var(--accent-color); color: var(--accent-color);"><i class="bi bi-facebook"></i></a>
            <a href="#" style="background: none; border: 1px solid var(--accent-color); color: var(--accent-color);"><i class="bi bi-instagram"></i></a>
            <a href="#" style="background: none; border: 1px solid var(--accent-color); color: var(--accent-color);"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4 style="color: var(--heading-color);">Navigation</h4>
          <ul>
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li><a href="{{ url('/about') }}">À propos</a></li>
            <li><a href="{{ url('/admissions') }}">Admissions</a></li>
            <li><a href="{{ url('/academics') }}">Programmes</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4 style="color: var(--heading-color);">Niveaux</h4>
          <ul>
            <li><a href="{{ url('/creche-maternelle') }}">Crèche & Maternelle</a></li>
            <li><a href="{{ url('/primaire') }}">Primaire</a></li>
            <li><a href="{{ url('/secondaire') }}">Secondaire</a></li>
            <li><a href="{{ url('/humanite') }}">Humanités</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4 style="color: var(--heading-color);">Vie scolaire</h4>
          <ul>
            <li><a href="{{ url('/students-life') }}">Vie scolaire</a></li>
            <li><a href="{{ url('/events') }}">Événements</a></li>
            <li><a href="{{ url('/galerie') }}">Galerie</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>{{ date('Y') }}</span> <strong class="px-1 sitename" style="color: var(--accent-color);">Messiah Christian College</strong> <span>Tous droits réservés</span></p>
      <div class="credits">
        Site réalisé par <a href="#" style="color: var(--accent-color);">L'équipe MCC</a>
      </div>
    </div>

</footer> --}}

{{-- <footer id="footer" class="footer position-relative">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ url('/') }}" class="logo d-flex align-items-center" style="text-decoration: none;">
            <img src="{{ asset('assets/img/logo-MCC.png') }}" alt="logo MCC" style="height: 40px; margin-right: 10px;">
            <div class="d-flex flex-column">
                <span class="school-line1" style="color: #fff; font-family: var(--heading-font); font-size: 22px;">MESSIAH</span>
                <span class="school-line2" style="color: #fff; font-family: var(--heading-font); font-size: 14px;">CHRISTIAN COLLEGE</span>
            </div>
          </a>
          <div class="footer-contact pt-3">
            <p>146-150, Route Bypass, Q/ Pumbu, C/ Mont-Ngafula</p>
            <p>Kinshasa, RDC</p>
            <p class="mt-3"><strong>Tél :</strong> <span>+243 810 000 971</span></p>
            <p><strong>Email :</strong> <span>contact@mcc.cd</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="#" style="background: #fff; color: var(--accent-color); border: none;"><i class="bi bi-facebook"></i></a>
            <a href="#" style="background: #fff; color: var(--accent-color); border: none;"><i class="bi bi-instagram"></i></a>
            <a href="#" style="background: #fff; color: var(--accent-color); border: none;"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4 style="color: #fff;">Navigation</h4>
          <ul>
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li><a href="{{ url('/about') }}">À propos</a></li>
            <li><a href="{{ url('/admissions') }}">Admissions</a></li>
            <li><a href="{{ url('/academics') }}">Programmes</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4 style="color: #fff;">Niveaux</h4>
          <ul>
            <li><a href="{{ url('/creche-maternelle') }}">Crèche & Maternelle</a></li>
            <li><a href="{{ url('/primaire') }}">Primaire</a></li>
            <li><a href="{{ url('/secondaire') }}">Secondaire</a></li>
            <li><a href="{{ url('/humanite') }}">Humanités</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4 style="color: #fff;">Vie scolaire</h4>
          <ul>
            <li><a href="{{ url('/students-life') }}">Vie scolaire</a></li>
            <li><a href="{{ url('/events') }}">Événements</a></li>
            <li><a href="{{ url('/galerie') }}">Galerie</a></li>
          </ul>
        </div>
      </div>
    </div>


    <div class="container copyright text-center mt-4">
      <p style="color: #fff;">© <span>{{ date('Y') }}</span> <strong class="px-1 sitename">Messiah Christian College</strong> <span>Tous droits réservés</span></p>
      <div class="credits" style="color: #fff;">
        Site réalisé par <a href="#" style="color: #f2b833; text-decoration: underline;">L'équipe MCC</a>
      </div>
    </div>
</footer> --}}


<footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ url('/') }}" class="logo d-flex align-items-center" style="text-decoration: none;">
            <img src="{{ asset('assets/img/logo-MCC.png') }}" alt="logo MCC" style="height: 40px; margin-right: 10px;">
            <div class="d-flex flex-column">
                <span class="school-line1" style="color: #fff; font-family: var(--heading-font); font-size: 22px;">MESSIAH</span>
                <span class="school-line2" style="color: #fff; font-family: var(--heading-font); font-size: 14px;">CHRISTIAN COLLEGE</span>
            </div>
          </a>
          <div class="footer-contact pt-3">
            <p>146-150, Route Bypass, Q/ Pumbu, C/ Mont-Ngafula</p>
            <p>Kinshasa, RDC</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+243 810 000 971</span></p>
            <p><strong>Email:</strong> <span>info@messiahchristiancollege.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="https://www.facebook.com/profile.php?id=61578662350805"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/ecolemessiahchristianmcc1?igsh=N3IybTFicHlkc2V4"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/feed/update/urn:li:activity:7358932188370726913"><i class="bi bi-linkedin"></i></a>
            <a href="https://www.tiktok.com/@messiah.christian"><i class="bi bi-tiktok"></i></a>

          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Ressources</h4>
           <ul>
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li><a href="{{ url('/about') }}">À propos</a></li>
            <li><a href="{{ url('/admissions') }}">Vie scolaire </a></li>
            <li><a href="{{ url('/academics') }}">Galerie</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Niveaux</h4>

          <ul>
            <li><a href="{{ url('/creche-maternelle') }}">Crèche & Maternelle</a></li>
            <li><a href="{{ url('/primaire') }}">Primaire</a></li>
            <li><a href="{{ url('/secondaire') }}">Secondaire</a></li>
            <li><a href="{{ url('/humanite') }}">Humanités</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Notre Newsletter</h4>
          <p>Abonnez-vous et recevez les dernières nouvelles et annonces.</p>
          <form class="newsletter-form" action="#" method="post">
            @csrf
            <div class="input-group">
              <input type="email" name="email" class="form-control" placeholder="Votre adresse e-mail" aria-label="Votre adresse e-mail" required>
              <button class="btn-subscribe" type="submit">S'abonner <i class="bi bi-send ms-2"></i></button>
            </div>
            <div class="form-feedback" role="status" aria-live="polite"></div>
          </form>
        </div>

      </div>
    </div>
    <div class="container copyright text-center mt-4">
      <p>© <span>{{ date('Y') }}</span> <strong class="px-1 sitename">Messiah Christian College</strong> <span>Tous droits réservés</span></p>
      <div class="credits" style="color: #fff;">
        Site réalisé par <a href="#">L'équipe MCC</a>
      </div>
    </div>
</footer>

