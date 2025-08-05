@extends('layouts.admin')

@section('title', 'Editer')
@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div><!-- /.col -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Créer un nouveau contenu</h3>
                </div>

                <form method="POST" action="#">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Titre du contenu</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   placeholder="Entrez le titre" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Contenu</label>
                            <textarea id="content" name="content" class="form-control summernote"></textarea>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Enregistrer
                        </button>
                        <a href="{{ route('dashboard') }}" class="btn btn-default float-right">
                            Annuler
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
