@extends('layouts.admin')

@section('title', 'Niveaux d\'Éducation')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Niveaux d'Éducation</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                    <li class="breadcrumb-item active">Niveaux d'Éducation</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Liste des Niveaux d'Éducation</h3>
                <div class="card-tools">
                    <a href="{{ route('admin.education-levels.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Nouveau Niveau
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="50">#</th>
                                <th width="80">Image</th>
                                <th>Nom</th>
                                <th>Slug</th>
                                <th width="100">Ordre</th>
                                <th width="200">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($educationLevels as $level)
                                <tr>
                                    <td>{{ $level->id }}</td>
                                    <td>
                                        @if($level->image)
                                            <img src="{{ $level->image_url }}" alt="{{ $level->name }}"
                                                 class="img-thumbnail" style="max-width: 60px; max-height: 60px;">
                                        @else
                                            <div class="bg-secondary text-white text-center"
                                                 style="width: 60px; height: 60px; line-height: 60px; font-size: 12px;">
                                                Aucune
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <strong>{{ $level->name }}</strong>
                                        <br>
                                        <small class="text-muted">{{ Str::limit($level->description, 100) }}</small>
                                    </td>
                                    <td><code>{{ $level->slug }}</code></td>
                                    <td>
                                        <span class="badge badge-info">{{ $level->order }}</span>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.education-levels.show', $level->id) }}"
                                               class="btn btn-info btn-sm" title="Voir">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.education-levels.edit', $level->id) }}"
                                               class="btn btn-warning btn-sm" title="Modifier">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.education-levels.destroy', $level->id) }}"
                                                  method="POST" style="display: inline;"
                                                  onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce niveau d\'éducation ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">
                                        <i class="fas fa-info-circle"></i> Aucun niveau d'éducation trouvé.
                                        <br>
                                        <a href="{{ route('admin.education-levels.create') }}" class="btn btn-primary btn-sm mt-2">
                                            Créer le premier niveau
                                        </a>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
