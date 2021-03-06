<!DOCTYPE html>
@langrtl
    <html lang="{{ app()->getLocale() }}" dir="rtl">
@else
    <html lang="{{ app()->getLocale() }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel 5 Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('css/frontend.css')) }}
        {{--{{ style(mix('css/style.css')) }}--}}
        @stack('after-styles')
    </head>
    <body>
        <div id="app">
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.nav')
            @include('frontend.includes.top_buttons')
            @yield('content')
            @include('frontend.includes.footer')
            </div><!-- container -->
        </div><!-- #app -->

        <!-- Scripts -->
        @stack('before-scripts')
        {!! script(mix('js/frontend.js')) !!}
        @stack('after-scripts')
        <script>
            $(function() {
                if ($("#shop").hasClass('active')) {
                    console.log("Home Page");
                    $("#shop_btn").removeClass('bg-dark').css("background-color", "#B02A30")
                }

                $('#sort_by').change(function() {
                    console.log( this.value );
                    $(".hr").show()
                    $(".law").show()
                    $(".insurance").show()
                    $(".equipment").show()
                    if(this.value=='insurance')
                    {
                        $(".hr").hide()
                        $(".law").hide()
                        $(".equipment").hide()
                    }
                    if(this.value=='hr')
                    {
                        $(".insurance").hide()
                        $(".law").hide()
                        $(".equipment").hide()
                    }
                    if(this.value=='law')
                    {
                        $(".insurance").hide()
                        $(".hr").hide()
                        $(".equipment").hide()
                    }
                    if(this.value=='equipment')
                    {
                        $(".insurance").hide()
                        $(".hr").hide()
                        $(".law").hide()
                    }
                })

            })
            
        </script>
        @include('includes.partials.ga')
    </body>
</html>
