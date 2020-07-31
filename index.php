<?php
require_once 'controllers/authController.php';

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <!-- BODY  -->
  <body>
    <!-- NAVBAR -->
    <?php include 'navbar.php'?>  

    <br/> <br/> <br/> 
    <!-- CARD  -->
    <div class="container">
    <h4 class="hello">Hello, <?php echo $_SESSION['username'];?>!</h4>
    <div class="card text-center"> 
    <div class="card-body">
    <h3 class="card-title" id="activity" >Click button to generate activity</h3>
    <p class="card-text"></p>
    <a href="#" class="btn btn-primary" onclick="randomActivity();">Random Category</a>
    </div>
    <div class="card-footer text-muted">
          Category:<h5 class="category" id="category">(example: art)</h5>
        </div>
        <div>
            <a href="#" class="btn btn-primary" onclick="busywork();">Busy Work</a>
            <a href="#" class="btn btn-danger" onclick="charity();">Charity</a>
            <a href="#" class="btn btn-success" onclick="cooking();">Cooking</a>
            <a href="#" class="btn btn-info" onclick="diy();">DIY</a>
            <a href="#" class="btn btn-warning" onclick="educational();">Educational</a>
            <a href="#" class="btn btn-danger" onclick="music();">Music</a>
            <a href="#" class="btn btn-warning" onclick="recreational();">Recreational</a>
            <a href="#" class="btn btn-primary" onclick="relaxation();">Relaxation</a>
            <a href="#" class="btn btn-success" onclick="social();">Social</a>
        </div>
    <br/>
    </div>
    <?php include 'columncards.php' ?>
    </div> 

    <!-- ABOUT JOMO  -->
    
   <section id="section-about"> 
     <?php include 'about.php';?>
    <br/> <br/><br/>
    </section>

 <!-- FOOTER   -->
 <?php include 'footer.php';?>


    <!-- JavaScript -->
    <script src="categories.js"></script>
    <!-- BORED API -->
    <script>
      var myRequest = "http://www.boredapi.com/api/activity/";

      // RANDOM ACTIVITY FUNCTION
      function randomActivity(){
        fetch(myRequest)
          .then((response) => response.json())
          .then((data) => {
            console.log(data);
            console.log(data.activity);
            console.log(data.type);
            document.getElementById("activity").innerHTML = data.activity;
            document.getElementById("category").innerHTML = "random";
          })
          .catch(console.error);
      }
    </script>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>

  </html>
