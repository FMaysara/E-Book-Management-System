<html>
    <head>
        <title>ADMIN LOGIN</title>
        <link rel="stylesheet" href="login.css">
        <style>
          h3 {
              font-size: 20px;
              color: #000;
          } 

          body {
            background: url(education.png);
            background-repeat: no-repeat;
            background-size:cover;
            background-position:center;
          }

    </style>
    </head>
    <body>
    <div>
    <?php
    session_start();
    include 'connection.php';
    if (isset($_POST['submit'])) {
        $Email=$_POST['Email'];
        $Password=$_POST['Password'];
        $query=mysql_query("select * from adminlogin where Email='$Email' and Password='$Password'");
        $queryRow=mysql_num_rows($query);
        if($queryRow==TRUE) {
            $_SESSION['Email']=$Email;
            header("location:adminHome.php");
        }else {
            echo "<script> alert ('Email atau Password Salah');
            location='adminLogin.php'; </script>";
        }
    }
    ?>
      <br>
      <img src="yellow.png." class="user">
      <div class="content">
        <br><h3>LOG IN</h3>
        <form method="post">
        Email: <input type="text" placeholder="Email" name="Email" required><br><br>
               Password: <input type="password" placeholder="Password" name="Password" required><br><br>
               <br><br><input type="submit" name="submit" value="Log In"></form><BR>
              <P>If you're User click here 
              <a href ="userLogin.php">USER LOGIN</a><br></p>
        </form>
      </div>
</div>
    </div>
    </body>
    <br><br><br><br><br><br><br><br><br><br>
        <?php require('footer.php'); ?>

        
    </html>