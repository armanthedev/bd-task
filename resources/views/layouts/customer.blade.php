<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('ecommerce/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('ecommerce/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('ecommerce/css/elegant-icons.css')}}">
    <link rel="stylesheet" href="{{asset('ecommerce/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('ecommerce/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('ecommerce/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('ecommerce/css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset('ecommerce/css/style.css')}}">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{asset('storage/product-image/'.$appsetting->site_logo)}}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>{{ !(session()->get('cart'))?'0':count(session()->get('cart'))}}</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li ><a class="{{request()->is('home') ? 'acitve' : ''}}" href="{{route('home')}}">Home</a></li>
                <li class="{{request()->is('shop')?'active':''}}"><a  href="{{route('shop')}}">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="{{route('shoppingcart')}}">Shoping Cart</a></li>
                        <li><a href="{{route('checkout')}}">Check Out</a></li>
                    </ul>
                </li>
                <li ><a class="{{request()->is('blog') ? 'active' : ''}}" href="{{route('blog')}}">Blog</a></li>
                <li ><a class="{{request()->is('contact') ? 'active' : ''}}" href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="{{$sociallink->facebook}}"><i class="fa fa-facebook"></i></a>
            <a href="{{$sociallink->twitter}}"><i class="fa fa-twitter"></i></a>
            <a href="{{$sociallink->linkedin}}"><i class="fa fa-linkedin"></i></a>
            <a href="{{$sociallink->pinterest}}"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i>{{$appsetting->email}}</li>
                <li>{{$appsetting->offer}}</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> {{$appsetting->email}}</li>
                                <li>{{$appsetting->offer}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="{{$sociallink->facebook}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$sociallink->twitter}}"><i class="fa fa-twitter"></i></a>
                                <a href="{{$sociallink->linkedin}}"><i class="fa fa-linkedin"></i></a>
                                <a href="{{$sociallink->pinterest}}"><i class="fa fa-pinterest-p"></i></a>
                            </div>

                            <div class="header__top__right__auth">
                                <a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <!-- {{asset('/ogani/img/logo.png')}} -->
                        <a href="{{route('home')}}"><img src="{{asset('storage/product-image/'.$appsetting->site_logo)}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="{{request()->is('home') ? 'active': ''}}"><a href="{{route('home')}}">Home</a></li>
                            <li class="{{ request()->is('shop') ? 'active' : '' }}"><a href="{{route('shop')}}">Shop</a></li>
                            <li class="{{request()->is('shoppingcart') ? 'active' :(request()->is('checkout') ? 'active' : '') }}" ><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li class="{{ (request()->is('shoppingcart')) ? 'active' : '' }}"><a href="{{route('shoppingcart')}}">Shoping Cart</a></li>
                                    <li class="{{ (request()->is('checkout')) ? 'active' : '' }}""><a href="{{route('checkout')}}">Check Out</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->is('blog') ? 'active' : '' }}"><a href="{{route('blog')}}">Blog</a></li>
                            <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="{{route('shoppingcart')}}"><i class="fa fa-shopping-bag"></i> <span>{{ !(session()->get('cart'))?'0':count(session()->get('cart'))}}</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-lg-12">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        @if($errors->any())
                        <div class="alert alert-danger">
                            {{$errors->first()}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>


                    @yield('content')
                   
    <!-- Hero Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            
                            <a href="{{route('home')}}"><img src="{{ asset('storage/product-image/'.$appsetting->site_logo)}}" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: {{$appsetting->address}}</li>
                            <li>Phone: {{$appsetting->phone}}</li>
                            <li>Email: {{$appsetting->email}}</li>
                        </ul>
                        {{-- <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="{{route('deliver')}}">Delivery infomation</a></li>
                            <li><a href="{{route('privacypolicy')}}">Privacy Policy</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="{{route('home')}}" method="post">
                            @csrf
                            <input type="text" name="email" placeholder="Enter your mail">
                            <button type="submit"  class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="{{$sociallink->facebook}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{$sociallink->linkedin}}"><i class="fa fa-linkedin"></i></a>
                            <a href="{{$sociallink->instagram}}"><i class="fa fa-instagram"></i></a>
                            <a href="{{$sociallink->pinterest}}"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p>{{$appsetting->copyright_text}}| <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://armanhosen.com" target="_blank">armanhosen.com</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="{{asset('ecommerce/img/payment-item.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('ecommerce/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('ecommerce/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('ecommerce/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('ecommerce/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('ecommerce/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('ecommerce/js/mixitup.min.js')}}"></script>
    <script src="{{asset('ecommerce/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('ecommerce/js/main.js')}}"></script>



</body>

</html>
