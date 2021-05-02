<?php
    session_start();
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

<?php
    include_once("../public/footer.php");
?>
