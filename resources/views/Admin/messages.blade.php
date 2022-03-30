@extends('layouts.admin')
@section('title', 'messages')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header card-title">
            <h3>Messages</h3>
        </div>


        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-info">ID</th>
                        <th class="text-info">Name</th>
                        <th class="text-info">E-mail</th>
                        <th class="text-info">Messages</th>

                    </tr>
                </thead>
                <tbody>
                   @foreach ($messages as $item)
                   <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->messages}}</td>
                </tr>
                   @endforeach
                   
                    
                    
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>



@endsection
