<!-- Document: index.html, homepage for CHAP website
     Author: Alden Weaver & Samantha Stilson
     Date: November 2014
     Notes:
 -->

<!DOCTYPE html>
<html lang="en" ng-app="app" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">

    <!-- Set the viewport to disply site correctly on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CHAP Home</title>

    <!-- Include CSS: Bootstrap, Font Awesome, custom -->
    <link href="includes/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="includes/style.css" rel="stylesheet">
    <link href="includes/font-awesome/css/font-awesome.css" rel="stylesheet">

<!-- Include AngularJS file -->
<script type="text/javascript" src="includes/angularjs/angular.min.js"></script>


<!-- Include jQuery and Bootstrap JS plugins.
    Doing this at the end helps the page load more quickly -->
<script src="includes/jquery/jquery-2.1.1.js"></script>
<script src="includes/bootstrap/js/bootstrap.min.js"></script>


<!-- Include Javascript files -->
<script type="text/javascript" src="app.js"></script>

<!--Load the AJAX API-->

<!-- Custom styles for this template -->
<link href="carousel.css" rel="stylesheet">

</head>


<body>

  <!-- Header Panel -->
  <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h1 class="panel-title text-center">
                <a href="index.html"><h1><b><img src="pictures/CHAP_logo.png"> Claremont Homeless Advocacy Program</b></h1></a>
            </div>  <!-- /Panel Heading -->
          </div> <!-- /Panel -->
      </div> <!-- /Column -->
    </div> <!-- /Row -->
  </div> <!-- /Container-->
  <!-- /Header Panel -->

  <!-- Navigation Bar -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <!-- Nav Tabs -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li role="presentation" class="active"><a href="#">Home</a></li>
          <li role="presentation"><a href="#">About</a></li>
          <li role="presentation"><a href="#">Get Involved</a></li>
          <li role="presentation"><a href="#">Contact</a></li>
          <li role="presentation"><a href="#">Donate</a></li>
          <li role="presentation"><a href="#">Homelessness</a></li>
        </ul>
        </div>
        <!-- /Nav Tabs -->

      </div>
    </div>
  </div>
  <!-- /Navigation Bar -->


  <!-- Search Bar -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>

      </div>
    </div>
  </div>
  <!-- /Search Bar -->

  <br>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  <!-- /.carousel -->


  <!-- Body Panels -->
  <div class="container-fluid">
    <div class="row">

      <!-- Body Panel 1 -->
      <div class="col-lg-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center">Upcoming Events</h3>
          </div>
          <div class="panel-body text-left">
            Very Exciting Event coming soon!<br>
            Another Very Exciting Event!<br>
          </div>
        </div> 
      </div> <!-- /Body Panel 1 -->

      <!-- Body Panel 2 -->
      <div class="col-lg-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center">Announcements</h3>
          </div>
          <div class="panel-body text-left">
            Very Important Announcement here!<br>
            Another Very Important Announcement!<br>
          </div>
        </div> 
      </div> <!-- /Body Panel 2 -->

      <!-- Body Panel 3 -->
      <div class="col-lg-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title text-center">Who We Are</h3>
          </div>
          <div class="panel-body text-left">
            CHAP (Claremont Homeless Advocacy Program) is a grassroots, all-volunteer group that seeks to end homelessness in Claremont by advocating for and supporting homeless adult individuals within the community. CHAP provides a variety of services to the 50-plus homeless adults who reside in Claremont, as well as those at risk of becoming homeless, but its primary goal is to secure sustainable housing for these individuals.
          </div>
        </div> 
      </div> <!-- /Body Panel 3 -->

    </div> <!-- /Row -->
  </div> <!-- /Body Panels -->


  <br><br><br><br><br>


  <!-- Footer Panels -->
  <div class="container-fluid">

      <!-- Footer Panels Row -->
      <div class="row">

          <!-- Mailing List Panel -->
          <div class="col-lg-3">
              <div class="panel panel-danger">
                <div class="panel-heading">
                  <h3 class="panel-title text-center">Join Our Mailing List!</h3>
                </div>
                
                <div class="panel-body text-center">
                  <!-- Enter Email Button -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-default">
                      <a href="#">Enter Your Email Address</a> 
                    </button>
                  </div> <!-- /Enter Email Button -->
                </div> <!-- /Panel Body -->
              </div> <!-- /Panel -->
          </div> <!-- /Mailing List Panel -->

          <!-- Donate Panel -->
          <div class="col-lg-3">
              <div class="panel panel-danger">
                <div class="panel-heading">
                  <h3 class="panel-title text-center">Donate</h3>
                </div>
                <div class="panel-body text-center">
                  <!-- Donate Button -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-default">
                      <a href="#">Donate</a> 
                    </button>
                  </div> <!-- /Donate Button -->
                </div> <!-- /Panel Body -->
              </div> <!-- /Panel -->
          </div> <!-- /Donate Panel -->

          <!-- Connect Panel -->
          <div class="col-lg-3">
              <div class="panel panel-danger"> 
                <div class="panel-heading">
                  <h3 class="panel-title text-center">Connect with CHAP</h3>
                </div>
                <div class="panel-body text-center">
                  
                  <!-- Facebook Button -->
                  <div class="col-sm-4 text-left">
                  <a class="btn btn-social-icon btn-facebook">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                  </a>
                </div> <!-- /Facebook Button -->

                <!-- Newsletter Button -->
                  <div class="col-sm-4 text-center">
                    <div class="btn-group ">
                      <button type="button" class="btn btn-default">
                        <a href="#">Newsletter</a> 
                      </button>
                    </div>                  
                </div> <!-- /Newsletter Button -->

                <!-- Twitter Button -->
                <div class="col-sm-4 text-right">
                  <a class="btn btn-social-icon btn-twitter">
                      <a href="#"><i class="fa fa-twitter"></i></a>
                  </a>
                </div> <!-- /Twitter Button -->

                </div> <!-- /Panel Body -->
              </div> <!-- /Panel -->
          </div> <!-- /Connect Panel -->

          <!-- Contact Panel -->
          <div class="col-lg-3">
              <div class="panel panel-danger">
                <div class="panel-heading">
                  <h3 class="panel-title text-center">Contact</h3>
                </div>
                <div class="panel-body">
                  Phone: (555) 555-5555
                  <br>
                  Fax: (444) 444-4444
                  <br>
                  Email: CHAP@CHAP.org
                  <br>
                  Mailing Address: 1 CHAP Ave, Claremont, CA 91711
                </div> <!-- /Panel Body -->
              </div> <!-- /Panel -->
          </div> <!-- /Contact Panel -->

      </div> <!-- /Row -->
  </div> <!-- /Footer Panels -->

</body>

</html>