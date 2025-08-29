@extends('layouts.admin')

@section('title', 'Détails des Informations de l\'École')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Détails des Informations de l'École</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.schools.index') }}">Informations de l'École</a></li>
                    <li class="breadcrumb-item active">Détails</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Informations de l'École #{{ $school->id }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.schools.edit', $school) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Modifier
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Informations Générales</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>ID:</strong></td>
                                        <td>{{ $school->id }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Adresse:</strong></td>
                                        <td>{{ $school->adresse ?? 'Non renseigné' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Téléphone:</strong></td>
                                        <td>
                                            @if($school->telephone)
                                                <a href="tel:{{ $school->telephone }}">{{ $school->telephone }}</a>
                                            @else
                                                Non renseigné
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email:</strong></td>
                                        <td>
                                            @if($school->email)
                                                <a href="mailto:{{ $school->email }}">{{ $school->email }}</a>
                                            @else
                                                Non renseigné
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Date de création:</strong></td>
                                        <td>{{ $school->created_at->format('d/m/Y H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Dernière modification:</strong></td>
                                        <td>{{ $school->updated_at->format('d/m/Y H:i') }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h5>Logo</h5>
                                @if($school->logo)
                                    <div class="text-center">
                                        <img src="{{ asset('storage/' . $school->logo) }}" 
                                             alt="Logo de l'école" 
                                             class="img-fluid" 
                                             style="max-height: 200px;">
                                        <p class="text-muted mt-2">{{ $school->logo }}</p>
                                    </div>
                                @else
                                    <div class="text-center py-4">
                                        <i class="fas fa-image text-muted fa-3x"></i>
                                        <p class="text-muted mt-2">Aucun logo défini</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12">
                                <h5>Réseaux Sociaux</h5>
                                @if($school->social_links && count($school->social_links) > 0)
                                    <div class="row">
                                        @if(isset($school->social_links['facebook']))
                                            <div class="col-md-3 mb-3">
                                                <div class="card bg-primary text-white">
                                                    <div class="card-body text-center">
                                                        <i class="fab fa-facebook fa-2x mb-2"></i>
                                                        <h6>Facebook</h6>
                                                        <a href="{{ $school->social_links['facebook'] }}" 
                                                           target="_blank" 
                                                           class="text-white">
                                                            Voir le profil
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if(isset($school->social_links['instagram']))
                                            <div class="col-md-3 mb-3">
                                                <div class="card bg-danger text-white">
                                                    <div class="card-body text-center">
                                                        <i class="fab fa-instagram fa-2x mb-2"></i>
                                                        <h6>Instagram</h6>
                                                        <a href="{{ $school->social_links['instagram'] }}" 
                                                           target="_blank" 
                                                           class="text-white">
                                                            Voir le profil
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if(isset($school->social_links['linkedin']))
                                            <div class="col-md-3 mb-3">
                                                <div class="card bg-info text-white">
                                                    <div class="card-body text-center">
                                                        <i class="fab fa-linkedin fa-2x mb-2"></i>
                                                        <h6>LinkedIn</h6>
                                                        <a href="{{ $school->social_links['linkedin'] }}" 
                                                           target="_blank" 
                                                           class="text-white">
                                                            Voir le profil
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        @if(isset($school->social_links['tiktok']))
                                            <div class="col-md-3 mb-3">
                                                <div class="card bg-dark text-white">
                                                    <div class="card-body text-center">
                                                        <i class="fab fa-tiktok fa-2x mb-2"></i>
                                                        <h6>TikTok</h6>
                                                        <a href="{{ $school->social_links['tiktok'] }}" 
                                                           target="_blank" 
                                                           class="text-white">
                                                            Voir le profil
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @else
                                    <div class="text-center py-4">
                                        <i class="fas fa-share-alt text-muted fa-3x"></i>
                                        <p class="text-muted mt-2">Aucun réseau social configuré</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.schools.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Retour à la liste
                        </a>
                        <a href="{{ route('admin.schools.edit', $school) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Modifier
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
