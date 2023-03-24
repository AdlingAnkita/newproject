<!DOCTYPE html>
<html lang="en">
<?php
include('head.php');
?>
<body>
    <!-- nav bar starts -->
    <?php
include('header.php');
?>
      <!-- nav bar end -->

<!-- test series start -->

<h2 class="text-center test_heading my-5"> Test Series </h2>
<div class="row">
  
<div class="col-md-4"></div>


<div class="col-md-4 ">

<div class="row test1_bg text-white " >
    <div class="d-flex">
    <div class="col-md-10">
       <div class="mx-5 my-2">
            <h5 class="test_math" >Mathematics </h5> 
          <h6 class="test_text"> Algebra Chapter 3</h6>
           <h6 class="test_text">  Exam Schedule: 30th Jan 23 </h6>
        </div>
    </div>
    <div class="col-md-2 mt-4">
        <img src="./asset/image/testseries1.png" height="70px" width="70px" alt="test">
    </div>

</div>
</div>
</div>


</div>


<div class="row">
<div class="col-md-4"></div>


<form action="">

  <div class="upload-btn-wrapper up-btn-div text-center mt-5">
    <button class="btn_upload pb-2"> <img src="./asset/image/upload.png" alt=""> 
      <p class="upload-btn-text mt-4" >Upload a file</p></button>
   
    <input type="file" name="myfile" />
  </div>

      
<div class="mt-5 mr-5 text-center mb-5">
<button class="test-submit">
   <p class="text-submit text-white"> Submit Test</p>
</button>
</form>   
</div>
        </div>

    <!-- footer start -->

    <?php
include('footer.php');
?>

    <!-- footer end -->

</body>
</html>