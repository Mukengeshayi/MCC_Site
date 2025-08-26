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
</footer> --}}

<footer id="footer" class="footer position-relative dark-background modern-footer">
    <div class="container footer-top">
        <div class="row gy-4 align-items-stretch">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center mb-3" style="text-decoration: none;">
                    <img src="{{ asset('assets/img/logo-MCC.png') }}" alt="logo MCC" class="footer-logo">
                    <div class="d-flex flex-column ms-2">
                        <span class="school-line1">MESSIAH</span>
                        <span class="school-line2">CHRISTIAN COLLEGE</span>
                    </div>
                </a>
                <div class="footer-contact pt-2">
                    <p><i class="bi bi-geo-alt-fill me-2"></i>146-150, Route Bypass, Q/ Pumbu, C/ Mont-Ngafula</p>
                    <p><i class="bi bi-geo-alt me-2"></i>Kinshasa, RDC</p>
                    <p class="mt-2"><i class="bi bi-telephone-fill me-2"></i><span>+243 810 000 971</span></p>
                    <p><i class="bi bi-envelope-fill me-2"></i><span>info@messiahchristiancollege.com</span></p>
                </div>
                <div class="social-links d-flex mt-3">
                    <a href="https://www.facebook.com/profile.php?id=61578662350805" class="social-link facebook" target="_blank"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/ecolemessiahchristianmcc1?igsh=N3IybTFicHlkc2V4" class="social-link instagram" target="_blank"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/feed/update/urn:li:activity:7358932188370726913" class="social-link linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.tiktok.com/@messiah.christian" class="social-link tiktok" target="_blank"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Ressources</h4>
                <ul>
                    <li><a href="{{ url('/') }}">Accueil</a></li>
                    <li><a href="{{ url('/about') }}">À propos</a></li>
                    <li><a href="{{ url('/admissions') }}">Vie scolaire</a></li>
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
            <div class="col-lg-4 col-md-6 footer-newsletter">
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
        <div class="credits">
            Site réalisé par <a href="#">E-AM</a>
        </div>
    </div>
</footer>

