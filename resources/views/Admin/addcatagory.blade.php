@extends('layouts.admin')
@section('title', 'addcatagory')
@section('content')

<div class="container-fluid">
    <div class="card col-lg-12">
        <div class="card-header card-title">
            <h3> Catagories </h3>
        </div>
        <div class="card-body">
            <form action="{{route('addcategory')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="c_name" type="text" class="form-control form-control-md" id="exampleInputEmail1"
                        placeholder="Catagory Name" required>

                </div>
                <div class="form-group ">
                    <label for="parentcatagory">Catagory Type</label>
                    <select name="category" id="parentcatagory" class="form-control form-control-md" required>
                        <option value="0">Parent Category</option>
                        @foreach($category as $value){
                        <option value="{{$value->id}}">{{$value->c_name}}</option>
                        }
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label for="image" class="row">Category Image</label>
                    <input name="image" type="file"  id="image">

                </div>
                <div class="form-group ">
                    <label for="catagoryStatus">Status</label>
                    <div class="d-flex align-items-center">
                        <div class="form-check mr-2">
                            <input class="form-check-input" type="radio" value="1" name="status" checked="">
                            <label class="form-check-label">Active</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="0" name="status">
                            <label class="form-check-label">In Active</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary shadow">Add New Catagory</button>
            </form>
        </div>
    </div>




</div>




@endsection
