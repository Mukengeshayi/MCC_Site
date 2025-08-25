@extends('layouts.front')

@section('title', $title)

@section('content')
    <div class="page-title position-relative" style="background-image: url(assets/img/student-line.jpg);">
      <div class="container position-relative">
        <h1>Crèche &amp; Maternelle</h1>
        <p>Éveil et développement des tout-petits dans un environnement sécurisé.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Acceuil</a></li>
            <li class="current">Crèche &amp; Maternelle</li>
          </ol>
        </nav>
      </div>
    </div>
    <section id="students-life" class="students-life section">



    </section>

@endsection
