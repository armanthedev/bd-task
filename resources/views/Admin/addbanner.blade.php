@extends('layouts.admin')
@section('title', 'addbanner')
@section('content')

<div class="container-fluid">
    <div class="card col-lg-12">
        <div class="card-header card-title">
            <h3> Add New Banner </h3>
        </div>
        <div class="card-body">
            <form action="{{route('addbanner')}}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="b_name" value="{{$editbanner->b_name}}" type="text" class="form-control form-control-md" id="exampleInputEmail1"
                        placeholder="Banner Name" required>

                </div>
                <div class="form-group">
                    <label for="summernote">Description</label>
                    <div class="card card-outline">
                        <div class="card-body">
                            <textarea name="description" id="summernote" required>
                            {{$editbanner->description}}
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group ">
                <label for="exampleInputEmail1">Image</label>
                    <div class="custom-file">
                        <input name="image" value="{{$editbanner->image}}" type="file" class="custom-file-input" id="validatedCustomFile">

                        <input type="hidden" name="old_image" value="{{$editbanner->image}}">

                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                    <img class="mt-3" src="{{ asset('storage/product-image/'.$editbanner->image) }}" widh="70" height="70">
                </div>
                <button type="submit" class="btn btn-primary">Add New Banner</button>
            </form>
        </div>
    </div>




</div>




@endsection
