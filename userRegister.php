<head>
        <title>USER   REGISTER</title>
<link rel="stylesheet" href="register.css">
<style>
body {
    background-image: url(education.png);
    background-repeat: no-repeat;
    background-size:cover;
    background-position:center;
}
h3 {
    font-size:20px;
}
</style>
</head>
<body>
<?php
include "connection.php";
if(isset($_POST['Submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$repeatPassword=$_POST['repeatPassword'];
if($password != $repeatPassword)
{
echo "<script> alert(' Password did not match!')</script>";
echo mysql_error();
 }
else
{
$insert = mysql_query
("INSERT INTO userLogin(username,password) 
VALUES ('$username','$password')");
if(!$insert) {
echo mysql_error();	 }
else {
echo '<script>alert("Data has been succesfully inserted!");</script>';}
}
}
?>
<br>    
<img src="yellow.png." class="pic">
    <div class = "content">
    <br><h3>REGISTER</h3>
    <form method ="POST">
        Username: <input type="text" placeholder="Username" name="username" required><br><br>
        Password: <input type="password" name="password" placeholder="Password"><br><br>
        Repeat Password: <input type="password" name="repeatPassword" placeholder="Repeat Password"><br><br>
        <input type="submit" name="Submit">
    </form>
    <br><a href="userLogin.php"> LOGIN </a>
</div>
    <br>
<br><br><br><br><br><br><br><br><br>
    <?php require('footer.php'); ?>