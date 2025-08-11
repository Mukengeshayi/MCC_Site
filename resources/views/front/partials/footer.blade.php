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
<footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo-MCC.png') }}" alt="logo MCC" style="height: 40px; margin-right: 10px;">
            <div class="d-flex flex-column">
                <span class="school-line1">MESSIAH</span>
                <span class="school-line2">CHRISTIAN COLLEGE</span>
            </div>
          </a>
          <div class="footer-contact pt-3">
            <p>Av. Kasa-Vubu n°12, Quartier Résidentiel</p>
            <p>Kinshasa, RDC</p>
            <p class="mt-3"><strong>Tél :</strong> <span>+243 900 000 000</span></p>
            <p><strong>Email :</strong> <span>contact@mcc.cd</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Navigation</h4>
          <ul>
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li><a href="{{ url('/about') }}">À propos</a></li>
            <li><a href="{{ url('/admissions') }}">Admissions</a></li>
            <li><a href="{{ url('/academics') }}">Programmes</a></li>
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

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Vie scolaire</h4>
          <ul>
            <li><a href="{{ url('/students-life') }}">Vie scolaire</a></li>
            <li><a href="{{ url('/events') }}">Événements</a></li>
            <li><a href="{{ url('/galerie') }}">Galerie</a></li>
            <li><a href="{{ url('/alumni') }}">Alumni</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Ressources</h4>
          <ul>
            <li><a href="{{ url('/reglement') }}">Règlement</a></li>
            <li><a href="{{ url('/privacy') }}">Confidentialité</a></li>
            <li><a href="{{ url('/terms') }}">Conditions</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>{{ date('Y') }}</span> <strong class="px-1 sitename">Messiah Christian College</strong> <span>Tous droits réservés</span></p>
      <div class="credits">
        Site réalisé par <a href="#">L'équipe MCC</a>
      </div>
    </div>

</footer>
