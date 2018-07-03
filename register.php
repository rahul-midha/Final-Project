<?php

if (isset ($_POST['submit'])){

    $password = htmlspecialchars($_POST['password']);
    $confirmpassword = htmlspecialchars($_POST['confirmpassword']);

    if (strcmp($password,$confirmpassword)==0) {
        echo "<script>alert('The data has been successfully stored');</script>";
    }
    else
    {
        echo "<script>alert('The passwords do not match');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link href="files/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="resources/css/explore_style.css" rel="stylesheet">

</head>
<body>
<!--reference https://getbootstrap.com/docs/4.0/components/navbar/-->
<nav class="navbar fixed-top navbar-dark bg-dark navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html">Dal Intern</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="explore.php">Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="s#">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <br>
    <br>
    <div class="form-group">
        <form method="post" id="register-form">
            <h2> Register:</h2>
            <br>
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Your first name" autofocus pattern="^[a-zA-Z]+\s*[a-zA-Z]+$" title="Only Letters are accepted" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" class="form-control" id="firstname" placeholder="Your last name" autofocus pattern="^[a-zA-Z]+\s*[a-zA-Z]+$" title="Only Letters are accepted" required>
            </div>
            <div class="form-group">
                    <label for="email">Email address:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="abc@gmail.com" autofocus pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.\.[a-z]{2,3}$" title="Please enter the valid e-mail format(for eg. xyz@gmail.com)" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" autofocus pattern=".{8,}" title="Must contain at least 8 characters" required>
                </div>

            <div class="form-group">
                <label for="confirmpwd">Confirm Password:</label>
                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm password">
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" name="dob" class="form-control" id="dob" placeholder="Date of Birth" required>
            </div>


            <label for="gender">Gender:</label>
            <div class="form-group">
                <input type="radio" name="gender" id="gender" value="male" checked required/> Male
                <br>
                <input type="radio" name="gender" id="gender2" value="female"/> Female
            </div>

            <div class="form-group">
                <label for="pwd">Would you prefer to stay anonymous?</label>
                <select>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <input type="submit" name='submit' value="Submit!" class="btn btn-danger">

        </form>
    </div>


</div>

    <footer class="py-3 bg-dark">
        <div class="footer">
            <p class="text-center m-1 text-justify text-white">Copyright &copy; DalIntern 2018</p>
        </div>
    </footer>

    <script src="files/jquery/jquery.min.js"></script>
    <script src="files/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
