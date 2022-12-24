<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>StayBnB</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('css/searchCss/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{url('css/searchCss/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{url('css/searchCss/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{url('css/searchCss/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{url('css/searchCss/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('css/searchCss/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{url('css/searchCss/magnific-popup.css')}}">
    <!-- swiper CSS -->

    <!-- style CSS -->
    <link rel="stylesheet" href="{{url('css/searchCss/ProductStyle.css')}}">
    <link rel="stylesheet" type="text/css" href="css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/poststyle.css" />
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{url('/')}}"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">about</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        product
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="product_list.html"> product list</a>
                                        <a class="dropdown-item" href="single-product.html">product details</a>

                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="login.html">
                                            login

                                        </a>
                                        <a class="dropdown-item" href="checkout.html">product checkout</a>
                                        <a class="dropdown-item" href="cart.html">shopping cart</a>
                                        <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                        <a class="dropdown-item" href="elements.html">elements</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="blog.html"> blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="cart.html">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>



    <body>
        <div class="page-content">
            <div class="wizard-heading">Post your place and become a host</div>
            <div class="wizard-v6-content">
                <div class="wizard-form">
                    <form class="form-register" id="form-register" action="/" method="post">
                    @csrf
                        <div id="form-total">
                            <!-- SECTION 1 -->
                            <h2>
                                <p class="step-icon"><span>1</span></p>
                                <span class="step-text">Personal Info</span>
                            </h2>
                            <section>
                                <div class="inner">
                                    <div class="form-heading">
                                        <h3>Personal Info</h3>
                                        <span>1/3</span>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder">
                                            <label class="form-row-inner">
                                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                                                <span class="label">First Name</span>
                                            </label>
                                        </div>
                                        <div class="form-holder">
                                            <label class="form-row-inner">
                                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                                                <span class="label">Last Name</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder">
                                            <label class="form-row-inner">
                                                <input type="text" class="form-control" id="phone" name="phone" required>
                                                <span class="label">Phone Number</span>
                                            </label>
                                        </div>
                                        <div class="form-holder">
                                            <label class="form-row-inner">
                                                <input type="text" name="your_email_1" id="your_email_1" class="form-control" required>
                                                <span class="label">E-Mail</span>
                                            </label>
                                        </div>
                                    </div>


                                </div>
                            </section>
                            <!-- SECTION 2 -->
                            <h2>
                                <p class="step-icon"><span>2</span></p>
                                <span class="step-text">More Info</span>
                            </h2>
                            <section>
                                <div class="inner">
                                    <div class="form-heading">
                                        <h3>Rental Post Infomation</h3>
                                        <span>2/3</span>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <label class="form-row-inner">
                                                <input type="text" class="form-control" id="address" name="address" required>
                                                <span class="label">Tittle of post</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <label class="form-row-inner">
                                                <input type="text" class="form-control" id="address" name="address" required>
                                                <span class="label">Description</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFileMultiple" class="form-label">Upload Pictures</label>
                                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <label for="room" class="special-label-1">Block </label>
                                            <select name="room" id="room" class="form-control">
                                                <option value="Daily Design Metting - Metting Room No.1" selected>A</option>

                                                <option value="">B</option>
                                                <option value="">C</option>
                                                <option value="">D</option>
                                                <option value="">E</option>
                                                <option value="">F</option>

                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <label class="form-row-inner">
                                                <input type="text" class="form-control" id="address" name="address" required>
                                                <span class="label">Address Location</span>
                                            </label>
                                        </div>
                                    </div>


                                </div>
                            </section>
                            <!-- SECTION 3 -->
                            <h2>
                                <p class="step-icon"><span>3</span></p>
                                <span class="step-text">Confirm</span>
                            </h2>
                            <section>
                                <div class="inner">
                                    <div class="form-heading">
                                        <h3>Comfirm Details</h3>
                                        <span>3/3</span>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <label for="room" class="special-label-1">Restriction </label>
                                            <select name="room" id="room" class="form-control">

                                                <option value="">yes</option>
                                                <option value="">no</option>


                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-row">

                                        <div class="form-holder">
                                            <label for="time" class="special-label-1"> Checkout Time </label>
                                            <select name="time" id="time" class="form-control">
                                                <option value="" selected>10.00am</option>
                                                <option value="">11:00pm</option>
                                                <option value="">12:00am</option>
                                                <option value="">01:00am</option>
                                                <option value="none">None</option>
                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>
                                        <div class="form-holder">
                                            <label for="time" class="special-label-1">Last Payment date every month</label>
                                            <select name="time" id="time" class="form-control">
                                                <option value="" selected>1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                                <option value="">6</option>
                                                <option value="">7</option>
                                                <option value="">8</option>
                                                <option value="">9</option>
                                                <option value="">11</option>
                                                <option value="">12</option>
                                                <option value="">13</option>
                                                <option value="">15</option>
                                                <option value="">16</option>
                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder">
                                            <label class="form-row-inner">
                                                <input type="text" class="form-control" id="address" name="address" required>
                                                <span class="label">price</span>
                                            </label>
                                        </div>
                                        <div class="form-holder">
                                            <label for="time" class="special-label-1"> Price Negotialble? </label>
                                            <select name="time" id="time" class="form-control">
                                                <option value="" >yes</option>
                                                <option value="">No</option>
                                               
                                            </select>
                                            <span class="select-btn">
                                                <i class="zmdi zmdi-chevron-down"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.steps.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/main.js"></script>
    </body>

</html>