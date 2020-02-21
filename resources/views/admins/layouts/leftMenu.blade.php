<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Shose Shop</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <span class="glyphicon glyphicon-user" aria-hidden="true" style="font-size: 60px"></span>
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2 class="userName">{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href=""><i class="fa fa-home"></i> Home </a></li>
                    <li><a href=""><i class="fa fa-th-list"></i>Categories</a></li>
                    <li><a href=""><i class="fa fa-truck"></i> Brands</a></li>
                    <li><a href=""><i class="fa fa-gift"></i> Products </a></li>
                    <li><a href="{{ route('info-users.index') }}"><i class="fa fa-male"></i> Customers </a></li>
                    <li><a href=""><i class="fa fa-shopping-cart"></i>Orders</a></li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small" style="background-color: #172D44">
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
