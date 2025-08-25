<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center me-auto text-decoration-none">
        <img src="{{asset('assets/img/logo-MCC.png')}}"  alt="logo MCC" style="height: 60px; margin-right: 10px;">
        <div class="school-name d-flex flex-column">
            <span class="school-line1">MESSIAH</span>
            <span class="school-line2">CHRISTIAN COLLEGE</span>
        </div>
        </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}" class="active">Acceuil</a></li>
          <li class="dropdown"><a href="about.html"><span>Ecole</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="about.html">À propos</a></li>
                <li><a href="admissions.html">Admissions</a></li>
                <li><a href="academics.html">Programmes académiques</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Niveaux d’Enseignement</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="{{route('education-levels.preschool')}}">Crèche &amp; Maternelle</a></li>
                <li><a href="{{route('education-levels.primary')}}">Primaire</a></li>
                <li><a href="{{route('education-levels.high-school')}}">Secondaire (7ème EB – 8ème CTEB)</a></li>
             <li><a href="{{route('education-levels.high-school')}}">Humanité : Sciences, Littéraire, Commerciale, Informatique</a></li>
            </ul>
          </li>
          <li><a href="{{ route('students-life') }}">Vie scolaire</a></li>
          <li><a href="events.html">Galerie</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
</header>
