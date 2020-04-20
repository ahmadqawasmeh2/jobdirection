<?php
include_once('is_login.php');
//var_dump($_SESSION);
if(	$_SESSION['user_id'] !=0)
{
  header('Location: index.php');
  exit();
}
$form="";
$conn=mysqli_connect('mysql1007.mochahost.com','arabyhos_jobs','.b+_X@}ln-of','arabyhos_jobs');
mysqli_set_charset($conn,'utf8');
      $xxx="";
      	if(	$_SESSION['user_id'] ==0)
	{
	    $xxx="<a href='newuser.php'> Create User</a>";
	}
      if(isset($_POST['generate'])){
        $name = base64_encode((rand(1,999999)));
        $pass =rand(1, 1000000);
        $passenc=md5($pass);
       $query="INSERT INTO `user`(`user_id`, `username`, `pass`, `is_log`) VALUES (null,'$name','$passenc',null)";
       if ($conn->query($query) === TRUE) {
     $UName=$_POST['username']= $name;
        $UPass=$_POST['pass']=$pass;
        $form="
          <div class='form-group'>
<label>Username</label>
<input type='text' class='form-control' placeholder='Username'   value='$UName' readonly>
        </div>
        <div class='form-group'>
          <label>Password</label>
            <input type='text' class='form-control' placeholder='Password'  
            value='$UPass' readonly>
        </div>
        
        ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
//        $form="Error Please Try again";

}

$conn->close();
       

      }


 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Job Directions</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> 
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="home.php">Job<strong class="font-weight-bold">Directions</strong> </a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li><a href="home.php">HOME</a></li>
                            <li><a href="form.php"> FORM</a></li>
                      <li>	    <?php echo  $xxx; ?>              </li>
                      <li><a href="logout.php">Logout </a></li>
                     
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

               
            
              
          </div>
        

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5"> Generated User :</h2>
          </div>
        </div>
        <div class="row">
                      <div class="col-md-6 mx-auto text-center mb-5 section-heading">

        <form method="post">
             <?php echo $form; ?>

        <div class="form-group">
            <button type="submit" name="generate" value="generate" class="btn btn-primary btn-block">Genrate new user</button>
        </div>
             
    </form>
           </div>
        </div>

      </div>
    </div>

          </div>
        </div>
      </div>
    </div>

    


    
    <footer class="site-footer">
      <div class="container">
        

        <div class="row">
         
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">Categories</a></li>
                    <li><a href="#">FORM</a></li>
                  </ul>
              </div>
              
            </div>
          </div>

          
          <div class="">
            <div ><h3></h3></div>
              <div class="">
                <p>
                

                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12" style="
    margin-top: 0;
    margin-bottom: -2rem;">
            <p>
           
            Copyright &copy All Rights Reserved  by Ahmad Al-Qawasmeh
           
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  
  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>
    

  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>


    <script>
     
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
       
        autocomplete = new google.maps.places.Autocomplete(
            (document.getElementById('autocomplete')),
            {types: ['geocode']});

        
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

     
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  </body>
</html>