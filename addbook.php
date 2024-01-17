
<html>
    <head><title>ADD BOOK</title>
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
  margin: 0 auto;
  text-align: center;
  width: 30%;
  font-size: 17px;
  color: #fff;
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
                    <li><a href="adminHome.php">HOME</a></li>
                    <li><a href="update.php">LIST OF BOOK</a></li>
                    <li><a href="adminLogout.php">LOG OUT</a></li>
                 <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
                </ul>
            </header>
        </section>
    </div>
    <?php
include "connection.php";
if (isset($_POST['Submit'])){
    $ISBN=$_POST['ISBN'];
    $Title=$_POST['Title'];
    $Author=$_POST['Author'];
    $Price=$_POST['Price'];
    $Category=$_POST['Category'];
    $insert=mysql_query("INSERT INTO list_of_book(ISBN,Title,Author,Price,Category)
    VALUE('$ISBN','$Title','$Author','$Price','$Category'");
    if(!$insert){
        echo mysql_error();}
        else{
            echo '<script>alert("Data has been succesfully inserted!");</script>';
        }
    }
?>
        <h3></h3>
        <form method="POST">
        <h3 align="center" >ADD BOOK</Details></h3><BR>
        <fieldset>
        <p>ISBN:<input type="text" name="ISBN"></p>
       <p>Title:<input type="text" name="Title"></p>
        <p>Author:<input type="text" name="Author"></p>
       <p>Price (RM):<input type="text" name="Price"></p>
         <p>Category: <br><br><input type="radio" name="Category" value ="Science Fiction">Science Fiction
            <input type="radio" name="Category" value="Poetry">Poetry
            <input type="radio" name="Category" value="Horror">Horror
            <input type="radio" name="Category" value="Fantasy ">Fantasy
        </p><br>
        <input type="submit" name="Submit" value="SUBMIT">
    </fieldset>
    </form>
    </body>
</html>
<br>
<br><br><br><br>
    <?php require('footer.php'); ?>
</html>