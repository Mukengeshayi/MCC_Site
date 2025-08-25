@extends('layouts.front')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="text-center mb-5" data-aos="fade-down">Test AOS - Animate On Scroll</h1>

    <div class="row">
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Carte 1</h5>
                    <p class="card-text">Cette carte doit apparaître avec un effet fade-up</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Carte 2</h5>
                    <p class="card-text">Cette carte doit apparaître avec un effet fade-up et un délai</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Carte 3</h5>
                    <p class="card-text">Cette carte doit apparaître avec un effet fade-up et un délai plus long</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6" data-aos="fade-right" data-aos-delay="400">
            <div class="alert alert-info">
                <h4>Effet fade-right</h4>
                <p>Cet élément doit glisser depuis la droite</p>
            </div>
        </div>

        <div class="col-md-6" data-aos="fade-left" data-aos-delay="500">
            <div class="alert alert-success">
                <h4>Effet fade-left</h4>
                <p>Cet élément doit glisser depuis la gauche</p>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 text-center" data-aos="zoom-in" data-aos-delay="600">
            <h2>Effet zoom-in</h2>
            <p>Cet élément doit zoomer depuis le centre</p>
        </div>
    </div>
</div>
@endsection
