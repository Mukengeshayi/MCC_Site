@extends('layouts.admin')

@section('title', $title)

@section('content')
{{-- <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tableau de bord</h3>
                </div>
                <div class="card-body">
                    <p>Bienvenue dans l'interface d'administration</p>

                    <a href="{{ route('admin.editor') }}" class="btn btn-primary">
                        <i class="fas fa-edit mr-2"></i> Éditeur
                    </a>

                    <a href="{{ route('home') }}" class="btn btn-secondary float-right" target="_blank">
                        <i class="fas fa-external-link-alt mr-2"></i> Voir le site
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
</div>
@endsection
