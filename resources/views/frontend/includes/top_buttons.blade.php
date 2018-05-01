{{--3 Buttons inline--}}
{{--<script>--}}
    {{--$(function() {--}}
        {{--console.log( "ready!" );--}}
    {{--});--}}
{{--</script>--}}
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <a id="shop" style="text-decoration:none" class="{{ active_class(Active::checkRoute('frontend.shop')) }}" href="{{route('frontend.shop')}}">
                <div id="shop_btn" class="card mb-4 box-shadow bg-dark text-light text-center">
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