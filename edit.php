
<?php 
  ini_set('error_reporting', E_ALL);
  ini_set('display_errors',1);

  include('config.php');


  if(isset($_POST['btnupdate'])){
      $user= $_POST['userid'];
      $fn = $_POST['txtfn'];
      $ln = $_POST['txtln'];
      $email = $_POST['txtemail'];
      $pwd = $_POST['pwd'];
      $con_pwd = $_POST['con_pwd'];

    //   echo " <pre>";
    //   exit(print_r($_POST));
    //   echo " </pre>";
        if($pwd != $con_pwd){
            echo "passed do not match";
        }  else{

            
                $hasedwpd =password_hash($pwd,PASSWORD_DEFAULT);
            

            $upquery =  "UPDATE users SET firstname='$fn', lastname='$ln', email='$email',  `password`='$hasedwpd' WHERE `ID` = $user";
            $upresult = mysqli_query($conn,$upquery);
            if(!$upresult){
                die(mysqli_error($conn));
            } else {
                header('location: index.php');
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
  <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">

    <link rel="stylesheet" href="app.css">

</head>
<body class="red">
    <?php
        if (isset($_GET['action'])){
            $userid = $_GET['action'];
            $query = " SELECT * FROM users WHERE `ID` = '$userid'";
            $result = mysqli_query($conn,$query);

            while($row = mysqli_fetch_assoc($result)){
0 
            
            // $id = $row['No'];
                // echo $row['username'];

            //   echo "<pre>";
            //   exit(print_r($row));
            //   echo "</pre>";
            // }  

         
    ?>
<header>
          <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand text-light" href="index.html"> The Life Changer</a>
        
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
               </ul> 
              </div>
          </nav>
</header>

<main>
<form action="edit.php" method="POST">
        <input type="hidden" placeholder="Id" name="userid" value="<?php echo $userid ?>" id="">
        <input type="text"  name="txtfn" placeholder="Name" value="<?php echo $row['firstname'] ?>" id="">
        <input type="text" placeholder="LastName" name="txtln" value="<?php echo $row['lastname'] ?>" id="">
        <input type="email" placeholder="Email" name="txtemail" value="<?php echo $row['email'] ?>" id="" >
        <input type="password" placeholder="Password" name="pwd" value="<?php echo $row['email'] ?>" id="">
        <input type="password" placeholder="Confirm password" name="con_pwd" value="<?php echo $row['email'] ?>" id="">
        <input type="submit" name="btnupdate"  value="UpDate" id=""class="button">
        

    </form>
    <?php
       }
    }
    ?>
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
<script src="bootstrap-4/js/jquery.js"></script>
  <script src="bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>