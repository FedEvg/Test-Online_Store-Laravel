<header class="header-area section-padding-1">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-2 col-lg-2">
                <div class="logo logo-width">
                    <a href="{{ route("client.main.index") }}">
                        <img src="{{ asset("assets/images/logo/logo.png") }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 d-flex justify-content-center position-static">
                <div class="main-menu menu-lh-1 main-menu-padding-1">
                    <nav>
                        <ul>
                            <li class="position-static">
                                <a href="{{ route("client.main.index") }}">Home</a>
                            </li>
                            <li><a href="{{ route("client.clothing.index") }}">Clothes</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2">
                <div class="header-right-wrap header-right-flex">
                    <div class="same-style header-wishlist">
                        <a href="{{ route('client.likes.index') }}">
                            <i class="fa fa-heart-o"></i>
                        </a>
                    </div>
                    <div class="same-style cart-wrap">
                        <a href="#" class="cart-active">
                            <i class="dlicon shopping_bag-20"></i>
                            <span class="count-style">02</span>
                        </a>
                    </div>
                    <div class="same-style header-search">
                        <a class="search-active" href="#">
                            <i class="dlicon ui-1_zoom"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
