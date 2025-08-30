@extends('layouts.front')

@section('title', $title)

@section('content')
    <div>
        <div class="page-title position-relative" style="background-image: url(assets/img/st.png);">
        <div class="container position-relative">
            <h1></h1>
            <p></p>
            <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ route('home') }}">Acceuil</a></li>
                <li class="current">Événements</li>
            </ol>
            </nav>
        </div>
        </div>
        <section id="students-life" class="students-life section">
    </div>
@endsection
