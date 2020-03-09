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
