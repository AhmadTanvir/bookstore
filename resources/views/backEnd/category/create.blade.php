@extends('backEnd.layouts.master')
@section('title','Add Category')
@section('content')
<div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('category.index')}}">Categories</a> <a href="{{route('category.create')}}" class="current">Add New Category</a> </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6" style="margin-top: 20px; margin-left: 200px">
                <div class="card spur-card">
                    <div class="card-header">
                        <div class="spur-card-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <div class="spur-card-title"> Create Catagory </div>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{route('category.store')}}" name="basic_validate" id="basic_validate" novalidate="novalidate">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="control-group{{$errors->has('name')?' has-error':''}}" style="padding: 10px">
                                <label for="exampleFormControlInput1">Category Name</label>
                                <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" placeholder="Name">
                                <span class="text-danger" id="chCategory_name" style="color: red;">{{$errors->first('name')}}</span>
                            </div>
                            <div class="control-group" style="padding: 10px">
                                <label for="exampleFormControlSelect1">Category Lavel</label>
                                <select name="parent_id" id="parent_id" class="form-control" style="width: 100%">
                                    @foreach($cate_levels as $key=>$value)
                                        <option value="{{$key}}">{{$value}}</option>
                                        <?php
                                            if($key!=0){
                                                $subCategory=DB::table('categories')->select('id','name')->where('parent_id',$key)->get();
                                                if(count($subCategory)>0){
                                                    foreach ($subCategory as $subCate){
                                                        echo '<option value="'.$subCate->id.'">&nbsp;&nbsp;--'.$subCate->name.'</option>';
                                                    }
                                                }
                                            }
                                        ?>
                                    @endforeach
                                </select>
                            </div>
                            <div class="control-group" style="padding: 10px">
                                <label for="description"> Description </label>
                                <textarea  class="form-control" name="description" id="description" rows="3">{{old('description')}}</textarea>
                            </div>
                            <div class="control-group{{$errors->has('url')?' has-error':''}}" style="padding: 10px">
                                <label for="inputCity">URL (Start with http://) :</label>
                                <input type="text" class="form-control" name="url" id="url">
                                <span class="text-danger">{{$errors->first('url')}}</span>
                            </div>
                            <div class="control-group{{$errors->has('status')?' has-error':''}}">
                                <label class="control-label">Enable :</label>
                                <div class="controls">
                                <input type="checkbox" name="status" id="status" value="1">
                                <span class="text-danger">{{$errors->first('status')}}</span>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Add New Category</button>
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


<!--  -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ui.custom.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.uniform.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/matrix.js') }}"></script>
    <script src="{{ asset('js/matrix.form_validation.js') }}"></script>
    <script src="{{ asset('js/matrix.tables.js') }}"></script>
    <script src="{{ asset('js/matrix.popover.js') }}"></script>
@endsection