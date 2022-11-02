<?php
  session_start();

  if (!$_SESSION['logged_in']){
    $_SESSION['email'];
  }else {
    // header("location: login.php");
  }

  $user= $email = $lastname = "";

  if (isset($_GET['login'])){
    if ($_GET['login'] == 'successful'){
      $user = $_SESSION['user_firstname'];
      $id = $_SESSION['logged_in'];
      $email = $_SESSION['user_identity'];
      // $user = $_SESSION['user_lastname'];
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

                <?php
                  if($_SESSION['logged_in']){
                ?>
                     <div id="offcanvas" class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
                      <ul class="navbar-nav navbar-nav-right ml-auto">
                        <li class="nav-item dropdown">  
                          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                            <a class="dropdown-item py-3">
                              <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                              <span class="badge badge-pill badge-primary float-right">View all</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                              <div class="preview-thumbnail">
                                <img src="" alt="image" class="img-sm rounded-circle profile-pic"> </div>
                              <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                              </div>
                            </a>                
                          </div>
                        </li>
                        <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
                          <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <!-- <img class="img-xs rounded-circle ml-2" id="userImg" src="" alt="Profile image"></a> -->
                          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <div class="dropdown-header text-center">
                              <!-- <img class="img-md rounded-circle" src="" alt="Profile image"> -->
                              <p class="mb-1 mt-3"><?=$user; ?><span class="font-weight-normal"><?php //echo $_SESSION['user_lastname']; ?></span></p>
                              <p class="font-weight-light text-muted mb-0"><?=$email; ?></p>
                            </div>
                            <a class="dropdown-item" href="edit.php?action=<?php echo $id ?>"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                            <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                            <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                            <a class="dropdown-item"><i class="dropdown-item-icon icon-question text-primary"></i> FAQ</a>
                            <a href="logout.php" class="dropdown-item btn btn-danger"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
                          </div>
                        </li>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="collapse" data-target="offcanvas">
                          <span class="icon-menu"></span>
                        </button>
                      </ul> 
                    </div>
                <?php
                  }else{
  
                ?>
                      <li class="nav-item">
                        <a class="nav-link text-light" href="login.php">Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-light" href="signup.php">Sign Up</a>
                      </li>
                <?php
                  }
                ?>
                
                <!-- <li class="nav-item">
                  <a class="nav-link text-light " href="logout.php">Logout</a>
                </li> -->

              </ul>
            </div>
          </nav>
</header>
<main>
  <div class="main-info">
    <img src="headerpk.jpeg" alt="">
   <div class="h3 bg-primary text-light">
      <marquee class="marquee" >For Donations</marquee>
      <h3>ACCOUNT NAME: <b>The Life Changer</b></h3>
      <h3>ACCOUNT NUMBER:<b>0773498404</b></h3>
      <h3>BANK NAME:<b>ACCESS BANK</b></h3>
    </div>
  </div>
</main>
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
    
    <!-- The Modal -->
    <div class="modal" id="mySign">
      <div class="modal-dialog">
        <div class="modal-content">
    
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Sign Up</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
    
            <!-- Modal body -->
            <div class="container mt-5">
                <form action="index.php" method="POST" style="width: 400px; margin: auto">
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
        </div>
    
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
    
        </div>
      </div>
    </div>


<!-- The Modal -->
<div class="modal" id="myLogin">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="container mt-5">
        <form action="index.php" method="POST" style="width: 400px; margin: auto">
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
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

    
  <script src="bootstrap-4/js/jquery.js"></script>
  <script src="bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>