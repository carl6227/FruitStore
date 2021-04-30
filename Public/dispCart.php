<?php
session_start();
require_once('navigation.php');

$userid=$_SESSION['userID'];
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

$sql = "SELECT * FROM cart Where userID=$userid";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
   echo' <div class="card mt-5 ml-5" style="width: 15rem;">
   <img class="card-img-top" src="'.$row['image'].'" alt="Card image cap">
   <div class="card-body">
     <h5 class="card-title">Card title</h5>
     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card content.</p>
     <a href="#" class="btn btn-primary">Go somewhere</a>
   </div>
 </div>   ';
    
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
