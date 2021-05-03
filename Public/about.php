<?php 
session_start();
$user= $_SESSION['username'];
if ($user==""){
    header('location:login.php');
}

    include_once("navigation.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../src/css/index.css">
    <title>About</title>
</head>
    
<div class="container py-5">
   

    <h2 class="font-weight-bold mb-2">Our Team</h2>
    <p class="font-italic text-muted mb-4">Fruit Titos Handsome Developers and CEO.</p>
    
    <div class="row pb-5 mb-4">
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card shadow-sm border-0 rounded">
                <div class="card-body p-0"><img src="../src/img/guian plt.png" alt="" class="w-100 card-img-top"  style="height: 300px;">
                    <div class="p-4">
                        <h5 class="mb-0">Guian Amancio</h5>
                        <p class="small text-muted">Front-end Dev</p>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card shadow-sm border-0 rounded">
                <div class="card-body p-0"><img src="../src/img/justine.png" alt="" class="w-100 card-img-top"  style="height: 300px;">
                    <div class="p-4">
                        <h5 class="mb-0">Justine Ambrad</h5>
                        <p class="small text-muted">Back-end Dev</p>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card shadow-sm border-0 rounded">
                <div class="card-body p-0"><img src="https://res.cloudinary.com/mhmd/image/upload/v1570799924/profile-4_s3fort.jpg" alt="" class="w-100 card-img-top" style="height: 300px;">
                    <div class="p-4">
                        <h5 class="mb-0">Patrick Glinogo</h5>
                        <p class="small text-muted">Full Stack Dev</p>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card shadow-sm border-0 rounded">
                <div class="card-body p-0"><img src="https://i.pinimg.com/474x/9f/d6/e2/9fd6e2c532bb9003cded155af3573415.jpg" alt="" class="w-100 card-img-top"  style="height: 300px;">
                    <div class="p-4">
                        <h5 class="mb-0"> Jay Ar Ermino</h5>
                        <p class="small text-muted">CEO - Consultant</p>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item m-0"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- First Row [Statistics]-->
    <h2 class="font-weight-bold mb-2">Fruit Titos Statistics</h2>
    <p class="font-italic text-muted mb-4">2021 Current Statistics.</p>
    
    <div class="row pb-5">
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card-->
            <div class="card rounded shadow-sm border-0">
                <div class="card-body p-5"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                    <h5>Products Sales</h5>
                    <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="progress rounded-pill">
                        <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" class="progress-bar rounded-pill"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card -->
            <div class="card rounded shadow-sm border-0">
                <div class="card-body p-5"><i class="fa fa-tasks fa-2x mb-3 text-success"></i>
                    <h5>Completed Tasks</h5>
                    <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="progress rounded-pill">
                        <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" class="progress-bar bg-success rounded-pill"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <!-- Card -->
            <div class="card rounded shadow-sm border-0">
                <div class="card-body p-5"><i class="fa fa-user-circle-o fa-2x mb-3 text-info"></i>
                    <h5>New Users</h5>
                    <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="progress rounded-pill">
                        <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" class="progress-bar bg-info rounded-pill"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Card -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
            <div class="card rounded shadow-sm border-0">
                <div class="card-body p-5"><i class="fa fa-shopping-bag fa-2x mb-3 text-warning"></i>
                    <h5>New Products</h5>
                    <p class="small text-muted font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="progress rounded-pill">
                        <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;" class="progress-bar bg-warning rounded-pill"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
    include_once("footer.php");
?>