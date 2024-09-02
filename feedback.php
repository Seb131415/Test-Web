<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/Test-Web/resource/init.php';
if(!empty($_GET)){

  $insert=new insert($_GET['name'],$_GET['email'],$_GET['feedback']);
  $insert->insertfeedback();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Feedback</h1>
    <div class="container mt-5">
    <form action="" method="GET">
      <div class="row">
        <div class="col-md-4 form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter Name" required>
        </div>
        </div>
      <div class="row">
        <div class="col-md-4 form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter Email" required>
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        </div>
        <div class="row">
        <div class="col-md-4 form-group">
          <label for="exampleFeedback1" >Feedback</label>
          <textarea class="form-control" name="feedback" id="exampleFeedback1" placeholder="Feedback!" row="3" required></textarea>
        </div>
      </div>
     
        <button type="submit" class="col-md-1 mt-3 btn btn-primary">Submit</button>
        <a href="index.php" class="col mt-3 btn btn-primary">Go to View Feedback</a>
      </form>
    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>