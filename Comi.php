<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
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
    padding: 30px 25px;
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
<body>
<form action="" method="POST" enctype="multipart/form-data">
<div class="jumbotron text-center">
  <h1 style="">Library Management</h1> 
  <p>(Learn From anywhere Anytime in the World)</p>
</div>
<h1 style="text-align:center;"><center>Comic Books</center></h1><br>

<?php
include('connect.php');
    
    $database=new DatabaseManager();
    $query = "SELECT * FROM books where bk_catg='Comic'";
    $status=$database->safeRetrieve($query,NUll);
     echo"<center>";   echo"<table class='table table-hover table-bordered'>";
                 echo"<th>Book Id</th><th>Book Name</th><th>Book Author</th><th>Category</th><th>Book Pdf</th>";
     for ($i=0; $i<count($status); $i++)
    {
  echo "<tr>
    <td>" . $status[$i]['id'] . "</td>
    <td>" . $status[$i]['bk_nm'] . "</td>
    <td>" . $status[$i]['bk_aut'] . "</td>
    <td>" . $status[$i]['bk_catg'] . "</td>
    <td>" . '<a class="btn btn-primary" href="download.php?file='.$status[$i]['bk_pd'] .'">Download</a>'."</td>
    
    </tr>";
                
    }
     echo"</table>";echo"</center>";
?>
</body>
</html>