


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GET and POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

<div class="container mt-4" >
<h1> GET and POST  Method</h1>
<br>
<h2>GET Method</h2>
<?php
  error_reporting(0);
  if( $_GET["name"] || $_GET["email"] || $_GET["pass"] ) 
  {
      echo "Welcome ". $_GET['name']. "<br />" . "<br />";
      echo "Your EmailId is ". $_GET['email']. "<br />" . "<br />";
      echo "Your Password is ". $_GET['pass']."<br />". "<br />". "(Opps sorry! for disclosing your password)";
      exit();
  }
?>
<form action="<?php $_PHP_SELF ?>" method="GET">

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" id="name" >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="Pass ">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="container mt-4" >

<?php
  error_reporting(0);
  if( $_POST["name"] || $_POST["email"] || $_POST["pass"] ) 
  {
      echo "Welcome ". $_POST['name']. "<br />" . "<br />";
      echo "Your EmailId is ". $_POST['email']. "<br />" . "<br />";
      echo "Your Password is ". $_POST['pass']."<br />". "<br />". "(Opps sorry! for disclosing your password)";
      exit();
  }
?>
<h2>POST Method</h2>
<form action="<?php $_PHP_SELF ?>" method="POST">

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" id="name" >
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="Pass ">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>