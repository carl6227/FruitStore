<?php

$servername='remotemysql.com:3306';
$username='JBwwoP2pMj';
$password='8o2lwsY5Zg';
$dbname = "JBwwoP2pMj";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}



if(isset($_POST['save'])){
$customer_name = $_POST['name'];
$item = $_POST['item'];
$quantity = $_POST['quantity'];
$total = $_POST['total'];
$sql = "INSERT INTO `order_table`(customer_name,item,quantity,total)
VALUES ('$customer_name','$item','$quantity','$total')";
if(mysqli_query($conn, $sql)) {
    header('Location:index.html');
    echo "<script> alert('order Sucessfully Added')</scritp>";
} else {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}

?>