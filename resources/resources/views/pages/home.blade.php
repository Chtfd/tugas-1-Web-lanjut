@extends('layouts.app')

@section('title', 'Home Page - My Laravel App')

@section('content')
<div class="container mt-5">
    <!-- Hero Section -->
    <div class="jumbotron bg-light p-5 rounded-lg m-3">
        <h1 class="display-4">Welcome to My Laravel App!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <!-- Ganti link # dengan route name -->
        <a class="btn btn-primary btn-lg" href="{{ route('learn.more') }}" role="button">
        <i class="fas fa-info-circle mr-2"></i>Learn More</a>
    </div>

    <!-- Feature Cards -->
    <div class="row mb-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feature One</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feature Two</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Feature Three</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Content -->
    <div class="alert alert-info">
        <h4 class="alert-heading">Pro Tip!</h4>
        <p>Makanlah Sayur setiap hari!!!</p>
    </div>
</div>
@endsection