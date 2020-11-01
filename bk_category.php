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
  <title>Book Category</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
  h2 {
    font-size: 25px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  .jumbotron {
    background-color: black;
    color: #fff;
    padding: 60px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 100px 100px;
  }
  .panel {
    border: 2px solid #652d8c; 
    border-radius:0 !important;
    transition: box-shadow 0.6s;
  }
  .panel:hover {
    box-shadow: 5px 0px 60px rgba(0,0,0, .9);
  }
  .panel-heading1 {
    color: #24053b !important;
    background-color: white !important;
    padding: 25px;
 
  }
  .panel-heading2 {
    color: #24053b !important;
    background-color: white !important;
    padding: 25px;
 
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="jumbotron text-center">
  <h1>Library Management</h1> 
</div>
<!-- Container (Pricing Section) -->    
<div id="pricing" class="container-fluid">  
  <div class="row">
  <a href="biog.php">
    <div class="col-sm-4 ">
      <div class="panel panel-default text-center">
        <div class="panel-heading1">
          <h1>BIOGRAPHY</h1>
      </div>  
      </div>    
    </div>
    </a>     
    <a href="Tech.php">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading2">
          <h1>TECHNICAL</h1>
        </div>
      </div>      
    </div>   
    </a>
    <a href="Eng.php">    
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading1">
          <h1>ENGINEERING</h1>
        </div>
      </div>      
    </div>    
    </a>
    <a href="Comi.php">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading2">
          <h1>COMIC</h1>
      </div>  
      </div>    
    </div>     
    </a>
    <a href="Social.php">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading1">
          <h1>SOCIAL SCIENCE</h1>
        </div>
      </div>      
    </div>     
    </a>
    <a href="Phy.php">  
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading2">
          <h1>PHILOSOPHY</h1>
        </div>
      </div>      
    </div>    
    </a>
</div>
</div>
</body>
</html>
