<?php
$user= $_SESSION['username'];
if ($user==""){
    header('location:login.php');
}

$customername=$_SESSION['username'];
$servername = "remotemysql.com:3306";
$username = "nTXgp5BXe0";
$password = "RQwfabtfeC";
$dbname = "nTXgp5BXe0";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['checkOut'])){

    $sql = "SELECT * FROM ordered_products where username='$customername'";

    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
           $orderedQuantity=$row['quantity'];
           $productname=$row['productName'];
          $sqlUpdate = "UPDATE products SET qauntity=qauntity-$orderedQuantity where  name='$productname'";
          if ($conn->query($sqlUpdate) === TRUE) {
          } else {
            echo "Error updating record: " . $conn->error;
          }
          $sqlDelete="DELETE FROM ordered_products where productname='$productname'";
          if ($conn->query($sqlDelete) === TRUE) {
          } else {
            echo "Error deleting record: " . $conn->error;
          }
          $sqlDeleteCart="DELETE FROM cart where productname='$productname'";
          if ($conn->query($sqlDeleteCart) === TRUE) {
          } else {
            echo "Error deleting record: " . $conn->error;
          } 
        }
      
    }

}


mysqli_close($conn);
?>
