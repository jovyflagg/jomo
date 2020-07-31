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
    <title>Categories</title>
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
  <body>
    <!-- NAVBAR -->

    <?php include 'navbar.php'?>
<br/>
<br/>
<br/>

<!-- CARD  -->
<div class="container">
      <div class="card text-center">
        <div class="card-body">
          <h3 class="card-title" id="activity" >Click category</h3>
          <p class="card-text"></p>
        </div>
        <div class="card-footer text-muted">
          Category:<h5 class="category" id="category" >(example: art)</h5>
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
      </div>
</div>
 <!-- Optional JavaScript -->
    <!-- BORED API -->
    <script>
      var myRequest = "http://www.boredapi.com/api/activity/";
      // function callBoredAPI(){
      //   fetch('http://www.boredapi.com/api/activity/')
      //   .then(response => response.json())
      //   .then(data => {
      //     alert("second then");
      //   };
      // }

      function recreational(){
        fetch("http://www.boredapi.com/api/activity?type=recreational")
          .then((response) => response.json())
          .then((data) => {
            console.log(data);
            console.log(data.activity);
            console.log(data.type);
            document.getElementById("activity").innerHTML = data.activity;
            document.getElementById("category").innerHTML = data.type;
          })
          .catch(console.error);
      }

      function educational(){
        fetch("http://www.boredapi.com/api/activity?type=education")
          .then((response) => response.json())
          .then((data) => {
            console.log(data);
            console.log(data.activity);
            console.log(data.type);
            document.getElementById("activity").innerHTML = data.activity;
            document.getElementById("category").innerHTML = data.type;
          })
          .catch(console.error);
      }

      function diy(){
        fetch("http://www.boredapi.com/api/activity?type=diy")
          .then((response) => response.json())
          .then((data) => {
            console.log(data);
            console.log(data.activity);
            console.log(data.type);
            document.getElementById("activity").innerHTML = data.activity;
            document.getElementById("category").innerHTML = data.type;
          })
          .catch(console.error);
      }

      function social(){
        fetch("http://www.boredapi.com/api/activity?type=social")
          .then((response) => response.json())
          .then((data) => {
            console.log(data);
            console.log(data.activity);
            console.log(data.type);
            document.getElementById("activity").innerHTML = data.activity;
            document.getElementById("category").innerHTML = data.type;
          })
          .catch(console.error);
      }

      function charity(){
        fetch("http://www.boredapi.com/api/activity?type=charity")
          .then((response) => response.json())
          .then((data) => {
            console.log(data);
            console.log(data.activity);
            console.log(data.type);
            document.getElementById("activity").innerHTML = data.activity;
            document.getElementById("category").innerHTML = data.type;
          })
          .catch(console.error);
      }

      function cooking(){
        fetch("http://www.boredapi.com/api/activity?type=cooking")
          .then((response) => response.json())
          .then((data) => {
            console.log(data);
            console.log(data.activity);
            console.log(data.type);
            document.getElementById("activity").innerHTML = data.activity;
            document.getElementById("category").innerHTML = data.type;
          })
          .catch(console.error);
      }

      function relaxation(){
        fetch("http://www.boredapi.com/api/activity?type=relaxation")
          .then((response) => response.json())
          .then((data) => {
            console.log(data);
            console.log(data.activity);
            console.log(data.type);
            document.getElementById("activity").innerHTML = data.activity;
            document.getElementById("category").innerHTML = data.type;
          })
          .catch(console.error);
      }

      function busywork(){
        fetch("http://www.boredapi.com/api/activity?type=busywork")
          .then((response) => response.json())
          .then((data) => {
            console.log(data);
            console.log(data.activity);
            console.log(data.type);
            document.getElementById("activity").innerHTML = data.activity;
            document.getElementById("category").innerHTML = data.type;
          })
          .catch(console.error);
      }

      function music(){
        fetch("http://www.boredapi.com/api/activity?type=music")
          .then((response) => response.json())
          .then((data) => {
            console.log(data);
            console.log(data.activity);
            console.log(data.type);
            document.getElementById("activity").innerHTML = data.activity;
            document.getElementById("category").innerHTML = data.type;
          })
          .catch(console.error);
      }


    </script>
    
  


<!-- FOOTER  -->
<?php include 'footer.php';?>

  

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
