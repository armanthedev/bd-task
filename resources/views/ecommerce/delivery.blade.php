@extends('layouts.customer')
@section('title', 'deliveryinfo')
@section('content')

<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
                    <ul>
                        @foreach($department as $value)

                        <li><a href="#">{{$value->c_name}}</a></li>

                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>{{$appsetting->phone}}</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{asset('ecommerce/img/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Delivery Info</h2>
                    <div class="breadcrumb__option">
                        <a href="{{route('home')}}">Home</a>
                        <span>Delivery Info</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<section class="spad">
    <div class="container">

        <div class="card p-2">
            <div class="card-header card-title">
                <h3>Delivery info</h3>
            </div>
            <div class="p-2 card-body">
                <form class="d-flex justify-content-between" action="{{route('deliver')}}" method="POST">
                    @csrf
                    <div class="product_l_hand col-lg-8">
                        <div class="form-group">
                            <label for="user"> User</label>
                            <input type="text" name="user" class="form-control form-control-md" id="user"
                                placeholder="User Name" required>

                        </div>
                        <div class="form-group">
                            <label for="payment"> Payment Method</label>
                            <input type="text" name="payment" class="form-control form-control-md" id="payment"
                                placeholder="Payment Method" required>
                        </div>
                        <div class="form-group">
                            <label for="comment"> Comment</label>

                            <textarea id="comment" type="text" name="comment" class="form-control form-control-md"
                                placeholder="commentd" rows="3" cols="80" required>
                        </textarea>
                        </div>

                    </div>
                    <div class="product_r_hand col-lg-3">

                        <div class="form-group ">
                            <label for="file" class="d-block">Date</label>
                            <input name="date" type="date" class="form-control" id="file" required>
                        </div>

                        <div class="form-group ">
                            <label for="amount">Amount</label>
                            <input name="amount" type="number" class="form-control" id="amount" required>
                        </div>
                        <div class="form-group ">
                            <label for="Fees">Fees</label>
                            <input name="fees" type="number" class="form-control" id="Fees" required>
                        </div>

                        <button type="submit" class="btn btn-success shadow">Publish</button>
                    </div>



                </form>
            </div>
        </div>



    </div>

</section>

@endsection
