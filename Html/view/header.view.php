<?php session_start();
define("SITE_ROOT", "C:/xampp/htdocs/clientini/Html");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Home</title>
</head>

<body>
  <header>
  <?php require "stylesheet.php" ?>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary form-inline ">
      <a class="navbar-brand btn btn-info" href="client.view.php">CLIENTI</a>
      <ul class="navbar-nav mr-auto">

      </ul>
      <ul class="navbar-nav ">
        <?php
        if (isset($_SESSION['UserId'])) {
          echo '<li>
            <form action="../includes/logout.inc.php" method="POST">
            <button type="submit" class=" btn btn-danger">LOGOUT</button>
          </li>';
        } else {
          echo '<form class="form-group" action="../includes/login.inc.php" method="POST" >
    
            <li class="nav-item">
                <input type="text" class="form-control" name="email" placeholder="email@holder.ph">
            </li>
            <li class="nav-item">    
                <input type="text" class="form-control ml-2" name="password" placeholder="Password">
            </li>
            <li>
              <button  type="submit" name="login-submit" class="form-control nav-link btn btn-info text-white ml-2" >LOGIN</button>
            </li>
            ';
        }
        ?>


      </ul>
      </form>
      </div>
    </nav>
    

  </header>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>