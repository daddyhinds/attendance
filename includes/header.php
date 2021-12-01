<?php 
//This includes the session file that start/resume a session. By having it inside the header it will be on every page allowing session capability accross the website.
include_once 'includes/session.php'

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

   <link rel = "styleshseet" href="css/site.css" />

    <title>Attendance - <?php echo  $title; ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
          <a class="navbar-brand" href="index.php"> IT Conference</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse container" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto">
              <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="viewrecords.php">View Attendees</a>
            </div>
            
            <div class="navbar-nav ml-auto">
              <?php
                if(!isset($_SESSION['userid'])){
           
              ?>
              
              <a class="nav-item nav-link active" href="login.php">Login <span class="sr-only">(current)</span></a>
             <?php } else { ?>
              <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>!</span></a>
              <a class="nav-item nav-link active" href="logout.php">Logout <span class="sr-only">(current)</span></a>

              <?php } ?>
            </div>
          </div>
    </nav>
  <div class="container">
      
    <br/>