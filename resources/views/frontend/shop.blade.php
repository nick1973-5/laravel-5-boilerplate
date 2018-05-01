@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')
    <div class="jumbotron">
        <div class="container text-light">
            <h1 class="display-3">Shop</h1>
        </div>
    </div>
    <div class="container mb-4">
        <form>
            <div class="form-row">
                <div class="col-md-6">
                    <select id="sort_by" class="form-control">
                        <option selected>Sort By...</option>
                        <option value="all">All</option>
                        <option value="insurance">Insurance Services</option>
                        <option value="hr">HR Services</option>
                        <option value="law">Law Services</option>
                        <option value="equipment">Equipment</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select id="inputState" class="form-control">
                        <option selected>Filter...</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    {{--3 Blocks inline--}}
    <div class="container">
            <div class="row">
                <div class="col-md-4 equipment">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top img-thumbnail" src="img/frontend/shopfitting.png" alt="Card image cap">
                    </div>
                    <p>Name of product
                        <br>£340</p>
                </div>
                <div class="col-md-4 equipment">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top img-thumbnail" src="img/frontend/equipment.png" alt="Card image cap">
                    </div>
                    <p>Name of product
                        <br>£340</p>
                </div>
                <div class="col-md-4 insurance">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top img-thumbnail" src="img/frontend/medical.png" alt="Card image cap">
                    </div>
                    <p>Name of product
                        <br>£340</p>
                </div>
                {{--3 Blocks inline--}}
                <div class="col-md-4 hr">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top img-thumbnail" src="img/frontend/team_building.png" alt="Card image cap">
                    </div>
                    <p>Name of product
                        <br>£340</p>
                </div>
                <div class="col-md-4 law">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top img-thumbnail" src="img/frontend/legal.png" alt="Card image cap">
                    </div>
                    <p>Name of product
                        <br>£340</p>
                </div>
                <div class="col-md-4 insurance">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top img-thumbnail" src="img/frontend/insurance.png" alt="Card image cap">
                    </div>
                    <p>Name of product
                        <br>£340</p>
                </div>
                {{--3 Blocks inline--}}
                <div class="col-md-4 hr">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top img-thumbnail" src="img/frontend/team_building.png" alt="Card image cap">
                    </div>
                    <p>Name of product
                        <br>£340</p>
                </div>
                <div class="col-md-4 law">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top img-thumbnail" src="img/frontend/legal.png" alt="Card image cap">
                    </div>
                    <p>Name of product
                        <br>£340</p>
                </div>
                <div class="col-md-4 insurance">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top img-thumbnail" src="img/frontend/insurance.png" alt="Card image cap">
                    </div>
                    <p>Name of product
                        <br>£340</p>
                </div>
            </div>
    </div><!-- container -->
@endsection
