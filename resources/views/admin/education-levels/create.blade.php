@extends('layouts.admin')

@section('title', 'Créer un Niveau d\'Éducation')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Créer un Niveau d'Éducation</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.education-levels.index') }}">Niveaux d'Éducation</a></li>
                    <li class="breadcrumb-item active">Créer</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Nouveau Niveau d'Éducation</h3>
                <div class="card-tools">
                    <a href="{{ route('admin.education-levels.index') }}" class="btn btn-secondary btn-sm">
                        <i class="fas fa-arrow-left"></i> Retour
                    </a>
                </div>
            </div>
            <form action="{{ route('admin.education-levels.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
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
                                       id="name" name="name" value="{{ old('name') }}"
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
                                          placeholder="Description détaillée du niveau d'éducation..." required>{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="order">Ordre d'Affichage</label>
                                <input type="number" class="form-control @error('order') is-invalid @enderror"
                                       id="order" name="order" value="{{ old('order', 0) }}"
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
                                        <label class="custom-file-label" for="image">Choisir une image</label>
                                    </div>
                                </div>
                                @error('image')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Formats acceptés: JPEG, PNG, JPG, GIF (max 2MB)</small>

                                <div id="image-preview" class="mt-3" style="display: none;">
                                    <img id="preview-img" src="" alt="Aperçu" class="img-fluid rounded" style="max-height: 200px;">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Informations</label>
                                <div class="info-box bg-info">
                                    <div class="info-box-content p-3">
                                        <h5><i class="fas fa-info-circle"></i> Conseils</h5>
                                        <ul class="mb-0">
                                            <li>Choisissez un nom clair et descriptif</li>
                                            <li>Ajoutez une description détaillée</li>
                                            <li>Utilisez une image de qualité</li>
                                            <li>Définissez un ordre logique</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Créer le Niveau
                    </button>
                    <a href="{{ route('admin.education-levels.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i> Annuler
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
            $('.custom-file-label').text('Choisir une image');
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
