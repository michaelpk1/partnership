<?php
 ini_set('error_reporting', E_ALL);
 ini_set('display_errors',1);

 include("config.php");

 if(isset($_POST['btns'])){
  $userfirst =$_POST['ftxt'];
  $userlast =$_POST['ltxt'];
  $usermail =$_POST['etxt'];
  $userpsw=$_POST['ptxt'];
  $confirm_psw =$_POST['cntxt'];
  
  if($userpsw !=$confirm_psw){
    echo "password do not match";
  } else {
    $hasedpwd = password_hash($userpsw,PASSWORD_DEFAULT);
  }

  $query = "INSERT INTO users (firstname, lastname, email, `password`) VALUES ('$userfirst', '$userlast','$usermail','$hasedpwd')";
  // echo "<pre>";
  // exit(print_r($query));
  // echo "</pre>";
  $result = mysqli_query($conn,$query);

  if(!$result){
    die("ERROR:".mysqli_error($conn));
  } else{
    header("location: login.php");
  }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="app.css">
  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
</head>
<body>
<header>
          <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand text-light" href="index.html"> The Life Changer</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav move-item">
                <li class="nav-item active">
                  <a class="nav-link text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="about.php">About</a>
                </li>
                <li cRlass="nav-item">
                  <a class="nav-link text-light" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light " href="target.php">Target</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light " href="team.php">Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light " href="signup.php">Sign-up</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light " href="login.php">Login</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link text-light " href="logout.php">Logout</a>
                </li> -->

              </ul>
            </div>
          </nav>
</header>
  <div class="container mt-5">
                <form action="signup.php" method="POST" style="width: 400px; margin: auto">
                  <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="exampleInputFirstName">First Name</label>
                              <input type="text" name="ftxt" class="form-control" id="exampleInputFirstName" aria-describedby="emailHelp">
                            </div>
                          </div>
                      <div class="col">
                          <div class="form-group">
                              <label for="exampleInputLastName">Last Name</label>
                              <input type="text" name="ltxt" class="form-control" id="exampleInputLastName" aria-describedby="emailHelp">
                            </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="etxt" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password"  name="ptxt" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputConfirmPassword">Confirm Password</label>
                    <input type="password" name="cntxt" class="form-control" id="exampleInputConfirmPassword">
                  </div>
                  <button type="submit" name="btns" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <footer>
  <!-- <img src="pk.jpg" alt="" srcset=""> -->
  <div class="footer-img">
    <div class="footer-txt">
      <div class="container-footer">
        <div class="from-info">
            <h3 class="from-heading">Phone</h3>
            <p>+23407069449467</p>
            <h3 class="from-heading">Address</h3>
            <p>12 OLD BUKURU ROAD PLATEAU STATE JOS, NIGERIA</p>
            <h3 class="from-heading">Email</h3>
            <p>lifechanger@gmail.com</p>
        </div>
        <div class="form">
            <form action="">
              <h3 class="h3-drop">Drop Us A Line </h3>
              <input type="text" name="" placeholder="Name">
              <input type="text" name="" placeholder="Email">
              <input type="text" name="" placeholder="Subject"><br>
              <textarea placeholder="Message"></textarea> 
              <button class="btnb" type="submit"><a class="a-email" href="emmanuelmichaelpk3@gmail.com">Send</a></button>

            </form>
        </div>
      </div>
    </div>
  </div>
</footer>
    <script src="./bootstrap-4/js/jquery.js"></script>
    <script src="./bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>