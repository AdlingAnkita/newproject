 <!DOCTYPE html>
<html lang="en">

<?php
include('login_head.php');
?>
<body>
    <!-- navbar start -->
    <div class="container-fluid text-center  ">
       
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="row">
                <div class="col-lg-6 center_name">
                    <div class="justify-content-start align-items-center d-flex">
    
                    <div class="text-start">
                        <h1 class="logohead">TRUSIR</h1>
                    </div>
                </div>
    
                </div>
                <div class="col-lg-6 logcla">
                    <div class="d-flex justify-content-end" >
                        <div class="dropdown drmar">
                            <button class="btn dropbottom " style="font-size: 14px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Language
                              <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">English</a>
                              <a class="dropdown-item" href="#">Hindi</a>
                              <a class="dropdown-item" href="#"></a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-sm-6 ">
            <div class="justify-content-center align-items-center d-grid" style="margin-bottom: 40px;" >
                <div class=" text-start">
                <h1 class="loghead login_text">LOGIN</h1>
                <p class="textp">OTP will be sent to your mobile number</p>
            </div>
            <div class="justify-content-center align-items-center">
                <form style="    text-align: -webkit-center;">
                <div class="inputnumber">
                        <div class="d-flex">

                        <img src="./asset/image/india.png" alt="India"  class="indimg">
                        <p class="align-items-center mx-3 mt-3"> +  91  </p>
                        </div>
                        <div class="">
                    <input class="numdiv" type="text" name="search" placeholder="0000000000">
                </div>
                </div>
                </form> </br></br>
               <a href="Otp.php"> <button class="logbtn">Send OTP</button></a>
            </div>
            </div>
        </div>
            
            <div class="col-lg-6 logcla">
                <div class="container" style="width:100% ">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>

                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner caro_height">

                            <div class="item active">
                                <div class="carahead">
                                    <h1>Offline Home Tuitions</h1>
                                </div>
                                <div class="">
                                    <img src="./asset/image/Group28.png" alt="Los Angeles" height="500% !important">
                                </div>
                                <div class="caratext">
                                    <h3>Get the tuition from the best teachers at your home </h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carahead">
                                    <h1>Special Education</h1>
                                </div>
                                <div class="">
                                    <img src="./asset/image/Group28.png" alt="Chicago" height="100%">
                                </div>
                                <div class="caratext">
                                    <h3>Education for your child at home with personal attention</h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carahead">
                                    <h1>100% Satisfaction</h1>
                                </div>
                                <div class="">
                                    <img src="./asset/image/Group28.png" alt="New York" height="100%">
                                </div>
                                <div class="caratext">
                                    <h3>100% student satisfaction and a great learning experience </h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carahead">
                                    <h1>Trusted Teachers</h1>
                                </div>
                                <div class="">
                                    <img src="./asset/image/Group28.png" alt="New York" height="100%">
                                </div>
                                <div class="caratext">
                                    <h3>Trusted teachers by Trusir </h3>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carahead">
                                    <h1>Monthly Test Series</h1>
                                </div>
                                <div class="">
                                    <img src="./asset/image/Group28.png" alt="New York" height="100%">
                                </div>
                                <div class="caratext">
                                    <h3>Test series every month facility to test your kids </h3>
                                </div>
                            </div>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- navbar end -->





    <!-- scripts code bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
