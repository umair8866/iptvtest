@include('admin/includes/header')
@include('admin/includes/sidebar')     

<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
                <div class="row m-t-25">
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c1">
                            <a href="{{url('/admin/channels')}}">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <br>
                                        <i class="fas fa-play-circle"></i>
                                    </div>
                                    <div class="text">
                                        <br>
                                        <h2>Channels</h2>
                                        <span>Streaming</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c3">
                            <a href="{{url('/admin/movies')}}">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <br>
                                        <i class="fas fa-film"></i>
                                    </div>
                                    <div class="text">
                                        <br>
                                        <h2>Movies</h2>
                                        <span>On Demand</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c1">
                            <a href="{{url('/admin/products')}}">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <br>
                                        <i class="fas fa-list-alt"></i>
                                    </div>
                                    <div class="text">
                                        <br>
                                        <h2>Products</h2>
                                        <span>List</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c3">
                            <a href="{{url('/admin/guests')}}">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <br>
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="text">
                                        <br>
                                        <h2>Guests</h2>
                                        <span>Register</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c3">
                            <a href="{{url('/admin/company')}}">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <br>
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="text">
                                        <br>
                                        <h2>Hotel</h2>
                                        <span>Management</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c1">
                            <a href="{{url('/admin/company')}}">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <br>
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="text">
                                        <br>
                                        <h2>Company</h2>
                                        <span>Client</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>

                </div>
               
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © <?php echo date('Y'); ?> IPTVApp. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- END MAIN CONTENT-->
    </div>
<!-- END PAGE CONTAINER-->
</div>


@include('admin/includes/footer')
