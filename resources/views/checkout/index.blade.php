@extends('frontEnd.layouts.master')
@section('title','checkOut Page')
@section('slider')
@endsection
@section('content')
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                   <h2>Checkout List</h2> 
                   <ul class="breadcrumbs-list">
                        <li>
                            <a title="Return to Home" href="index.html">Home</a>
                        </li>
                        <li>Checkout List</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- Breadcrumbs Area Start --> 
<!-- Check Out Area Start -->
<div class="check-out-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                   <span>1</span>
                                   Billing Information
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <div class="row">
                                    <form action="{{url('/submit-checkout')}}" method="post" class="form-horizontal">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="col-md-6 {{$errors->has('billing_name')?'has-error':''}}">
                                        <p class="form-row">
                                            <input type="text" class="form-control" name="billing_name" id="billing_name" value="{{$user_login->name}}" placeholder="Billing Name *">
                                        </p>
                                        <span class="text-danger">{{$errors->first('billing_name')}}</span>
                                    </div>
                                    <div class="col-md-6 {{$errors->has('billing_address')?'has-error':''}}">
                                        <p class="form-row">
                                            <input type="text" class="form-control" value="{{$user_login->address}}" name="billing_address" id="billing_address" placeholder="Billing Address">
                                        </p>
                                        <span class="text-danger">{{$errors->first('billing_address')}}</span>
                                    </div>
                                    <div class="col-md-6 {{$errors->has('billing_city')?'has-error':''}}">
                                        <p class="form-row">
                                            <input type="text" class="form-control" name="billing_city" value="{{$user_login->city}}" id="billing_city" placeholder="Billing City">
                                        </p>
                                        <span class="text-danger">{{$errors->first('billing_city')}}</span>
                                    </div>
                                    <div class="col-md-6 {{$errors->has('billing_state')?'has-error':''}}">
                                        <p class="form-row">
                                            <input type="text" class="form-control" name="billing_state" value="{{$user_login->state}}" id="billing_state" placeholder=" Billing State">
                                        </p>
                                        <span class="text-danger">{{$errors->first('billing_state')}}</span>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="shop-select">
                                            <select name="billing_country" id="billing_country" class="form-control">
                                                <option value="volvo">Select Your Country</option>
                                                @foreach($countries as $country)
                                                <option value="{{$country->country_name}}" {{$user_login->country==$country->country_name?' selected':''}}>{{$country->country_name}}</option>
                                                @endforeach
                                            </select>                                       
                                        </div>  
                                    </div>  
                                    <div class="col-md-6 {{$errors->has('billing_pincode')?'has-error':''}}">
                                        <p class="form-row">
                                            <input type="text" class="form-control" name="billing_pincode" value="{{$user_login->pincode}}" id="billing_pincode" placeholder=" Billing Pincode">
                                        </p>
                                        <span class="text-danger">{{$errors->first('billing_pincode')}}</span>
                                    </div>
                                    <div class="col-md-6 {{$errors->has('billing_mobile')?'has-error':''}}">
                                        <p class="form-row">
                                            <input type="text" class="form-control" name="billing_mobile" value="{{$user_login->mobile}}" id="billing_mobile" placeholder="Billing Mobile">
                                        </p>
                                        <span class="text-danger">{{$errors->first('billing_mobile')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                   <span>3</span>
                                   Shopping Method
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <div class="different-address">
                                    <div class="ship-different-title">
                                        <h3>
                                            <label>Ship to a different address?</label>
                                            <input type="checkbox" id="ship-box">
                                        </h3>
                                    </div>
                                    <div id="ship-box-info" class="row">
                                        <div class="col-md-12">
                                            <div class="shop-select">
                                                <label>Country <span class="required">*</span></label>
                                                <select>
                                                    <option value="volvo">Bangladesh</option>
                                                    <option value="saab">Algeria</option>
                                                    <option value="mercedes">Afghanistan</option>
                                                    <option value="audi">Ghana</option>
                                                    <option value="audi2">Albania</option>
                                                    <option value="audi3">Bahrain</option>
                                                    <option value="audi4">Colombia</option>
                                                    <option value="audi5">Dominican Republic</option>
                                                </select>                                       
                                            </div>  
                                        </div>  
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <input type="text" placeholder="First Name *">
                                            </p>
                                        </div>  
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <input type="text" placeholder="Last Nane *">
                                            </p>
                                        </div>  
                                        <div class="col-md-12">
                                            <p class="form-row">
                                                <input type="text" placeholder="Company Name">
                                            </p>
                                        </div>  
                                        <div class="col-md-12">
                                            <p class="form-row">
                                                <input type="text" placeholder="Street address *">
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="form-row">
                                                <input type="text" placeholder="Town / City *">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <input type="text" placeholder="State / County *">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <input type="text" placeholder="Postcode / Zip *">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <input type="text" placeholder="Email Address *">
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="form-row">
                                                <input type="text" placeholder="Phone *">
                                            </p>
                                        </div>                                          
                                    </div>
                                    <div class="order-notes">
                                        <label>Order Notes</label>
                                        <textarea placeholder="Notes about your order, e.g. special notes for delivery." rows="10" cols="30" id="checkout-mess"></textarea>
                                    </div>
                                </div>                              
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                   <span>4</span>
                                   Payment Information
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body no-padding">
                                <div class="payment-met">
                                    <form action="#" id="payment-form">
                                        <ul class="form-list">
                                            <li class="control">
                                                <input type="radio" class="radio" title="Check / Money order" name="payment[method]" id="p_method_checkmo">
                                                <label for="p_method_checkmo">Check / Money order </label>
                                            </li>
                                            <li class="control">
                                                <input type="radio" class="radio" title="Credit Card (saved)" name="payment[method]" id="p_method_ccsave">
                                                <label for="p_method_ccsave">Credit Card (saved) </label>
                                            </li>
                                        </ul>
                                    </form>
                                    <div class="buttons-set">
                                        <button class="btn btn-default">CONTINUE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                   <span>5</span>
                                   Order Review
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body no-padding">
                                <div class="order-review" id="checkout-review">    
                                    <div class="table-responsive" id="checkout-review-table-wrapper">
                                        <table class="data-table" id="checkout-review-table">
                                            <thead>
                                                <tr>
                                                    <th rowspan="1">Product Name</th>
                                                    <th colspan="1">Price</th>
                                                    <th rowspan="1">Qty</th>
                                                    <th colspan="1">Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><h3 class="product-name">People of the book</h3></td>
                                                    <td><span class="cart-price"><span class="check-price">$155.00</span></span></td>
                                                    <td>1</td>
                                                    <!-- sub total starts here -->
                                                    <td><span class="cart-price"><span class="check-price">$155.00</span></span></td>
                                                </tr>
                                                <tr>
                                                    <td><h3 class="product-name">The secret garden</h3></td>
                                                    <td><span class="cart-price"><span class="check-price">$222.00</span></span></td>
                                                    <td>1</td>
                                                    <!-- sub total starts here -->
                                                    <td><span class="cart-price"><span class="check-price">$222.00</span></span></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3">Subtotal</td>
                                                    <td><span class="check-price">$377.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">Shipping Handling (Flat Rate - Fixed)</td>
                                                    <td><span class="check-price">$10.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"><strong>Grand Total</strong></td>
                                                    <td><strong><span class="check-price">$387.00</span></strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div id="checkout-review-submit">
                                        <div class="cart-btn-3" id="review-buttons-container">
                                            <p class="left">Forgot an Item? <a href="#">Edit Your Cart</a></p>
                                            <button type="submit" title="Place Order" class="btn btn-default"><span>Place Order</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-offset-1 col-md-3">
                <div class="checkout-widget">
                    <h2 class="widget-title">YOUR CHECKOUT PROGRESS</h2>
                    <ul>
                        <li><a href="#"><i class="fa fa-minus"></i> Billing Address</a></li>
                        <li><a href="#"><i class="fa fa-minus"></i> Shipping Address</a></li>
                        <li><a href="#"><i class="fa fa-minus"></i> Shipping Method</a></li>
                        <li><a href="#"><i class="fa fa-minus"></i> Payment Method</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Check Out Area End -->
    <div style="margin-bottom: 20px;"></div>
@endsection