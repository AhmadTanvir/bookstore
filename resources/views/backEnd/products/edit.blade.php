@extends('backEnd.layouts.master')
@section('title','Add Products Page')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('product.index')}}">Products</a> <a href="#" class="current">Edit Product</a> </div>
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
                                    <form action="{{route('product.update',$edit_product->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        {{method_field("PUT")}}
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Select Category</label>
                                            <select name="categories_id"  class="form-control" id="exampleFormControlSelect1">
                                                @foreach($categories as $key=>$value)
                                                    <option value="{{$key}}"{{$edit_category->id==$key?' selected':''}}>{{$value}}</option>
                                                    <?php
                                                    if($key!=0){
                                                        $sub_categories=DB::table('categories')->select('id','name')->where('parent_id',$key)->get();
                                                        if(count($sub_categories)>0){
                                                            foreach ($sub_categories as $sub_category){?>
                                                                <option value="{{$sub_category->id}}"{{$edit_category->id==$sub_category->id?' selected':''}}>&nbsp;&nbsp;--{{$sub_category->name}}</option>
                                                           <?php }
                                                        }
                                                    }
                                                    ?>
                                                @endforeach
                                            </select>
                                            </div>


                                        <div class="form-group">
                                            <label for="p_name">Name</label>
                                            <div class="controls{{$errors->has('p_name')?' has-error':''}}">
                                                <input type="text" name="p_name" id="p_name" class="form-control" value="{{$edit_product->p_name}}" title="">
                                                <span class="text-danger">{{$errors->first('p_name')}}</span>
                                            </div>
                                        </div>


                                        <div class="form-group{{$errors->has('p_code')?' has-error':''}}">
                                            <label for="p_name">Code</label>
                                            <input type="text" name="p_code" id="p_code" class="form-control" value="{{$edit_product->p_code}}" title="">
                                            <span class="text-danger">{{$errors->first('p_code')}}</span>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Color</label>
                                            <div class="controls{{$errors->has('p_color')?' has-error':''}}">
                                                <input type="text" name="p_color" id="p_color" value="{{$edit_product->p_color}}">
                                                <span class="text-danger">{{$errors->first('p_color')}}</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <div class="controls{{$errors->has('description')?' has-error':''}}">
                                                <textarea class="textarea_editor form-control" name="description" id="description" rows="6" placeholder="Product Description">{{$edit_product->description}}</textarea>
                                                <span class="text-danger">{{$errors->first('description')}}</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price ($)</label>
                                            <div class="controls{{$errors->has('price')?' has-error':''}}">
                                                <div class="input-prepend"> <span class="add-on"></span>
                                                    <input type="number" name="price" id="price" class="form-control" value="{{$edit_product->price}}" title="">
                                                    <span class="text-danger">{{$errors->first('price')}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="image" class="control-label">Image upload</label>
                                            <div class="controls">
                                                <input type="file" class="form-control" name="image" id="image"/>
                                                <span class="text-danger">{{$errors->first('image')}}</span>
                                                @if($edit_product->image!='')
                                                    &nbsp;&nbsp;&nbsp;
                                                    <a href="javascript:" rel="{{$edit_product->id}}" rel1="delete-image" class="btn btn-danger btn-mini deleteRecord">Delete Old Image</a>
                                                    <img src="{{url('products/small/',$edit_product->image)}}" width="35" alt="">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="" class="control-label"></label>
                                            <div class="controls">
                                                <button type="submit" class="btn btn-primary">Update Product</button>
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
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('js/jquery.toggle.buttons.js')}}"></script>
    <script src="{{asset('js/masked.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.form_common.js')}}"></script>
    <script src="{{asset('js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        $(".deleteRecord").click(function () {
            var id=$(this).attr('rel');
            var deleteFunction=$(this).attr('rel1');
            swal({
                title:'Are you sure?',
                text:"You won't be able to revert this!",
                type:'warning',
                showCancelButton:true,
                confirmButtonColor:'#3085d6',
                cancelButtonColor:'#d33',
                confirmButtonText:'Yes, delete it!',
                cancelButtonText:'No, cancel!',
                confirmButtonClass:'btn btn-success',
                cancelButtonClass:'btn btn-danger',
                buttonsStyling:false,
                reverseButtons:true
            },function () {
                window.location.href="/admin/"+deleteFunction+"/"+id;
            });
        });
        $('.textarea_editor').wysihtml5();
    </script>
@endsection