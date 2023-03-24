<!DOCTYPE html>
<html lang="en">

<?php
include('login_head.php');
?>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
       
        <div class="modal-body">
            <div class="text-center" >
                <img src="./asset/image/m028t0154.png" alt="Girl in a jacket" width="" height="" class="indimg">
                <h1 class="modaltext">OTP Verified Successfully!!</h1>
              </div>
        </div>
      </div>
    </div>
  </div>

<body>
    <!-- navbar start -->
    <div class="container-fluid text-center">
      
        <div class="row vh-100  ">
            <div class="row">
                <div class="col-lg-6 col-sm-12 center_name">
                    <div class="justify-content-start align-items-center d-flex">
    
                    <div class="text-start">
                        <h1 class="logohead ">TRUSIR</h1>
                    </div>
                </div>
    
                </div>
                <div class="col-lg-6 logcla">
                    <div class="d-flex justify-content-end" >
                        <div class="dropdown drmar  ">
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
            <div class="col-lg-6">
            <div class="justify-content-center align-items-center d-grid" style="margin-bottom: 40px;" >
                <div class=" text-start">
                <h1 class="loghead login_text">Enter OTP</h1>
                <p class="textotpentr">Enter the verification code we just sent on your phone number.</p>
            </div>
            <div class="justify-content-center align-items-center">
                <form>
                    <div class="otpnumber">

                        <div class="">
                            <input class="inputotp" type="number" id="fname" name="fname"><br>
                        </div>
                        <div class="">
                            <input class="inputotp" type="number" id="fname" name="fname"><br>
                        </div>
                        <div class="">
                            <input class="inputotp" type="number" id="fname" name="fname"><br>
                        </div>
                        <div class="">
                            <input class="inputotp" type="number" id="fname" name="fname"><br>
                        </div>
                    </div>

               
                </form> </br></br>

               <a href="index.php"> <button class="verifybtn"type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Verify</button></a>
            <div style="margin-top: 20px;" > 
            <p class="codepara">Code expires in<span class="expirecode" >00:59</span> </p>
        </div>
            </div>
            </div>
        </div>
            <div class="col-lg-6 img_hei" style="background-color:rgba(72, 17, 106, 0.05);height: 100%;" >
                <div class="container" style="width:100%">
                    <div class="">
                        <img src="./asset/image/Group28.png" alt="Los Angeles" width="100%" style="padding: 90px;"  >
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

</html>