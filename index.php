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
        <a class="navbar-brand" href="#">Home</a>
        
        <a class="navbar-brand" href="/assignment_tlh/healthconcerns.php">Health Concerns </a>
        
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
        <a href="waystohelp.php" class="btn btn-outline-alert btn-xl btn-sm rounded-pill text-white  ">Click Here To Learn More</a>
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
        <a href="healthconcerns.php" class="btn btn-outline-alert btn-xl btn-sm rounded-pill text-white">Learn More</a>
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
  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/pol.jpg"   width="1100" height="500" alt="Smoke Uprising from industrial Chimneys">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">AIR POLLUTION WRECK!!!</h2>
            <p>Air pollution kills an estimated seven million people worldwide every year. WHO data shows that 9 out of 10 people breathe air containing high levels of pollutants. WHO is working with countries to monitor air pollution and improve air quality. 
<br>
From smog hanging over cities to smoke inside the home, air pollution poses a major threat to health and climate. The combined effects of ambient (outdoor) and household air pollution cause about seven million premature deaths every year, largely as a result of increased mortality from stroke, heart disease, chronic obstructive pulmonary disease, lung cancer and acute respiratory infections.
<br>
More than 80% of people living in urban areas that monitor air pollution are exposed to air quality levels that exceed WHO guideline limits, with low- and middle-income countries suffering from the highest exposures, both indoors and outdoors.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/square.jpg" width="1100" height="500"  alt="airpollution">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">It's Everywhere!!!</h2>
            <p>Around 91% of the world’s population live in places where air quality levels exceed WHO limits. While ambient air pollution affects developed and developing countries alike, low- and middle-income countries experience the highest burden, with the greatest toll in the WHO Western Pacific and South-East Asia regions. 
<br>
The major outdoor pollution sources include vehicles, power generation, building heating systems, agriculture/waste incineration and industry. Policies and investments supporting cleaner transport, energy-efficient housing, power generation, industry and better municipal waste management can effectively reduce key sources of ambient air pollution.
<br>
Air quality is closely linked to earth’s climate and ecosystems globally. Many of the drivers of air pollution (i.e. combustion of fossil fuels) are also sources of high CO2 emissions. Policies to reduce air pollution, therefore, offer a “win–win” strategy for both climate and health, lowering the burden of disease attributable to air pollution, as well as contributing to the near- and long-term mitigation of climate change.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/download1.png" width="1100" height="500"  alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Let's FIGHT IT TOGETHER!!</h2>
            <p>The World Health Organization (WHO) works with all Member States to support their national health development process, whether or not WHO has a physical presence.

In countries, WHO promotes the achievement of the highest sustainable level of health of all people.
<br>
WHO cooperates with governments and other partners in pursuing countries’ national health strategies and plans as well as collective commitments by the WHO Governing Bodies.

</p>
<div class="text-center ">
<a href="https://www.who.int/health-topics/air-pollution#tab=tab_1" class="btn btn-outline-success  rounded-pill">Learn More with WHO</a>
</div>
          </div>
        </div>
      </div>
    </div>
    
  </section>

  <!-- Footer -->
  <footer class=" container-fluid bg-dark ">
    <div class="row">
     <div class= "col-md-4 text-white float-left bg-dark p-2">
      <h3>Where We Work</h3>
      
      <a href="" class="text-decoration-none "><h4>America</h4></a>
      <a href="" class="text-decoration-none "><h4>Africa</h4></a>
      <a href="" class="text-decoration-none "><h4>South-East Asia</h4></a>
      <a href="" class="text-decoration-none "><h4>Europe</h4></a>

      <div class="container p-2">
      <p> What We do is Widely supported by WHO and the Government of the concerned Country</p>
      <a href="https://www.who.int/health-topics/air-pollution#tab=tab_1"><img src="img/who.png" width="150" height="150" alt=""></a>
      <a href="https://www.who.int/health-topics/air-pollution#tab=tab_1"><img src="img/who.png" width="150" height="150" alt=""></a>
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
