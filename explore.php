<?php
/**
 * Created by PhpStorm.
 * User: rahulmidha
 * Date: 2018-06-27
 * Time: 5:04 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company List</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" >
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
                    <a class="nav-link" href="login.html">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>

            </ul>
        </div>
    </div>
</nav>


<div class="row" style="margin-left: 30px; margin-top: 30px; margin-bottom: 30px;">
    <div class="col-lg-4 col-sm-12 col-md-6 ">
        <div class="card cardstyling">
            <img class="card-img-top companyimages" src="images/cra.jpeg">
            <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at sapien turpis. Proin nunc odio, cursus non dui at, porttitor.</p>
            </div>
            <div class="card-body">
                <a href="companyPage.html" class="btn btn-primary">CRA</a>
            </div>
        </div>
    </div>

        <div class="col-lg-4 col-sm-12 col-md-6" >
        <div class="card cardstyling">
            <img class="card-img-top companyimages" src="images/blackberry.jpeg">
            <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non condimentum diam. Nullam et pharetra est. Fusce.</p>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Blackberry</a>
            </div>
        </div>
        </div>
        <div class="col-lg-4 col-sm-12 col-md-6" >
        <div class="card cardstyling">
            <img class="card-img-top companyimages" src="images/rbc.jpeg">
            <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra orci et eleifend pellentesque. Nam eget neque.</p>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary">RBC</a>
            </div>
        </div>

        </div>
    <div class="col-lg-4 col-sm-12 col-md-6">
        <div class="card cardstyling">
            <img class="card-img-top companyimages" src="images/deloitte.jpeg">
            <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas porttitor lacus, vel sollicitudin vel.</p>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Deloitte</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-sm-12 col-md-6" >
        <div class="card cardstyling">
            <img class="card-img-top companyimages" src="images/ibm.jpeg">
            <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra ornare hendrerit. Suspendisse a purus in odio.</p>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary">IBM</a>
            </div>
        </div></div>

    <div class="col-lg-4 col-sm-12 col-md-6" >
        <div class="card cardstyling">
            <img class="card-img-top companyimages" src="images/td.jpeg">
            <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sodales, libero in convallis suscipit, neque turpis tincidunt.</p>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-primary">TD</a>
            </div>
        </div>
    </div>

</div>

<!-- Footer -->
<footer class="py-3 bg-dark">
    <div class="footer">
        <p class="text-center m-1 text-justify text-white">Copyright &copy; DalIntern 2018</p>
    </div>
</footer>

<script src="resources/jquery/jquery.min.js"></script>
<script src="files/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>