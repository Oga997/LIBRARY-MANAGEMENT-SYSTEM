<!DOCTYPE html>
<html>
<head>
	<title>Insert Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">

.box{
 width: 100%;
  margin: auto 0px;
  margin-left: 50%;
  color: white;
  background:SkyBlue;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;}
  
  form, .content {
    margin-left: 50%;
  width: 100%;
  padding: 20px;
  border: 2px solid #B0C4DE;
  text-align: center;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
body{
    background-image:url("fback.jpg");
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="  container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Library Management </a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<div class="col-md-6">
  <div class="box"><h1>Upload Book</h1></div>
<form id="upd" action="inbook.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
     <div class="form-group">
      <input type="text" class="form-control" id="bnm" placeholder="Enter Your Book Name" name="bnm">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="banm" placeholder="Enter Book Author Name" name="banm">
    </div>
    <div class="form-group">
      <select class="form-control" id="cat" name="cat">
      <option></option>
        <option>BIOGRAPHY</option>
        <option>TECHNICAL</option>
        <option>ENGINEERING</option>
        <option>COMIC</option>
        <option>SOCIAL SCIENCE</option>
        <option>PHILOSOPHY</option>
      </select>
    </div>
    <div class="form-group">
      <input type="file" class="form-control" id="file" placeholder="Select Book Pdf" name="file">
    </div>
    <button type="submit" class="btn btn-success"  name ="upld" style="width:300px;">Upload
    </button>
  </form>
</div>
</div>
</body>
</html>