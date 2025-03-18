<footer class="bg-dark text-light mt-5">
    <div class="container py-5">
        <div class="row">
            <!-- About Section -->
            <div class="col-md-4 mb-4">
                <h5 class="text-primary">About Us</h5>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="social-links">
                    <a href="#" class="text-light mr-2"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-light mr-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light mr-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 mb-4">
                <h5 class="text-primary">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-light">Home</a></li>
                    <li><a href="{{ route('learn.more') }}" class="text-light">Learn More</a></li>
                    <li><a href="#features" class="text-light">Features</a></li>
                    <li><a href="#contact" class="text-light">Contact</a></li>
                    <li><a href="#" class="text-light">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 mb-4">
                <h5 class="text-primary">Contact Us</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="fas fa-map-marker-alt mr-2"></i>
                        123 Street, City, Country
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-phone mr-2"></i>
                        +62 123 4567 890
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-envelope mr-2"></i>
                        info@myapp.com
                    </li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-top pt-4 mt-4 text-center">
            <p class="mb-0 text-muted">
                &copy; {{ date('Y') }} MyApp. All rights reserved.
                <span class="d-block d-md-inline">Developed with <i class="fas fa-heart text-danger"></i> by Team MyApp</span>
            </p>
        </div>
    </div>
</footer>