<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=Partical Webpages, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- JS (load angular, ui-router, and our custom js file) -->
  <script src="http://code.angularjs.org/1.2.13/angular.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.8/angular-ui-router.min.js"></script>

  <script src="app.js"></script>
  <!-- ​Load CSS -->
  <link rel="stylesheet" href="style.css">

</head>

<body ng-app="routerApp" ng-controller="GlobalCtrl">

  <?php require_once 'process.php' ?>
  
  <div class="container-fluid">
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" ui-sref="home">Graduate</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link nav-1" ui-sref="calculator">Calculator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-2" ui-sref="profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-3" ui-sref="lottery">Lottery</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="container">

      <!-- This is where we will inject our content -->
      <div ui-view></div>

    </div>
  </div>

  <!-- Footer -->
  <footer class="page-footer">
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href=""> Trần Văn Hải</a>
    </div>
  </footer>
  <!-- Footer -->
  ​
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script>
    particlesJS.load('particles-js', 'particles.json', function() {
      console.log("OK")
    })
  </script>
</body>

</html>