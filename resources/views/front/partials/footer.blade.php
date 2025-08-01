<div>
    <div>
        Footer
    </div>

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
</div>
