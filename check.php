<?php
 ini_set('error_reporting', E_ALL);
 ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      
    </style>
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
              </ul>
            </div>
          </nav>
</header>
<style>
    table,th,td{
    border:1px solid;
    width:100%;
    font-size: 30px;

    }
    .red{
        background:black;
        color:white;
        font-size: 1rem;
        
    }
</style>
 <h2 style="text-align:center"><b>FOR OFFICE USE ONLY</b></h2>
    <table class="red">
        <tr>
            <th>SN</th>
            <th>firstname</th>
            <th>lastname</th>
            <th>Email</th>
            <th>Action</th>

            
        </tr>
        <?php
            $sn = 0;
            include('config.php');
            $query = "SELECT * FROM users";
            $result = mysqli_query($conn,$query);
            while ($row = mysqli_fetch_assoc($result)){
            
            $sn++;

        ?>
        <tr>
            <td><?php echo $sn?></td>
            <td><?php echo $row ['firstname'] ?></td>
            <td><?php echo $row ['lastname'] ?></td>
            <td><?php echo $row ['email'] ?></td>

            <td>
                <a href="login.php?action=<?php echo $row ['ID'] ?>">Edit</a>
                <a href="delete.php?delete=<?php echo $row ['ID'] ?>">Delete</a>

            </td>
        </tr>

        <?php
        }
        ?>
    </table>
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
