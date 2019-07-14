@extends('frontEnd.layouts.master')
@section('title','Home Page')
@section('content')
    <section>
        <div style="padding: 50px">
            <div class="row">
                <div class="col-sm-3">
                    @include('frontEnd.layouts.category_menu')

                    <!--sorting-->
                    <div class="price-range" style="padding: 0">
                        <h2>Sorting</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{ url('sort/new') }}">Newest</a></li>
                                <li><a href="{{ url('sort/old') }}">Oldest</a></li>
                                <li><a href="{{ url('sort/expensive') }}">Most Expensive</a></li>
                                <li><a href="{{ url('sort/costly') }}">Most Cost Effective</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--/sorting-->

                    <!--price_range-->
                    <div class="price-range">
                        <h2>Price Range</h2>
                        <div class="well text-center">
                             <input type="text" class="span2" value="0,600" j="0" data-slider-max="600" data-slider-step="5" data-slider-value="[0,600]" id="sl2" ><br />
                             <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                             <a href="#" id="sl2_search" class="btn btn-primary cart">Show</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        @foreach($products as $product)
                            @if($product->category->status==1)
                                <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" /></a>
                                        <h2>$ {{$product->price}}</h2>
                                        <p>{{$product->p_name}}</p>
                                        <a href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart">View Product</a>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                            @endif
                        @endforeach
                    </div><!--features_items-->

                </div>
            </div>
        </div>
    </section>
@endsection