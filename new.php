<?php
  header('Access-Control-Allow-Origin: *');
  $servername = "localhost:3306";
  $username = "domvar";
  $password = "Dv954275";
  $dbname = "esdb";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error)
     echo "Error: Unexpected connection error. Please retry the operation.";
     else
     {
       $result = $conn->query("SELECT * FROM bmw ORDER BY Name");
       if (($result != 0) && ($result->num_rows > 0))
        {
          $row = $result->fetch_assoc();
          $Name = $row['Name'];
          $Model = $row['Model'];
          $Price = $row['Price'];
          $SKU = $row['SKU'];
          echo $Name;
          echo $Model;
          echo $Price;
          echo $SKU;
        }
        $conn->close();
      }
?>
