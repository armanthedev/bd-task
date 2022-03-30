@extends('layouts.admin')
@section('title', 'emailsetting')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header card-title">
           Email Gateway
        </div>
        <div class="card-body">
            <form action="">
                <div class="d-flex justify-content-around">
                    <div class="col-lg-5">
                        <div class="form-group row ">
                            <label for="left_to_right" class="col-sm-3 col-form-label">Gateway *</label>
                            <div class="col-sm-9">
                                <select name="gateway_name" class="form-control">
                                    <option value="LTR" selected="selected">Budget Sms</option>
                                    <option value="RTL">Infobip</option>
                                    <option value="RTL">Nexmo</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-sm-3 col-form-label">Title *</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="title" placeholder="Bd Task" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="host" class="col-sm-3 col-form-label">Host *</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="host"
                                    placeholder="https://api.budgetsms.net/sendsms/?" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="port" class="col-sm-3 col-form-label">Port *</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="port"
                                    placeholder="12345" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Username" class="col-sm-3 col-form-label">Username *</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="Username" placeholder="bdtask" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password *</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="password" placeholder="........" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mailtaype" class="col-sm-3 col-form-label">Mail Type *</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="mailtaype"
                                    placeholder="html" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="charset" class="col-sm-3 col-form-label">charset *</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="charset"
                                    placeholder="utf-8" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-success btn-md">Save</button>
                        </div>
                        Note: If problem with google smtp then please use another third party smtp server
                    </div>


                    <div class=" col-lg-5">
                        <div class="row mb-3 d-flex justify-content-center">
                            <div class="card-title">
                            Test Your SMTP Email Server
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Username" class="col-sm-3 col-form-label">To *</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="Username" placeholder="e.example@gmail.com"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Username" class="col-sm-3 col-form-label">Subject *</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="Username" placeholder="e.testmail"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-sm-3 col-form-label">Message *</label>
                            <div class="col-sm-9">
                                <textarea name="message" class="form-control" placeholder="message Time" maxlength="255"
                                    rows="7">Test Message
                            </textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-success btn-md">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
