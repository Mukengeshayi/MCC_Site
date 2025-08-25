@extends('layouts.front')

@section('title', $title)

@section('content')
    <div class="page-title position-relative" style="background-image: url(assets/img/st.png);">
      <div class="container position-relative">
        <h1>École Primaire</h1>
        <p>Acquisition des fondamentaux avec un encadrement bienveillant et personnalisé.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Acceuil</a></li>
            <li class="current">Primaire</li>
          </ol>
        </nav>
      </div>
    </div>
    <section id="students-life" class="students-life section">



    </section>

@endsection
