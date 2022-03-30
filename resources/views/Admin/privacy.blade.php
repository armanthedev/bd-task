@extends('layouts.admin')
@section('title', 'privacy')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header card-title">
            Privacy & Policy
        </div>
        <div class="card-body col-sm-10">
            <form action="{{route('privacy')}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Heading Title*</label>
                    <div class="col-sm-10">
                        <input name="privacy_heading" value="{{$privacy->privacy_heading}}" type="text"
                            class="form-control" id="title" placeholder="privacy title" required>
                    </div>
                </div>
                <div class="form-group d-flex ">
                    <label for="summernote" class="col-sm-2 col-form-label">Description</label>
                    <div class="card col-sm-10 card-outline">
                        <div class="card-body">
                            <textarea name="privacy_des" id="summernote" required>
                            {{$privacy->privacy_des}}
                                    </textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mr-3 btn-md">Cencel</button>
                    <button type="submit" class="btn btn-success btn-md">Update</button>
                </div>

            </form>
        </div>

    </div>

</div>

@endsection
