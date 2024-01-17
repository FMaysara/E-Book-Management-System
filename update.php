<html>
<head><title>UPDATE BOOK</title>
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

 table {
        border-collapse: collapse;
        margin-left: auto;
        margin-right: auto;
        font-family: Arial, sans-serif;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    th {
        text-align: center;
        background-color: #f9cb9c;
        color: #333;
        text-transform: uppercase;
    }

    tr {
        white-space: nowrap;
        background-color: #f5f5f5;
    }

    tr:hover {
        background-color: #EAD9C9;
    }

    td a {
        color: #337ab7;
        text-decoration: none;
    }

    td a:hover {
        text-decoration: underline;
    }
button {
    color: #fff;
    padding: 8px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 17px;
  box-sizing: border-box;
  font-size: 13px;
  background-color: #9fc5e8;
}
button:hover {
    background-color: #ff8200;
}
.button-container {
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
</style>
</head>
<body>
<div class="topnav">
    <section>
            <header>
                <a href="#" class="logo"><img src="E-Book.png" width="90px" heigth="90px"></a><tr>
                    <div class="topnav" id="myTopnav">
                    <ul>
                    <li><a href="adminHome.php">HOME</font> </a></li>
                    <li><a href="adminLogout.php">LOG OUT </a></li>
                 <a href="javascript:void(0);" class="icon" onclick="myFunction()"></a>
                </ul>
            </header>
        </section>
    </div>
    
<?php
include "connection.php";
?>
<c>
<h3 align="center">update Book</h3><br>
<table>
    <tr>
        <th>No</th>
        <th>ISBN</th>
        <th>Title</th>
        <th>Author</th>
        <th>Price(RM)</th>
        <th>Category</th>
        <th>Edit</th>
        <th>Delete</th>

</tr>
<?php
$record = mysql_query("SELECT * FROM list_of_book");
while ($data = mysql_fetch_array($record)) {
    ?>
    <tr>
        <td><?php echo $data['No'];?></td>
        <td><?php echo $data['ISBN'];?></td>
        <td><?php echo $data['Title'];?></td>
        <td><?php echo $data['Author'];?></td>
        <td><?php echo $data['Price'];?></td>
        <td><?php echo $data['Category'];?></td>
        <td><a href="edit.php?No=<?php echo $data['No'];?>"><button>EDIT</button></a></td>
        <td><a href="delete.php?No=<?php echo $data['No'];?>"><button>DELETE</button></a></td>
</tr>
<?php
}
?>
</table>
<br><br>
</body>
<div class="button-container">
    <a href="addbook.php" class="centered-button"> ADD BOOK </a>
</div>
<br><br><br><br><br><br><br><br>
    <?php require('footer.php'); ?>
    </html>