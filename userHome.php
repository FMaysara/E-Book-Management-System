<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="header.css">
        <style>

        body{
            background-image: url(background2.png);
            background-repeat: no-repeat; 
  	        background-size: cover;
        }
        .button-container {
        display: flex;
        white-space: nowrap;
        justify-content: center;
        align-items: center;
    }

        button {
        transition: background-color 0.3s ease;
        border-radius: 17px;
        text-decoration:none;
        color: #fff;
            margin-right: 5px;         
            font-size: 14px;
            background-color: #9fc5e8;
            padding: 15px 50px;
            margin: 10px 248px;
            border: none;
            outline: none;
        }

        button:hover {
            background-color: #f5b47f;
        }

        h3{
            font-style: oblique;
            font-size: 40px;
            display: flex;
            justify-content: center;
            height: 50px;
        }

        p {
            position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40px;
            font-family: italic;
            font-size: 25px;
        }
  
        </style>
    </head> 
    <body> 
    <div class="topnav">
    <section>
            <header>
                <a href="#" class="logo"><img src="E-Book.png" width="90px" heigth="90px"></a>
                <text = "E-Book Management System">
                    <div class="topnav" id="myTopnav">
                <ul>
                    <li><a href="userHome.php">HOME</a></li>
                    <li><a href="userLogout.php">LOG OUT</a></li>
                 <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
                </ul>
            </header>
        </section>
    </div>
    <?php
    session_start();
    include "connection.php";
    if(!isset($_SESSION['Username'])) {
        header("location:userlogin.php");
        exit();
    }
    if(isset($_SESSION['Username'])) {
        $Username=$_SESSION['Username'];
    }
    ?>
    <H3 font-size="40px">WELCOME TO E-BOOK</H3>
    <p> Welcome <?php echo $_SESSION['Username']; echo " ! Thank you for stopping by. Hope you enjoy explore E-Book." ?></p><br>
    <br><br><br><br>
    <div class="button-container">
    <img src="booklist.png" alt="list of book" width="300" height="300">
    <a href="booklist.php" class="centered-button">
        <button>LIST OF BOOK</a></button> </a>
</div>
</body>
</html>
<br><br><br><br><br><br><br><br>
    <?php require('footer.php'); ?>