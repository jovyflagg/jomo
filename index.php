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
  <body>
    <!-- NAVBAR -->

    <?php include 'navbar.php'?>
<br/>
<br/>
<br/>
    <div class="container">
    <div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <p class="card-title" id="activity" >Special title treatment</p>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary" onclick="a();">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
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
      var activityNode = "";
      function a() {
        fetch(myRequest)
          .then((response) => response.json())
          .then((data) => {
            console.log(data);
            console.log(data.activity);
            document.getElementById("activity").innerHTML = data.activity;
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
