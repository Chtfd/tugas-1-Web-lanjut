@extends('layouts.app')

@section('title', 'Learn More - My Laravel App')

@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="text-center mb-5">
        <h1 class="display-4 text-primary">📚 Learn More About Our App</h1>
        <p class="lead">Discover what makes our application special</p>
    </div>

    <!-- Features Grid -->
    <div class="row mb-5">
        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h3 class="card-title"><i class="fas fa-rocket text-danger"></i> Key Features</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Blade Templating System</li>
                        <li class="list-group-item">Responsive Design</li>
                        <li class="list-group-item">Modular Components</li>
                        <li class="list-group-item">Easy Customization</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h3 class="card-title"><i class="fas fa-cogs text-success"></i> How It Works</h3>
                    <div class="accordion" id="howItWorks">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#step1">
                                        Step 1: Installation
                                    </button>
                                </h5>
                            </div>
                            <div id="step1" class="collapse show" data-parent="#howItWorks">
                                <div class="card-body">
                                    Install Laravel via composer and set up basic configuration
                                </div>
                            </div>
                        </div>
                        <!-- Add more steps as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="jumbotron bg-light text-center">
        <h4 class="mb-4">Ready to get started?</h4>
        <a href="{{ route('learn.more') }}" class="btn btn-primary btn-lg">
            <i class="fas fa-home mr-2"></i>Back to Home
        </a>
    </div>
</div>
@endsection

@section('scripts')
<!-- Optional JavaScript for interactive components -->
<script>
    // Add smooth scroll behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
@endsection