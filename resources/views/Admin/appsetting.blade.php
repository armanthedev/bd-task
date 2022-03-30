@extends('layouts.admin')
@section('title', 'appsetting')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header card-title">
            Application Setting
        </div>
        <div class="card-body col-sm-10">
            <form action="{{route('appsetting')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Application Title*</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$appsetting->title}}" name="apptitle" class="form-control"
                            id="title" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="offer" class="col-sm-2 col-form-label">Order Offer</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$appsetting->offer}}" name="offer" class="form-control" id="offer"
                            placeholder=" Free Shipping for all Order of $99" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$appsetting->address}}" name="address" class="form-control"
                            id="address" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email Address</label>
                    <div class="col-sm-10">
                        <input type="email" value="{{$appsetting->email}}" name="email" class="form-control" id="email"
                            placeholder="admin@gmail.com" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" value="{{$appsetting->phone}}" name="phone" class="form-control" id="Phone"
                            placeholder="+123456789" required>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <label for="favicon" class="col-sm-2 col-form-label">Favicon</label>
                    <div class="col-sm-10">
                    <input type="hidden" name="old_image_one" value="{{$appsetting->fav_img}}">
                        <input type="file" value="{{$appsetting->fav_img}}" name="favicon" class="form-control-file"
                            id="favicon">
                        <img src="{{ asset('storage/product-image/'.$appsetting->fav_img) }}" widh="70" height="70">
                    </div>

                </div>
                <div class="form-group row">
                    <label for="sitelogo" class="col-sm-2 col-form-label">Site Logo</label>
                    <div class="col-sm-10">
                    <input type="hidden" name="old_image_two" value="{{$appsetting->site_logo}}">
                        <input type="file" value="{{$appsetting->site_logo}}" name="sitelogo" class="form-control-file"
                            id="sitelogo">
                        <img src="{{ asset('storage/product-image/'.$appsetting->site_logo) }}" widh="70" height="70">
                    </div>

                </div>
                <div class="form-group row">
                    <label for="left_to_right" class="col-sm-2 col-form-label">Admin Align</label>
                    <div class="col-sm-10">
                        <select name="admin_align" class="form-control">
                            <option value="LTR" selected="selected">Left to Right</option>
                            <option value="RTL">Right to Left</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="office_time" class="col-sm-2 col-form-label">Office Time</label>
                    <div class="col-sm-10">
                        <textarea name="office_time" class="form-control" placeholder="Office Time" maxlength="255"
                            rows="7">
                            {{$appsetting->office_time}}
                            </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Latitude" class="col-sm-2 col-form-label">Latitude, Longitude</label>
                    <div class="col-sm-10">
                        <input type="text" name="latitude" class="form-control" id="Latitude"
                            placeholder="40.6700, -73.9400">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="footer" class="col-sm-2 col-form-label">Footer Text</label>
                    <div class="col-sm-10">
                        <textarea name="copyright_text" class="form-control" placeholder="Office Time" maxlength="255"
                            rows="7">{{$appsetting->copyright_text}}
                            </textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-danger mr-3 btn-md">Reset</button>
                    <button type="submit" class="btn btn-success btn-md">Update</button>
                </div>

            </form>
        </div>

    </div>

</div>

@endsection
