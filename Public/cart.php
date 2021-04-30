<?php
session_start();
require_once('header.php');
require_once('navigation.php');

?>
<div class="row mb-5" style=" margin-left:50px">


<?php require_once('dispCart.php'); ?>


</div>

<?php require_once('footer.php')?>

<script >$('.quantity').change( function() {
    total = $(this).val() * $(".price").val();
    console.log(total);
     temp= $(this).siblings()[2].children;
     console.log(temp.innerHtml)
    $(".total").text(total.toString());

});</script>