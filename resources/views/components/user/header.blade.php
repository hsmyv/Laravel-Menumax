<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="{{asset("user/logo.png")}}" width="160" height="36" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="main-navigation">
                    <button class="menu-toggle"><span></span><span></span></button>
                    <nav class="header-menu">
                        <ul class="menu food-nav-menu">
                            <li><a href="{{route('main.index')}}">{{__("translate.Home")}}</a></li>
                            <li><a href="{{route('main.restaurant.index')}}">Restaurants</a></li>
                        </ul>
                    </nav>
                    <div class="header-right">
                        {{-- <form action="#" class="header-search-form for-des">
                            <input type="search" class="form-input" placeholder="Search Here...">
                            <button type="submit">
                                <i class="uil uil-search"></i>
                            </button>
                        </form> --}}
                        <a href="javascript:void(0)" class="header-btn header-cart">
                            <i class="uil uil-shopping-bag"></i>
                            <span class="cart-number">3</span>
                        </a>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        @if ($localeCode != LaravelLocalization::getCurrentLocale())
                            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="header-btn">
                                {{ $localeCode }}
                            </a>
                        @endif
                    @endforeach

                        {{-- <a href="javascript:void(0)" class="header-btn">
                            <i class="uil uil-user-md"></i>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
