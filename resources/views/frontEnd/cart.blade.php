@extends('frontEnd.layouts.master')
@section('title','Cart Page')
@section('slider')
@endsection
@section('content')
    <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs">
                           <h2>SHOPPING CART</h2> 
                           <ul class="breadcrumbs-list">
                                <li>
                                    <a title="Return to Home" href="index.html">Home</a>
                                </li>
                                <li>Shopping Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Breadcrumbs Area Start --> 
        <!-- Cart Area Start -->
        <div class="shopping-cart-area section-padding">
            <div class="container">
                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                    <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%">Quantity</th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
             
                    @foreach($cart_datas as $cart_data)
                            <?php
                                $image_products=DB::table('products')->select('image')->where('id',$cart_data->products_id)->get();
                            ?>
             
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-3 hidden-xs">
                                            @foreach($image_products as $image_product)
                                            <a href=""><img src="{{url('products/small',$image_product->image)}}" width="100" height="100" class="img-responsive"/></a>
                                            @endforeach
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="nomargin">{{$cart_data->product_name}}</h4>
                                            <p>{{$cart_data->product_code}} | {{$cart_data->size}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">${{$cart_data->price}}</td>
                                <td data-th="Quantity">
                                    <div><a class="cart_quantity_up" href="{{url('/cart/update-quantity/'.$cart_data->id.'/1')}}"><i class="fa fa-plus"></i></a></div>
                                    <input type="number" value="{{$cart_data->quantity}}" class="form-control quantity" autocomplete="off"/>
                                    <div>
                                        @if($cart_data->quantity>1)
                                            <a class="cart_quantity_down" href="{{url('/cart/update-quantity/'.$cart_data->id.'/-1')}}"><i class="fa fa-minus"></i></a>
                                        @endif
                                    </div>
                                </td>
                                <td data-th="Subtotal" class="text-center">
                                <p class="cart_total_price">$ {{$cart_data->price*$cart_data->quantity}}</p>
                                </td>
                                <td class="actions" data-th="">
                                    <a class="cart_quantity_delete" href="{{url('/cart/deleteItem',$cart_data->id)}}"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="shopingcart-bottom-area">
                            <a class="left-shoping-cart" href="#">CONTINUE SHOPPING</a>
                            <div class="shopingcart-bottom-area pull-right">
                                <a class="right-shoping-cart" href="#">CLEAR SHOPPING CART</a>
                                <a class="right-shoping-cart update-cart" href="{{url('/cart/update-quantity/')}}">UPDATE SHOPPING CART</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Area End -->
        <!-- Discount Area Start -->
        <div class="discount-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        @if(Session::has('message_coupon'))
                            <div class="alert alert-danger text-center" role="alert">
                                {{Session::get('message_coupon')}}
                            </div>
                        @endif
                        <div class="discount-main-area">
                            <div class="discount-top">
                                <h3>DISCOUNT CODE</h3>
                                <p>Enter your coupon code if have one</p>
                            </div>
                            <div class="discount-middle">
                                <form action="{{url('/apply-coupon')}}" method="post" role="form">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="hidden" name="Total_amountPrice" value="{{$total_price}}">
                                    <div class="form-group">
                                        <label for="coupon_code">Coupon Code</label>
                                        <div class="controls {{$errors->has('coupon_code')?'has-error':''}}">
                                            <input type="text" class="form-control" name="coupon_code" id="coupon_code" placeholder="Promotion By Coupon">
                                            <span class="text-danger">{{$errors->first('coupon_code')}}</span>
                                        </div>
                                        <button type="submit" class="btn btn-primary">APPLY COUPON</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        @if(Session::has('message_apply_sucess'))
                            <div class="alert alert-success text-center" role="alert">
                                {{Session::get('message_apply_sucess')}}
                            </div>
                        @endif
                        <div class="subtotal-main-area">
                            @if(Session::has('discount_amount_price'))
                            <div class="subtotal-area">
                                <h2>SUBTOTAL<span>$ {{$total_price}}</span></h2>
                            </div>
                            <div class="subtotal-area">
                                <h2>Coupon Discount (Code : {{Session::get('coupon_code')}}) <span>$ {{Session::get('discount_amount_price')}}</span></h2>
                            </div>
                            <div class="subtotal-area">
                                <h2>GRAND TOTAL <span>$ {{$total_price-Session::get('discount_amount_price')}}</span></h2>
                            </div>
                            @else
                            <div class="subtotal-area">
                                <h2>GRAND TOTAL <span>$ {{$total_price}}</span></h2>
                            </div>
                            @endif
                            <a href="{{url('/check-out')}}">CHECKOUT</a>
                            <p>Checkout With Multiple Addresses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Discount Area End -->
@endsection
<!-- @section('scripts')
 
 
    <script type="text/javascript">
 
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
 
    </script>
 
@endsection -->