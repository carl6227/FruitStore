<?php
$user= $_SESSION['username'];
if ($user==""){
    header('location:login.php');
}

$Customername=$_SESSION['username'];
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

$sql = "SELECT * FROM cart Where username='$Customername'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

   echo' <div class="card mt-5 ml-5" style="width: 15rem; margin-left:100px">
   <img class="card-img-top" style="width:50%"src="'.$row['image'].'" alt="Card image cap">
   <div class="card-body">
   <form method="post">
   <input type="hidden" class="subtotal" name="subtotal" >
    <h5 class="card-title"> PHP '.$row['price'].'</h5>
    <input type="hidden" class="price"value="'.$row['price'].'">
    <input class="form-control quantity" name="orderedQuantity" min=0 value="0"type="number" placeholder="quantity"> 
    <h5 class="mt-3">Total: <span class="total">0</span></h5>
    <input type="hidden" name="productname" value="'.$row['productname'].'">
    <center><button type="submit" name="placeOrder"class="placeOrder btn btn-success mt-4 ">place order</button></center>
   </form>
    </div>
 </div>   ';
    }
} else {
    echo '<div class="container">
            <div class="row  mt-5">
             <div class="col-m-7"><img style="width:70% ;margin-left:-100px" src="https://file.removal.ai/preview/tmp-6093e35f4486c.png"></div>
             <div class="col-m-5 mr-5">
              <strong> <h1 style="position:relative;color:green;margin-left:-350px">Your Orders will</h1></strong>    
              <h1 style="position:relative;color:green; margin-left:-240px"> be deliver </h1>
              <h1 style="position:relative;color:green; margin-left:-190px"> soon...</h1>
             </div>
            
            </div>
        </div>';
}

mysqli_close($conn);

?>
