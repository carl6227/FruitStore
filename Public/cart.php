<?php
 session_start();
require_once('header.php');
require_once('navigation.php');
require_once('store.php');
$mystore->addOrder();
$mystore->dispSubtotal();
?>

<div class="container-fluid">

        <div class="row">
                <div class="col-sm-3 jumbotron">
                        <div class="row">
                          <label for="exampleInputEmail1">Subtotal</label>
                            <div class="col-sm "> <input type="number" id="subtotal" class="form-control" value="<?php $_SESSION['subtotal']?>" ></div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="exampleInputEmail1">Shipping</label>
                            <div class="col-sm"> <input type="number" id="shipping"class="form-control" value="100"></div>
                       </div>
                            <br>
                            <div class="row">
                            <label for="exampleInputEmail1">Total</label>
                            <div class="col-sm"> <input type="number" id="total"class="form-control" value="0"></div>
                        </div> 
                        <br>
                        <input class="form-group btn-block btn-lg btn btn-primary"type="button" value="Check Out">
                        
                </div>
                <div class="col-sm-9">
                        <div class="row mb-5" style=" margin-left:50px">
                                <?php require_once('dispCart.php'); ?>
                        </div>

                </div>
        </div>

</div>
        
<?php require_once('footer.php')?>

<script >


//formula for the total sa place order
$('.quantity').change( function() {
    total = $(this).val() * $(this).prev().val();
    $(this).next().children().text(total)
    $(this).prevUntil('form','input.subtotal').val(total);
    
});

//formula for getting the total nga bayranan
 $('.placeOrder').click(function(){

 subtotal=parseInt($('#subtotal').val()); 
 shipping=parseInt($('#shipping').val());
 temp= parseInt($(this).parent().prev().children().text());
 $('#subtotal').val(subtotal+=temp);
 $('#total').val(subtotal+shipping);
 console.log($(this).parent().prevUntil('form',"input.subtotal").val())
//  $(this).attr('disabled','disabled');
//  $(this).removeClass('btn-success');
//  $(this).addClass('btn-danger');
//  $(this).text("Ordered");
 });

</script>