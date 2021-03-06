<?php
    include_once("header.php");
?>
<style>
#container {
    width: 100%;
    height: 300px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}

#part1 {
    width: 100%;
    height: 250px;
    background-color:white;
}
#part2 {
    width: 100%;
    height: 50px;
    background-color:white;
    position: relative;
    top: -15px
}

#companyinfo {
    width: 14%;
    height: 280px;
    position: relative;
    left: 8%;
    top: 30px
}

#sitelink {
    font-size: 35px;
    color: green;
}

#sitelink:hover {
    color: black;
}

#title {
    color: green;
    position: relative;
    top: 0px;
    font-size: 14.1px
}

#detail {
    color: black;
    font-size: 16px
}

#explore {
    width: 14%;
    height: 280px;
    position: relative;
    top: -235px;
    left: 29%
}

#txt1,
#txt2,
#txt3,
#txt4,
#txt5 {
    color: green;
    font-size: 20px
}

.link {
    display: flex;
    width: 90px;
    height: 40px;
    color: black;
    background-color: transparent;
    border-top: 2px solid white;
    position: relative;
    top: -10px
}

.link:hover,
.link1:hover {
    color: green;
}

#visit {
    width: 14%;
    height: 280px;
    position: relative;
    top: -515px;
    left: 42%
}

.text {
    color: black;
    font-size: 14px;
    margin-top: -10px
}

#legal {
    width: 14%;
    height: 280px;
    position: relative;
    top: -800px;
    left: 59.5%
}

.link1 {
    display: flex;
    width: 150px;
    height: 40px;
    color: black;
    background-color: transparent;
    border-top: 2px solid black;
    position: relative;
    top: -10px;
    margin-top: 7px
}

#subscribe {
    position: relative;
    top: -1080px;
    left: 78%;
    width: 14%;
    height: 280px
}

#email {
    color: red;
    position: relative;
    top: -20px
}

.btn {
    position: relative;
    top: -10px
}

#txt5 {
    position: relative;
    top: 0px
}

.social {
    position: relative;
    top: -5px;
    margin-right: 10px;
    color: #001a33;
    cursor: pointer
}

.fa-facebook-square:hover {
    color: skyblue;
}

.fa-linkedin:hover {
    color: skyblue;
}

.fa-twitter-square:hover {
    color: #2CAAE1
}

#txt6 {
    color: black;
    position: relative;
    top: 13px;
    left: 8%;
    width: 80%;
    color: black;
}

.material-icons {
    position: relative;
    top: 3px
}

@media only screen and (max-width:1000px) {
    #companyinfo {
        width: 20%
    }

    #sitelink {
        font-size: 30px
    }

    #txt5,
    #txt4 {
        font-size: 17px
    }

    #txt5,
    .social {
        position: relative;
        top: -5px
    }
}

@media only screen and (max-width:850px) {
    #companyinfo {
        position: relative;
        left: 3%
    }

    #txt6 {
        position: relative;
        left: 3%
    }

    #txt1,
    #txt2,
    #txt3,
    #txt4,
    #txt5 {
        font-size: 15px
    }

    #explore {
        position: relative;
        top: -240px;
        left: 26%
    }

    #sitelink {
        font-size: 25px
    }

    #detail {
        font-size: 13px
    }

    .link {
        width: 60px
    }

    #visit {
        position: relative;
        top: -520px;
        left: 37%
    }

    .text {
        font-size: 13px
    }

    #legal {
        position: relative;
        top: -800px;
        left: 54%
    }

    #subscribe {
        position: relative;
        top: -1080px;
        left: 76%;
        width: 20%
    }

    #txt5,
    .social {
        position: relative;
        left: -110%;
        top: px
    }

    #email,
    .btn {
        position: relative;
        top: 0px
    }

    #part1 {
        height: 250px
    }
}
</style>
<body>
<div id="container" >
         <div id="part1">
             <div id="companyinfo"> <a id="sitelink" href="#">Fruit Titos</a>
                 <p id="title">Happy Shopping</p>
                 <p id="detail">We create awesome code snippets that will help you in creating your own beautiful site. </p>
             </div>
             <div id="explore">
                 <p id="txt1">Explore</p> <a class="link" href="home.php">Home</a> <a class="link" href="about.php">About</a> <a class="link" href="shop.php">Shop</a> <a class="link" href="#">Careers</a>
             </div>
             <div id="visit">
                 <p id="txt2">Visit</p>
                 <p class="text">our page</p>   
                 <p class="text">78 nqsipit Road </p>
                 <p class="text">Talamban </p>
                 <p class="text">Phone: (22) 2363-3611 </p>
                 <p class="text">Fax: (22) 2363-0350 </p>
             </div>
             <div id="legal">
                 <p id="txt3">Legal</p> <a class="link1" href="#">Terms and Conditions</a> <a class="link1" href="#">Private Policy</a>
             </div>
             <div id="subscribe">
                 <p id="txt4">Subscribe to US</p>
                 <form> <input id="email" type="email" placeholder="Email"> </form> <a class="waves-effect waves-light btn">Subscribe</a>
                 <p id="txt5">Connect With US</p> <i class="fab fa-facebook-square social fa-2x"></i> <i class="fab fa-linkedin social fa-2x"></i> <i class="fab fa-twitter-square social fa-2x"></i>
             </div>
         </div>
         <hr class="border-dark">
         <div id="part2">
             <p id="txt6"><i class="material-icons tiny"> copyright</i>copyright 2019 BBbootstrap - All right reserved</p>
         </div>
     </div>
</body>
