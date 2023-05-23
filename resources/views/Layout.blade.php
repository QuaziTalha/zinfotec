<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/ekom/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 13:44:22 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/flaticon.css">
    <link rel="stylesheet" href="public/assets/css/remixicon.css">
    <link rel="stylesheet" href="public/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/assets/css/swiper-min.css">
    <link rel="stylesheet" href="public/assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="public/assets/css/fancybox.css">
    <link rel="stylesheet" href="public/assets/css/aos.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="public/assets/css/dark-theme.css">
    <link rel="stylesheet" href="public/assets/css/responsive.css">
    <title>Zinfotec Technologies PVT. LTD</title>
    <link rel="icon" type="image/png" href="public/assets/img/favicon.ico">
</head>

<body>

    <div class="loader js-preloader">
        <div></div>
        <div></div>
        <div></div>
    </div>

    {{--
<div class="switch-theme-mode">
<label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round"></span>
</label>
</div> --}}


    <div class="page-wrapper">

        <header class="header-wrap style1">
            <div class="header-top bg-mine-shaft">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-4 col-md-5">
                            <div class="header-top-left">
                                <p>Customized digital advertising solutions!</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-8 col-md-7">
                            <div class="header-top-right">

                                <ul class="social-profile list-style">
                                    <li>
                                        <a target="_blank" href="https://www.facebook.com/zinfotectechnologies?mibextid=LQQJ4d">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://instagram.com/">
                                            <i class="ri-pinterest-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{route('Home')}}">
                            <img class="logo-light" src="public/assets/img/logo.png" alt="logo">
                            <img class="logo-dark" src="public/assets/img/logo-white.png" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                            <div class="menu-close xl-none">
                                <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                            </div>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a href="{{route('Home')}}" class="nav-link {{app('request')->is("/")? "active" : ""}}">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('About')}}" class="nav-link {{app('request')->is("about")? "active" : ""}}">
                                        About Us
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Products
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">

                                        <li class="nav-item">
                                            <a href="{{route('Outdoor_Fixed')}}" class="nav-link {{app('request')->is("Product")? "active" : ""}}">Outdoor Fixed LED Video Wall Solutions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('Indoor_Fixed')}}" class="nav-link {{app('request')->is("Indoor_Fixed")? "active" : ""}}">Indoor LED Video Walls</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('LED_Mobile')}}" class="nav-link {{app('request')->is("LED_Mobile")? "active" : ""}}">LED Mobile Van Display</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('Single_Color')}}" class="nav-link {{app('request')->is("Single_Color")? "active" : ""}}">Customized Single Color LED Boards</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('PVC_Panel')}}" class="nav-link {{app('request')->is("PVC_Panel")? "active" : ""}}">PVC Panels & Decorative Walls</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('LED_Glow')}}" class="nav-link {{app('request')->is("LED_Glow")? "active" : ""}}">LED Glow Letter Cut Sign Board</a>
                                        </li>

                                        {{-- <li class="nav-item">
                                            <a href="{{route('Advertisement_LED_Screens')}}" class="nav-link {{app('request')->is("Product")? "active" : ""}}">Advertisement LED Screens</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('Products_List')}}" class="nav-link {{app('request')->is("Product")? "active" : ""}}">Rental LED Screen Indoor</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('Products_List')}}" class="nav-link {{app('request')->is("Product")? "active" : ""}}">Rental LED Screen Outdoor</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('Products_List')}}" class="nav-link {{app('request')->is("Product")? "active" : ""}}">Customized Single Color LED Boards</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('Products_List')}}" class="nav-link {{app('request')->is("Product")? "active" : ""}}">Customized Outdoor LED Boards</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('Products_List')}}" class="nav-link {{app('request')->is("Product")? "active" : ""}}">Customized Indoor LED Boards</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{route('Products_List')}}" class="nav-link {{app('request')->is("Product")? "active" : ""}}">PVC Panels</a>
                                        </li> --}}

                                    </ul>
                                </li>
                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Services
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{route('Product')}}" class="nav-link {{app('request')->is("Product")? "active" : ""}}">Services Details</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact Us</a>
                                </li>
                                <li class="nav-item xl-none  mt-3">
                                    <a href="" class="btn style1">Get a Qoute</a>
                                </li>
                            </ul>
                            <div class="others-options lg-none">
                                <a href="" class="btn style1">Get a Quote</a>
                            </div>


                        </div>
                    </nav>
                    <div class="mobile-bar-wrap">
                        <button class="searchbtn xl-none" type="button">
                            <i class="flaticon-search"></i>
                        </button>
                        <div class="shopcart d-xl-none">
                            <i class="flaticon-shopping-cart"></i>
                            <span>1</span>
                        </div>
                        <div class="mobile-menu xl-none">
                            <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-area">
                <div class="container">
                    <button type="button" class="close-searchbox">
                        <i class="ri-close-line"></i>
                    </button>
                    <form action="#">
                        <div class="form-group">
                            <input type="search" placeholder="Search Here" autofocus>
                        </div>
                    </form>
                </div>
            </div>
            <div class="cart-popup">
                <button type="button" class="close-cart-popup"><i class="ri-close-fill"></i></button>
                <div class="cart-popup-body">
                    <div class="cart-item">
                        <div class="cart-item-action">
                            <button class="delete-cart-item">
                                <i class="ri-close-circle-fill"></i>
                            </button>
                        </div>
                        <div class="cart-item-img">
                            <img src="public/assets/img/products/product-thumb-1.png" alt="Image">
                        </div>
                        <div class="cart-item-info">
                            <h5><a href="{{route('Product')}}">Over-Ear Headphone</a></h5>
                            <p>$28.00</p>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-item-action">
                            <button class="delete-cart-item">
                                <i class="ri-close-circle-fill"></i>
                            </button>
                        </div>
                        <div class="cart-item-img">
                            <img src="public/assets/img/products/product-thumb-2.png" alt="Image">
                        </div>
                        <div class="cart-item-info">
                            <h5><a href="{{route('Product')}}">JLB Base Earphone</a></h5>
                            <p>$40.00</p>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-item-action">
                            <button class="delete-cart-item">
                                <i class="ri-close-circle-fill"></i>
                            </button>
                        </div>
                        <div class="cart-item-img">
                            <img src="public/assets/img/products/product-thumb-3.png" alt="Image">
                        </div>
                        <div class="cart-item-info">
                            <h5><a href="{{route('Product')}}">Wireless Headphone</a></h5>
                            <p>$35.00</p>
                        </div>
                    </div>
                </div>
                <div class="cart-popup-footer">
                    <div class="total-amt">
                        <h5>Total Payable</h5>
                        <h5>$178.00</h5>
                    </div>
                    <div class="cart-popup-btn">
                        <a href="cart.html" class="btn style1">View Cart</a>
                        <a href="checkout.html" class="btn style2">Checkout</a>
                    </div>
                </div>
            </div>
        </header>


       @yield('content')


        <footer class="footer-wrap bg-mine-shaft">
            <div class="container">
                <div class="row pt-100 pb-75">
                    <div class="col-xl-5 col-lg-4 col-md-6 col-sm-6 pe-xl-5">
                        <div class="footer-widget">
                            <a href="{{route('Home')}}" class="footer-logo">
                                <img src="public/assets/img/logo-white.png"   alt="Image">
                            </a>
                            <p class="comp-desc">
                                Welcome to ZinfoTec Technologies Pvt. Ltd., a leading professional LED display screen development and supply company. we have established ourselves as a trusted name in Maharashtra since our inception in 2014. <a style="color:#4285f4;">Read more..</a>
                            </p>
                            <div class="social-link">
                                <h6>Follow Us:</h6>
                                <ul class="social-profile list-style style3">
                                    <li>
                                        <a target="_blank" href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://linkedin.com/">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://instagram.com/">
                                            <i class="ri-pinterest-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Information</h3>
                            <ul class="footer-menu list-style">
                                <li>
                                    <a href="{{url('About')}}" target="_blank">
                                        <i class="ri-arrow-right-s-line"></i>
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="shop-left-sidebar.html" target="_blank">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Our Products
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html" target="_blank">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="refund-policy.html" target="_blank">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Achievements
                                    </a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html" target="_blank">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 ps-xl-4">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Account</h3>
                            <ul class="footer-menu list-style">
                                <li>
                                    <a href="my-account.html" target="_blank">
                                        <i class="ri-arrow-right-s-line"></i>
                                        My Account
                                    </a>
                                </li>
                                <li>
                                    <a href="my-account.html" target="_blank">
                                        <i class="ri-arrow-right-s-line"></i>
                                        My Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="my-account.html" target="_blank">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Returns
                                    </a>
                                </li>
                                <li>
                                    <a href="my-account.html" target="_blank">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Wishlist
                                    </a>
                                </li>
                                <li>
                                    <a href="my-account.html" target="_blank">
                                        <i class="ri-arrow-right-s-line"></i>
                                        Shipping
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Get In Touch</h3>
                            <ul class="contact-info list-style">
                                <li>
                                    <i class="flaticon-pin"></i>
                                    <h6>Location</h6>
                                    <p>Basement Supreme Commerce Classes, Khokadpura, Near Paithan Gate, Aurangabad(MS)</p>
                                </li>
                                <li>
                                    <i class="flaticon-email-1"></i>
                                    <h6>Email</h6>
                                    <a><span
                                            class="__cf_email__">
                                            info@zinfotec.com</span></a>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <h6>Phone</h6>
                                    <a href="tel:9272627262">92 7262 7262</a>,
                                    <a href="tel:9028000085">90 2800 0085</a>,
                                    <a href="tel:9272717271">92 7271 7271</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           {{--  <p class="copyright-text">
                <i class="ri-copyright-line"></i>
                <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>
                    document.write(new Date().getFullYear())
                </script> <span>eKom</span>. All Rights Reserved By <a href="https://hibootstrap.com/"
                    target="_blank">HiBootstrap</a>
            </p> --}}
        </footer>

    </div>


    <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>





    {{-- <div class="modal fade" id="modal-subscribe" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center gx-5">
                        <div class="col-sm-6 col-lg-6">
                            <div class="subscribe-bg bg-f">
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6">
                            <div class="subscribe-content">
                                <h2>Subscribe Newsletter</h2>
                                <p>Subscribe our newsletter to get our updated news</p>
                                <form class="newsletter-form" data-toggle="validator">
                                    <input type="email" class="form-control" placeholder="Enter Your Email"
                                        name="EMAIL" required autocomplete="off">
                                    <button class="btn style1" type="submit">
                                        Subscribe
                                    </button>
                                    <div class="inner-check mt-30">
                                        <div class="checkbox style2">
                                            <input type="checkbox" id="test_3">
                                            <label for="test_3">Dont' show this popup again.</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <script src="public/assets/js/jquery.min.js"></script>
    <script src="public/assets/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/js/form-validator.min.js"></script>
    {{-- <script src="public/assets/js/contact-form-script.js"></script> --}}
    <script src="public/assets/js/aos.js"></script>
    <script src="public/assets/js/owl.carousel.min.js"></script>
    <script src="public/assets/js/swiper-min.js"></script>
    <script src="public/assets/js/magnific-popup.min.js"></script>
    <script src="public/assets/js/fancybox.js"></script>
    <script src="public/assets/js/appear.js"></script>
    <script src="public/assets/js/tweenmax.min.js"></script>
    <script src="public/assets/js/progressbar.min.js"></script>
    <script src="public/assets/js/main.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/ekom/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 13:44:22 GMT -->

</html>
