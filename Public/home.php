<?php
session_start();
echo $_SESSION['username'];
include_once("header.php");
include_once("navigation.php");
?>


<body>
<div class="jumbotron jumbotron-fluid"style="background-image: url('https://i.pinimg.com/736x/0b/ac/7d/0bac7d5999fab3a72a033fcbd037fc7d.jpg');background-repeat:no-repeat;background-size:cover;">
        <div class="container mr-5">
            <div class="row">
                <div class="col-sm-2 mt-2">
                    <b><h1 class="" style="font-size:80px;color:#001a33;">100% </h1></b>
                </div>
                <div class="col-sm-2 ml-5">
                    <b><h1 class="" style="font-size:80px;color:green;"> Organic</h1></b>
                </div>
            </div>
            <div class="">
                <b><h1 class="text-light" style="width:500px;background-color:#001a33;">
                    Fresh & Natural Farm Fruits
                </h1></b>
            </div>
            <div class="mt-4">
                <p style="color:#000080;font-size:20px;">
                    The readable content Ayaw Kol
                </p>
                <p  style="color:#000080;font-size:20px;">
                    Bata Pako kol       
                </p>
            </div>
            <div>
                <button type="button" class="btn text-light mb-5" style="border-radius: 50px;
                background-image: linear-gradient(315deg, #00b712 0%, #5aff15 74%);"> ALL PRODUCTS
                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </button>
            </div>
            
        </div>
    </div>
    <div class="container-fluid mt-5 ">
        <div class="row">
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm-3 mt-2">
                        <i class='fa fa-rocket boss float-right' style='font-size:25px;color:green'></i>
                    </div>
                    <div class="col-sm-9">
                        <h5>
                            FREE DELIVERY
                        </h5>
                        <p>
                            For all oders over $100
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm-3 mt-2">
                                <i class='fa fa-history boss float-right' style='font-size:25px;color:green'></i>
                        </div>
                        <div class="col-sm-9">
                            <h5>
                                90 DAYS RETURN
                            </h5>
                            <p>
                                If goods have problems
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm-3 mt-2">
                            <i class='fa fa-credit-card boss float-right' style='font-size:25px;color:green'></i>
                    </div>
                    <div class="col-sm-9">
                        <h5>
                            SECURE PAYMENT
                        </h5>
                        <p>
                            100% secure payment
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm-3 mt-2">
                        <i class='far fa-comments boss float-right' style='font-size:30px;color:green'></i>
                    </div>
                    <div class="col-sm-9">
                        <h5>
                            24/7 SUPPORT
                        </h5>
                        <p>
                            100% secure payment
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="mt-5">
    
        <div class="container mt-5">
            <div class="row pb-5 mb-4">
                <?php require_once('read.php')?>
                 
            </div>
        </div>
    </div>
</div>
    <script src="../src/js/index.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>

<?php
    include_once("footer.php");
?>
