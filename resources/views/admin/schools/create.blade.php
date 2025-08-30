@extends('layouts.admin')

@section('title', 'Ajouter les Informations de l\'École')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ajouter les Informations de l'École</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.schools.index') }}">Informations de l'École</a></li>
                    <li class="breadcrumb-item active">Ajouter</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Nouvelles Informations de l'École</h3>
                    </div>
                    <form action="{{ route('admin.schools.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="adresse">Adresse</label>
                                        <input type="text" 
                                               class="form-control @error('adresse') is-invalid @enderror" 
                                               id="adresse" 
                                               name="adresse" 
                                               value="{{ old('adresse') }}" 
                                               placeholder="Adresse de l'école">
                                        @error('adresse')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telephone">Téléphone</label>
                                        <input type="text" 
                                               class="form-control @error('telephone') is-invalid @enderror" 
                                               id="telephone" 
                                               name="telephone" 
                                               value="{{ old('telephone') }}" 
                                               placeholder="+243 810 000 971">
                                        @error('telephone')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" 
                                               class="form-control @error('email') is-invalid @enderror" 
                                               id="email" 
                                               name="email" 
                                               value="{{ old('email') }}" 
                                               placeholder="info@messiahchristiancollege.com">
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="logo">Logo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" 
                                                       class="custom-file-input @error('logo') is-invalid @enderror" 
                                                       id="logo" 
                                                       name="logo" 
                                                       accept="image/*">
                                                <label class="custom-file-label" for="logo">Choisir un fichier</label>
                                            </div>
                                        </div>
                                        @error('logo')
                                            <span class="invalid-feedback d-block">{{ $message }}</span>
                                        @enderror
                                        <small class="form-text text-muted">Formats acceptés: JPG, PNG, GIF. Taille max: 2MB</small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h5 class="mt-4 mb-3">Réseaux Sociaux</h5>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                                            </div>
                                            <input type="url" 
                                                   class="form-control @error('social_links.facebook') is-invalid @enderror" 
                                                   id="facebook" 
                                                   name="social_links[facebook]" 
                                                   value="{{ old('social_links.facebook') }}" 
                                                   placeholder="https://www.facebook.com/...">
                                        </div>
                                        @error('social_links.facebook')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="instagram">Instagram</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                            </div>
                                            <input type="url" 
                                                   class="form-control @error('social_links.instagram') is-invalid @enderror" 
                                                   id="instagram" 
                                                   name="social_links[instagram]" 
                                                   value="{{ old('social_links.instagram') }}" 
                                                   placeholder="https://www.instagram.com/...">
                                        </div>
                                        @error('social_links.instagram')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="linkedin">LinkedIn</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                            </div>
                                            <input type="url" 
                                                   class="form-control @error('social_links.linkedin') is-invalid @enderror" 
                                                   id="linkedin" 
                                                   name="social_links[linkedin]" 
                                                   value="{{ old('social_links.linkedin') }}" 
                                                   placeholder="https://www.linkedin.com/...">
                                        </div>
                                        @error('social_links.linkedin')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tiktok">TikTok</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-tiktok"></i></span>
                                            </div>
                                            <input type="url" 
                                                   class="form-control @error('social_links.tiktok') is-invalid @enderror" 
                                                   id="tiktok" 
                                                   name="social_links[tiktok]" 
                                                   value="{{ old('social_links.tiktok') }}" 
                                                   placeholder="https://www.tiktok.com/@...">
                                        </div>
                                        @error('social_links.tiktok')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Enregistrer
                            </button>
                            <a href="{{ route('admin.schools.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Retour
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Afficher le nom du fichier sélectionné
    $('.custom-file-input').on('change', function() {
        var fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').html(fileName);
    });
</script>
@endpush
