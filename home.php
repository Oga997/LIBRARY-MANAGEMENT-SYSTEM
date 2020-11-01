<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
       .fa {
  padding: 10px;
  font-size: 20px;
  width: 40px;
  text-align: center;
  text-decoration: none;
    margin:5px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: black;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: skyblue;
    font-size: 50px;
  }
  .logo {
    color:skyblue;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color:skyblue;
  }
  .carousel-indicators li {
    border-color: skyblue;
  }
  .carousel-indicators li.active {
    background-color:skyblue;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid skyblue; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid black;
    background-color: black !important;
    color: white;
  }
  .panel-heading {
    color: #fff !important;
    background-color: skyblue !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color:green;
    color: white;
  }
     .footer{
            
            left:0px;
            width:100%;
            bottom:0px;
            border: 2px blue;
            background:black;
            color:white;
            text-align: center;
        }
  .navbar {
    margin-bottom: 0;
    background-color: black;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: skyblue !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: skyblue;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  swal({
    title:"<?php echo "Hello ".$_SESSION['usn'] ?>",
  icon: "info",
});
</script>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Library Management</h1> 
  <form>
  </form>
</div>
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-9">
      <h2>About Us</h2><br>
    <p style="text-size:15px;">LIBRARY MANAGEMENT SYSTEM is an online library system from which each of us can learn from anywhere in the World. It was one of the big step towards tackeling the current padamic situation. Due to current padamic situation most of the collage libraries just became a warehouse of books, as the students can't visit to Library and physically borrow books and learn from it. so for such condition we have decided to develop a system from which each student can learn from any book by just typing its name in the custom search bar.
Apart from this we will also provide some additional information to students which will make the learning process easier.</p>
    </div><br>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-education logo slideanim"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission is to create an online library system from which each of us can learn from anywhere in the World.</h4><br>
      <h4><p><strong>VISION:</strong> Our vision is provide best quality book anytime.</p></h4>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
  <a href="fnd_bk.php">
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-search logo-small" ></span>
      <h4><p>Search a Book</p></h4>
    </div>
    </a>
    <a href="question paper.php">
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-download-alt logo-small" href =""></span>
      <h4><p>Download Model answer Paper</p></h4>
    </div>
    </a>
    <a href="newsdisp.php">
    <div class="col-sm-3">
      <span class=" glyphicon glyphicon-calendar logo-small"></span>
      <h4> <p>Today's News</p></h4>
    </div>
    </a>
    <a href="bk_category.php">
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-book logo-small"></span>
      <h4> <p>Find Book By Category</p></h4>
    </div>
    </a>
  </div>
  <br><br>
</div>

<!-- Container (Portfolio Section) -->
<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Our Team</h2><br>
  <div class="row text-center slideanim">
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="1601537306189.jpg" width="300" height="100" style="border-radius:50%;">
        <p><strong>Arbaaz Nakhwa</strong></p>
        <p>Web-Development,Database-designer</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="obaid.jpg" width="170" height="100" style="border-radius:50%;">
        <p><strong>Obaid Sayyed</strong></p>
        <p>Web-Development,Database-designer</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="dostam.jpg" width="190" height="100" style="border-radius:50%;">
        <p><strong>Dostam Tufail</strong></p>
        <p>Web-Development</p>
      </div>
    </div>
     <div class="col-sm-3">
      <div class="thumbnail">
        <img src="group1.png" width="145" height="100" style="border-radius:50%;">
        <p><strong>Saalem Khan</strong></p>
        <p>Web Development</p>
      </div>
    </div>
  </div><br>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Learn New Booming Language</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Artificial Intellegence</h1>
        </div>
        <img src="ai.jpg" alt="Paris" width="395" height="200" >
        <div class="panel-footer">
          <a class="btn btn-lg" href="https://www.coursera.org/professional-certificates/applied-artifical-intelligence-ibm-watson-ai">Sign Up</a>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Machine Learning</h1>
        </div>
        <img src="21770.jpg" alt="Paris" width="395" height="200" >
        <div class="panel-footer">
          <a class="btn btn-lg" href="https://www.coursera.org/learn/machine-learning">Sign Up</a>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Graphics Design</h1>
        </div>
        <img src="graphic-design-studio-workspace_67155-1341.jpg" alt="Paris" width="395" height="200">
        <div class="panel-footer">
          <a class="btn btn-lg" href="https://www.coursera.org/specializations/graphic-design">Sign Up</a>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> arbaaznakhwa54@gmail.com</p>
    </div>
    <form action="mailto:arbaaznakhwa54@gmail.com" method="post" enctype="text/plain">
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
  <div class="footer">
<div class="container-fluid">
<div class="row">
<div class="col-sm-4">
  <h4 style="color:white;">ABOUT US</h4><br>
            <br>LIBRARY MANAGEMENT SYSTEM is an online library system from which each of us can learn from anywhere in the World.
    
    </div>    
    <div class="col-sm-4">
        <span class=""><h4 style="color:white;">USEFUL LINK</h4></span><br>
        <span class=""><h5><a href="" style="text-decoration: none;"><b>LOGIN</b></a></h5></span>
        <span class=""><h5><a href="question paper.php" style="text-decoration: none;"><b>MODEL ANSWER PAPER</b></a></h5></span>
    <span class=""><h5><a href="fnd_bk.php" style="text-decoration: none;"><b>FIND THE BOOK</b></a></h5></span>
    </div>    
<div class="col-sm-4">
    <span class=""><h4 style="color:white;">CONTACT</h4></span><br>
    <span class=""><h5>Arbaaz Nakhwa</h5></span>
    <span class=""><h5>Obaid Sayyed</h5></span>
    <span class=""><h5>Dostam Tufail</h5></span>
    </div>   
    </div>   
    </div>
     <span class=""><h2>Follow Us On</h2>
    
        <span class="fa fa-facebook"></span>
        <span class="fa fa-twitter"></span>
        <span class="fa fa-google"></span>
        <span class="fa fa-youtube"></span>   
        </span>
    </div>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
