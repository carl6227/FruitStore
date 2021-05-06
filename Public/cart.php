<?php
 session_start();
 $user= $_SESSION['username'];
if ($user==""){
    header('location:login.php');
}

require_once('header.php');
require_once('navigation.php');
require_once('store.php');
require_once('updateQuantity.php');
$mystore->addOrder();
$mystore->addSales();
?>

<div class="container-fluid">

        <div class="row">
                <div class="col-sm-3 mt-3 jumbotron">
                    <form method="post"> 
                        <div class="row">
                          <label for="exampleInputEmail1">Subtotal</label>
                            <div class="col-sm "> <input type="number" id="subtotal" class="form-control" value="<?php $mystore->dispSubtotal();?>" ></div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="exampleInputEmail1">Shipping</label>
                            <div class="col-sm"> <input type="number" id="shipping"class="form-control" value="100" disabled ></div>
                       </div>
                            <br>
                        <div class="row">
                            <label for="exampleInputEmail1">Total</label>
                            <div class="col-sm"> <input type="number" id="total"class="form-control" name="totalAmount" value="0"></div>
                        </div> 
                        <br>
                        <input class="form-group btn-block btn-lg btn btn-primary"type="submit" name="checkOut" value="Check Out">
                    </form>
                </div>
                <div class="col-sm-9">
                        <div class="row mb-5" style=" margin-left:50px">
                                <?php require_once('dispCart.php'); ?>
                        </div>

                </div>
        </div>

</div>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <?php 
       if(isset($_POST['placeOrder'])&&$_POST['orderedQuantity']!=0){
      ?>     
        <script>
      
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '',
                showConfirmButton: false,
                timer: 1500
            });
        
        </script>

    <?php  } ?>  
    
    <?php 
       if(isset($_POST['checkOut'] )&& $_POST['totalAmount']!=0){
      ?>     
        <script>
      
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Checkout sucessful      ',
                showConfirmButton: false,
                timer: 1500
            });
        
        </script>

    <?php 
        
    } ?> 
    


<?php require_once('footer.php')?>

<script >

$(document).ready(function(){




//formula for the total sa place order
$('.quantity').change( function() {
    total = $(this).val() * $(this).prev().val();
    $(this).next().children().text(total)
    $(this).prevUntil('form','input.subtotal').val(total);
    
});

//formula for getting the total nga bayranan
 $('.placeOrder').submit(function(){

 subtotal=parseInt($('#subtotal').val()); 
 shipping=parseInt($('#shipping').val());
 temp= parseInt($(this).parent().prev().children().text());
 $('#subtotal').val(subtotal+=temp);
 $('#total').val(subtotal+shipping);
 console.log($(this).parent().prevUntil('form',"input.subtotal").val())

 
 });
 $('#total').val(parseInt($('#subtotal').val())+parseInt($('#shipping').val()));

 $('#subtotal').on('change',function(){
        $('#total').val(parseInt($(this).val())+parseInt($('#shipping').val()));

 })
})
</script>