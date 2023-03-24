<!DOCTYPE html>
<html lang="en">
<?php
include('head.php');
?>
<body>

    <!-- navbar start -->
    <?php
include('header.php');
?>

  <!-- navbar end -->
    
    <div class="container-fluid text-center mb-4">
        <div class="row">
            <div class="col-lg-12">
                <div class=" text-center mb-5 mt-5">
                    <h1 class="loghead">Enter Moblie Number</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-lg-6">
            <div class="justify-content-center align-items-center d-grid" style="margin-bottom: 40px;" >
                <div class=" text-start">
                <h1 class="changenumbertext">Enter Moblie Number</h1>
            </div>
            <div class="justify-content-center align-items-center">
                <form>
                    <div class="inputnumber">
                        <div class="d-flex">

                        <img src="./asset/image/india.png" alt="Girl in a jacket" width="" height="" class="indimg">
                        <p class="align-items-center mx-3 mt-3"> +  91  </p>
                        </div>
                        <div class="">
                    <input class="numdiv" type="text" name="search" placeholder="0000000000">
                </div>
                </div>
                </form> </br></br>
                <button class="logbtn mb-5">Send OTP</button>
            </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="justify-content-center align-items-center d-grid" style="margin-bottom: 40px;" >
                <div class=" text-start">
                <h1 class="changenumbertext">Enter OTP</h1>
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

                <button class="logbtn mb-5"type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Verify OTP</button>
           
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- navbar end -->

<!-- footer start -->

<?php
include('footer.php');
?>


  </div>

<!-- footer end -->

</body>

</html>