<div class="header-bot">
        <div class="header-bot_inner_wthreeinfo_header_mid">
            <!-- header-bot-->
            <div class="col-md-4 logo_agile">
                <h1>
                    <a href="{{url('/')}}">
                        <span>B</span>ook
                        <span>S</span>tore
                        <img src="{{asset('frontEnd/images/home/logo-.png')}}" alt="" /></a>
                    </a>
                </h1>
            </div>
            <!-- header-bot -->
            <div class="col-md-8 header">
                <!-- header lists -->
                <ul>
                    <li>
                        <a class="play-icon popup-with-zoom-anim" href="#small-dialog1">
                            <span class="fa fa-map-marker" aria-hidden="true"></span>Shop Locator
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#" data-toggle="modal" data-target="#myModal1">
                            <span class="fa fa-truck" aria-hidden="true"></span>Track Order</a>
                    </li> --}}
                    <li>
                        <span class="fa fa-phone" aria-hidden="true"></span>001-234-5678
                    </li>
                    @if(Auth::check())
                    <li>
                        <a href="{{url('/myaccount')}}">
                            <span class="fa fa-user" aria-hidden="true"></span>My Account
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/logout') }}">
                            <span class="fa fa-lock" aria-hidden="true"></span>Logout
                        </a>
                    </li>
                    @else
                    <li>
                        <a href="#" data-toggle="modal" data-target="#myModal1">
                            <span class="fa fa-unlock-alt" aria-hidden="true"></span>Sign In</a>
                    </li>
                    @endif
                    <li>
                        <a href="#" data-toggle="modal" data-target="#myModal2">
                            <span class="fa fa-pencil-square-o" aria-hidden="true"></span>Sign Up</a>
                    </li>
                </ul>
                <!-- //header lists -->
                <!-- search -->
                <div class="agileits_search">
                    <form action="#" method="post">
                        <input name="Search" type="search" placeholder="How can we help you today?" required="">
                        <button type="submit" class="btn btn-default" aria-label="Left Align">
                            <span class="fa fa-search" aria-hidden="true"> </span>
                        </button>
                    </form>
                </div>
                <!-- //search -->
                <!-- cart details -->
                <div class="top_nav_right">
                    <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                        <form action="#" method="post" class="last">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="display" value="1">
                            <button class="w3view-cart" type="submit" name="submit" value="">
                                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- //cart details -->
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Modal1 -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="main-mailposi">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    </div>
                    <div class="modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Sign In </h3>
                        <p>
                            Sign In now, Let's start your Grocery Shopping. Don't have an account?
                            <a href="#" data-toggle="modal" data-target="#myModal2">
                                Sign Up Now</a>
                        </p>
                        <form action="{{url('/user_login')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="styled-input agile-styled-input-top">
                                <input type="email" placeholder="Email" name="email"/>
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="Password" name="password"/>
                            </div>
                            <span>
                            <input type="checkbox" class="checkbox">
                            Keep me signed in
                            </span>
                            <input type="submit" value="Sign In">
                        </form>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Modal1 -->
    <!-- //signin Model -->
    <!-- signup Model -->
    <!-- Modal2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body modal-body-sub_agile">
                    <div class="main-mailposi">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                    </div>
                    <div class="modal_body_left modal_body_left1">
                        <h3 class="agileinfo_sign">Sign Up</h3>
                        <p>
                            Come join the Grocery Shoppy! Let's set up your Account.
                        </p>
                        <form action="{{url('/register_user')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="styled-input agile-styled-input-top">
                                <input type="text" placeholder="Name" name="name" value="{{old('name')}}">
                                <span class="text-danger">{{$errors->first('name')}}</span>
                            </div>
                            <div class="styled-input">
                                <input type="email" placeholder="E-mail" name="email" value="{{old('email')}}">
                                <span class="text-danger">{{$errors->first('email')}}</span>
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="Password" name="password" id="password1">
                                <span class="text-danger">{{$errors->first('password')}}</span>
                            </div>
                            <div class="styled-input">
                                <input type="password" placeholder="Confirm Password" name="password_confirmation" id="password2">
                                <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                            </div>
                            <input type="submit" value="Sign Up">
                        </form>
                        <p>
                            <a href="#">By clicking register, I agree to your terms</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- //Modal content-->
        </div>
    </div>
    <!-- //Modal2 -->
    <div class="ban-top">
        <div class="container">
            <div class="agileits-navi_search">
                <form action="#" method="post">
                    <select id="agileinfo-nav_search" name="agileinfo_search" required="">
                        <option value="">All Categories</option>
                        <option value="Kitchen">Kitchen</option>
                        <option value="Household">Household</option>
                        <option value="Snacks &amp; Beverages">Snacks & Beverages</option>
                        <option value="Personal Care">Personal Care</option>
                        <option value="Gift Hampers">Gift Hampers</option>
                        <option value="Fruits &amp; Vegetables">Fruits & Vegetables</option>
                        <option value="Baby Care">Baby Care</option>
                        <option value="Soft Drinks &amp; Juices">Soft Drinks & Juices</option>
                        <option value="Frozen Food">Frozen Food</option>
                        <option value="Bread &amp; Bakery">Bread & Bakery</option>
                        <option value="Sweets">Sweets</option>
                    </select>
                </form>
            </div>
            <div class="top_nav_left">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav menu__list">
                                <li class="active">
                                    <a class="nav-stylehead" href="{{url('/')}}">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li><a href="{{url('/new-arrivals')}}">New Arrivals</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{url('/list-products')}}">Products</a></li>
                                        <li><a href="{{url('/myaccount')}}">Account</a></li>
                                        <li><a href="{{url('/viewcart')}}">Cart</a></li>
                                    </ul>
                                </li>
                                <li><a href="https://www.youtube.com/channel/UCH2Ir7rPaRN8ZPL9mSpclhw" target="_blank">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>