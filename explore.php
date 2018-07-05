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

<div style="margin-top: 20px; margin-left: 600px;" >
    <input type="text" placeholder="Search for companies..">
</div>

<div class="row">
    <div class="pull-right">
        <button data-toggle="modal" onclick="Call()" data-target="#companyModel" class="btn btn-primary btn-md" style="margin-top: 20px; margin-left: 1100px;">Add a Company Review</button>
    </div>
</div>

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




<div class="modal fade" id="companyModel" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title " style="margin-right: 200px;">Add Company Review</h4>
            </div>
            <div class="modal-body">
                <button class="btn btn-primary pull-right" style="margin-left: 390px; margin-bottom: 15px;">Submit</button>
                <div class="form-group">
                    <input type="text" placeholder="Company Name" class="form-control" />
                </div>
                <div class="pull-right">
<!--                    <select id="rating" name="rating">-->
<!--                        <option value="1">1</option>-->
<!--                        <option value="2">2</option>-->
<!--                        <option value="3">3</option>-->
<!--                        <option value="4">4</option>-->
<!--                        <option value="5">5</option>-->
<!--                    </select>-->
                    <select>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Position" class="form-control" />
                </div>
                <div class="form-group">
                    <textarea class="form-control" style="resize:none;max-width:100%;width:100%; height:150px;" name="review" placeholder="Review"></textarea>
                </div>

                <div class="form-group">
                    <label>Current Location</label>
                    <input id="Lat" type="text" placeholder="Latitude" class="form-control" />
                    <input id="Long" type="text" placeholder="Longitude" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <div id="mapDiv">
                    <img id="mapImage" style="width:100%;"/>
                </div>
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

<script src="resources/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--Include jQuery-->
<script src="resources/jquery/jquery-1.10.2.js"></script>
<!--Include Bootstrap-->
<script src="resources/bootstrap/js/bootstrap.js"></script>
<script src="resources/jquery/star-rating.js"></script>


<!--Include Custom Javascript File-->
<script>

    /// <reference path="jquery-1.10.2.js" />
    var GoogleAPIkey = "AIzaSyBS0815MnJT8QlEvqs-Rku-9JbjU7M9ubk";

    $(document).ready(function () {

        $('#rating').barrating({
            theme: 'fontawesome-stars'
        });


        $('#searchButton').click(function () {

            var searchString = $('#searchstring')[0].value;

            $('.row>div').show();
            if (searchString == null || searchString === '')
                return;


            $('.row>div.col-sm-6').each(function () {
                if ($(this)[0].innerText.toLowerCase().indexOf(searchString.toLowerCase()) == -1)
                {
                    $(this).hide();
                }

            });

        });
    });

    function GetQueryParameterValue(paramName) {
        var currentUrl = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for (var counter = 0; counter < currentUrl.length; counter++) {
            var urlparam = currentUrl[counter].split('=');
            if (urlparam[0] == paramName) {
                var valueParam = urlparam[1];
                return valueParam;
            }
        }
    }


    // Accessing GeoLocation API

    function Call() {
        var isSupported = navigator.geolocation;
        if (isSupported) {
            navigator.geolocation.getCurrentPosition(DisplayPosition, HandleError);
        } else {
            alert("Browser does not support Location API.");
        }
    }

    function DisplayPosition(position) {

        //Update the Latitude and Longitude Value
        $("#Lat").val(position.coords.latitude);
        $("#Long").val(position.coords.longitude);

        $('#mapImage').attr('src', getMapUrl(position.coords.latitude, position.coords.longitude));
    }

    function HandleError(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                alert("User discarded geolocation request.");
                break;
            case error.POSITION_UNAVAILABLE:
                alert("Location information is not available now.");
                break;
            case error.TIMEOUT:
                alert("Location information timed-out.");
                break;
            case error.UNKNOWN_ERROR:
                alert("Unknown Error occured");
                break;
        }
    }


    function getMapUrl(lat, long) {
        return "https://maps.googleapis.com/maps/api/staticmap?center="
            + lat + "," + long + "&zoom=14&size=400x300&key="+GoogleAPIkey;

    }
</script>



</body>
</html>