@extends('backEnd.layouts.master')
@section('title','Add Products Page')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('product.index')}}">Products</a> <a href="{{route('product.create')}}" class="current">Add New Product</a> </div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif
       <div class="row">
                        <div class="col-md-8" style="margin: 0 70px 30px 200px">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-list"></i>
                                    </div>
                                    <div class="spur-card-title"> Add New Products </div>
                                </div>
                                <div class="card-body ">
                                    <form action="{{route('product.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Select Category</label>
                                            <select name="categories_id"  class="form-control" id="exampleFormControlSelect1">
                                                @foreach($categories as $key=>$value)
                                                 <option value="{{$key}}">{{$value}}</option>
                                                   <?php
                                                if($key!=0){
                                                    $sub_categories=DB::table('categories')->select('id','name')->where('parent_id',$key)->get();
                                                    if(count($sub_categories)>0){
                                                        foreach ($sub_categories as $sub_category){
                                                     echo '<option value="'.$sub_category->id.'">&nbsp;&nbsp;--'.$sub_category->name.'</option>';
                                                                    }
                                                                }
                                                            }
                                                        ?>
                                                    @endforeach
                                            </select>
                                            </div>


                                        <div class="form-group">
                                            <label for="p_name">Name</label>
                                            <div class="controls{{$errors->has('p_name')?' has-error':''}}">
                                                <input type="text" name="p_name" id="p_name" class="form-control" value="{{old('p_name')}}" title="" required="required">
                                                <span class="text-danger">{{$errors->first('p_name')}}</span>
                                            </div>
                                        </div>


                                        <div class="form-group{{$errors->has('p_code')?' has-error':''}}">
                                            <label for="p_name">Code</label>
                                            <input type="text" name="p_code" class="form-control" id="p_name" placeholder="Input Code" value="{{old('p_code')}}">
                                            <span class="text-danger">{{$errors->first('p_code')}}</span>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Color</label>
                                            <div class="controls{{$errors->has('p_color')?' has-error':''}}">
                                                <input type="text" name="p_color" class="form-control" id="p_color" value="{{old('p_color')}}" placeholder="Type Product Color">
                                                <span class="text-danger">{{$errors->first('p_color')}}</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <div class="controls{{$errors->has('description')?' has-error':''}}">
                                                <textarea class="textarea_editor form-control" name="description" id="description" rows="6" placeholder="Product Description" >{{old('description')}}</textarea>
                                                <span class="text-danger">{{$errors->first('description')}}</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price ($)</label>
                                            <div class="controls{{$errors->has('price')?' has-error':''}}">
                                                <div class="input-prepend"> <span class="add-on"></span>
                                                    <input type="number" name="price" id="price" class="form-control" value="{{old('price')}}" title="" required="required">
                                                    <span class="text-danger">{{$errors->first('price')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="image" class="control-label">Image upload</label>
                                            <div class="controls">
                                                <input type="file" class="form-control" name="image" id="image"/>
                                                <span class="text-danger">{{$errors->first('image')}}</span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="" class="control-label"></label>
                                            <div class="controls">
                                                <button type="submit" class="btn btn-primary">Add New Product</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
       
                    </div>
    </div>
@endsection
@section('jsblock')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    crossorigin="anonymous"></script>
    <script src="{{asset('js/spur.js')}}"></script>
@endsection