<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMS Project</title>

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="icon" type="image/png" href="img/headerlogo.png">

  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
          <div class="col-xs-3"><img src="img/headerlogo.png" alt="Logo" width="30px"></div>
          <div class="col-xs-9">CMS48</div>
        </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
          
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list" aria-hidden="true"></i>Categories<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Category 1</a></li>
                    <li><a href="#">Category 2</a></li>

              </ul>
            </li>
            <li><a href="contactus.html"><i class="fa fa-connectdevelop" aria-hidden="true"></i>Contact Us</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="jumbotron">
      <div class="container">
        <div id="details" class="animated fadeInLeft">
          <h1>Contact<span>Us</span></h1>
          <p>We are here 24 x 7. Feel free to contact us anytime you want.</p>
        </div>
      </div>
      <img src="img/top-image.jpg" alt="Tp Image">
    </div>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCx0bspJ4jTjmQo6sztwDvi-u2fTU0xt9U'></script><div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://add-map.org/'>  </a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=82796a336873c9e4f23b486eac2d958f7db31e16'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(25.7480433,-80.3153365),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(25.7480433,-80.3153365)});infowindow = new google.maps.InfoWindow({content:'<strong>Coral Way</strong><br>coral way<br>33144 Miami<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
              </div>
              <div class="col-md-12 contact-form">
                <h2>Contact Us</h2><hr>
                <form action="">
                  <div class="form-group">
                    <label for="full-name">Full Name:</label>
                    <input type="text" id="full-name" class="form-control"placeholder="Full Name">
                  </div>

                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" class="form-control"placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="website">Website:</label>
                    <input type="text" id="website" class="form-control"placeholder="Website">
                  </div>

                  <div class="form-group">
                    <label for="message">Messages:</label>
                    <textarea id="message" cols="30" rowa="10" class="form-control"placeholder="Your message here"></textarea>
                  </div>

                  <input type="submit" name="submit" value="Submit" class="btn btn-primary">

                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widgets">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>

                </div><!-- /input-group -->
            </div><!--widgets close-->


            <div class="widgets">
              <div class="popular">
                <h4>Popular Posts</h4>
                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/slider-img1.jpg" alt="Image 1"></a>
                  </div>
                  <div class="col-xs-8 details">
                    <a href="#"><h4>Tis is heading for post</h4></a>
                    <p><i class="fa fa-clock-o"></i>8 October, 2017</p>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/slider-img1.jpg" alt="Image 1"></a>
                  </div>
                  <div class="col-xs-8 details">
                    <a href="#"><h4>Tis is heading for post</h4></a>
                    <p><i class="fa fa-clock-o"></i>8 October, 2017</p>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/slider-img1.jpg" alt="Image 1"></a>
                  </div>
                  <div class="col-xs-8 details">
                    <a href="#"><h4>Tis is heading for post</h4></a>
                    <p><i class="fa fa-clock-o"></i>8 October, 2017</p>
                  </div>
                </div>

              </div>
            </div><!--widgets close-->

            <div class="widgets">
              <div class="popular">
                <h4>Recent Posts</h4>
                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/slider-img1.jpg" alt="Image 1"></a>
                  </div>
                  <div class="col-xs-8 details">
                    <a href="#"><h4>Tis is heading for post</h4></a>
                    <p><i class="fa fa-clock-o"></i>8 October, 2017</p>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/slider-img1.jpg" alt="Image 1"></a>
                  </div>
                  <div class="col-xs-8 details">
                    <a href="#"><h4>Tis is heading for post</h4></a>
                    <p><i class="fa fa-clock-o"></i>8 October, 2017</p>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/slider-img1.jpg" alt="Image 1"></a>
                  </div>
                  <div class="col-xs-8 details">
                    <a href="#"><h4>Tis is heading for post</h4></a>
                    <p><i class="fa fa-clock-o"></i>8 October, 2017</p>
                  </div>
                </div>

              </div>
            </div><!--widgets close-->

            <div class="widgets">
              <div class="popular">
                <h4>Category</h4>
                <hr>
                <div class="row">
                  <div class="col-xs-6">
                    <ul>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                    </ul>
                  </div>
                  <div class="col-xs-6">
                    <ul>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                      <li><a href="">category</a></li>
                    </ul>
                  </div>

              </div>
            </div><!--widgets close-->


            <div class="widgets">
              <div class="categories">
                <h4>Social Icons</h4>
                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/facebook.png" alt="Facebook"></a>
                  </div>
                  <div class="col-xs-4">
                    <a href="#"><img src="img/twitter.jpg" alt="Twitter"></a>
                  </div>
                  <div class="col-xs-4">
                    <a href="#"><img src="img/google+.jpg" alt="Google+"></a>
                  </div>
                </div>

                <hr>
                <div class="row">
                  <div class="col-xs-4">
                    <a href="#"><img src="img/linkedin.jpg" alt="LinkedIn"></a>
                  </div>
                  <div class="col-xs-4">
                    <a href="#"><img src="img/instagram.png" alt="Instagram"></a>
                  </div>
                  <div class="col-xs-4">
                    <a href="#"><img src="img/pinterest.jpg" alt="Pinterest"></a>
                  </div>
                </div>

                  </div>

              </div>
            </div><!--widgets close-->



          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        Copyright &copy; by
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
