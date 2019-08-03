@extends('frontEnd.layouts.master')
@section('title','Book Review')
@section('slider')
@endsection
@section('content')
    <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                           <h2>Review On New Released Book</h2> 
                           <ul class="breadcrumbs-list">
                                <li>
                                    <a title="Return to Home" href="index.html">Home</a>
                                </li>
                                <li>Book Review</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Breadcrumbs Area Start --> 
        <!-- About Us Area Start -->
        <div class="about-us-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="about-top-inner">
                        <div class="col-md-6">
                            <div class="about-inner">
                                <div class="about-title">
                                    <h3>Eat To Live : The Amazing Nutrient-Rich Program For Fast And Sustained Weight Loss</h3>
                                </div>
                                <div class="about-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitss ed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Utes enim ad minim veniam, quis nostrud exerck itation ullam co laboris nisi ut aliquip ex ea commodo coes nsequat. Duis aute irure dolor in reprehenderit in.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitss ed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Utes enim ad minimLorem ipsum dolor sit amet, consectetur adipisicing elitss ed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Utes enim ad minim veniam, quis nostrud exerck itation ullam co laboris nisi ut aliquip ex ea commodo coes nsequat. Duis aute irure dolor in reprehenderit in. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-top: 40px">
                            <div class="about-image">
                                <img src="{{asset('frontEnd/imag/bookreview/photo.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="about-bottom-inner">
                        <div class="col-md-6">
                            <div class="about-image">
                                <img src="{{asset('frontEnd/imag/bookreview/photo1.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-inner">
                                <div class="about-title">
                                    <h2>The Hobbit (Movie Tie-In Edition) (Pre-Lord Of The Rings)</h2>
                                </div>
                                <div class="about-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitss ed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Utes enim ad minim veniam, quis nostrud exerck itation ullam co laboris nisi ut aliquip ex ea commodo coes nsequat. Duis aute irure dolor in reprehenderit in.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitss ed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. Utes enim ad minimLorem ipsum dolor sit amet, consectetur adipisicing elitss ed do eiusmod tempor incididunt ut labore et dolore mag na aliqua. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us Area End -->
@endsection