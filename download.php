<?php
$filename= basename($_GET['file']);
$filepath='myproject/storage/app/pdf/'.$filename;
    header('Content-Disposition: attachment; filename='.$filepath.'');
    header('Content-Type:application/octent-stream');
    header('content-length='.filesize($filepath));
    readfile($filepath); //showing the path to the server where the file is to be download
    exit();
?>