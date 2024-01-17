
<head>
    <title>LIST OF BOOK</TITLE>
<link rel="stylesheet" href="header.css">
<style>
    body{
     background-image: url('background2.png');
    background-repeat: no-repeat; 
    background-size: cover;
    }

    h3{
        
        text-align: center;
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
    button {
    color: #fff;
    padding: 8px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 17px;
  box-sizing: border-box;
  font-size: 18px;
  background-color: #9fc5e8;
}
button:hover {
    background-color: #ff8200;
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
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .pageSelect {
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
select {
        background-color: #f5f5f5;
        border: thin solid black;
        border-radius: 4px;
        display: inline-block;
        font: inherit;
        line-height: 1.5em;
        padding: 0.5em 3.5em 0.5em 1em;
        margin: 0;      
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-appearance: none;
        -moz-appearance: none;
}
select.classic:focus {
background-image:
  linear-gradient(45deg, white 50%, transparent 50%),
  linear-gradient(135deg, transparent 50%, white 50%),
  linear-gradient(to right, #9fc5e8, #9fc5e8);
background-position:
  calc(100% - 15px) 1em,
  calc(100% - 20px) 1em,
  100% 0;
background-size:
  5px 5px,
  5px 5px,
  2.5em 2.5em;
background-repeat: no-repeat;
border-color: grey;
outline: 0;
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
include "connection.php";
?>
<br><h3>List of Book</h3><br>

<table border ="2">
    <tr>
        <th>No</th>
        <th>ISBN</th>
        <th>Title</th>
        <th>Author</th>
        <th>Price(RM)</th>
        <th>Category</th>
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
        
</tr>
<?php
}
?>
</table>
<br><br>
<div class="button-container">
    <a href="SearchBook.php" class="centered-button"> SEARCH BOOK </a>
</div>
<br><br>

<div class="container">
<select id="pageSelect">
    <option value="">Select book to read</option>
    <option value="read1.php">Dune</option>
    <option value="read2.php">Romeo and Juliet</option>
    <option value="read3.php">Jaws</option>
    <option value="read4.php">Harry Potter</option>
  </select>
  <button id="linkButton">Go to Page</button>

  <script>
    document.getElementById("linkButton").addEventListener("click", function() {
      var select = document.getElementById("pageSelect");
      var selectedValue = select.value;
      if (selectedValue) {
        window.location.href = selectedValue;
      }
    });
  </script>
  </div>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php require('footer.php'); ?>