<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>STOP AIR POLLUTION</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container-fluid">
    <h2 style = "font-family: 'Anton', sans-serif;" class="float-left text-center text-white">AIR POLLUTION</h2>
      <div class="ml-5">
        <a class="navbar-brand" href="index.php">Home</a>
        
        <a class="navbar-brand" href="/assignment_tlh/#">Health Concerns </a>
        
        <a class="navbar-brand" href="/assignment_tlh/environmentalconcerns.php">Environmental Concerns</a>
        
        <a class="navbar-brand" href="/assignment_tlh/waystohelp.php">Ways you can help</a>
        
        <a class="navbar-brand" href="/assignment_tlh/aboutus.php">About Us</a>
      </div>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link text-white" id="signup" href="#" >Sign Up</a>
            <!--Pop up for sign up-->
            <div class="modal" id="signupform" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title ">Signup</h5>            
      </div>
      <div class="modal-body">
       <!-- Form signup -->
        <form class= "p-5">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="closed1">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
  <!--Loginform-->
      
          <li class="nav-item">
            <a class="nav-link text-white" id="login" href="#">Log In</a>
            <!--Pop up for Log in -->
            <div class="modal" id="loginform" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login</h5>            
      </div>
      <div class="modal-body">
       <!-- Form Login -->
        <form class= "p-5">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success"  id="closed2">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-black text-center text-white bg-gray">
 
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item centered active">
   
      <img class="d-block w-100 " src="img/carousel1.jpg"  height="600" alt="First slide"> 
      <div class="carousel-caption mb-5 text-center ">
      <h1 class="masthead-heading ">Join Our Cause</h1>
        <h2 class="masthead-subheading ">See What You Can Do</h2>
        <a href="waystohelp.php" class="btn btn-alert text-dark btn-xl rounded-pill ">Click Here To Learn More</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="img/carousel2.jpg" height="600"  alt="Second slide">
      <div class="carousel-caption mb-5 text-center  ">
      <h1 class="masthead-heading mb-0">Our Environment Is Dying</h1>
        <h2 class="masthead-subheading mb-0">Air Pollution is Killing Planet Earth</h2>
        <a href="environmentalconcerns.php" class="btn btn-outline-alert btn-xl btn-sm rounded-pill text-white ">What Are The Environmental Concerns?</a>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/carousel3.jpg" height="600"  alt="Third slide">
      <div class="carousel-caption mb-5 text-center  ">
      <h1 class="masthead-heading mb-0">Stop Air Pollution</h1>
        <h2 class="masthead-subheading mb-0">It Kills Our Earth</h2>
        <a href="#" class="btn btn-primary btn-xl rounded-pill ">Learn More</a>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </header>
 <!-- <div class="mastheadcontent">
      <div class="container">
        <h1 class="masthead-heading mb-0">Stop Air Pollution</h1>
        <h2 class="masthead-subheading mb-0">It Kills Our Earth</h2>
        <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
      </div>
    </div>
    <div class=""></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div> -->
    <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
    <div class="read bg-gray">
      <div class="container p-5 text-center text-white">
        <img src="img/J.jpg" alt="read">
        <h5>LEARN MORE  <br>ABOUT HOW THE ENVIRONMENT IS EFFECTED BY AIR POLLUTION</h5>
        <p>"the more you know the less you fear"</p>
        <button class="button" onclick="location.href="" type="button">Login</button>
        </div>
    </div>

    <div class="mapbx">
        <img src="img/tpmap.jpg" alt="sj">
        <div class="des">
            GEOGRAPHY AND CLIMATE
            <br>
            <br> Tropical rainforests lie in the "tropics" between the Tropic of Capricorn and the Tropic of Cancer. In this region, sunlight hits the earth at an angle of about 90 degrees, resulting in intense solar energy. This intensity is due to the constant equatorial length of the day: 12 hours a day, 365 days a year. This steady sunlight provides the necessary energy to power the forest through photosynthesis.
            <br>
            <br> Due to the high solar energy, tropical rainforests like the Amazon are usually warm year round, with temperatures of 22-34 ° C, although forests at higher elevations, especially in cloud forests, are much cooler. The temperature may vary during the year, but in some equatorial forests the average may only be a few degrees throughout the year. Temperatures are generally mitigated by cloudiness and high humidity.
        </div>
    </div>

    <div class="blu">
        <img src="img/j.jpg" alt="gb">
        <div class="vo">
            TROPICAL RAINFOREST ECOSYSTEM
            <br>
            <br> Tropical rainforests exist in three major global areas: Central and South America, Africa and Indo-Malaysia. They are aptly called rainforests, which average between 125 and 660 cm of precipitation per year.
            <br>
            <br> Tropical rainforests are usually found near the equator, so that direct sunlight is possible in any habitat. Therefore, there is no cold season. The temperatures are on average between 20 ° C and 34 ° C. The combination of heat and rain creates a very humid environment. The warm air stores the water vapor, but as the air rises and cools, clouds form, producing more rain.
        </div>
    </div>


  <!-- Footer -->
  <footer class=" container-fluid bg-dark ">
    <div class="row">
     <div class= "col-md-4 text-white float-left bg-dark p-2">
      <h3>Where We Work</h3>
      
      <a href="" class="text-decoration-none "><h3>America</h3></a>
      <a href="" class="text-decoration-none "><h3>Africa</h3></a>
      <a href="" class="text-decoration-none "><h3>South-East Asia</h3></a>
      <a href="" class="text-decoration-none "><h3>Europe</h3></a>

      <div class="container p-2">
      <p> What We do is Widely supported by WHO and the Government of the concerned Country</p>
      <a href="https://www.who.int/health-topics/air-pollution#tab=tab_1"><img src="img/smoke.jpg" width="200" height="150" alt=""></a>
      </div>
     </div>

     <div class=" col-md-4 bg-dark">
       
       <div class="card" style="width: 18rem;">
  
      <div class="card-header">
     <h5 class="card-title text-center">Meet Kate! <br> One of our Leading Activist</h5>
      </div>
        <img src="img/card1.jpg" width=100% height=100% class="card-img-top" alt="...">
       <div class="card-body">
    
         <p class="card-text">Kate works in measure how much air pollution is done in a certain square area</p>
         <a href="#" class="btn btn-lg btn-info active mr-3 ml-4" role="button" aria-pressed="true">See More Of our Staff</a>
  </div>
  
</div>
<p class=" text-center text-white small">Copyright &copy; AirPollution 2019</p>
     </div>

     <div class=" col-md-4 float-right bg-dark">
     <p class="text-white ">We Are @ www.stopairpollution@gmail.com <br> <a href=""></a></p>
     
     <a href=""><img src="img/fbicon.png" width="30" height="30" alt=""></a>
       <a href=""><img src="img/twitter.png" width="30" height="30" alt=""></a>
       <a href=""><img src="img/insta.png" width="30" height="30" alt=""></a>
       <hr>
     <form>
                            <h3 class="text-white">Contact Us</h3>
                            <div class="row" >
                                <div class="col">
                                <label class="text-white" for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="col">
                                <label class="text-white" for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <label class="text-white" for="textarea">Leave a message.</label>
                                    <textarea name="textarea" class="form-control" id="textarea" cols="30" rows="5" placeholder="Go ahead. We are listening..."></textarea>                                
                                </div>
                            </div>
                            <div class="mt-3 ">
                                <button type="button" class="btn btn-light btn-control w-25">Send</button>
                            </div>
                        </form>
  </div>

</form>
     </div>
    </div>
 
  </footer>

    <!-- Bootstrap core JavaScript -->
<script src="css/jquery-3.4.1.slim.min.js"></script>
<script src="css/popper.min.js"></script>
<script src="css/bootstrap.min.js"></script>
<script src="css/jquery.min.js"></script>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="css/jquery.counterup.min.js"></script>

<script>
   $(document).ready(function($) {
        $('.counter').counterUp({
            delay: 13,
            time: 1100
        });
        $('#signup').click(function(){
            $('#signupform').show();

        });
        $('#closed1').click(function(){
            $('#signupform').hide();
        });
        $('#closed2').click(function(){
            $('#loginform').hide();
        });
        $('#login').click(function(){
            $('#loginform').show();
           
        });
        // $('#Signup,#Get').click(function(){
        //     $('#modal').show();
        //     $('#signup').addClass('show active');
        //     $('#nav-Signup-tab').addClass('active');
        // });
        // $('#hide1').click(function(){
        //     $('#modal').hide();
        //     $('#signup,#nav-Signup-tab').removeClass('active');
        // });
    });

</script>
  
</body>

</html>
