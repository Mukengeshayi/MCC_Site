@extends('layouts.admin')

@section('title', 'Gestion des Éléments de Vie Étudiante')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Éléments de Vie Étudiante</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                        <li class="breadcrumb-item active">Éléments</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Liste des Éléments</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.student-life-items.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Nouvel Élément
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Titre</th>
                                    <th>Catégorie</th>
                                    <th>Niveau</th>
                                    <th>Mis en avant</th>
                                    <th>Ordre</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>
                                            @if($item->image)
                                                <img src="{{ $item->image_url }}" alt="{{ $item->titre }}"
                                                     class="img-thumbnail" style="max-width: 50px; max-height: 50px;">
                                            @else
                                                <span class="text-muted">Aucune</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->titre }}</td>
                                        <td>
                                            <span class="badge badge-info">{{ $item->category->name }}</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary">{{ $item->category->educationLevel->name }}</span>
                                        </td>
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
                                                <form action="{{ route('admin.student-life-items.toggle-featured', $item) }}"
                                                      method="POST" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm {{ $item->is_featured ? 'btn-warning' : 'btn-success' }}">
                                                        <i class="fas fa-star"></i>
                                                    </button>
                                                </form>
                                                <form action="{{ route('admin.student-life-items.destroy', $item) }}"
                                                      method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Aucun élément trouvé</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3">
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
