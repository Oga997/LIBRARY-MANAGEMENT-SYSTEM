<?php 
include("connect.php");
$bn=$_REQUEST["bnm"];
$ba=$_REQUEST["banm"];
$bc=$_REQUEST["cat"];
$b=$_REQUEST["upld"];

$folder_path = 'pdf/';

    $filename = basename($_FILES['file']['name']);
    $newname = $folder_path . $filename;

    $FileType = pathinfo($newname,PATHINFO_EXTENSION);

    if($FileType == "pdf")
    {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $newname))
        {

            $database=new DatabaseManager();
	 $query ="INSERT INTO bk_dt (bk_nm,bk_aut,bk_catg,bk_pd) VALUES ('$bn','$ba','$bc','$filename')"; 
	$status=$database->fireSafeQuery($query,NUll);
	header("Location:insbook.php");
        }
        else
        {

            echo "<p>Upload Failed.</p>";
        }


    }
    else
    {
        echo "<p>Class notes must be uploaded in PDF format.</p>";
    }

?>