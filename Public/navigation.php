<?php
    include_once("header.php");
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light text-dark" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        <!-- <i class='fas fa-seedling' style='font-size:30px;color:green'></i>
        <h4 class="text-success">Fruit Titos</h4> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbar-center">
                <li class="nav-item active">
                    <a class="nav-link mx-auto" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Sale</a>
                        <a class="dropdown-item" href="#">New</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">All Products</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacts</a>
                </li>
            </ul>
        </div>
        <div id="ex4" class="ca">
            <span class="p1 fa-stack fa-2x has-badge" data-count="15">
                <i id="cart" class="p3 fa fa-shopping-cart fa-stack-1x xfa-inverse " data-count="4b"
                    style="color:black;font-size:20px;"></i>
            </span>
        </div>

        <div class="bs-example mr-5">
            <div class="btn-group">
                <button class="btn btn-light" style="height:24px; margin-top:-7px">
                    <span<i style='font-size:24px' class='fas'>&#xf4fe;</i>
                        </span>
                </button>
                <button data-toggle="dropdown" class="btn btn-light dropdown-toggle" style="font-size:10px"></button>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item"><i class="fa fa-pencil"></i> Edit</a>
                    <a href="#" class="dropdown-item"><i class="fa fa-share"></i> Share</a>
                    <a href="#" class="dropdown-item"><i class="fa fa-print"></i> Print</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item text-danger"><i class="fa fa-trash"></i> Delete</a>
                </div>
            </div>
        </div>
    </nav>
    </body>