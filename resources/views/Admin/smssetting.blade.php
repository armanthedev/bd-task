@extends('layouts.admin')
@section('title', 'smssetting')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header card-title">
            SMS Gateway
        </div>
        <div class="card-body">
            {{-- <form action="">
                
                <div class="d-flex justify-content-around">
                    <div class="col-lg-5">
                        <div class="form-group row ">
                            <label for="left_to_right" class="col-sm-3 col-form-label">Gateway*</label>
                            <div class="col-sm-9">
                                <select name="gateway_name" class="form-control">
                                    <option value="LTR" selected="selected">Budget Sms</option>
                                    <option value="RTL">Infobip</option>
                                    <option value="RTL">Nexmo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-sm-3 col-form-label">Title*</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="title" placeholder="Bd Task" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="host" class="col-sm-3 col-form-label">Host*</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="host"
                                    placeholder="https://api.budgetsms.net/sendsms/?" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Username" class="col-sm-3 col-form-label">Username*</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="Username" placeholder="bdtask" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Username" class="col-sm-3 col-form-label">User Id*</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="Username" placeholder="154" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Username" class="col-sm-3 col-form-label">Api Key*</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="Username"
                                    placeholder="r44ee7b6b3bd16cc69aec82f6tt" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-success btn-md">Save</button>
                        </div>
                    </div> --}}

                        <form action="{{route('smssetting')}}" method="post">
                            @csrf
                            <div class=" col-lg-5">
                                <div class="row mb-3 d-flex justify-content-center">
                                    <div class="card-title">
                                        Test Your SMS
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Username" class="col-sm-3 col-form-label">Mobile No*</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="phone" class="form-control" id="Username" placeholder="+12485746548"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="message" class="col-sm-3 col-form-label">Message*</label>
                                    <div class="col-sm-9">
                                        <textarea name="message" class="form-control" placeholder="message Time" maxlength="255"
                                            rows="7">Test Message
                                    </textarea>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success btn-md">Send</button>
                                </div>
                            </div>
                        </form>
                   
                {{-- </div>
            </form>
        </div> --}}
    </div>
</div>
@endsection
