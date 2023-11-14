 <!-- Navbar Start -->
    <div class="container-fluid p-0" style="margin-top: 23px;">
        <nav class="navbar navbar-expand-lg  navbar-light py-3 py-lg-0 px-lg-5" >
           
                <a href="/#home" class="nav-item nav-link active"> <img src="{{ asset('frontend/img/logo.png') }}" class="m-0 text-primary" alt="" title=""></a>
            
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="/#home" class="nav-item nav-link active">Home</a>
                    <a href="/#about" class="nav-item nav-link">About Us</a>
                    <a href="/all-services" class="nav-item nav-link">Services</a>
                    <a href="/gallery" class="nav-item nav-link">Gallery</a>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="tel:{{ $phone }}"><img src="{{ asset('frontend/img/Group 1.png') }}" alt="" title="">{{ $phone }}</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


   