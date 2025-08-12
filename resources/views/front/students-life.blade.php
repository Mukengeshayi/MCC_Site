@extends('layouts.front')

@section('title', $title)

@section('content')
    <div class="page-title position-relative" style="background-image: url(assets/img/st.png);">
      <div class="container position-relative">
        <h1>Vie Scolaire</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Acceuil</a></li>
            <li class="current">Vie Scolaire</li>
          </ol>
        </nav>
      </div>
    </div>
    <section id="students-life" class="students-life section">



    </section>

@endsection
