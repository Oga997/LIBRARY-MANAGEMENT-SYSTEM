<?php  
 include('connect.php');
            $x=$_REQUEST['usn'];
            $y=$_REQUEST['pwd'];
            $y = md5($y);
   //echo "<br>Username:".$x;
    // echo "<br>password:".$y;
 $e="SELECT * FROM users where name='".$x."'";
$database=new databaseManager();
$tr=$database->safeRetrieve($e,null);
$tt=count($tr);
for ($i=0; $i <$tt; $i++) { 
if ($y==$tr[$i]['password']) {
		session_start();
		$_SESSION['loggedin']=true;
		$_SESSION['usn']=$x;
       header("Location:home.php?lg=1");
      
}
else{


        header("Location:cr_us.php?OUT=1");
    
}
   }
