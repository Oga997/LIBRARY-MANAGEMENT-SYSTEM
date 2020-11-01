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
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">

     .jumbotron {
    background-color: skyblue;
    color: black;
    padding: 40px 25px;
    font-family: Montserrat, sans-serif;
  }

        table{
            text-align: center;
          
        }
        th{
            text-align: center;
            background:black;
            color:white;
        }
    </style> 

    </head>  
    <div class="jumbotron text-center">
  <h1 style="">Library Management</h1> 
  <p>(Learn From anywhere Anytime in the World)</p>
</div>
<h1 style="text-align:center;"><center>Question Paper</center></h1><br>


  <center><table class="table table-hover table-bordered">
  <th>Semester</th>
      <tr><td><br><a href="que1.php" style="text-decoration:none;font-size:15px;">SEMESTER-1</a><br></td></tr>
      <tr><td><br><a href="que2.php" style="text-decoration:none;font-size:15px;">SEMESTER-2</a><br></td></tr>
      <tr><td><br><a href="que3.php" style="text-decoration:none;font-size:15px;">SEMESTER-3</a><br></td></tr>
      <tr><td><br><a href="que4.php" style="text-decoration:none;font-size:15px;">SEMESTER-4</a><br></td></tr>
      <tr><td><br><a href="que5.php" style="text-decoration:none;font-size:15px;">SEMESTER-5</a><br></td></tr>
      <tr><td><br><a href="que6.php" style="text-decoration:none;font-size:15px;">SEMESTER-6</a><br></td></tr>
      <tr><td><br><a href="que7.php" style="text-decoration:none;font-size:15px;">SEMESTER-7</a><br></td></tr>
      <tr><td><br><a href="que8.php" style="text-decoration:none;font-size:15px;">SEMESTER-8</a><br></td></tr>
        <br>
        </table></center>
  <br>
  <h1 style="text-align:center;"><center>MODEL ANSWER PAPERS</center></h1><br>
      <br>
  <center><table class="table table-hover table-bordered">
    <th>Semester</th>
         <tr><td><br><a href="moans1.php" style="text-decoration:none;font-size:15px;" >SEMESTER-1</a><br></td></tr>
         <tr><td><br><a href="moans2.php" style="text-decoration:none;font-size:15px;">SEMESTER-2</a><br></td></tr>
         <tr><td><br><a href="moans3.php" style="text-decoration:none;font-size:15px;">SEMESTER-3</a><br></td></tr>
         <!--<tr><td><br><a href="modelans4.html">MODELANS-4</a><br></td></tr>-->
      
      <br>
      </table></center>
   </body>
   </html>