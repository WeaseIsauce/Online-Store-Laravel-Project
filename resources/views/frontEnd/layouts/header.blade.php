
    <div class="header-middle" style="background-color: white">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{url('/')}}"><img src="" alt="" />Store dl3bar</a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">USA</a></li>
                                <li><a href="#">Morocco</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USD
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">MAD</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('/viewcart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            @if(Auth::check())
                                <li><a href="{{url('/myaccount')}}"><i class="fa fa-user"></i> My Account</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-lock"></i> Logout </a>
                                </li>
                            @else
                                <li><a href="{{url('/login_page')}}"><i class="fa fa-lock"></i> Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{url('/')}}" class="active" style="color:white;">Home</a></li>
                            <li class="dropdown"><a href="#" style="color:white;">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{url('/list-products')}}">Products</a></li>
                                    <li><a href="{{url('/myaccount')}}">Account</a></li>
                                    <li><a href="{{url('/viewcart')}}">Cart</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
              
                </div>
            </div>
        </div>
    </div> 
</header> 