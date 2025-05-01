<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RobamSa">
    <meta name="keywords" content="RobamSa">
    <meta name="author" content="RobamSa">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../assets/images/favicon/7.png" type="image/x-icon">
    <title>RobamSa</title>
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">

    <!-- wow css -->
    <link rel="stylesheet" href="../assets/css/animate.min.css">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bulk-style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

{{--slider to home banner--}}
    <!-- Add in the <head> tag -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <!-- Add in the <body> tag before the closing body tag -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css" integrity="sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}

    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">




    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body class="theme-color-5">
<style>
    #cart-loader-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(4, 66, 91, 0.41); /* dark translucent overlay */
        z-index: 9999;
        /* initially hidden */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .spinner-darkred {
        border-color: darkred !important;
    }
</style>




<div id="cart-loader-overlay" style=" display: none;">
    <div class="spinner-border text-danger" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

@include("partials.header")


@yield('content')


@include("partials.footer")

<!-- Quick View Modal Box Start -->
<div class="modal fade theme-modal view-modal " id="loginModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row g-sm-4 g-2">
                    <div class="col-lg-6">
                        <div class="slider-image">
                            <img src="../assets/images/inner-page/log-in.png" class="img-fluid blur-up lazyload"
                                 alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 log-in-section">
                        <div class="log-in-box">
                            <div class="log-in-title">
                                <h3>Welcome To RobamSA</h3>
                                <h4>Log In Your Account</h4>
                            </div>

                            <div class="input-box">
                                <form class="row g-4" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="col-12">
                                        <div class="form-floating theme-form-floating log-in-form">
                                            <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" required autofocus >
                                            <label for="email">Email Address</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating theme-form-floating log-in-form">
                                            <input type="password" class="form-control" id="password"
                                                   placeholder="Password" name="password">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="forgot-box">
                                            <div class="form-check ps-0 m-0 remember-box">
                                                <input class="checkbox_animated check-box" type="checkbox"
                                                       id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                            </div>
                                            <a href="forgot.html" class="forgot-password">Forgot Password?</a>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-animation w-100 justify-content-center" type="submit">Log
                                            In</button>
                                    </div>
                                </form>
                            </div>





                            <div class="sign-up-box">
                                <h4>Don't have an account?</h4>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" >Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Login Modal Box End -->

<!-- Forgot Password -->
<div class="modal fade theme-modal view-modal " id="forgotPasswordModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row g-sm-4 g-2">
                    <div class="col-lg-6">
                        <div class="slider-image">
                            <img src="../assets/images/inner-page/log-in.png" class="img-fluid blur-up lazyload"
                                 alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 log-in-section">
                        <div class="log-in-box">
                            <div class="log-in-title">
                                <h3>Forgot Password?</h3>

                            </div>

                            <div class="input-box">
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="col-12">
                                        <div class="form-floating theme-form-floating log-in-form">
                                            <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" required autofocus >

                                        </div>
                                    </div><br>



                                    <div class="col-12">
                                        <button class="btn btn-animation w-100 justify-content-center" type="submit">Email Password Reset Link</button>
                                    </div>
                                </form>
                            </div>






                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Forgot Password Box End -->


<!-- Register Modal Box Start -->
<div class="modal fade theme-modal view-modal " id="registerModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row g-sm-4 g-2">
                    <div class="col-lg-6">
                        <div class="slider-image">
                            <img src="../assets/images/inner-page/log-in.png" class="img-fluid blur-up lazyload"
                                 alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 log-in-section">
                        <div class="log-in-box">
                            <div class="log-in-title">
                                <h3>Welcome To RobamSA</h3>
                                <h4>Log In Your Account</h4>
                            </div>

                            <div class="input-box">
                                <form class="row g-4" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="col-12">
                                        <div class="form-floating theme-form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" required>
                                            <label for="name">Full Name</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating theme-form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Email Address" name="email" required>
                                            <label for="email">Email Address</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating theme-form-floating">
                                            <input type="phone" class="form-control" id="phone" placeholder="Phone Number" name="phone" required>
                                            <label for="phone">Phone Number</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating theme-form-floating">
                                            <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
                                            <label for="address">Address</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating theme-form-floating">
                                            <input type="password" class="form-control" id="password"
                                                   placeholder="Password" name="password">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="forgot-box">
                                            <div class="form-check ps-0 m-0 remember-box">
                                                <input class="checkbox_animated check-box" type="checkbox"
                                                       id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">I agree with
                                                    <span>Terms</span> and <span>Privacy</span></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-animation w-100" type="submit">Continue</button>
                                    </div>
                                </form>
                            </div>





                            <div class="sign-up-box">
                                <h4>Already have an account?</h4>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" >Sign In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Modal Box End -->

<!-- Add address modal box start -->
<div class="modal fade theme-modal" id="add-address" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add a new address</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-floating mb-4 theme-form-floating">
                        <input type="text" class="form-control" id="fname" placeholder="Enter First Name">
                        <label for="fname">First Name</label>
                    </div>
                </form>

                <form>
                    <div class="form-floating mb-4 theme-form-floating">
                        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
                        <label for="lname">Last Name</label>
                    </div>
                </form>

                <form>
                    <div class="form-floating mb-4 theme-form-floating">
                        <input type="email" class="form-control" id="email" placeholder="Enter Email Address">
                        <label for="email">Email Address</label>
                    </div>
                </form>

                <form>
                    <div class="form-floating mb-4 theme-form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="address"
                                      style="height: 100px"></textarea>
                        <label for="address">Enter Address</label>
                    </div>
                </form>

                <form>
                    <div class="form-floating mb-4 theme-form-floating">
                        <input type="email" class="form-control" id="pin" placeholder="Enter Pin Code">
                        <label for="pin">Pin Code</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn theme-bg-color btn-md text-white" data-bs-dismiss="modal">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Add address modal box end -->

<!-- Location Modal Start -->
<div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Choose your Delivery Location</h5>
                <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="location-list">
                    <div class="search-input">
                        <input type="search" class="form-control" placeholder="Search Your Area">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                    <div class="disabled-box">
                        <h6>Select a Location</h6>
                    </div>

                    <ul class="location-select custom-height">
                        <li>
                            <a href="javascript:void(0)">
                                <h6>Alabama</h6>
                                <span>Min: $130</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Arizona</h6>
                                <span>Min: $150</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>California</h6>
                                <span>Min: $110</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Colorado</h6>
                                <span>Min: $140</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Florida</h6>
                                <span>Min: $160</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Georgia</h6>
                                <span>Min: $120</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Kansas</h6>
                                <span>Min: $170</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Minnesota</h6>
                                <span>Min: $120</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>New York</h6>
                                <span>Min: $110</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>Washington</h6>
                                <span>Min: $130</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Location Modal End -->

<!-- Edit Profile Start -->
<div class="modal fade theme-modal" id="editProfile" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <div class="col-xxl-12">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input type="text" class="form-control" id="pname" value="Jack Jennas">
                                <label for="pname">Full Name</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-xxl-6">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input type="email" class="form-control" id="email1" value="vicki.pope@gmail.com">
                                <label for="email1">Email address</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-xxl-6">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input class="form-control" type="tel" value="4567891234" name="mobile" id="mobile"
                                       maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value =
                                            this.value.slice(0, this.maxLength);">
                                <label for="mobile">Email address</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-12">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input type="text" class="form-control" id="address1"
                                       value="8424 James Lane South San Francisco">
                                <label for="address1">Add Address</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-12">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input type="text" class="form-control" id="address2" value="CA 94080">
                                <label for="address2">Add Address 2</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-xxl-4">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <select class="form-select" id="floatingSelect1">
                                    <option selected>Choose Your Country</option>
                                    <option value="kingdom">United Kingdom</option>
                                    <option value="states">United States</option>
                                    <option value="fra">France</option>
                                    <option value="china">China</option>
                                    <option value="spain">Spain</option>
                                    <option value="italy">Italy</option>
                                    <option value="turkey">Turkey</option>
                                    <option value="germany">Germany</option>
                                    <option value="russian">Russian Federation</option>
                                    <option value="malay">Malaysia</option>
                                    <option value="mexico">Mexico</option>
                                    <option value="austria">Austria</option>
                                    <option value="hong">Hong Kong SAR, China</option>
                                    <option value="ukraine">Ukraine</option>
                                    <option value="thailand">Thailand</option>
                                    <option value="saudi">Saudi Arabia</option>
                                    <option value="canada">Canada</option>
                                    <option value="singa">Singapore</option>
                                </select>
                                <label for="floatingSelect">Country</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-xxl-4">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <select class="form-select" id="floatingSelect">
                                    <option selected>Choose Your City</option>
                                    <option value="kingdom">India</option>
                                    <option value="states">Canada</option>
                                    <option value="fra">Dubai</option>
                                    <option value="china">Los Angeles</option>
                                    <option value="spain">Thailand</option>
                                </select>
                                <label for="floatingSelect">City</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-xxl-4">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input type="text" class="form-control" id="address3" value="94080">
                                <label for="address3">Pin Code</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-animation btn-md fw-bold"
                        data-bs-dismiss="modal">Close</button>
                <button type="button" data-bs-dismiss="modal"
                        class="btn theme-bg-color btn-md fw-bold text-light">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Profile End -->

<!-- Edit Card Start -->
<div class="modal fade theme-modal" id="editCard" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel8">Edit Card</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <div class="col-xxl-6">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input type="text" class="form-control" id="finame" value="Mark">
                                <label for="finame">First Name</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-xxl-6">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <input type="text" class="form-control" id="laname" value="Jecno">
                                <label for="laname">Last Name</label>
                            </div>
                        </form>
                    </div>

                    <div class="col-xxl-4">
                        <form>
                            <div class="form-floating theme-form-floating">
                                <select class="form-select" id="floatingSelect12">
                                    <option selected>Card Type</option>
                                    <option value="kingdom">Visa Card</option>
                                    <option value="states">MasterCard Card</option>
                                    <option value="fra">RuPay Card</option>
                                    <option value="china">Contactless Card</option>
                                    <option value="spain">Maestro Card</option>
                                </select>
                                <label for="floatingSelect12">Card Type</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-animation btn-md fw-bold"
                        data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn theme-bg-color btn-md fw-bold text-light">Update Card</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Card End -->

<!-- Remove Profile Modal Start -->
<div class="modal fade theme-modal remove-profile" id="removeProfile" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header d-block text-center">
                <h5 class="modal-title w-100" id="exampleModalLabel22">Are You Sure ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="remove-box">
                    <p>The permission for the use/group, preview is inherited from the object, object will create a
                        new permission for this object</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn theme-bg-color btn-md fw-bold text-light"
                        data-bs-target="#removeAddress" data-bs-toggle="modal">Yes</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade theme-modal remove-profile" id="removeAddress" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="remove-box text-center">
                    <h4 class="text-content">It's Removed.</h4>
                </div>
            </div>
            <div class="modal-footer pt-0">
                <button type="button" class="btn theme-bg-color btn-md fw-bold text-light"
                        data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Remove Profile Modal End -->

<!-- Edit Profile Modal Start -->
<div class="modal fade theme-modal" id="edit-profile" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Edit Your Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="companyName" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="companyName" value="Grocery Store">
                    </div>
                    <div class="mb-3">
                        <label for="emailAddress" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="emailAddress" value="joshuadbass@rhyta.com">
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label">Country / Region</label>
                        <input type="text" class="form-control" id="country" value="107 Veltri Drive">
                    </div>
                    <div class="mb-3">
                        <label for="established" class="form-label">Year Established</label>
                        <input type="email" class="form-control" id="established" value="2022">
                    </div>
                    <div class="mb-3">
                        <label for="employees" class="form-label">Total Employees</label>
                        <input type="text" class="form-control" id="employees" value="154 - 360 People">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="email" class="form-control" id="category" value="Grocery">
                    </div>
                    <div class="mb-3">
                        <label for="street" class="form-label">Street Address</label>
                        <input type="text" class="form-control" id="street" value="234 High St">
                    </div>
                    <div class="mb-3">
                        <label for="city" class="form-label">City / State</label>
                        <input type="email" class="form-control" id="city" value="107 Veltri Drive">
                    </div>
                    <div class="mb-3">
                        <label for="zip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="zip" value="B23 6SN">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-animation btn-md fw-bold"
                        data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn theme-bg-color btn-md fw-bold text-light"
                        data-bs-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Profile Modal End -->

<!-- Tap to top and theme setting button start -->
<div class="theme-option">
{{--    <div class="setting-box">--}}
{{--        <button class="btn setting-button">--}}
{{--            <i class="fa-solid fa-gear"></i>--}}
{{--        </button>--}}

{{--        <div class="theme-setting-2">--}}
{{--            <div class="theme-box">--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <div class="setting-name">--}}
{{--                            <h4>Color</h4>--}}
{{--                        </div>--}}
{{--                        <div class="theme-setting-button color-picker">--}}
{{--                            <form class="form-control">--}}
{{--                                <label for="colorPick" class="form-label mb-0">Theme Color</label>--}}
{{--                                <input type="color" class="form-control form-control-color" id="colorPick"--}}
{{--                                       value="#0da487" title="Choose your color">--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <div class="setting-name">--}}
{{--                            <h4>Dark</h4>--}}
{{--                        </div>--}}
{{--                        <div class="theme-setting-button">--}}
{{--                            <button class="btn btn-2 outline" id="darkButton">Dark</button>--}}
{{--                            <button class="btn btn-2 unline" id="lightButton">Light</button>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <div class="setting-name">--}}
{{--                            <h4>RTL</h4>--}}
{{--                        </div>--}}
{{--                        <div class="theme-setting-button rtl">--}}
{{--                            <button class="btn btn-2 rtl-unline">LTR</button>--}}
{{--                            <button class="btn btn-2 rtl-outline">RTL</button>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="back-to-top">
        <a id="back-to-top" href="#">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
</div>
<!-- Tap to top and theme setting button end -->

<!-- Bg overlay Start -->
<div class="bg-overlay"></div>
<!-- Bg overlay End -->
<!-- latest jquery-->

{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
<!-- jquery ui-->
<script src="../assets/js/jquery-ui.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="../assets/js/bootstrap/bootstrap-notify.min.js"></script>
<script src="../assets/js/bootstrap/popper.min.js"></script>

<!-- feather icon js-->
<script src="../assets/js/feather/feather.min.js"></script>
<script src="../assets/js/feather/feather-icon.js"></script>

<!-- Lazyload Js -->
<script src="../assets/js/lazysizes.min.js"></script>

<!-- Fly Cart Js -->
<script src="../assets/js/fly-cart.js"></script>


<!-- Apexcharts Js -->
<script src="../assets/js/apexchart.js"></script>
<script src="../assets/js/custom-chart.js"></script>


<!-- Nav & tab upside js -->
<script src="../assets/js/nav-tab.js"></script>

<!-- Slick js-->
<script src="../assets/js/slick/slick.js"></script>
<script src="../assets/js/slick/slick-animation.min.js"></script>
<script src="../assets/js/slick/custom_slick.js"></script>

<!-- Auto Height Js -->
<script src="../assets/js/auto-height.js"></script>

<!-- Timer Js -->
<script src="../assets/js/timer1.js"></script>

<!-- Quantity js -->
<script src="../assets/js/quantity-2.js"></script>

<!-- WOW js -->
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/custom-wow.js"></script>

<!-- script js -->
<script src="../assets/js/script.js"></script>

<!-- theme setting js -->
<script src="../assets/js/theme-setting.js"></script>

<!-- custom slider js -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.slider-container').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev">Previous</button>',
            nextArrow: '<button type="button" class="slick-next">Next</button>'
        });
    });
</script>

{{--for toasters--}}
<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>



<script>
    @if(session('showLoginModal'))
    // Trigger the login modal when the session flag is set
    var myModal = new bootstrap.Modal(document.getElementById('loginModal'));
    myModal.show();
    @endif
</script>

<script src="../assets/js/jquery-3.6.0.min.js"></script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.quantity-control').forEach(group => {
            const input = group.querySelector('input[type="number"]');

            group.querySelector('.btn-increase').addEventListener('click', () => {
                let currentVal = parseInt(input.value) || 1;
                input.value = currentVal + 1;
                $(input).trigger('change'); // 👈 FIX: Trigger jQuery change event
            });

            group.querySelector('.btn-decrease').addEventListener('click', () => {
                let currentVal = parseInt(input.value) || 1;
                if (currentVal > 1) {
                    input.value = currentVal - 1;
                    $(input).trigger('change'); // 👈 FIX: Trigger jQuery change event
                }
            });
        });
    });
</script>

{{--update cart products--}}
<script type="text/javascript">
    $(document).ready(function () {

        // Prevent double binding by removing old handlers
        $(document).off('click', '.update-cart').on('click', '.update-cart', function (e) {
            e.preventDefault();

            let button = $(this);
            let input = button.closest(".input-group").find(".qty-input");
            let quantity = parseInt(input.val());
            let id = button.data("id");

            if (button.data("type") === "plus") {
                quantity++;
            } else if (button.data("type") === "minus" && quantity > 1) {
                quantity--;
            }

            input.val(quantity); // Update input visually
            updateCart(id, quantity);
        });

        $(document).off('change', '.qty-input').on('change', '.qty-input', function (e) {
            e.preventDefault();

            let input = $(this);
            let id = input.data("id");
            let quantity = parseInt(input.val());

            updateCart(id, quantity);
        });

        function updateCart(id, quantity) {
            $('#cart-loader-overlay').fadeIn();
            $.ajax({
                url: '{{ route("updateCart") }}',
                method: "PATCH",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                    quantity: quantity
                },
                success: function (response) {
                    // Hide loader and refresh
                    // After updating the cart, reload only the cart section via AJAX
                    setTimeout(() => {
                        $('#cart-loader-overlay').fadeOut();

                        // $('#cart-subtotal-' + id).replaceWith(response.subtotal_html);
                        // Now reload only the cart part
                        $('#cart-summary').load(location.href + ' #cart-summary > *');
                        $('#cart-subtotal' + id).load(location.href + ' #cart-subtotal > *');
                        // $('#cart-subtotal-' + id).html(response.html);
                        window.location.reload();
                        toastr.success('Cart updated!');


                    }, 3000);
                },
                error: function () {
                    $('#cart-loader-overlay').fadeOut();
                    alert('Something went wrong. Try again.');
                }
            });
        }

    });
</script>


{{--remove_action--}}


<script>
    $(document).on("click", ".remove-from-cart", function (e) {
        e.preventDefault();


        let productId = $(this).data("id");

        $.ajax({
            url: "{{ route('removeFromCart') }}",
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            },
            data: {
                id: productId
            },
            success: function (response) {
                $('#cart-loader-overlay').fadeIn(); // Optional: show loader
                setTimeout(() => {
                    location.reload();
                }, 500); // Give loader a brief moment
            },
            error: function (xhr) {
                console.error(xhr.responseText); // Log error for debugging
                alert("Something went wrong!");
            }
        });
    });

</script>

{{--add to cart loader--}}
<script>
    $(document).on('click', '.trigger-add-to-cart', function (e) {
        // alert('Clicked');
        e.preventDefault();
        const url = $(this).data('url');

        // Show loader
        $('#cart-loader-overlay').fadeIn();

        // Wait a moment then redirect
        setTimeout(() => {
            window.location.href = url;
        }, 500); // delay for effect
    });
</script>


</body>
</html>
