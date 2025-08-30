@extends('layouts.admin')

@section('title', 'Détails de l\'Élément')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Détails de l'Élément</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.student-life-items.index') }}">Éléments</a></li>
                        <li class="breadcrumb-item active">Détails</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{ $item->titre }}</h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.student-life-items.edit', $item) }}"
                                   class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Modifier
                                </a>
                                <a href="{{ route('admin.student-life-items.index') }}"
                                   class="btn btn-secondary btn-sm">
                                    <i class="fas fa-arrow-left"></i> Retour
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if($item->image)
                                <div class="text-center mb-3">
                                    <img src="{{ $item->image_url }}" alt="{{ $item->titre }}"
                                         class="img-fluid rounded" style="max-height: 300px;">
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Informations générales</h5>
                                    <table class="table table-borderless">
                                        <tr>
                                            <td><strong>ID:</strong></td>
                                            <td>{{ $item->id }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Titre:</strong></td>
                                            <td>{{ $item->titre }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Catégorie:</strong></td>
                                            <td>
                                                <span class="badge badge-info">{{ $item->category->name }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Niveau:</strong></td>
                                            <td>
                                                <span class="badge badge-primary">{{ $item->category->educationLevel->name }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Mis en avant:</strong></td>
                                            <td>
                                                @if($item->is_featured)
                                                    <span class="badge badge-success">Oui</span>
                                                @else
                                                    <span class="badge badge-secondary">Non</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Ordre:</strong></td>
                                            <td>{{ $item->order ?? 'Non défini' }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Créé le:</strong></td>
                                            <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Modifié le:</strong></td>
                                            <td>{{ $item->updated_at->format('d/m/Y H:i') }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <h5>Description</h5>
                                    <div class="border rounded p-3 bg-light">
                                        {!! nl2br(e($item->description)) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Actions rapides</h3>
                        </div>
                        <div class="card-body">
                            <div class="btn-group-vertical w-100">
                                <form action="{{ route('admin.student-life-items.toggle-featured', $item) }}"
                                      method="POST" class="mb-2">
                                    @csrf
                                    <button type="submit" class="btn btn-block {{ $item->is_featured ? 'btn-warning' : 'btn-success' }}">
                                        <i class="fas fa-star"></i>
                                        {{ $item->is_featured ? 'Retirer des favoris' : 'Mettre en avant' }}
                                    </button>
                                </form>

                                <a href="{{ route('admin.student-life-items.edit', $item) }}"
                                   class="btn btn-warning btn-block mb-2">
                                    <i class="fas fa-edit"></i> Modifier
                                </a>

                                <form action="{{ route('admin.student-life-items.destroy', $item) }}"
                                      method="POST"
                                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-block">
                                        <i class="fas fa-trash"></i> Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informations de la catégorie</h3>
                        </div>
                        <div class="card-body">
                            <h6>{{ $item->category->name }}</h6>
                            @if($item->category->description)
                                <p class="text-muted small">{{ $item->category->description }}</p>
                            @endif
                            @if($item->category->icon)
                                <p class="text-muted small">
                                    <i class="{{ $item->category->icon }}"></i> {{ $item->category->icon }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
