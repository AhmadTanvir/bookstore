@extends('frontEnd.layouts.master')
@section('title','Search Results')
@section('content')
        <div class="container">
            @if(session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <!-- Featured Product Area Start -->
        <div class="container search-container">
            <h1>Search Results</h1>
            <p>{{$products->count()}} result(s) for {{ request()->input('query') }}</p>
            @foreach($products as $product)
                <div>{{ $product ->p_name }}</div>
            @endforeach
        </div>
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