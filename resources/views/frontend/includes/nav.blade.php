<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="{{ route('frontend.index') }}" class="navbar-brand"><img src="/img/frontend/iben_logo.png"></a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('labels.general.toggle_navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            {{--@if (config('locale.status') && count(config('locale.languages')) > 1)--}}
                {{--<li class="nav-item dropdown">--}}
                    {{--<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownLanguageLink" data-toggle="dropdown"--}}
                       {{--aria-haspopup="true" aria-expanded="false">{{ __('menus.language-picker.language') }} ({{ strtoupper(app()->getLocale()) }})</a>--}}

                    {{--@include('includes.partials.lang')--}}
                {{--</li>--}}
            {{--@endif--}}

            @auth
                <li class="nav-item">
                    <a href="{{route('frontend.user.dashboard')}}"
                       class="nav-link {{ active_class(Active::checkRoute('frontend.user.dashboard')) }} text-danger">
                        <span class="fas fa-user text-danger"></span> Account
                    </a>
                </li>
            @endauth

            @guest
                <li class="nav-item">
                    <a href="{{route('frontend.auth.login')}}"
                       class="text-danger text-danger nav-link {{ active_class(Active::checkRoute('frontend.auth.login')) }}">
                        {{ __('navs.frontend.login') }}
                    </a>
                </li>
                @if (config('access.registration'))
                    <li class="nav-item">
                        <a href="{{route('frontend.auth.register')}}"
                           class="text-danger nav-link {{ active_class(Active::checkRoute('frontend.auth.register')) }}">
                            {{ __('navs.frontend.register') }}
                        </a>
                    </li>
                @endif
            @else

                <li class="nav-item dropdown">
                    <a href="#" class="text-danger nav-link dropdown-toggle" id="navbarDropdownMenuUser" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">{{ $logged_in_user->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuUser">
                        @can('view backend')
                            <a href="{{ route('admin.dashboard') }}"
                               class="text-danger dropdown-item">{{ __('navs.frontend.user.administration') }}
                            </a>
                        @endcan

                        <a href="{{ route('frontend.user.account') }}"
                           class="text-danger dropdown-item {{ active_class(Active::checkRoute('frontend.user.account')) }}">
                            Your Profile
                        </a>
                        <a href="{{ route('frontend.auth.logout') }}"
                           class="text-danger dropdown-item">{{ __('navs.general.logout') }}
                        </a>
                    </div>
                </li>
            @endguest

            {{--<li class="nav-item"><a href="{{route('frontend.contact')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.contact')) }}">{{ __('navs.frontend.contact') }}</a></li>--}}
            <li class="nav-item">
                <a href="#" class="text-danger nav-link {{ active_class(Active::checkRoute('frontend.contact')) }}">
                    <span class="text-danger fas fa-balance-scale"></span> Balance (£1,000)
                </a>
            </li>
        </ul>
    </div>
</nav>
