<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staybnb</title>
    <link rel="stylesheet" href="{{url('css/style.css')}}">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <div class="header">
        <nav id="navBar">
            <img src="img/logo.png" class="logo">
            <ul class="nav-links">
                <li><a href="{{url('/host')}}" class="a1">Host a Place</a> </li>
                <li><a href="{{url('/search')}}" class="a2">Search for Rent</a> </li>
                <li><a href="listing.html" class="a3">Popular Places</a> </li>
            </ul>
            <button class="">

                <a href="{{url('/signup')}}" class="register-btn">Sign Up</a>

            </button>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Sign in
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <input type="email" id="form2Example1" class="form-control" />
                                    <label class="form-label" for="form2Example1">Email address</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" autocomplete="new-password" id="form2Example2" class="form-control" />
                                    <label class="form-label" for="form2Example2">Password</label>
                                </div>

                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4">
                                    <div class="col d-flex justify-content-center">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <!-- Simple link -->
                                        <a href="#!">Forgot password?</a>
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <div class="text-center" style="margin-bottom: 50px;margin-top: 50px;"><button type="button" class=" btn btn-primary btn-block " style="align-items: center;">Sign in</button>
                                </div>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>Not a member? <a href="{{url('/signup')}}">Register</a></p>
                                    <p>or sign up with:</p>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-github"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


        </nav>



        <div class="container">

            <div class="search-bar">
                <form>
                    <div class="location-input">
                        <label>Location</label>
                        <input type="text" placeholder="Enter Road No. & Block No.">
                    </div>
                    <div>
                        <label>Date</label>
                        <input type="text" placeholder="Add Date">
                    </div>
                    <button type="submit"><img src="search.png"> </button>
                </form>

            </div>


        </div>
    </div>
    <div class="container">
        <h2 class="sub-title">Explore Now</h2>
        <div class="exclusives">
            <div>
                <img src="house-1.png">
                <span>
                    <h3> D-Block, House-50 </h3>
                </span>
            </div>
            <div>
                <img src="house-2.png">
                <span>
                    <h3> E-Block, House-45 </h3>
                </span>
            </div>
            <div>
                <img src="house-3.png">
                <span>
                    <h3> C-Block, House-42 </h3>
                </span>
            </div>
        </div>
    </div>

    <div class="cta">
        <h3>Sharing <br> is Earning Now</h3>
        <p>Earn more by hosting your place right now!</p>
        <a href="#" class="cta-btn">Know More</a>
    </div>

    <div class="about-msg">
        <h2>About Staybnb</h2>
        <br>
        <p> We are a group of enthusiastic people that want to help people <br> find their preferred accomodation in the Bashundhara R/A area.
        </p>
    </div>

    <div class="footer">
        <hr>
        <p>Copyright &copy 2022, Group-3. </p>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>