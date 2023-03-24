<!DOCTYPE html>
<html lang="en">
<?php
include('head.php');
?>
<body>

<?php
include('header.php');
?>
<div class="modal fade mt-5" id="exampleModalteacher" tabindex="-1" aria-labelledby="exampleModalteacher" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
   
      <div class="modal-body p-5 ">
            <div class="text-center" >
                <h3>Are you sure you want to cancel Mathematics Course?</h3>
                <div class="row">
                    <div class="col-md-6">
                        <button class="course_cancel mt-5 "><span class="coures-btn-text">No</span> </button>
                    </div>
                    <div class="col-md-6">
                       
                            <button class="pop-up-yes mt-5 "><span class="text-white">Yes</span> </button>
                     
                    </div>
                </div>
              </div>
        </div>

    </div>
  </div>
</div>

    <!-- nav bar starts -->
  
      <!-- nav bar end -->
      <h2 class="text-center test_heading my-5">Courses</h2>
<div class="container">
    <div class="row ">
      
<div class="col-md-6">
    <h5 class="text-center Previous-report">Courses Enrolled </h5>
    <div class=" course_bg text-white mb-4 " >
        <div class="d-flex">
        <div class="col-md-10">
           <div class="mx-5 my-2">
                <h5 class="course_math" >Mathematics   </h5> 
              
               <h6 class="course_text"> course starts at 14 dec 2022</h6>
            
            </div>
        </div>
        <div class="col-md-2">
            <img data-bs-toggle="modal" data-bs-target="#exampleModalteacher" src="./asset/image/Vector.png" alt="" class="cancle_course mt-2 ms-4" >
        </div>
       
    
    </div>
    </div>
    <div class=" course_bg text-white mb-4 " >
        <div class="d-flex">
        <div class="col-md-10">

           <div class="mx-5 my-2">
                <h5 class="course_math" >Mathematics </h5> 
              
               <h6 class="course_text"> course starts at 14 dec 2022</h6>
            </div>
        </div>
         <div class="col-md-2">
            <img  data-bs-toggle="modal" data-bs-target="#exampleModalteacher" src="./asset/image/Vector.png" alt="" class="cancle_course mt-2 ms-4">
        </div>
    
    </div>
    </div>
    <div class=" course_bg text-white mb-4" >
        <div class="d-flex">
        <div class="col-md-10">
           <div class="mx-5 my-2">
                <h5 class="course_math" >Mathematics </h5> 
              
               <h6 class="course_text"> course starts at 14 dec 2022</h6>
            </div>
        </div>
        <div class="col-md-2">
            
            <img  data-bs-toggle="modal" data-bs-target="#exampleModalteacher" src="./asset/image/Vector.png" alt="" class="cancle_course mt-2 ms-4">
        </div>
                 </div>
    </div>
    <div>
       <center> <button class="course_cancel mt-5 "><span class="coures-btn-text">Cancel Course</span> </button></center>
    </div>
</div>
<div class="col-md-6">
    <h5 class="text-center Previous-report">Add Courses </h5>
        <div class="row coures-btn">
            <div class="col-md-12">
                <div class="d-flex">
                    <div class="col col-sm-6">
                       <span class="report-sub">Science</span>
                   </div>
                   <div class="col col-sm-6 text-end">
                       <span class="">RS. 2000</span>
                   </div>
               </div>
                
            </div>
            
        </div>
        <div class="row coures-btn">
            <div class="col-md-12 col-sm-12">
                <div class="row">
                 <div class="d-flex">
                     <div class="col col-sm-6">
                        <span class="report-sub">Hindi</span>
                    </div>
                    <div class="col col-sm-6 text-end">
                        <span class="">RS. 2000</span>
                    </div>
                </div>
            </div>
                
            </div>
            
        </div>
        <div class="row coures-btn">
            <div class="col-md-12">
                <div class="d-flex">
                    <div class="col ">
                       <span class="report-sub">Add All</span>
                   </div>
                   
                   <div class="col  text-end">
                       <span class="">RS. 4000</span>
                   </div>
               </div>
            </div>
            
        </div>
        
        <center>
            <button class="add-course-btn">
                <p class="text-submit text-white"> Add course</p>
             </button>
        </center>
       
</div>
    </div>
</div>



    <!-- footer start -->

    <?php
include('footer.php');
?>

    <!-- footer end -->

</body>
</html>