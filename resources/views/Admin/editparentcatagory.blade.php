@extends('layouts.admin')
@section('title', 'editparentcategory')
@section('content')

<div class="container-fluid">
    <div class="card col-lg-12">
        <div class="card-header card-title">
            <h3>Edit Catagories </h3>
        </div>
        <div class="card-body">
            <form action="{{route('editparent',['id'=>$editparent->id])}}" method="post" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PUT">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="c_name" value="{{$editparent->c_name}}" type="text"
                        class="form-control form-control-md" id="exampleInputEmail1" placeholder="Catagory Name"
                        required>

                </div>
                <div class="form-group ">
                    <label for="subcatagory">Catagory type</label>
                    <select name="category" id="parentcatagory" class="form-control form-control-md" required>
                        <option value="{{$editparent->category}}">Parent Category</option>
                    </select>

                </div>
                <div class="form-group">
                    <label for="image" class="row">Category Image</label>
                    <input name="image" type="file" id="image">
                    <input type="hidden" name="old_image" value="{{$editparent->c_image}}">
                    <img src="{{ asset('storage/product-image/'.$editparent->c_image) }}" widh="70" height="70">
                </div>
                <div class="form-group ">
                    <label for="catagoryStatus">Status</label>
                    <div class="d-flex align-items-center">
                        <div class="form-check mr-2">
                            <input class="form-check-input" type="radio" value="1" name="status" {{ ($editparent->status=="1")? "checked" : "" }}>
                         
                            <label class="form-check-label">Active</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="0" name="status" {{ ($editparent->status=="0")? "checked" : "" }}>
                            <label class="form-check-label">In Active</label>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary shadow">Update Catagory</button>
            </form>
        </div>
    </div>




</div>




@endsection
