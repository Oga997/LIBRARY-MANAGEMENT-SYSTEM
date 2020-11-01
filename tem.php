<?php  
 include('connect.php');
            $x=$_REQUEST['usn'];
            $y=$_REQUEST['pwd'];
            $y = md5($y);
            $z=$_REQUEST['mail'];
   echo "<br>Username:".$x;
     echo "<br>password:".$y;
       echo "<br>email:".$z;
 $e="SELECT * FROM users where name='".$x."' && password='".$y."'";
$database=new databaseManager();
$tr=$database->safeRetrieve($e,null);
echo $tr[0];

?>