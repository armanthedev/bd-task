@extends('layouts.admin')
@section('title', 'childcatagory')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header card-title">
            <h3>Child Catagory List</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-info">ID</th>
                        <th class="text-info">Caragory Name</th>
                        <th class="text-info">Caragory Image</th>
                        <th class="text-info">Status</th>
                        <th class="text-info">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($childcategory as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->c_name }}</td>
                            <td><img src="{{ asset('storage/product-image/'.$value->c_image) }}"  width="50" height="50"></td>
                            <td>{{ $value->status }}</td>
                            <td class="d-flex ">
                                <button class="btn btn-success shadow mr-2" type="submit"><i
                                        class="far fa-check-circle"></i></button>

                                <a class="mr-2"
                                    href="{{ route('editchild',['id'=>$value->id]) }}">
                                    <button class="btn btn-primary shadow" type="submit"><i
                                            class="fas fa-pen-alt"></i></button>
                                </a>
                                {{-- <a href="{{route('deletechild',['id'=>$value->id]) }}">
                                <button class="btn btn-danger shadow" type="submit"><i
                                        class="fas fa-trash-alt"></i></button>
                                </a> --}}
                                <form class="mr-2"
                                    action="{{ route('deletechild',['id'=>$value->id]) }}"
                                    method="post">
                                    {{-- @method('delete') --}}
                                    @csrf
                                    
                                    <input type="hidden" name="_method" value="DELETE">
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
