@extends('layouts.front')

@section('title', 'Accès administration')

@section('content')
<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="mb-4">Accès administration</h1>

            <div class="card shadow">
                <div class="card-body p-5">
                    <p class="lead">
                        Pour accéder à l'interface d'administration, veuillez vous connecter.
                    </p>

                    <div class="d-flex justify-content-center gap-3 mt-4">
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4">
                            <i class="fas fa-sign-in-alt me-2"></i> Connexion
                        </a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg px-4">
                            <i class="fas fa-user-plus me-2"></i> Inscription
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
