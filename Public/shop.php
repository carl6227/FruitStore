<?php
    session_start();
    $user= $_SESSION['username'];
if ($user==""){
    header('location:login.php');
}

    include_once("../public/navigation.php");
    include_once("../public/header.php");
?>


<body>
    <hr class="mt-5">
            <div class="container mt-5">
                <div class="row pb-5 mb-4">
                    <?php require_once('readShop.php')?>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <?php 
       if(isset($_POST['addCart'])){
      ?>     
        <script>
      
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Added to cart',
                showConfirmButton: false,
                timer: 1500
            });
        
        </script>

    <?php  } ?>  
    
    ?>
<?php
    include_once("../public/footer.php");
?>
