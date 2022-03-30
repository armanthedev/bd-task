@extends('layouts.admin')
@section('title', 'sociallink')
@section('content')

<div class="container-fluid">
    <div class="card col-lg-12">
        <div class="card-header card-title">
            <h3> Social Link </h3>
        </div>
        <div class="card-body">
            <form action="{{route('sociallink')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="facebook">Facebook URL:</label>
                    <input type="url" value="{{$sociallink->facebook}}" class="form-control form-control-md" id="facebook" name="facebook" required>
                </div>
                <div class="form-group">
                    <label for="twitter">Twitter URL:</label>
                    <input type="url" value="{{$sociallink->twitter}}" class="form-control form-control-md" id="twitter" name="twitter" required>
                </div>
                <div class="form-group">
                    <label for="linkedin">Linkdin URL:</label>
                    <input type="url" value="{{$sociallink->linkedin}}" class="form-control form-control-md" id="linkedin" name="linkedin"required>
                </div>
                <div class="form-group">
                    <label for="instagram">Instagram URL:</label>
                    <input type="url" value="{{$sociallink->instagram}}" class="form-control form-control-md" id="instagram" name="instagram"required>
                </div>
                <div class="form-group">
                    <label for="pinterest">Pinterest URL:</label>
                    <input type="url" value="{{$sociallink->pinterest}}" class="form-control form-control-md" id="pinterest" name="pinterest" required>
                </div>

                <button type="submit" class="btn btn-danger mr-3">cancel</button>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>




</div>




@endsection
