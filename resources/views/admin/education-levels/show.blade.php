@extends('layouts.admin')

@section('title', 'Détails du Niveau d\'Éducation')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Détails du Niveau d'Éducation</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.education-levels.index') }}">Niveaux d'Éducation</a></li>
                    <li class="breadcrumb-item active">Détails</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ $educationLevel->name }}</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.education-levels.edit', $educationLevel->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Modifier
                            </a>
                            <a href="{{ route('admin.education-levels.index') }}" class="btn btn-secondary btn-sm">
                                <i class="fas fa-arrow-left"></i> Retour
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                @if($educationLevel->image)
                                    <img src="{{ $educationLevel->image_url }}" alt="{{ $educationLevel->name }}"
                                         class="img-fluid rounded" style="max-height: 300px;">
                                @else
                                    <div class="bg-secondary text-white text-center rounded"
                                         style="height: 300px; line-height: 300px; font-size: 18px;">
                                        <i class="fas fa-image"></i><br>
                                        Aucune image
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-8">
                                <h4>Description</h4>
                                <p class="text-muted">{{ $educationLevel->description }}</p>

                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <h5><i class="fas fa-info-circle text-info"></i> Informations Générales</h5>
                                        <table class="table table-sm">
                                            <tr>
                                                <td><strong>ID:</strong></td>
                                                <td>{{ $educationLevel->id }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Nom:</strong></td>
                                                <td>{{ $educationLevel->name }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Slug:</strong></td>
                                                <td><code>{{ $educationLevel->slug }}</code></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Ordre:</strong></td>
                                                <td><span class="badge badge-info">{{ $educationLevel->order }}</span></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <h5><i class="fas fa-clock text-warning"></i> Informations Temporelles</h5>
                                        <table class="table table-sm">
                                            <tr>
                                                <td><strong>Créé le:</strong></td>
                                                <td>{{ $educationLevel->created_at->format('d/m/Y à H:i') }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Modifié le:</strong></td>
                                                <td>{{ $educationLevel->updated_at->format('d/m/Y à H:i') }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Âge:</strong></td>
                                                <td>{{ $educationLevel->created_at->diffForHumans() }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Actions</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="{{ route('admin.education-levels.edit', $educationLevel->id) }}"
                               class="btn btn-warning">
                                <i class="fas fa-edit"></i> Modifier
                            </a>

                            <form action="{{ route('admin.education-levels.destroy', $educationLevel->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce niveau d\'éducation ? Cette action est irréversible.')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger w-100">
                                    <i class="fas fa-trash"></i> Supprimer
                                </button>
                            </form>

                            <a href="{{ route('admin.education-levels.index') }}" class="btn btn-secondary">
                                <i class="fas fa-list"></i> Voir tous les niveaux
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Statistiques</h3>
                    </div>
                    <div class="card-body">
                        <div class="info-box bg-info">
                            <span class="info-box-icon"><i class="fas fa-graduation-cap"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Niveau d'Éducation</span>
                                <span class="info-box-number">{{ $educationLevel->name }}</span>
                            </div>
                        </div>

                        <div class="info-box bg-success">
                            <span class="info-box-icon"><i class="fas fa-sort-numeric-up"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Ordre d'Affichage</span>
                                <span class="info-box-number">{{ $educationLevel->order }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
