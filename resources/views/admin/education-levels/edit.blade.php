@extends('layouts.admin')

@section('title', 'Modifier un Niveau d\'Éducation')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Modifier un Niveau d'Éducation</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.education-levels.index') }}">Niveaux d'Éducation</a></li>
                    <li class="breadcrumb-item active">Modifier</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Modifier: {{ $educationLevel->name }}</h3>
                <div class="card-tools">
                    <a href="{{ route('admin.education-levels.index') }}" class="btn btn-secondary btn-sm">
                        <i class="fas fa-arrow-left"></i> Retour
                    </a>
                </div>
            </div>
            <form action="{{ route('admin.education-levels.update', $educationLevel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="name">Nom du Niveau <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                       id="name" name="name" value="{{ old('name', $educationLevel->name) }}"
                                       placeholder="Ex: Crèche & Maternelle" maxlength="100" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Maximum 100 caractères</small>
                            </div>

                            <div class="form-group">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                          id="description" name="description" rows="5"
                                          placeholder="Description détaillée du niveau d'éducation..." required>{{ old('description', $educationLevel->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="order">Ordre d'Affichage</label>
                                <input type="number" class="form-control @error('order') is-invalid @enderror"
                                       id="order" name="order" value="{{ old('order', $educationLevel->order) }}"
                                       placeholder="0" min="0">
                                @error('order')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Ordre d'affichage dans la liste (0 = premier)</small>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror"
                                               id="image" name="image" accept="image/*">
                                        <label class="custom-file-label" for="image">Choisir une nouvelle image</label>
                                    </div>
                                </div>
                                @error('image')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Formats acceptés: JPEG, PNG, JPG, GIF (max 2MB)</small>

                                @if($educationLevel->image)
                                    <div class="mt-3">
                                        <label>Image actuelle:</label>
                                        <div class="border rounded p-2">
                                            <img src="{{ $educationLevel->image_url }}" alt="{{ $educationLevel->name }}"
                                                 class="img-fluid rounded" style="max-height: 150px;">
                                            <div class="mt-2">
                                                <small class="text-muted">{{ $educationLevel->image }}</small>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div id="image-preview" class="mt-3" style="display: none;">
                                    <label>Nouvelle image:</label>
                                    <img id="preview-img" src="" alt="Aperçu" class="img-fluid rounded" style="max-height: 150px;">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Informations</label>
                                <div class="info-box bg-info">
                                    <div class="info-box-content p-3">
                                        <h5><i class="fas fa-info-circle"></i> Détails</h5>
                                        <ul class="mb-0">
                                            <li><strong>ID:</strong> {{ $educationLevel->id }}</li>
                                            <li><strong>Slug:</strong> {{ $educationLevel->slug }}</li>
                                            <li><strong>Créé:</strong> {{ $educationLevel->created_at->format('d/m/Y H:i') }}</li>
                                            <li><strong>Modifié:</strong> {{ $educationLevel->updated_at->format('d/m/Y H:i') }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Mettre à Jour
                    </button>
                    <a href="{{ route('admin.education-levels.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Annuler
                    </a>
                    <a href="{{ route('admin.education-levels.show', $educationLevel->id) }}" class="btn btn-info">
                        <i class="fas fa-eye"></i> Voir
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    // Gestion de l'aperçu d'image
    $('#image').change(function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('#preview-img').attr('src', e.target.result);
                $('#image-preview').show();
            }
            reader.readAsDataURL(file);
            $('.custom-file-label').text(file.name);
        } else {
            $('#image-preview').hide();
            $('.custom-file-label').text('Choisir une nouvelle image');
        }
    });

    // Validation en temps réel
    $('#name').on('input', function() {
        const maxLength = 100;
        const currentLength = $(this).val().length;
        const remaining = maxLength - currentLength;

        if (remaining < 0) {
            $(this).val($(this).val().substring(0, maxLength));
        }
    });
});
</script>
@endpush
