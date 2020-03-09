<?php



$id = $_POST["id"];
$name = $_POST["name"];
$des = $_POST["des"];
$quantity = $_POST["quantity"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Product (id, name, description, quantity)
VALUES ('$id', '$name', '$des', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
  <label>ID</label>
  <input type="text" name="id"><br><br>
  <label>Product Name</label>
  <input type="text" name="name"><br><br><br>
  <label>Description</label>
  <input type="text" name="des"><br><br><br>
  <label>Quantity</label>
  <input type="text" name="quantity"><br><br><br>
  <input type="submit" name="add" value="Add Product">
</body>
</html>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

  
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


  $sql = "SELECT * FROM Product";

echo '<table border="2" cellspacing="5" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Description</font> </td> 
          <td> <font face="Arial">Quantity</font> </td> 
          
      </tr>';
 
$result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["name"];
        $field3name = $row["description"];
        $field4name = $row["quantity"];
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td>
                  <td><input type="submit" value="edit"></td>
                  <td><input type="submit" value="delete"></td>
                
              </tr>';
}


?>
