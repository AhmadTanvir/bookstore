    <!--Header Area Start-->
        <div class="header-area">
            <div style="padding-left: 100px; padding-right: 100px">
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-6">
                        <div class="header-logo">
                            
                        </div>
                        <a style="padding-bottom: 0" href="{{url('/')}}">
                            <img src="{{asset('frontEnd/imag/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-8 col-sm-12 hidden-xs">
                        <div class="mainmenu text-center">
                            <nav>
                                <ul id="nav">
                                    <li><a href="{{url('/')}}">HOME</a></li>
                                    <li><a href="#">pages</a>
<!-- <?php
    $categories=DB::table('categories')->where([['status',1],['parent_id',0]])->get();
?> -->
                                        <ul class="sub-menu">
@foreach($categories as $category)
<?php
    $sub_categories=DB::table('categories')->select('id','name')->where([['parent_id',$category->id],['status',1]])->get();
?>
        <li>
            <a href="{{route('cats',$category->id)}}">{{$category->name}}</a>
            @if(count($sub_categories)>0)
            <ul class="sub-menu" id="sportswear{{$category->id}}">
                @foreach($sub_categories as $sub_category)
                <li><a href="{{route('cats',$sub_category->id)}}">{{$sub_category->name}}</a></li>
                @endforeach
            </ul>
            @endif
        </li>
@endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{url('/list-products')}}">FEATURED</a></li>
                                    <li><a href="shop.html">BOOK REVIEW</a></li>
                                    <li><a href="about.html">ABOUT AUTHOR</a></li>
                                    <li><a href="contact.html">CONTACT</a></li>
                                </ul>
                            </nav>
                        </div>                        
                    </div>
                    <div class="col-md-2 hidden-sm">
                        <div class="header-right">
                            <ul>
                                @if(Auth::check())
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out" title="Logout"></i></a>
                                </li>
                                <li><a href="{{url('/myaccount')}}"><i class="fa fa-user" title="My Account"></i></a>
                                </li>
                                @else
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#myModal1"><i class="flaticon-people"></i></a>
                                </li>
                                @endif
                                <li class="shoping-cart">
                                    <a href="{{url('/viewcart')}}">
                                        <i class="flaticon-shop"></i>
                                        <span>{{ count(session('session_id')) }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Header Area End-->
        <!-- Mobile Menu Start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.html">HOME</a></li>
                                    <li><a href="shop.html">FEATURED</a></li>
                                    <li><a href="shop.html">REVIEW BOOK</a></li>
                                    <li><a href="about.html">ABOUT AUTHOR</a></li>
                                    <li><a href="#">pages</a>
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Check Out</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="shop.html">Shopping Page</a></li>
                                            <li><a href="single-product.html">Single Shop Page</a></li>
                                            <li><a href="wishlist.html">Wishlist Page</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">CONTACT</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
        <!-- Mobile Menu End -->
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
                            Sign In now, Let's start your Blog with your writings. Don't have an account?
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
                            <div class="col-md-1">
                                <input type="checkbox" class="checkbox">
                            </div>
                            <div class="col-md-4">
                                <i>Remamber me</i>
                            </div><br>
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