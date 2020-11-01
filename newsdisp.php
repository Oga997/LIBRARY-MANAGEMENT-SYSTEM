<!DOCTYPE html>
<html lang="en">
<head>
  <title>News</title>
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
    color: #fff;
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
<br><br>
    </form>
    <?php
include('connect.php');
    
    $database=new DatabaseManager();
    $query = "SELECT * FROM news";
    $status=$database->safeRetrieve($query,NUll);
    echo"<center>";   echo"<table class='table table-hover table-bordered table'>";
                 echo"<th>Subject</th><th>Description</th><th>News By</th><th>Posted At</th>";
     for ($i=0; $i<count($status); $i++)
    { 
   echo "<tr>
    <td>" . $status[$i]['title'] . "</td>
    <td width='600px'>" . $status[$i]['description'] . "</td>
    <td>" . $status[$i]['nop'] . "</td>
    <td width='300px'>" . $status[$i]['updated_at'] . "</td>
    
    </tr>";
                 
    }
     echo"</table>";echo"</center>";
     ?>
  </body>
  </html>