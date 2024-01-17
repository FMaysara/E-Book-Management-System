<head>
<title>EDIT BOOK</title>
<link rel ="stylesheet" href="header.css">
<style>
body { 
    background-image: url('background2.png');
    background-repeat: no-repeat; 
    background-size: cover;
}
h3 {
    text-transform: uppercase;
    font-size: 40px;
}

fieldset{
        border-radius: 10px;
        border: none;
        width:29%;
        margin: 0 auto;
        padding: 12px 20px;
        background: #facfa4;
        font-weight: bold;
        }
        
        input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
        input[type=submit] {
  display: block;
  color: #fff;
  margin: 0 auto;
  text-align: center;
  width: 30%;
  font-size: 17px;
  background-color: #9fc5e8;
  padding: 14px 20px;
  border: none;
  border-radius: 17px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #ff8200;
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
                    <li><a href="adminHome.php">Home</a></li>
                    <li><a href="update.php">LIST OF BOOK</a></li>
                    <li><a href="adminLogout.php">Log Out</a></li>
                 <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
                </ul>
            </header>
        </section>
    </div>
    <?php
include "connection.php";
$No = $_GET['No'];
$m = mysql_query("SELECT * FROM list_of_book WHERE No = '$No'");
$data = mysql_fetch_array($m);
if(isset($_POST['Submit'])) {
    $ISBN=$_POST['ISBN'];
    $Title=$_POST['Title'];
    $Author=$_POST['Author'];
    $Price=$_POST['Price'];
    $Category=$_POST['Category'];
    $edit = mysql_query("UPDATE list_of_book SET ISBN = '$ISBN', Title = '$Title', Author = '$Author',  Price = '$Price', Category = '$Category'  WHERE No = '$No' ");
    if(!$edit) {
        echo mysql_error();
    }
    else {
        header("location:update.php");
    }
}
?>
<h3 align="center">EDIT</Details></h3><BR>
<div class="form">
<form method ="POST">
<fieldset >
        
        <p>ISBN:<input type="text" name="ISBN" value = "<?php echo $data['ISBN'];?>"></p>
        <p>Title:<input type="text" name="Title" value = "<?php echo $data['Title'];?>"></p>
       <p>Author:<input type="text" name="Author" value = "<?php echo $data['Author'];?>"></p>
         <p>Price (RM):<input type="text" name="Price" value = "<?php echo $data['Price'];?>"></p>
         <p>Category: <br><br><input type="radio" name="Category" value ="Science Fiction">Science Fiction
            <input type="radio" name="Category" value="Poetry">Poetry
            <input type="radio" name="Category" value="Horror">Horror
            <input type="radio" name="Category" value="Fantasy ">Fantasy
        </p><br>
        <input type="submit" name="Submit"  value="SUBMIT" >
    </fieldset>
</form>
</div>
</fieldset>
<br><br><br><br><br>
</body>
    <?php require('footer.php'); ?>