@extends('backEnd.layouts.master')
@section('title','List Products')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{route('product.index')}}" class="current">Products</a></div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done!</strong> {{Session::get('message')}}
            </div>
        @endif
            <div class="widget-content nopadding">
                            <div class="card spur-card">
                                <div class="card-header">
                                    <div class="spur-card-icon">
                                        <i class="fas fa-table"></i>
                                    </div>
                                    <div class="spur-card-title">List Products</div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-in-card">
                                        <thead>
                                     <tr>
                                     <th>ID</th>
                                     <th>Image</th>
                                     <th>Product Name</th>
                                     <th>Under Category</th>
                                     <th>Code Of Product</th>
                                     <th>Product Color</th>
                                     <th>Price</th>
                                     <th>Image Gallery</th>
                                     <th>Add Attribute</th>
                                      <th>Action</th>
                                    </tr>
                                        </thead>
                                        <tbody>
                                 @foreach($products as $product)
                                  <?php $i++; ?>
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td style="text-align: center;"><img src="{{url('products/small',$product->image)}}" alt="" width="50"></td>
                                                <td style="vertical-align: middle;">{{$product->p_name}}</td>
                                                <td style="vertical-align: middle;">{{$product->category->name}}</td>
                                                <td style="vertical-align: middle;">{{$product->p_code}}</td>
                                                <td style="vertical-align: middle;">{{$product->p_color}}</td>
                                                <td style="vertical-align: middle;">{{$product->price}}</td>
                                                <td class="product-btns" style="vertical-align: middle;text-align: center;">
                                                    <a href="{{route('image-gallery.show',$product->id)}}" class=""><i class="fa fa-image"></i><span class="tooltipp">Add Images</span></a></td>
                                                <td class="product-btns" style="vertical-align: middle;text-align: center;"><a href="{{route('product_attr.show',$product->id)}}"><i class="fa fa-plus"><span class="tooltipp">Add Attr</span></i></a></td>
                                                <td class="product-btns" style="text-align: center; vertical-align: middle;">
                                                    <a href="#myModal{{$product->id}}" data-toggle="modal"><i class="fa fa-eye"><span class="tooltipp">view</span></i></a>
                                                    <a href="{{route('product.edit',$product->id)}}"><i class="fa fa-edit"></i><span class="tooltipp">edit</span></a>
                                                    <a href="javascript:" rel="{{$product->id}}" rel1="delete-product" class="deleteRecord"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            {{--Pop Up Model for View Product--}}
                                            <div id="myModal{{$product->id}}" class="modal hide">
                                                <div class="modal-header">
                                                    <button data-dismiss="modal" class="close" type="button">×</button>
                                                    <h3>{{$product->p_name}}</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center"><img src="{{url('products/small',$product->image)}}" width="100" alt="{{$product->p_code}}"></div>
                                                    <p class="text-center">{{$product->description}}</p>
                                                </div>
                                            </div>
                                            {{--Pop Up Model for View Product--}}
                                        @endforeach
                                        </tbody>
                                    </table>
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
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="{{asset('js/matrix.popover.js')}}"></script>
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
    </script>
@endsection