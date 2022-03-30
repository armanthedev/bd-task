@extends('layouts.admin')
@section('title', 'subscribers')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header card-title">
            <h3>Subscribers List</h3>
        </div>


        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-info">ID</th>
                        <th class="text-info">Subscriber</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($subscriber as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->email}}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>



@endsection
