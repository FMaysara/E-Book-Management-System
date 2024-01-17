<html>
    <head>
        <title>USER LOGIN</title>
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
        $Username=$_POST['Username'];
        $Password=$_POST['Password'];
        $query=mysql_query("select * from userlogin where Username='$Username' and Password='$Password'");
        $queryRow=mysql_num_rows($query);
        if($queryRow==TRUE) {
            $_SESSION['Username']=$Username;
            header("location:userHome.php");
        }else {
            echo "<script> alert ('Username atau Password Salah');
            location='userLogin.php'; </script>";
        }
    }
    ?>
      <br>
      <img src="yellow.png." class="user">
      <div class="content">
        <br><h3>LOG IN</h3>
        <form method="post">
               Username: <input type="text" placeholder="Username" name="Username" required><br><br>
               Password: <input type="password" placeholder="Password" name="Password" required><br>
               <br><br><input type="submit" name="submit" value="Log In"></form>
              <br><p>Don't have a account yet ?
              <a href ="userRegister.php"> REGISTER </a><br></p>
              <P>If you're Admin click here 
              <a href ="adminLogin.php">ADMIN LOGIN</a><br></p>
        </form>
      </div>
</div>
    </div>
    </body>
    <br><br><br><br><br><br><br><br><br>
        <?php require('footer.php'); ?>

        
    </html>