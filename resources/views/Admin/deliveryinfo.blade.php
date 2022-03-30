@extends('layouts.admin')
@section('title', 'deliveryinfo')
@section('content')

<div class="container-fluid">
    <div class="card">
            <div class="card-header">
                <div class="card-title">
                   Delivery info
                </div>
                
            </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-info">SL No.</th>
                        <th class="text-info">User</th>
                        <th class="text-info">Amount</th>
                        <th class="text-info">Payment Method</th>
                        <th class="text-info">Fees</th>
                        <th class="text-info">Comments</th>
                        <th class="text-info">Date</th>
                        <th class="text-info">Action/Status</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($deliveryinfo as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->u_name}}</td>
                        <td>{{$value->Amount}}</td>
                        <td>{{$value->pay_method}}</td>
                        <td>{{$value->Fees}}</td>
                        <td>{{$value->Comments}}</td>
                        <td>{{$value->Date}}</td>
                        <td> <a class="btn btn-primary shadow" href="{{route('editedelivery',['id'=>$value->id])}}"><i class="fas fa-edit"></i></a> 
                           
                            <a class="btn btn-danger shadow" href="#"><i class="fas fa-edit"></i></a>
                          
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
