<?php
 ini_set('error_reporting', E_ALL);
 ini_set('display_errors',1);

 include("config.php");
    if(isset($_POST['btnlogin'])){
        $email = $_POST['useremail'];
        $pwd = $_POST['userpwd'];
        
      
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn,$query);
      
        if(mysqli_num_rows($result) < 1 ){
            $errorMessage ='<div id="errorMsg" class="alert alert-danger" role="alert">
                              <strong>Incorrect Username/Email or Password</strong><a class="close" data-dismiss="alert">&times;</a>
                            </div>';
                              
                              
          }elseif(mysqli_num_rows($result) > 0){
      
            while($row =  mysqli_fetch_assoc($result)){
              $hashed_password = $row['password'];
              $id = $row['ID'];
              $user_firstname = $row['firstname'];
              // $user_lastname = $row['lastname'];
            }
      
            // dehash password and compare
            $check_password = password_verify($pwd, $hashed_password);
      
            if(!$check_password){
              
              $errorMessage ='<div id="errorMsg" class="alert alert-danger" role="alert">
                                <strong>Incorrect Username/Email or Password</strong><a class="close" data-dismiss="alert">&times;</a>
                              </div>';
                              
                             
            }else{
      
                // User is valid, create sessions
                session_start();

                $_SESSION['user_identity'] = $email;
                $_SESSION['id']=TRUE;
                $_SESSION['logged_in'] = $id;
                $user_firstname = $_SESSION['user_firstname'];
                // $user_lastname = $_SESSION['user_lastname'];

                // set cookies
                // $duration = time(60 * 60 * 24 * 365);

                
            
                // setcookie('User', $user_id, $duration);
                // setcookie('Password', $password, $duration);

                header("Location: index.php?login=successful");

        }
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
        <form action="login.php" method="POST" style="width: 400px; margin: auto">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="useremail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="userpwd" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="btnlogin" class="btn btn-primary">Submit</button>
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