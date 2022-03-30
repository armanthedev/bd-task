@extends('layouts.admin')
@section('title', 'editdeliveryinfo')
@section('content')

<div class="card p-2">
    <div class="card-header card-title">
        <h3>Edit Delivery info</h3>
    </div> 

    <!-- // -->
    <div class="p-2 card-body">
        <form class="d-flex justify-content-between" action="{{route('editedelivery',['id'=>$editdelivery->id])}}" method="POST">
            @csrf
            <div class="product_l_hand col-lg-8">
                <div class="form-group">
                    <label for="user"> User</label>
                    <input type="text" name="user" value="{{$editdelivery->u_name}}" class="form-control form-control-md" id="user"
                        placeholder="User Name" required>

                </div>
                <div class="form-group">
                    <label for="payment"> Payment Method</label>
                    <input type="text" name="payment"  value="{{$editdelivery->pay_method}}" class="form-control form-control-md" id="payment"
                        placeholder="Payment Method" required>
                </div>
                <div class="form-group">
                    <label for="comment"> Comment</label>

                    <textarea id="comment" type="text" name="comment" class="form-control form-control-md"
                        placeholder="commentd" rows="3" cols="80" required>
                        {{$editdelivery->Comments}}
                    </textarea>
                </div>

            </div>
            <div class="product_r_hand col-lg-3">

                <div class="form-group ">
                    <label for="file" class="d-block">Date</label>
                    <input name="date" value="{{$editdelivery->Date}}" type="date" class="form-control" id="file" required>
                </div>

                <div class="form-group ">
                    <label for="amount">Amount</label>
                    <input name="amount" value="{{$editdelivery->Amount}}" type="number" class="form-control" id="amount" required>
                </div>
                <div class="form-group ">
                    <label for="Fees">Fees</label>
                    <input name="fees" value="{{$editdelivery->Fees}}" type="number" class="form-control" id="Fees" required>
                </div>

                <button type="submit" class="btn btn-success shadow">Update</button>
            </div>



        </form>
    </div>
</div>
@endsection
