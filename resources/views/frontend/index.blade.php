@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')



<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 pb-5" id="home" style="margin-top: 0px;">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item position-relative active" style="min-height: 152vh;">
                <img class="position-absolute w-100 h-152" src="{{ asset('frontend/img/Rectangle 7.png') }}" style="object-fit: cover;">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;margin: -240px 0px 0px -691px;">
                        <h8 class="text-white mb-3 animate__animated animate__fadeInDown" style="margin-left: -6rem !important;"> Abu Dhabi , UEA</h8>
                        <h3 class="display-3 text-capitalize text-white mb-3">TREATED LIKE</h3>
                        <h2 class="mx-md-5 px-5" style="font-size: 3rem !important;color: #d2a4a1;margin-left: -5rem !important;">ROYALTY</h2><br>
                        <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" style="margin-left: -18rem !important;;font-size: 25px;" href="#">Booking Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Carousel End -->


<div class="container-fluid px-0 py-5 my-5" id="about">
    <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-8">
            <h5 class="d-inline-block text-primary py-1 px-2">About Us</h5>
        </div>
    </div>
</div><br>

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-7" style="min-height: 500px;">
                <div class="position-relative h-60">
                    <img class="position-absolute w-100 h-60" src="{{ asset('frontend/img/Rectangle 9.png') }}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-5 pt-5 pb-lg-5">
                <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                    <p style="color: #F6F6F6;font-size: 18px;">
                        From styling and cutting to extensions, coloring, perms and relaxers, Hola Ladies Beauty Center and our stylists can manage all of your hair care needs and desires Hola Ladies Beauty Center customises each treatment to fit your individual needs. We will provide you with the most effective treatment, skin care education and recommendations for your home skin care regimen.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>



<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">


            <div class="col-lg-5 pt-5 pb-lg-5">
                <div class="hours-text2 bg-light p-4 p-lg-5 my-lg-5">
                    <p style="color: #F6F6F6;font-size:16px">
                        With Hola Beauty Center, youre treated like royalty.<br><br>
                        Were a ladys beauty center based in Abu Dhabi, UAE, providing<br>
                        all the women with various beauty services to reveal their<br>
                        natural glow.<br><br>

                        &#xb7; Every woman has her own beauty, and at Hola, we help you elevate your look and feel fabulous inside and out.<br><br>
                        &#xb7; We cover everything you need for your beauty, from nails, hair coloring and styling, eyelash extensions, massage, make-up, skin, and facial treatments. Book your appointment now.<br><br>
                        &#xb7; The best version of you starts here, with Hola Beauty Center. Get ready now to shine and feel confident with our premium services and our expert team.<br><br>
                    </p>
                </div>
            </div>

            <div class="col-lg-7" style="min-height: 500px;z-index: -5;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{ asset('frontend/img/Rectangle 10.png') }}" style="object-fit: cover;">
                </div>
            </div>



        </div>
    </div>
</div>



<section class="py-5" style="height: 800px;background-color: #EDEDED;">
    <h5 style="text-align: center;color: #B28886;font-size: 2.4rem;font-style: italic;">Testimonials</h5><br>
        <h5 style="text-align: center;font-size: 2.4rem;">What Our Clients Say</h5><br><br><br><br>

    <div class="container py-5">
            <div class="row">
                <div class="cards col-lg-5">
                <i class="fa fa-3x fa-quote-left text-primary position-absolute" style="top: -65px; left: 27px;color: #b28886 !important;text-decoration: none;font-size: 30px;"></i>
                    <div class="card active" data-id="content1">
                        <img src="{{ asset('frontend/testimonials/Ellipse 4.png') }}" alt="">
                        <div>
                            <h3>Juliana Murad</h3>
                            <p>Sales Marketing</p>
                        </div>
                        <div class="gradient"></div>
                    </div>
                    <div class="card" data-id="content2">
                        <img src="{{ asset('frontend/testimonials/Ellipse 5.png') }}" alt="">
                        <div>
                            <h3>Juliana Murad</h3>
                            <p>Sales Marketing</p>
                        </div>
                        <div class="gradient"></div>
                    </div>
                    <div class="card" data-id="content3">
                        <img src="{{ asset('frontend/testimonials/Ellipse 6.png') }}" alt="">
                        <div>
                            <h3>Juliana Murad</h3>
                            <p>Sales Marketing</p>
                        </div>
                        <div class="gradient"></div>
                    </div>
                </div>
                <div class="content col-lg-7">
                    <div class="contentBox active" id="content1">
                        <div class="text">
                            <h2>Great collaboration</h2>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus iure possimus harum quisquam praesentium ipsum accusantium, facilis omnis, blanditiis quas soluta nihil incidunt laboriosam dicta maiores, modi quaerat consectetur officia accusamus libero aut molestiae fuga eveniet quidem? Modi obcaecati, beatae officia odio nihil minus voluptatem quidem consequatur ad rem blanditiis? Natus iure possimus harum quisquam praesentium ipsum accusantium, facilis omnis.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur eius odit at aliquid, reprehenderit repellendus quo vero nam cumque incidunt iusto optio molestias facilis eum corrupti dolorum rem nemo. Nulla id incidunt ullam voluptate recusandae.</p>
                        </div>
                    </div>
                    <div class="contentBox" id="content2">
                        <div class="text">
                            <h2>It was a great experience!</h2>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                            </span>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus iure possimus harum quisquam praesentium ipsum accusantium, facilis omnis, blanditiis quas soluta nihil incidunt laboriosam dicta maiores, modi quaerat consectetur officia accusamus libero aut molestiae fuga eveniet quidem? Modi obcaecati, beatae officia odio nihil minus voluptatem quidem consequatur ad rem blanditiis? Natus iure possimus harum quisquam praesentium ipsum accusantium, facilis omnis.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur eius odit at aliquid, reprehenderit repellendus quo vero nam cumque incidunt iusto optio molestias facilis eum corrupti dolorum rem nemo. Nulla id incidunt ullam voluptate recusandae.</p>
                        </div>
                    </div>
                    <div class="contentBox" id="content3">
                        <div class="text">
                            <h2>
                                Quickly and Efficiently</h2>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus iure possimus harum quisquam praesentium ipsum accusantium, facilis omnis, blanditiis quas soluta nihil incidunt laboriosam dicta maiores, modi quaerat consectetur officia accusamus libero aut molestiae fuga eveniet quidem? Modi obcaecati, beatae officia odio nihil minus voluptatem quidem consequatur ad rem blanditiis? Natus iure possimus harum quisquam praesentium ipsum accusantium, facilis omnis.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur eius odit at aliquid, reprehenderit repellendus quo vero nam cumque incidunt iusto optio molestias facilis eum corrupti dolorum rem nemo. Nulla id incidunt ullam voluptate recusandae.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center bg-appointment mx-0" style="height: 285px;">
            <div class="col-lg-4">
                <div>
                    <img class="position-absolute w-5 h-5" src="{{ asset('frontend/img/Pink Gradient Open Back Salon Business Landscape Poster 2.png') }}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-8 py-3">
                <div class="p-5 my-5">
                    <form>
                        <div class="col-sm-12 mb-5">
                            <h5 class="mb-4" style="color:#fff;font-size: 30px;font-style: italic;">Join Us and Embrace Your Beauty Journey!</h5>
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control border-light" style="padding: 30px;border-radius: 10px 0 0 10px;" placeholder="Enter your email">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary px-4" style="border-radius: 0 10px 10px 0;background-color: #A5A5A5;">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let card = document.querySelectorAll(".card");
    let contentBox = document.querySelectorAll(".contentBox");

    for (let i = 0; i < card.length; i++) {
        card[i].addEventListener("mouseover", function() {
            for (let i = 0; i < contentBox.length; i++) {
                contentBox[i].className = "contentBox";
            }
            document.getElementById(this.dataset.id).className = "contentBox active";

            for (let i = 0; i < card.length; i++) {
                card[i].className = "card";
            }
            this.className = "card active";
        });
    }

</script>
@endsection
