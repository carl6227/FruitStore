<?php

$username=$_SESSION['username'];
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

$sql = "SELECT * FROM cart Where username=''";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
   echo' <div class="card mt-5 ml-5" style="width: 15rem; margin-left:100px">
   <img class="card-img-top" src="'.$row['image'].'" alt="Card image cap">
   <div class="card-body">
     <h5 class="card-title"> PHP '.$row['price'].'</h5>
    <input class="form-control quantity" min=1 value="1"type="number" placeholder="quantity">
    <input type="hidden" class="price"value="'.$row['price'].'">
    <h5 class="mt-3">Total: <span class="total"></span></h5>
    <form method="post">
     <center><button type="submit" name="placeOrder"class="btn btn-success mt-4 ">place order</button></center>
     </form>
   </div>
 </div>   ';
    
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
