@extends('layouts.admin')
@section('title', 'manageproduct')
@section('content')

<div class="container-fluid">
    <div class="col-lg-12 table-border border-light bg_table shadow-sm p-3 ">
        <!-- /.card -->
        <div class="card">
            <div class="card-header card-title">
                <h3>Product List</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-info">ID</th>
                            <th class="text-info">Image</th>
                            <th class="text-info">product Name</th>
                            <th class="text-info">Catagory</th>
                            <th class="text-info">Qty.</th>
                            <th class="text-info">Buying Price(s)</th>
                            <th class="text-info">MRP Price</th>
                            <th class="text-info">Selling Price</th>
                            <th class="text-info">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td><img src="{{ asset('storage/product-image/'.$value->image) }}"  width="50" height="50"></td>
                            <td>{{$value->p_name}}</td>
                            <td>{{$value->c_name}}</td>
                            <td>{{$value->quantity}}</td>
                            <td>{{$value->b_price}} </td>
                            <td>{{$value->mrp_price}}</td>
                            <td>{{$value->s_price}}</td>
                            <td class="d-flex">
                                <form action="{{ route('deleteproduct',['id'=>$value->id]) }}"
                                    method="post">
                                   {{-- @method('delete') --}}
                                   @csrf
                                    
                                   <input type="hidden" name="_method" value="DELETE">
                                    <button class="mr-2 btn btn-danger shadow" type="submit"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>

                                <a href="{{route('editproduct',['id'=>$value->id])}}" class="btn btn-primary shadow">
                                    <i class=" fas fa-edit"></i>
                                </a>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>





@endsection
