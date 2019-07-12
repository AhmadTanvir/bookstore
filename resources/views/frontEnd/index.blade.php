@extends('frontEnd.layouts.master')
@section('title','Home Page')
@section('content')
    <section>
        <div class="ads-grid">
        <div class="container">
            <!-- tittle heading -->
            <h3 class="tittle-w3l">Our Top Products
                <span class="heading-style">
                    <i></i>
                    <i></i>
                    <i></i>
                </span>
            </h3>
            <!-- //tittle heading -->
            <!-- product left -->
            <div class="side-bar col-md-3">
                <div class="search-hotel">
                    <h3 class="agileits-sear-head">Search Here..</h3>
                    <form action="#" method="post">
                        <input type="search" placeholder="Product name..." name="search" required="">
                        <input type="submit" value=" ">
                    </form>
                </div>
                @include('frontEnd.layouts.category_menu')

                    <!--sorting-->
                    <div class="price-range">
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
            <!-- //product left -->
            <!-- product right -->
            <div class="agileinfo-ads-display col-sm-9">
                @foreach($products as $product)
                    @if($product->category->status==1)
                <div class="wrapper">
                    <!-- first section (nuts) -->
                    <div class="product-sec1">
                        <div class="col-md-4 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{url('products/small/',$product->image)}}" alt="" />
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{url('/product-detail',$product->id)}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product ">
                                    <h4>
                                        <a href="single.html">{{$product->p_name}}</a>
                                    </h4>
                                    <div class="info-product-price">
                                        <span class="item_price">{{$product->price}}</span>
                                        <del>$280.00</del>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="Almonds, 100g" />
                                                <input type="hidden" name="amount" value="149.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- //first section (nuts) -->
                </div>
                @endif
                @endforeach
            </div>
            <!-- //product right -->
        </div>
    </div>
    </section>
@endsection