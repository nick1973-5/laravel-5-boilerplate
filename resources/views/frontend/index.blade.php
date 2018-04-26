@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')
    <div id="index_carousel" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/frontend/Glu7-Banner-9.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>The Best .....</h5>
                    <p>Hello this is a test</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/frontend/Glu7-Banner-9.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>The Best .....</h5>
                    <p>Hello this is a test</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/frontend/Glu7-Banner-9.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>The Best .....</h5>
                    <p>Hello this is a test</p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#index_carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <a style="text-decoration:none" class=" " href="#">
                    <div class="card mb-4 box-shadow bg-dark text-light text-center">
                        <div class="card-body">
                            <p class="card-text">SHOP</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a style="text-decoration:none" href="#">
                    <div class="card mb-4 box-shadow bg-dark text-light text-center">
                        <div class="card-body">
                            <p class="card-text">DIRECTORY</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a style="text-decoration:none" class=" " href="#">
                    <div class="card mb-4 box-shadow bg-dark text-light text-center">
                        <div class="card-body">
                            <p class="card-text">CASH OUT</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/frontend/shopfittings_small.jpg" alt="Card image cap">
                        <div class="card-body bg-secondary">
                            <p class="card-text text-center text-light">Shop Fitting</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/frontend/equipment.jpg" alt="Card image cap">
                        <div class="card-body bg-secondary">
                            <p class="card-text text-center text-light">Equipment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/frontend/medical.jpg" alt="Card image cap">
                        <div class="card-body bg-secondary">
                            <p class="card-text text-center text-light">Medical Insurance</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/frontend/banner.jpg" alt="Card image cap">
                        <div class="card-body bg-secondary">
                            <p class="card-text text-center text-light">Team Building</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/frontend/legal.jpg" alt="Card image cap">
                        <div class="card-body bg-secondary">
                            <p class="card-text text-center text-light">Legal Services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/frontend/insurance.jpg" alt="Card image cap">
                        <div class="card-body bg-secondary">
                            <p class="card-text text-center text-light">Insurance Services</p>
                        </div>
                    </div>
                </div>
            </div>
    </div><!-- container -->
    <div class="container">
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                    <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Cool stuff</a></li>
                        <li><a class="text-muted" href="#">Random feature</a></li>
                        <li><a class="text-muted" href="#">Team feature</a></li>
                        <li><a class="text-muted" href="#">Stuff for developers</a></li>
                        <li><a class="text-muted" href="#">Another one</a></li>
                        <li><a class="text-muted" href="#">Last time</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Resource</a></li>
                        <li><a class="text-muted" href="#">Resource name</a></li>
                        <li><a class="text-muted" href="#">Another resource</a></li>
                        <li><a class="text-muted" href="#">Final resource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="text-muted" href="#">Team</a></li>
                        <li><a class="text-muted" href="#">Locations</a></li>
                        <li><a class="text-muted" href="#">Privacy</a></li>
                        <li><a class="text-muted" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
@endsection
