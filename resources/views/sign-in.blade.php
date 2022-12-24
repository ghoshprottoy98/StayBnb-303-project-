<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staybnb</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav id="navBar" class="navbar-white">
        <a href="home.html"> <img src="logo-red.png" class="logo"></a>
    </nav>

    <div class="Login-form">
        <h1> SIGN IN TO YOUR ACCOUNT </h1>
    </div>

    <div class="Sign-in">
        <form id="login" method="get" action="/signup">
            @csrf
            <input type="text" name="Uname" id="Uname" placeholder="Enter Username">
            <br><br>
            <input type="Password" name="Pass" id="Pass" placeholder=" Enter Password">
            <br><br>
            <input type="button" name="log" id="log" value="Sign In">
            <br><br>
            <input type="checkbox" id="check">
            <span>Remember me</span>
            <br><br>
            <a href="#"> Forgot Password ? </a>
        </form>
    </div>

    <br><br><br><br><br><br><br><br>
    <div class="footer">
        <hr>
        <p>Copyright &copy 2022, Group-3. </p>
    </div>


</body>



</html>