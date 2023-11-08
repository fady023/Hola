 <!-- Navbar Start -->
    <div class="container-fluid p-0" style="margin-top: 23px;">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5" >
           
                <img src="{{ asset('frontend/img/logo.png') }}" alt="" title="">
            
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About Us</a>
                    <a href="#" class="nav-item nav-link">Services</a>
                    <a href="#" class="nav-item nav-link">Price</a>
                    <a href="#" class="nav-item nav-link">Gallery</a>
                    <a href="#" class="nav-item nav-link">Contact</a>
                </div>
                <a href="tel:+971506221031"><img src="{{ asset('frontend/img/Group 1.png') }}" alt="" title="">+971506221031</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 152vh;">
                    <img class="position-absolute w-100 h-152" src="{{ asset('frontend/img/Rectangle 7.png') }}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;margin: -239px 0px 50px -91px;">
                            <h8 class="text-white mb-3 animate__animated animate__fadeInDown" > Abu Dhabi , UEA</h8>
                            <h3 class="display-3 text-capitalize text-white mb-3">TREATED LIKE</h3>
                            <h2 class="mx-md-5 px-5" style="text-align: left;font-size: 3rem !important;color: #d2a4a1;">ROYALTY</h2><br>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" style=" margin-left: -255px;font-size: 25px;" href="#">Booking Now</a>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Carousel End -->
   