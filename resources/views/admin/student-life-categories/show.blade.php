@extends('layouts.admin')

@section('title', 'Détails de la Catégorie')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Détails de la Catégorie</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.student-life-categories.index') }}">Catégories</a></li>
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
                            <h3 class="card-title">{{ $category->name }}</h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.student-life-categories.edit', $category) }}"
                                   class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Modifier
                                </a>
                                <a href="{{ route('admin.student-life-categories.index') }}"
                                   class="btn btn-secondary btn-sm">
                                    <i class="fas fa-arrow-left"></i> Retour
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Informations générales</h5>
                                    <table class="table table-borderless">
                                        <tr>
                                            <td><strong>ID:</strong></td>
                                            <td>{{ $category->id }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Nom:</strong></td>
                                            <td>{{ $category->name }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Niveau:</strong></td>
                                            <td>
                                                <span class="badge badge-primary">
                                                    {{ $category->educationLevel->name }}
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Icône:</strong></td>
                                            <td>
                                                @if($category->icon)
                                                    <i class="{{ $category->icon }}"></i>
                                                    <span class="ml-1">{{ $category->icon }}</span>
                                                @else
                                                    <span class="text-muted">Aucune</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Créée le:</strong></td>
                                            <td>{{ $category->created_at->format('d/m/Y H:i') }}</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Modifiée le:</strong></td>
                                            <td>{{ $category->updated_at->format('d/m/Y H:i') }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <h5>Description</h5>
                                    @if($category->description)
                                        <p>{{ $category->description }}</p>
                                    @else
                                        <p class="text-muted">Aucune description</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Statistiques</h3>
                        </div>
                        <div class="card-body">
                            <div class="info-box">
                                <span class="info-box-icon bg-info">
                                    <i class="fas fa-list"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Éléments</span>
                                    <span class="info-box-number">{{ $category->items->count() }}</span>
                                </div>
                            </div>

                            <div class="info-box">
                                <span class="info-box-icon bg-success">
                                    <i class="fas fa-star"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Mis en avant</span>
                                    <span class="info-box-number">{{ $category->items->where('is_featured', true)->count() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if($category->items->count() > 0)
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Éléments de cette catégorie</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.student-life-items.create', ['category_id' => $category->id]) }}"
                               class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i> Ajouter un élément
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Titre</th>
                                        <th>Mis en avant</th>
                                        <th>Ordre</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($category->items as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->titre }}</td>
                                            <td>
                                                @if($item->is_featured)
                                                    <span class="badge badge-success">Oui</span>
                                                @else
                                                    <span class="badge badge-secondary">Non</span>
                                                @endif
                                            </td>
                                            <td>{{ $item->order ?? 'Non défini' }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.student-life-items.show', $item) }}"
                                                       class="btn btn-sm btn-info">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('admin.student-life-items.edit', $item) }}"
                                                       class="btn btn-sm btn-warning">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <div class="card">
                    <div class="card-body text-center">
                        <p class="text-muted">Aucun élément dans cette catégorie</p>
                        <a href="{{ route('admin.student-life-items.create', ['category_id' => $category->id]) }}"
                           class="btn btn-primary">
                            <i class="fas fa-plus"></i> Ajouter le premier élément
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
