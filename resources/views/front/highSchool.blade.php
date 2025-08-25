@extends('layouts.front')

@section('title', $title)

@section('content')
    <div class="page-title position-relative" style="background-image: url(assets/img/st.png);">
      <div class="container position-relative">
        <h1>Humanités</h1>
        <p>Orientation Sciences, Littéraire, Commerciale ou Informatique avec accompagnement expert.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Acceuil</a></li>
            <li class="current">Humanités</li>
          </ol>
        </nav>
      </div>
    </div>
    <section id="students-life" class="students-life section">



    </section>

@endsection
