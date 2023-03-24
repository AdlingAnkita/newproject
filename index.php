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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="studpop" id="exampleModalLabel">Student Enquiry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="">
          <form>
              <div class="regiserform">
                  <div class="d-flex">
                      <p class="align-items-center mx-3 mt-3"> Student Name </p>
                  </div>
                  <div class="">
                      <input class="numdiv" type="text" name="search" placeholder="">
                  </div>
              </div>
          </form>
      </div>
      <div class="">
        <form>
            <div class="regiserform">
                <div class="d-flex">
                    <p class="align-items-center mx-3 mt-3"> Class </p>
                </div>
                <div class="">
                    <input class="numdiv" type="text" name="search" placeholder="">
                </div>
            </div>
        </form>
    </div>
    <div class="">
      <form>
          <div class="regiserform">
              <div class="d-flex">
                  <p class="align-items-center mx-3 mt-3"> City / Town </p>
              </div>
              <div class="">
                  <input class="numdiv" type="text" name="search" placeholder="">
              </div>
          </div>
      </form>
  </div>
  <div class="">
    <form>
        <div class="regiserform">
            <div class="d-flex">
                <p class="align-items-center mx-3 mt-3"> Pincode  </p>
            </div>
            <div class="">
                <input class="numdiv" type="text" name="search" placeholder="">
            </div>
        </div>
    </form>
</div>
<div class="">
  <form>
      <div class="regiserform">
          <div class="d-flex">
              <p class="align-items-center mx-3 mt-3"> Mobile Number </p>
          </div>
          <div class="">
              <input class="numdiv" type="text" name="search" placeholder="">
          </div>
          <div class="d-flex">
            <button type="button" class="btn sendotpstudent">Send OTP</button>
          </div>
      </div>
  </form>
</div>
<div class="">
  <form>
      <div class="regiserform">
          <div class="d-flex">
              <p class="align-items-center mx-3 mt-3"> OTP </p>
          </div>
          <div class="">
              <input class="numdiv" type="text" name="search" placeholder="">
          </div>
         
      </div>
  </form>
</div>
          </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn progress_btn">Send Enquiry</button>
      </div>
    </div>
  </div>
</div>

<!-- 2nd model -->
<div class="modal fade" id="exampleModalteacher" tabindex="-1" aria-labelledby="exampleModalteacher" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="studpop" id="exampleModalLabel">Teacher Enquiry</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="">
          <form>
              <div class="regiserform">
                  <div class="d-flex">
                      <p class="align-items-center mx-3 mt-3"> Teacher Name </p>
                  </div>
                  <div class="">
                      <input class="numdiv" type="text" name="search" placeholder="">
                  </div>
              </div>
          </form>
      </div>
      <div class="">
        <form>
          <div class="form-check form-check-inline">
            <input class="form-check-input ckeckregi" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label mt-3 mx-2" for="inlineRadio1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input ckeckregi " type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label mt-3 mx-2" for="inlineRadio2">Female</label>
          </div>
        </form>
    </div>

      
      
      <div class="">
        <form>
            <div class="regiserform">
                <div class="d-flex">
                    <p class="align-items-center mx-3 mt-3"> Qualification </p>
                </div>
                <div class="">
                    <input class="numdiv" type="text" name="search" placeholder="">
                </div>
            </div>
        </form>
    </div>
    <div class="">
      <form>
          <div class="regiserform">
              <div class="d-flex">
                  <p class="align-items-center mx-3 mt-3"> City / Town </p>
              </div>
              <div class="">
                  <input class="numdiv" type="text" name="search" placeholder="">
              </div>
          </div>
      </form>
  </div>
  <div class="">
    <form>
        <div class="regiserform">
            <div class="d-flex">
                <p class="align-items-center mx-3 mt-3"> Pincode  </p>
            </div>
            <div class="">
                <input class="numdiv" type="text" name="search" placeholder="">
            </div>
        </div>
    </form>
</div>
<div class="">
  <form>
      <div class="regiserform">
          <div class="d-flex">
              <p class="align-items-center mx-3 mt-3"> Mobile Number </p>
          </div>
          <div class="">
              <input class="numdiv" type="text" name="search" placeholder="">
          </div>
          <div class="d-flex">
            <button type="button" class="btn sendotpstudent">Send OTP</button>
          </div>
      </div>
  </form>
</div>
<div class="">
  <form>
      <div class="regiserform">
          <div class="d-flex">
              <p class="align-items-center mx-3 mt-3"> OTP </p>
          </div>
          <div class="">
              <input class="numdiv" type="text" name="search" placeholder="">
          </div>
         
      </div>
  </form>
</div>
          </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn progress_btn">Send Enquiry</button>
      </div>
    </div>
  </div>
</div>

  <!-- navbar end -->
  <!-- carousel starts -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">

        <img src="./asset/image/carousel.png" height="650px" class="d-block w-100" alt="...">
        <div class="carousel-caption  d-md-block carousel_text ">
          <p class="carousel_heading">Welcome To Trusir</p>
          <p class="carousel_para">Trusir is a registered and trusted Indian company that offers Home to Home tuition
            service. We have a clear vision of helping male and female teaching service. </p>

            <button class="btn-enuiry" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Student Enquiry</button>
            <button class="btn-enuiry" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalteacher">Tutor Enquiry</button>

        </div>
      </div>
      <div class="carousel-item">
        <img src="./asset/image/carousel.png" height="650px" class="d-block w-100" alt="...">
        <div class="carousel-caption  d-md-block carousel_text ">
          <h4 class="carousel_heading">Welcome To Trusir</h4>
          <p class="carousel_para">Trusir is a registered and trusted Indian company that offers Home to Home tuition
            service. We have a clear vision of helping male and female teaching service. </p>

            <button class="btn-enuiry" type="button"data-bs-toggle="modal" data-bs-target="#exampleModal">Student Enquiry</button>
            <button class="btn-enuiry" type="button"data-bs-toggle="modal" data-bs-target="#exampleModalteacher">Tutor Enquiry</button>

        </div>
      </div>
      <div class="carousel-item">
        <img src="./asset/image/carousel.png" height="650px" class="d-block w-100" alt="...">
        <div class="carousel-caption  d-md-block carousel_text ">
          <h4 class="carousel_heading">Welcome To Trusir</h4>
          <p class="carousel_para">Trusir is a registered and trusted Indian company that offers Home to Home tuition
            service. We have a clear vision of helping male and female teaching service. </p>
          
            <button class="btn-enuiry" type="button"data-bs-toggle="modal" data-bs-target="#exampleModal">Student Enquiry</button>
            <button class="btn-enuiry" type="button"data-bs-toggle="modal" data-bs-target="#exampleModalteacher">Tutor Enquiry</button>
        </div>
      </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- carousel end-->
  <!-- why home tution start -->
  <div class="container why_media">
    <div class="card-header mt-4 mb-4 why_properties  mx-2">Why Home Tuition?</div>
    <div class="row">
      <div class="col-lg-3 col-sm-3 col-md-3 mt-4 ">
        <div class="card card_width">
          <div class="card-body">
            <h5 class="card-title why_card_color  my-4 mx-2">Expert Teachers</h5>
            <li class="card-text li_none  pt-2 mx-2">Highly specialized,</li>
            <li class="card-text li_none  mx-2">experienced teachers that </li>
            <li class="card-text li_none  pb-4 mx-2"> make learning fun.</li>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-sm-3 col-md-3 mt-4 ">
        <div class="card card_width">
          <div class="card-body">
            <h5 class="card-title why_card_color  my-4 mx-2">Personalised
              Learning </h5>
            <li class="card-text li_none  pt-2 mx-2">Personalised education,</li>
            <li class="card-text li_none  mx-2">tailored to the grasping </li>
            <li class="card-text li_none  pb-0 mx-2"> power of the student.</li>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-sm-3 col-md-3 mt-4 ">
        <div class="card card_width">
          <div class="card-body">
            <h5 class="card-title  why_card_color my-4 mx-2">Monthly Tests </h5>
            <li class="card-text li_none  pt-2 mx-2">Monthly tests for the student </li>
            <li class="card-text li_none  mx-2"> to ensure a complete </li>
            <li class="card-text li_none  pb-4 mx-2"> understanding of the subject.</li>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-sm-3 col-md-3 mt-4 ">
        <div class="card card_width">
          <div class="card-body">
            <h5 class="card-title why_card_color  my-4 mx-2">Student Review </h5>
            <li class="card-text li_none  pt-2 mx-2">Feedback about the </li>
            <li class="card-text li_none  mx-2">student’s performance </li>
            <li class="card-text li_none  pb-4 mx-2"> delivered to parents.</li>
          </div>
        </div>
      </div>

    </div>

  </div>
  <!-- why home tution end -->

  <!-- advantage block start -->


  <div class="container">
    <div class="card-header mt-4 mb-4 why_properties  mx-2 text-center text-center ">What’s Our Advantages</div>
    <div class="row d-flex justify-content-around " style="padding-right: 5%;">
      <div class=" col-md-4 card card_girl mt-4  " style="width: 18rem;">
        <img src="./asset/image/school girl.png" class="card-img-top" alt="...">

        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>
      <div class=" col-md-4 card card_girl mt-4 " style="width: 18rem; background: rgba(0, 194, 255, 0.16);">
        <img src="./asset/image/school girl.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text" style="color: #0081A9;">Some quick example text to build on the card title and make up
            the bulk of the card's content.</p>
        </div>
      </div>
      <div class=" col-md-4 card card_girl mt-4 " style="width: 18rem;">
        <img src="./asset/image/school girl.png" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>

    </div>

  </div>
  <!-- offerings start -->
  <div class="container" style="margin-top: 10%;">

    <div class="row">
      <div class="col-md-6 col-sm-12">
        <img src="./asset/image/offering.png" class="offering_img" alt="">

      </div>


      <div class="col-md-6 col-sm-12">
        <h2 class="offering_heading">Know our offerings</h2>
        <p class="offering_para">With our help, you can learn more. For all classes, boards, and subjects, we offer
          academic tutoring. So allow your child to fully grasp the fundamentals of the courses, develop conceptual
          clarity, and achieve a high rate of retention.</p>

        <!-- <div class="classes">
          <a href="">Nursery</a>
          <a href="">LKG</a>
          <a href="">UKG</a>
          <a href="">Class1</a>
          <a href="">Class2</a>
          <a href="">Class3</a>
          <a href="">Class4</a>
        </div>
        <div class="classes">
          <a href="">Class5</a>
          <a href="">Class6</a>
          <a href="">Class7</a>
          <a href="">Class8</a>
          <a href="">Class9</a>
          <a href="">Class10</a>

        </div>
        <div class="classes">
          <a href="">Hindi</a>
          <a href="">English</a>
          <a href="">Math</a>
          <a href="">science</a>
          <a href="">Physics</a>
          <a href="">Chemistry</a>


        </div>
        <div class="classes">
          <a href="">Biology</a>
          <a href="">Scocial science</a>
          <a href="">H>istory
            <a href="">Geography</a>
           


        </div>
        <div class="classes">
          <a href="">Political science</a>
          <a href="">Economics</a>



        </div> -->
<div class="offering_btn">
        <div>   
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Nursery</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std   my-2 mx-2">LKG</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">UKG</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Class1</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Class2</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Class3</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Class4</button>
             </div>
           
           </div>
        <div>   
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Class5</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Class6</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Class7</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Class8</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Class9</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Class10</button>
             </div>
            
           </div>
   
         </div>
        
   
         </div>
         <div>   
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Hindi</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">English</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Maths</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Science</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Physics</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Chemistry</button>
             </div>
           
           </div>
   
         </div>
         <div>   
          <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Biology</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Scoial Science</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">History</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Geography</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
               <button type="button" class="btn btn-info btn_std  my-2 mx-2">Political Science</button>
             </div>
             <div class="btn-group" role="group" aria-label="Third group">
              <button type="button" class="btn btn-info btn_std  my-2 mx-2">Economics</button>
            </div>
           </div>

         
         </div>



      </div>

    </div>


  </div>

</div>
  <!--offerings end  -->

  <!--how it work start  -->

  <div class="container text-center" id="how">
    <div class="card-header mt-4 mb-4 why_properties  mx-2 text-center text-center">How it works?</div>
    <div class="row d-flex justify-content-around " style="padding-right: 5%;">
      <div class=" col-md-4 card Enquiry " style="width: 18rem;">
        <img src="./asset/image/how it work1.png" class="card-img-top  hiw_img" alt="...">

        <div class="card-body">
          <h4>1. Enquire</h4>

          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>
      <div class=" col-md-4 card Enquiry " style="width: 18rem; ;">
        <img src="./asset/image/how it work2.png" class="card-img-top hiw_img" alt="...">
        <div class="card-body">
          <h4>2. Registration</h4>
          <p class="card-text" style="color: #0081A9;">Some quick example text to build on the card title and make up
            the bulk of the card's content.</p>
        </div>
      </div>
      <div class=" col-md-4 card Enquiry" style="width: 18rem;">
        <img src="./asset/image/howitwork3.png" class="card-img-top hiw_img" alt="...">
        <h4>3. Get Tutor</h4>
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
      </div>

    </div>

  </div>


  <!-- About us section start -->
  <div class="container about">
    <div class="card-header mt-4 mb-4 why_properties  mx-2 mt-4 mb-4">About Us</div>
    <p>
      Lorem ipsum dolor sit amet consectetur. Eu faucibus orci morbi amet ut cursus. Suspendisse quis in fermentum
      ullamcorper tincidunt. Odio quis magna eleifend erat et non imperdiet sed. Massa sed augue sollicitudin nisi leo
      phasellus ultricies blandit consectetur. Volutpat adipiscing enim maecenas tellus non mattis.
    </p>
    <p>
      Lorem ipsum dolor sit amet consectetur. Eu faucibus orci morbi amet ut cursus. Suspendisse quis in fermentum
      ullamcorper tincidunt. Odio quis magna eleifend erat et non imperdiet sed. Massa sed augue sollicitudin nisi leo
      phasellus ultricies blandit consectetur. Volutpat adipiscing enim maecenas tellus non mattis.
    </p>
  </div>
  <!-- About us section End -->

  <!-- find us in city starts -->
  <div class="container" style="margin-top: 10%;">

    <div class="row">

      <div class="col-md-6 col-sm-12">
        <div class="card-header mt-4 mb-4 why_properties  mx-2 mt-4 mb-4">Find Us in your City</div>
        <div class="grid-container" id="Grid">
          <div class="grid-item">patna</div>
          <div class="grid-item">Tirhut</div>
          <div class="grid-item">Saran</div>
          <div class="grid-item">Gopaganj</div>
          <div class="grid-item">Siwan</div>
          <div class="grid-item">Dhardanga</div>
          <div class="grid-item">Bhojpur</div>
          <div class="grid-item">Jehanabad</div>
          <div class="grid-item">Munger</div>
          <div class="grid-item">Magadh</div>
          <div class="grid-item">Katihar</div>
          <div class="grid-item">Bhagalpur</div>
        </div>

      </div>
      <div class="col-md-6 col-sm-12">


        <img src="./asset/image/shapes.png" class="responsive_img" alt="">

      </div>

    </div>


  </div>
  <!-- find us in city End -->

  <!-- Succeed Start -->
  <div class="container" style="margin-top: 10%;">

    <div class="row">

      <div class="col-md-8 col-sm-12">
        <div class="card-header mt-4   mx-2 mt-4 carrier_para">Succeed in your teaching
         </div>
        <div class="card-header mx-2  mb-4  carrier_para">
          career.</div>
        <p class="succeed_para"> Choose your bright future with Trusir. Amet minim mollit non deserunt ullamco est sit
          aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
          nostrud amet.</p>
      <a href="Contact_us.php">  <button class="btn-enuiry Join_but">Join Us</button></a>

      </div>
      <div class="col-md-4   col-sm-12">


        <img class="img_width" src="./asset/image/carrier.png" alt="">

      </div>

    </div>


  </div>
  <!-- Succeed End -->
  <!-- testimonials starts -->




  <div class="container testimonials_media" id="testimonials">
    <div class="card-header mt-4 mb-4 why_properties  mx-2">Testimonials</div>
    <div class="row">
      <div class="col-lg-4 col-sm-4 col-md-4 ">
        <div class="card card_width  bg-color ">
          <img src="./asset/image/testimonial1.png" height="96px" width="96px" class="" alt="...">
          <div class="card-body">
            <h4 class="testimonial-heading">Swapnil</h4>
            <p class="testimonial-para">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit
              officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-4 col-md-4 ">
        <div class="card card_width top_margin bg-color ">
          <img src="./asset/image/testimonial2.png" height="96px" width="96px" class="" alt="...">
          <div class="card-body">
            <h4 class="testimonial-heading">Sonali</h4>
            <p class="testimonial-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eos eius dicta
              commodi? Architecto consequuntur consectetur earum reprehenderit nemo assumenda?</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-4 col-md-4 ">
        <div class="card card_width top_margin  bg-color">
          <img src="./asset/image/testimonial3.png" height="96px" width="96px" class="" alt="...">
          <div class="card-body">
            <h4 class="testimonial-heading">Ashwini</h4>
            <p class="testimonial-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eos eius dicta
              commodi? Architecto consequuntur consectetur earum reprehenderit nemo assumenda?</p>
          </div>
        </div>
      </div>



    </div>

  </div>

  <!-- testimonials end -->

  <!-- trusir app start -->
  <div class="top_margin" style="background-color: #48116A; ">
    <div class="container text-white" style="margin-top: 10%;">

      <div class="row app_padding p-5">

        <div class="col-md-6 col-sm-12">
          <div class="card-header mt-4 mb-4 why_properties media_para text-white ">Trusir App Includes</div>
          <p class="app_para">Select the tutor of your choice and start your learning journey. Through this, you can
            find both academic and non-academic subjects to select from. Make your learning advanced and say yes to
            success.</p>
          <div class="playStore">
            <a href="#"><img src="/asset/image/playatore.png" alt=""></a>
            <a href="#"><img src="/asset/image/appstore.png" alt=""></a>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 ">


          <img src="./asset/image/app1.png" height="400px" width="452px" class="responsive_img" alt="">

        </div>

      </div>


    </div>
  </div>
  <!--trusir end  -->
  <!-- services start -->
  <div class="services">
    <div class="container">

      <div class="row board_media">
        <div class="col-md-4">

          <ul>
            <li>
              <h6>Boards</h6>
            </li>
            <li>State Board Tuition
            </li>
            <li>CBSE Board Tuition</li>
            <li>ICSE Board Tuition</li>
            <li>IGCSE Board Tuition</li>
            <li>IB Board Tuition</li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul>
            <li>
              <h6>Subjects</h6>
            </li>
            <li>Maths Tuition</li>
            <li>Science Tuition</li>
            <li>English Tuition</li>
            <li>Hindi Tuition</li>
            <li>Social Science Tuition</li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul>
            <li>
              <h6>Tuitions</h6>
            </li>
            <li>Academic Tuition</li>
            <li>Non- Academic Tuition</li>
            <li>Competitive Exams</li>
            <li>Language Learning</li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>


  </div>
  <!-- services end -->
  <?php
include('home_footer.php');
?>
</body>

</html>