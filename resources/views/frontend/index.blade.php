@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')
    {{--Carousel--}}
    <div id="index_carousel" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/frontend/banner1.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block text-right text-dark mb-4">
                    <h2>The Best .....</h2>
                    <h5>Hello this is a test</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/frontend/banner2.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block text-left text-dark">
                    <h2>The Best .....</h2>
                    <h5>Hello this is a test</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/frontend/banner3.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block text-left text-dark">
                    <h2>The Best .....</h2>
                    <h5>Hello this is a test</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/frontend/banner4.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block text-right text-dark mb-5">
                    <h2>The Best .....</h2>
                    <h5>Hello this is a test</h5>
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
    {{--3 Blocks inline--}}
    <div class="container">
        <div class="col-12 text-center">
            <h3 class="text-center">BEST SELLERS</h3>
        </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/frontend/shopfitting.png" alt="Card image cap">
                        <div class="card-body bg-secondary">
                            <p class="card-text text-center text-light">Shop Fitting</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/frontend/equipment.png" alt="Card image cap">
                        <div class="card-body bg-secondary">
                            <p class="card-text text-center text-light">Equipment</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/frontend/medical.png" alt="Card image cap">
                        <div class="card-body bg-secondary">
                            <p class="card-text text-center text-light">Medical Insurance</p>
                        </div>
                    </div>
                </div>
                {{--3 Blocks inline--}}
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-danger mb-5">SEE MORE</a>
                    <h3 class="text-center">DIRECTORY</h3>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/frontend/team_building.png" alt="Card image cap">
                        <div class="card-body bg-secondary">
                            <p class="card-text text-center text-light">Team Building</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/frontend/legal.png" alt="Card image cap">
                        <div class="card-body bg-secondary">
                            <p class="card-text text-center text-light">Legal Services</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="img/frontend/insurance.png" alt="Card image cap">
                        <div class="card-body bg-secondary">
                            <p class="card-text text-center text-light">Insurance Services</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-danger mb-5">SEE MORE</a>
                </div>
            </div>
    </div><!-- container -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="col-md-6 text-center">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div><!-- container -->
@endsection
