@extends('layouts.admin')

@section('title', 'Gestion des Informations de l\'École')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Gestion des Informations de l'École</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Informations de l'École</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Liste des Informations de l'École</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.schools.create') }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i> Ajouter
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if($schools->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Logo</th>
                                            <th>Adresse</th>
                                            <th>Téléphone</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($schools as $school)
                                            <tr>
                                                <td>{{ $school->id }}</td>
                                                <td>
                                                    @if($school->logo)
                                                        <img src="{{ asset('storage/' . $school->logo) }}" 
                                                             alt="Logo" 
                                                             style="max-height: 50px; max-width: 100px;">
                                                    @else
                                                        <span class="text-muted">Aucun logo</span>
                                                    @endif
                                                </td>
                                                <td>{{ $school->adresse ?? 'Non renseigné' }}</td>
                                                <td>{{ $school->telephone ?? 'Non renseigné' }}</td>
                                                <td>{{ $school->email ?? 'Non renseigné' }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ route('admin.schools.show', $school) }}" 
                                                           class="btn btn-info btn-sm" 
                                                           title="Voir">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('admin.schools.edit', $school) }}" 
                                                           class="btn btn-warning btn-sm" 
                                                           title="Modifier">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('admin.schools.destroy', $school) }}" 
                                                              method="POST" 
                                                              style="display: inline;"
                                                              onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ces informations ?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" 
                                                                    class="btn btn-danger btn-sm" 
                                                                    title="Supprimer">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="text-center py-4">
                                <i class="fas fa-info-circle text-info fa-3x mb-3"></i>
                                <h4>Aucune information d'école trouvée</h4>
                                <p class="text-muted">Commencez par ajouter les informations de votre école.</p>
                                <a href="{{ route('admin.schools.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus"></i> Ajouter les premières informations
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
