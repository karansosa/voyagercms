@extends('layouts.app')

@section('content')

        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    @foreach ($banners as $banner)
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">{{$banner->heading}}</h1>
                        <hr class="divider my-4" />
                    </div>
                   
                  
                    <div class="col-lg-8 align-self-baseline">
                      <p class="text-white-75 font-weight-light mb-5">{{$banner->body}}</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                    </div>
                </div>
                @endforeach
            </div>
        </header>

        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                @foreach($ctas as $cta)
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">{{$cta->heading}}</h2>
                        <hr class="divider light my-4" />
                    <p class="text-white-50 mb-4">{{$cta->body}}</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                    </div>
                </div>
                @endforeach
            </div>
        </section>


    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <h2 class="text-center mt-0">At Your Service</h2>
            <hr class="divider my-4" />
            <div class="row">
        

                @foreach($services as $service)
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                    <i class="{{$service->i}}"></i>
                    <h3 class="h4 mb-2">{{$service->heading}}</h3>
                    <p class="text-muted mb-0">{{$service->body}}</p>
                    </div>
                </div>
                @endforeach
  
            </div>
        </div>
    </section>

<!-- Portfolio-->
<section id="portfolio">
<div class="container-fluid p-0">
    <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="frontend/img/portfolio/fullsize/1.jpg"
                ><img class="img-fluid" src="frontend/img/portfolio/thumbnails/1.jpg" alt="" />
                <div class="portfolio-box-caption">
                    <div class="project-category text-white-50">Category</div>
                    <div class="project-name">Project Name</div>
                </div></a
            >
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="frontend/img/portfolio/fullsize/2.jpg"
                ><img class="img-fluid" src="frontend/img/portfolio/thumbnails/2.jpg" alt="" />
                <div class="portfolio-box-caption">
                    <div class="project-category text-white-50">Category</div>
                    <div class="project-name">Project Name</div>
                </div></a
            >
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="frontend/img/portfolio/fullsize/3.jpg"
                ><img class="img-fluid" src="frontend/img/portfolio/thumbnails/3.jpg" alt="" />
                <div class="portfolio-box-caption">
                    <div class="project-category text-white-50">Category</div>
                    <div class="project-name">Project Name</div>
                </div></a
            >
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="frontend/img/portfolio/fullsize/4.jpg"
                ><img class="img-fluid" src="frontend/img/portfolio/thumbnails/4.jpg" alt="" />
                <div class="portfolio-box-caption">
                    <div class="project-category text-white-50">Category</div>
                    <div class="project-name">Project Name</div>
                </div></a
            >
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="frontend/img/portfolio/fullsize/5.jpg"
                ><img class="img-fluid" src="frontend/img/portfolio/thumbnails/5.jpg" alt="" />
                <div class="portfolio-box-caption">
                    <div class="project-category text-white-50">Category</div>
                    <div class="project-name">Project Name</div>
                </div></a
            >
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="frontend/img/portfolio/fullsize/6.jpg"
                ><img class="img-fluid" src="frontend/img/portfolio/thumbnails/6.jpg" alt="" />
                <div class="portfolio-box-caption p-3">
                    <div class="project-category text-white-50">Category</div>
                    <div class="project-name">Project Name</div>
                </div></a
            >
        </div>
    </div>
</div>
</section>            

 <!-- Call to action-->
 <section class="page-section bg-dark text-white">
    <div class="container text-center">
        <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
        <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
    </div>
</section>


  <!-- Contact-->
  <section class="page-section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mt-0">Let's Get In Touch!</h2>
                <hr class="divider my-4" />
                <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                <div>+1 (555) 123-4567</div>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fas fa-envelope fa-3x mb-3 text-muted"></i
                ><!-- Make sure to change the email address in BOTH the anchor text and the link target below!--><a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
            </div>
        </div>
    </div>
</section>
    
@endsection