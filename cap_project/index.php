
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <title>India At Olympics</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="game.php">
    <link rel="stylesheet" href="login.php">   
    <link rel="stylesheet" href="about.php">
    <link rel="stylesheet" href="reg.php">
    <link rel="stylesheet" href="sports.php">
    <link rel="stylesheet" href="medal.html">
    <!-- <script>
        $(document).ready(function () {
            $("#alert").click(function () {
                alert("You Are Redirecting To Olympic Games Page");
            });
        });
    </script> -->
</head>
<style>
  .icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

/* Style the icon bar links */
.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

/* Style the social media icons with color, if you want */
.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}
#clock {
			font-size: 20px;
			width: 110px;
      color:white;
			text-align:right;
		
      color:white;
  
		}
</style>
<body>
    <header>
    <div class="wrapper">
        <div class="logo">
            <img src="" alt="">
        </div>
</div>
<div id="clock">8:10:45</div>

<script>
  setInterval(showTime, 1000);
  function showTime() {
    let time = new Date();
    let hour = time.getHours();
    let min = time.getMinutes();
    let sec = time.getSeconds();
    am_pm = "AM";

    if (hour > 12) {
      hour -= 12;
      am_pm = "PM";
    }
    if (hour == 0) {
      hr = 12;
      am_pm = "AM";
    }

    hour = hour < 10 ? "0" + hour : hour;
    min = min < 10 ? "0" + min : min;
    sec = sec < 10 ? "0" + sec : sec;

    let currentTime = hour + ":"
      + min + ":" + sec + am_pm;

    document.getElementById("clock")
      .innerHTML = currentTime;
  }

  showTime();
</script>
<div class="welcome-text">
        <h1>
India  At <span>Olympics</span></h1>
<a href="game.php" >View More</a>
    </div>
   

<!-- The social media icon bar -->
<div class="icon-bar">
  <a href="https://linkedin.com" class="linkedin" target="_blank"><i class="fa fa-linkedin" _blank="toggle"></i></a>
  <a href="https://facebook.com" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
  <a href="https://twitter.com" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
  <a href="https://google.com" class="google" target="_blank"><i class="fa fa-google"></i></a>
 
</div>
</header>

</body>
</html> 


































































 <!-- Footer -->
 <!-- <footer class="page-footer font-small mdb-color pt-4"> -->

    <!-- Footer Links -->
    <!-- <div class="container text-center text-md-left"> -->
  
      <!-- Footer links -->
      <!-- <div class="row text-center text-md-left mt-3 pb-3"> -->
  
        <!-- Grid column -->
        <!-- <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
          <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
        </div> -->
        <!-- Grid column -->
<!--   
        <hr class="w-100 clearfix d-md-none">
   -->
        <!-- Grid column -->
        <!-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold ">Products</h6>
          <p>
            <a href="#!">MDBootstrap</a>
          </p>
          <p>
            <a href="#!">MDWordPress</a>
          </p>
          <p>
            <a href="#!">BrandFlow</a>
          </p>
          <p>
            <a href="#!">Bootstrap Angular</a>
          </p>
        </div> -->
        <!-- Grid column -->
  
        <!-- <hr class="w-100 clearfix d-md-none">
   -->
        <!-- Grid column -->
        <!-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
          <p>
            <a href="#!">Your Account</a>
          </p>
          <p>
            <a href="#!">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!">Shipping Rates</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>
        </div> -->
  
        <!-- Grid column -->
        <!-- <hr class="w-100 clearfix d-md-none"> -->
  
        <!-- Grid column -->
        <!-- <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
          <p>
            <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p>
            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div> -->
        <!-- Grid column -->
  
      <!-- </div> -->
      <!-- Footer links -->
  
      <!-- <hr> -->
  
      <!-- Grid row -->
      <!-- <div class="row d-flex align-items-center"> -->
  
        <!-- Grid column -->
        <!-- <div class="col-md-7 col-lg-8">
   -->
          <!--Copyright-->
          <!-- <p class="text-center text-md-left">© 2021 Copyright:
            <a href="index.php">
              <strong> India at olympic.com</strong>
            </a>
          </p>
  
        </div> -->
        <!-- Grid column -->
  
        <!-- Grid column -->
        <!-- <div class="col-md-5 col-lg-4 ml-lg-0"> -->
  
          <!-- Social buttons -->
          <!-- <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
  
        </div> -->
        <!-- Grid column -->
<!--   
      </div>
      Grid row -->
  
    <!-- </div> -->
    <!-- Footer Links -->
  
  <!-- </footer> -->
  <!-- Footer -->