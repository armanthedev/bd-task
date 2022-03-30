@extends('layouts.admin')
@section('title', 'parentcatagory')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header card-title">
            <h3>Parent Catagory List</h3>
        </div>


        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-info">ID</th>
                        <th class="text-info">Category Name</th>
                        <th class="text-info">Category Image</th>
                        <th class="text-info">Status</th>
                        <th class="text-info">Action</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach($parentcategory as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->c_name}}</td>
                        <td><img src="{{ asset('storage/product-image/'.$value->c_image) }}"  width="50" height="50"></td>
                        <td>{{$value->status}}</td>
                        <td class="d-flex">
                             <button class="btn btn-success shadow mr-2" type="submit"><i class="far fa-check-circle"></i></button>

                           <a href="{{route('editparent',['id'=>$value->id])}}" class="mr-2 btn btn-primary shadow" type="submit">
                                <i class="fas fa-pen-alt"></i>
                            </button></a>
                            <form action="{{ route('deleteparent',['id'=>$value->id]) }}"
                                    method="post">
                                   @method('delete')
                                   @csrf
                                    
                                   {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                                    <button class="btn btn-danger shadow" type="submit"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>



@endsection
