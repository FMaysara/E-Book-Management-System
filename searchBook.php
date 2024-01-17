<html>
<head>
    <title>SEARCH BOOK</title>
<link rel="stylesheet" href="header.css">
<style>
    body{
    background-image: url('background2.png');
    background-repeat: no-repeat; 
    background-size: cover;
    }

    .search-box {
        align-items: center;
        max-width: 450px;
        margin-left: auto;
        margin-right: auto;
        padding: 10px;
        background-color: #f9cb9c;
        border-radius: 40px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .search-title {
        font-size: 20px;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .search-box input[type="text"] {
        flex: 1;
        border: none;
        padding: 6px 40px;
        border-radius: 40px;
        font-size: 16px;
        font-style: italic;
        margin-left: 12px;
        margin-right: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .search-box input[type="submit"] {
        flex: 1;
        border: black;
        color: #5b5b5b;
        background-color: #fce5cd;
        font-family:"Times New Roman";
        border-radius: 40px;
        padding: 6px 10px;
        font-size: 16px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .search-box input[type="submit"]:hover {
        color: white;
        background-color: #9fc5e8;
    }
    
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .centered-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #9fc5e8;
        color: #fff;
        text-decoration:none;
        border-radius: 17px;
        transition: background-color 0.3s ease;
    }

    .centered-button:hover {
        background-color: #ff8200;
    }
    th {
        font-size: 17px;
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
                    <li><a href="booklist.php">LIST OF BOOK</a></li>
                    <li><a href="userLogout.php">LOG OUT</a></li>
                 <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
                </ul>
        </header>
    </section>
    </div>
    <?php
include "connection.php";
?>
<br><br><br><br>
    <br><div class="search-box">
    <form id="form1" name="carian" method="post" action="viewSearchBook.php">
        <table>
            <tr>
                <th class="search-title" scope="row">Title :</th>
                <td><label for="textfield"></label>
                <input type="text" placeholder="Search..."  name="Title" id="textfield"/></td>
                <th scope="row">
                <input type="submit" name="submit" id="button" value="SUBMIT"/>
                </th>
            </tr>
        </table>
    </div>
<br>
<p>
</p>
<br>
<div class="container">
    <a href="booklist.php" class="centered-button">BOOK LIST</a>
</div>
</body>
</html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php require('footer.php'); ?>