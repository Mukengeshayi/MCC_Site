
<aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="{{asset('assets/img/logo-mcc.png')}}" alt="MccLogo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Administration</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        @auth
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/admin/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('profile.edit') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        @endauth

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Tableau de bord</p>
                    </a>
                </li>

                <!-- Content Section -->
                <li class="nav-header">CONTENU</li>
                <li class="nav-item">
                    <a href="{{ route('admin.editor') }}" class="nav-link {{ request()->is('admin/editor') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Éditeur</p>
                    </a>
                </li>

                <!-- Articles -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Articles
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tous les articles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ajouter un article</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- School Information -->
                <li class="nav-item">
                    <a href="{{ route('admin.schools.index') }}" class="nav-link {{ request()->is('admin/schools*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-school"></i>
                        <p>Informations de l'École</p>
                    </a>
                </li>

                <!-- Education Levels -->
                <li class="nav-item">
                    <a href="{{ route('admin.education-levels.index') }}" class="nav-link {{ request()->is('admin/education-levels*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>Niveaux d'Éducation</p>
                    </a>
                </li>

                <!-- Student Life -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link {{ request()->is('admin/student-life*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Vie Étudiante
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.student-life-categories.index') }}" class="nav-link {{ request()->is('admin/student-life-categories*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Catégories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.student-life-items.index') }}" class="nav-link {{ request()->is('admin/student-life-items*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Éléments</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- System Section -->
                <li class="nav-header">SYSTÈME</li>
                <li class="nav-item">
                    <a href="{{ route('home') }}" target="_blank" class="nav-link">
                        <i class="nav-icon fas fa-external-link-alt"></i>
                        <p>Voir le site</p>
                    </a>
                </li>

                <!-- Settings -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Paramètres</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
