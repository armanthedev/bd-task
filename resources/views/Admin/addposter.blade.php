@extends('layouts.admin')
@section('title', 'addposter')
@section('content')

<div class="container-fluid">
    <div class="card col-lg-12">
        <div class="card-header card-title">
            <h3> Add Poster </h3>
        </div>
        <div class="card-body">
            <form action="{{route('addposter')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <label for="image_one" class="row">Image One</label>
                    <input type="hidden" name="old_image_one" value="{{$poster->image_one}}">
                    <input name="image_one" type="file"  id="image_one">
                    <img src="{{ asset('storage/product-image/'.$poster->image_one) }}" widh="70" height="70">

                </div>
                <div class="form-group">
                    <label for="image_two" class="row">Image two</label>
                    <input type="hidden" name="old_image_two" value="{{$poster->image_two}}">
                    <input name="image_two" type="file"  id="image_two">
                    <img src="{{ asset('storage/product-image/'.$poster->image_two) }}" widh="70" height="70">

                </div>
                
                <button type="submit" class="btn btn-primary shadow">Add New Poster</button>
            </form>
        </div>
    </div>




</div>




@endsection
