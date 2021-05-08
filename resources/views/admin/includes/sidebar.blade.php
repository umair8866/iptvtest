<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{asset('images/icon/logo.png')}}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ url('/admin/dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                          </li>
                          <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-calendar-alt"></i>Channels</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="{{ url('/admin/channels') }}">All Channels</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/addchannel') }}">Add Channel</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-film"></i>Movies</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="{{ url('/admin/movies') }}">All Movies</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/addmovie') }}">Add New Movie</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/categories') }}">Movie Categories</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/addcategory') }}">Add New Category</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-list-alt"></i>Products</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="{{ url('/admin/products') }}">All Products</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/addproduct') }}">Add New Product</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/pcategories') }}">Product Categories</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/addpcategory') }}">Add New Category</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-calendar-alt"></i>Company</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="{{ url('/admin/company') }}">Company</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/addcompany') }}">Add New Company</a>
                                    </li>
                                </ul>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-times-circle"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
        <!-- PAGE CONTAINER-->
     <div class="page-container">
            <!-- HEADER DESKTOP-->
            <div class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="account-wrap" >
                                <div class="content" style="color:black;">
                                   User Name: {{ Auth::user()->name }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- HEADER DESKTOP-->
    <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{ url('/admin/dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>

                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>Guests</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ url('/admin/guests') }}">All Guests</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/addguest') }}">Add New Guest</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/orders') }}">Orders</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/order_details') }}">Orders Detail</a>
                                    </li>
                                </ul>
                        </li>
                        
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-building"></i>Hotel</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ url('/admin/rooms') }}">Rooms</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/addroom') }}">Add New Room</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/floors') }}">Floors</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/addfloor') }}">Add New Floor</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-play-circle"></i>Channels</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ url('/admin/channels') }}">All Channels</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/addchannel') }}">Add Channel</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-film"></i>Movies</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ url('/admin/movies') }}">All Movies</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/addmovie') }}">Add New Movie</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/categories') }}">Movie Categories</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/addcategory') }}">Add New Category</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-list-alt"></i>Products</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ url('/admin/products') }}">All Products</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/addproduct') }}">Add New Product</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/pcategories') }}">Product Categories</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/addpcategory') }}">Add New Category</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Company</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ url('/admin/company') }}">Company</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/addcompany') }}">Add New Company</a>
                                    </li>
                                </ul>
                        </li>
                        
                    </ul>
                     <ul id="logout_sidebar_button" class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{ url('/logout') }}">
                            <i class="fas fa-times-circle"></i>Log Out</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
</div>