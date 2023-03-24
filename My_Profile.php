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

    <div class="mt-4 mb-4 text-center">
        <h3 class="student_fac">My Profile</h3>
    </div>

    <!-- Address Div start -->
    <div class="row row_margin">
        <div class="col-lg-3 col-md-3">
        </div>
        <div class="col-lg-6 col-md-6  disha_back mb-4">
            <div class="d-flex ">

                <div lass="col-lg-3 col-md-3 ">
                    <img class="mt-3 mx-5 dish_img" src="./asset/image/Diksha_img.png" alt="">
                </div>
                <div class="col-lg-9 col-md-9">
                    <h4 class="pt-4 px-4 text-white shah_color">Diksha Shah</h4>
                    <span class="mx-4 num_info text-white">Mumbai, Maharashtra </span>
                </div>
            </div>

        </div>

        <div class="col-lg-3 col-md-3">
        </div>

    </div>
    <!-- Address Div end -->

    <!-- Profile Page Start -->
    <!-- 1 st Row Start -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 d-flex justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <div>
                        <img class="mx-2 dish_img" src="./asset/image/group1.png" alt="">
                    </div>
                    
                    <div class="profcard">
                        <h4 class="pt-4 mx-2 proftext ">23rd Sept 2013</h4>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 mb-5 d-flex justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <div>
                        <img class="mx-2 dish_img" src="./asset/image/group2.png" alt="">
                    </div>
                    <div class="profcard">
                        <h4 class="pt-4 mx-2 proftext ">A.B.C English Medium School</h4>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 mb-5 d-flex justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <div>
                        <img class="mx-2 dish_img" src="./asset/image/group3.png" alt="">
                    </div>
                    <div class="profcard">
                        <h4 class="pt-4 mx-2 proftext ">5th Class</h4>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 mb-5 d-flex justify-content-center">
                <div class="d-flex align-items-center justify-content-center">
                    <div>
                        <img class="mx-2 dish_img" src="./asset/image/group4.png" alt="">
                    </div>
                    <div class="profcard">
                        <h4 class="pt-4 mx-2 proftext ">Mathematics, Science</h4>
                    </div>
                </div>
            </div>
        <div class="d-flex justify-content-center mb-4" >
          <a href="MyProfile_Edit.php">  <button class="verifybtn"type="button" class="btn btn-primary">Edit Profile</button></a>
        </div>




        </div>

    </div>

    <!-- 2nd Row Start -->

    <!-- Profile Page End -->





    <!-- footer start -->
    <?php
include('footer.php');
?>
</body>

</html>