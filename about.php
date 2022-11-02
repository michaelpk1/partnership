<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="app.css">
  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
  <style>
    .grid-container {
      display: grid;
      grid-template-columns: auto;
      background-color: #2196F3;
      grid-gap:10px;
      padding: 10px;
    }
    .grid-item {
      background-color: rgba(255, 255, 255, 0.8);
      border: 1px solid rgba(0, 0, 0, 0.8);
      padding: 20px;
      font-size: 30px;
      text-align: center;
    }
  </style>
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
  </nav>>
</header>
<main>
  <div class="container-about">
    <h1 class="p-form"><b>PARTNERSHIP FOR THE GOALS</b></h1>
    <p class="p-forms">We are a group of individuals working based on the <b>SDG</b> goal 17 which is 
      <b>PARTNERSHIP FOR THE GOALS</b> and we are out to render help to people around us 
      who cant afford the necessary  amenities of life.. we are out to <b>MAKE A DIFFERENCE.....
      </b> </p>
  </div>
  <div class="grid-container">
    <div class="grid-item">Mobilize Resources To Improve Domestic Revenue Collection</div>
    <div class="grid-item">To Implement All Development Assistance Commitments</div>
    <div class="grid-item">To Mobilize Financial Resources For Developing Countries</div>  
    <div class="grid-item">Assist Developing Countries in attaining Debt Sustainability</div>
    <div class="grid-item">invest in least developed countries</div>
    <div class="grid-item">knowlegede sharing and cooperation to science,technology and innovation</div>
    <div class="grid-item">promote sustainabile technologies to developing countries</div>
    <div class="grid-item">strengthen the science, innovation capacity for least-developed countries</div>
    <div class="grid-item">enhance SDG capacity in developing countries</div>
    <div class="grid-item">to promote a universal trading system</div>
    <div class="grid-item">to increase the exports of developing countries</div>
    <div class="grid-item">to help in removing trade barriers for least-developed countries</div>
    <div class="grid-item">enhance global macro economic stability</div>
    <div class="grid-item">enhance policy coherence for sustainable goals</div>
    <div class="grid-item">to respect national leadership to implement policies for the sustainabile development goals</div>
    <div class="grid-item">enhance the global partnership for sustainabile development</div>
    <div class="grid-item">encourage effective partnership</div>
    <div class="grid-item">enhance availability of reliable data</div>
    <div class="grid-item">further develop measurements of progress</div>

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
                <form action="index.html" style="width: 400px; margin: auto">
                  <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="exampleInputFirstName">First Name</label>
                              <input type="text" name="txr" class="form-control" id="exampleInputFirstName" aria-describedby="emailHelp">
                            </div>
                          </div>
                      <div class="col">
                          <div class="form-group">
                              <label for="exampleInputLastName">Last Name</label>
                              <input type="text" class="form-control" id="exampleInputLastName" aria-describedby="emailHelp">
                            </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputConfirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputConfirmPassword">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
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
        <form style="width: 400px; margin: auto">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
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

</body>
</html>