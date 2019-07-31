@extends('frontEnd.layouts.master')
@section('title','Home Page')
@section('content')
    <!-- Online Banner Area Start -->    
        <div class="online-banner-area">
            <div class="container">
                <div class="banner-title text-center">
                    <h2>NEW RELEASE <span>BOOKS </span></h2>
                    <p>The Online Books Guide is the biggest big store and the biggest books library in the world that has alot of the popular and the most top category books presented here. Top Authors are here just subscribe your email address and get updated with us.</p>
                </div>
                <div class="row">
                  <div class="banner-list">
                    @foreach($newbooks as $product)
                       @if($product->category->status==1)
                        <div class="col-md-4 col-sm-6">
                            <div class="single-banner">
                                <a href="#">
                                    <img alt="" src="{{url('products/small/',$product->image)}}">
                                </a>
                                <div class="price"><span>$</span>{{$product->price}}</div>
                                <div class="banner-bottom text-center">
                                    <a href="{{url('/product-detail',$product->id)}}">{{$product->p_name}}</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                        <!-- <div class="col-md-4 col-sm-6">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="{{asset('frontEnd/imag/banner/banner2.jpg')}}" alt="">
                                </a>
                                <div class="price"><span>$</span>160</div>
                                <div class="banner-bottom text-center">
                                    <a href="#">NEW RELEASE 2016</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="{{asset('frontEnd/imag/banner/banner3.jpg')}}" alt="">
                                </a>
                                <div class="price"><span>$</span>160</div>
                                <div class="banner-bottom text-center">
                                    <a href="#">NEW RELEASE 2016</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Online Banner Area End -->   
        <!-- Shop Info Area Start -->   
        <div class="shop-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-shop-info">
                            <div class="shop-info-icon">
                                <i class="flaticon-transport"></i>
                            </div>
                            <div class="shop-info-content">
                                <h2>FREE SHIPPING</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. </p>
                                <a href="#">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-shop-info">
                            <div class="shop-info-icon">
                                <i class="flaticon-money"></i>
                            </div>
                            <div class="shop-info-content">
                                <h2>FREE SHIPPING</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. </p>
                                <a href="#">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm">
                        <div class="single-shop-info">
                            <div class="shop-info-icon">
                                <i class="flaticon-school"></i>
                            </div>
                            <div class="shop-info-content">
                                <h2>FREE SHIPPING</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor. </p>
                                <a href="#">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Shop Info Area End -->
        <!-- Featured Product Area Start -->
        <div class="featured-product-area section-padding">
            <h2 class="section-title">FEATURED PRODUCTS</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-menu">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="first-item active">
                                    <a href="#arrival" aria-controls="arrival" role="tab" data-toggle="tab">New Arrival</a>
                                </li>
                                <li role="presentation">
                                    <a href="#sale" aria-controls="sale" role="tab" data-toggle="tab">BEST SELLERS</a>
                                </li>
                            </ul>
                        </div>         
                    </div>
                </div>   
                <div class="row">
                    <div class="product-list tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="arrival">
                            <div class="featured-product-list indicator-style">
                        @foreach($products as $product)
                             @if($product->category->status==1)
                                <div class="single-p-banner">
                                    <div class="col-md-3">
                                        <div class="single-banner">
                                            <div class="product-wrapper">
                                                <a href="#" class="single-banner-image-wrapper">
                                                    <img alt="" src="{{url('products/small/',$product->image)}}">
                                                    <div class="price"><span>$</span>{{$product->price}}</div>
                                                </a>
                                                <div class="product-description">
                                                    <div class="functional-buttons">
                                                        <a href="{{url('/product-detail',$product->id)}}" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                        <a href="#" title="Add to Wishlist">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                        <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                            <i class="fa fa-compress"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="banner-bottom text-center">
                                                <a href="{{url('/product-detail',$product->id)}}">{{$product->p_name}}</a>
                                                <div class="rating-icon">
                                                     <i class="fa fa-star icolor"></i>
                                                     <i class="fa fa-star icolor"></i>
                                                     <i class="fa fa-star icolor"></i>
                                                     <i class="fa fa-star"></i>
                                                     <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>             
            </div>
        </div>
        <!--Quickview Product Start -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            @if($product->category->status==1)
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/large/',$product->image)}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h1>{{$product->p_name}}</h1>
                                    <div class="price-box">
                                        <p class="s-price"><span class="special-price"><span class="amount">${{$product->price}}</span></span></p>
                                    </div>
                                    <a href="{{url('/product-detail',$product->id)}}" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .product-info -->
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Quickview Product--> 
        <!-- Featured Product Area End -->
        <!-- Testimonial Area Start -->
        <div class="testimonial-area text-center">
            <div class="container">
                <div class="testimonial-title">
                    <h2>OUR TESTIMONIAL</h2>
                    <p>What our clients say about the books reviews and comments</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-list">
                            <div class="single-testimonial">
                               <img src="{{asset('frontEnd/imag/testimonial/1.jpg')}}" alt="">
                               <div class="testmonial-info clearfix">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p> 
                                   <div class="testimonial-author text-center">
                                       <h3>JOHN DOE</h3>
                                       <p>The Author</p>
                                   </div>
                               </div>
                            </div>
                            <div class="single-testimonial">
                               <img src="{{asset('frontEnd/imag/testimonial/2.jpg')}}" alt="">
                               <div class="testmonial-info clearfix">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. </p> 
                                   <div class="testimonial-author text-center">
                                       <h3>Ashim Kumar</h3>
                                       <p>CEO</p>
                                   </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->
        <!-- Counter Area Start -->
        <div class="counter-area section-padding text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <div class="counter-info">
                                <span class="fcount">
                                    <span class="counter">3725</span>
                                </span>
                                <h3>BOOKS READ</h3>                             
                            </div>
                        </div>                      
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <div class="counter-info">
                                <span class="fcount">
                                    <span class="counter">950</span>
                                </span>
                                <h3>ONLINE USERS</h3>                               
                            </div>
                        </div>                      
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <div class="counter-info">
                                <span class="fcount">
                                    <span class="counter">1450</span>
                                </span>
                                <h3>BEST AUTHORS</h3>                               
                            </div>
                        </div>                      
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="single-counter wow" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <div class="counter-info">
                                <span class="fcount">
                                    <span class="counter">62</span>
                                </span>
                                <h3>AWARDS</h3>                             
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End -->
        <!-- Blog Area Start -->
        <div class="blog-area section-padding">
            <h2 class="section-title">LATEST BLOG</h2>
            <p>The Latest Blog post for the biggest Blog for the books Library.</p>
            <div class="container">
                <div class="row">
                    <div class="blog-list indicator-style">
                        <div class="col-md-3">
                            <div class="single-blog">
                                <a href="single-#">
                                    <img src="{{asset('frontEnd/imag/blog/1.jpg')}}" alt="">
                                </a>
                                <div class="blog-info text-center">
                                    <a href="#"><h2>Modern Book Reviews</h2></a>
                                    <div class="blog-info-bottom">
                                        <span class="blog-author">BY: <a href="#">LATEST BLOG</a></span>
                                        <span class="blog-date">19TH JAN 2016</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-blog">
                                <a href="single-#">
                                    <img src="{{asset('frontEnd/imag/blog/2.jpg')}}" alt="">
                                </a>
                                <div class="blog-info text-center">
                                    <a href="#"><h2>Modern Book Reviews</h2></a>
                                    <div class="blog-info-bottom">
                                        <span class="blog-author">BY: <a href="#">ZARIF SUNI</a></span>
                                        <span class="blog-date">19TH JAN 2016</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-blog">
                                <a href="single-#">
                                    <img src="{{asset('frontEnd/imag/blog/3.jpg')}}" alt="">
                                </a>
                                <div class="blog-info text-center">
                                    <a href="#"><h2>Modern Book Reviews</h2></a>
                                    <div class="blog-info-bottom">
                                        <span class="blog-author">BY: <a href="#">ZARIF SUNI</a></span>
                                        <span class="blog-date">19TH JAN 2016</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-blog">
                                <a href="single-#">
                                    <img src="{{asset('frontEnd/imag/blog/4.jpg')}}" alt="">
                                </a>
                                <div class="blog-info text-center">
                                    <a href="#"><h2>Modern Book Reviews</h2></a>
                                    <div class="blog-info-bottom">
                                        <span class="blog-author">BY: <a href="#">ZARIF SUNI</a></span>
                                        <span class="blog-date">19TH JAN 2016</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-blog">
                                <a href="single-#">
                                    <img src="{{asset('frontEnd/imag/blog/1.jpg')}}" alt="">
                                </a>
                                <div class="blog-info text-center">
                                    <a href="#"><h2>Modern Book Reviews</h2></a>
                                    <div class="blog-info-bottom">
                                        <span class="blog-author">BY: <a href="#">ZARIF SUNI</a></span>
                                        <span class="blog-date">19TH JAN 2016</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="single-blog">
                                <a href="single-#">
                                    <img src="{{asset('frontEnd/imag/blog/2.jpg')}}" alt="">
                                </a>
                                <div class="blog-info text-center">
                                    <a href="#"><h2>Modern Book Reviews</h2></a>
                                    <div class="blog-info-bottom">
                                        <span class="blog-author">BY: <a href="#">ZARIF SUNI</a></span>
                                        <span class="blog-date">19TH JAN 2016</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
        <!-- News Letter Area Start -->
        <div class="newsletter-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="newsletter-title">
                            <h2>SUBSCRIBE OUR NEWSLETTER</h2>
                            <p>Subscribe here with your email us and get up to date.</p>
                        </div>
                        <div class="letter-box">
                            <form action="#" method="post" class="search-box">
                                <div>
                                    <input type="text" placeholder="Subscribe us">
                                    <button type="submit" class="btn btn-search">SUBSCRIBE<span><i class="flaticon-school-1"></i></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- News Letter Area End -->
@endsection