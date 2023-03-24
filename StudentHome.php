<!DOCTYPE html>
<html lang="en">
<?php
include('head.php');
?>

<body>
  <!-- navbar start -->
  <nav class="navbar navbar-expand-lg  stdhomenav_bg_color">
    <div class="container-fluid nav_property">
      <a class="navbar-brand text-white me-5" href="#"> <b>Trusir</b></a>
      <button class="navbar-toggler toggler_button" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav_margin" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2  navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active nav_margin_li text-white" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item  nav_margin_li">
            <a class="nav-link active pl-5 text-white" aria-current="page" href="#">How It Work</a>
          </li>
          <li class="nav-item nav_margin_li">
            <a class="nav-link active text-white" aria-current="page" href="#">Testimonials</a>
          </li>

          <li class="nav-item dropdown nav_margin_li">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Language
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item " href="#">Action</a></li>
              <li><a class="dropdown-item " href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item " href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item  nav_margin_li">
           <a href="Login.php"> <button class="studentlogbtn">
              Login
            </button></a>
          </li>

          <li class="nav-item dropdown nav_margin_li">
            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="asset/image/navlogo2.png" height="30" alt="">
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  
  <div class="stdhomerow">
    <div class="container text-start">
      <div class="row justify-content-start align-items-center ">
        <div class="col-lg-6">
          <div class="">
            <h1 class="headstdhome">
              Welcome To Trusir
            </h1>
            <p class="textstdhome">
              Trusir is a registered and trusted Indian company that offers Home to Home tuition service. We have a
              clear vision of helping students achieve their academic goals through one-to-one teaching.
            </p>
           <a href="StudentRegistration.php"> <button class="stdregbtn">Register Now</button> </a>

          </div>
        </div>

        <div class="col-lg-6 ">
          <div class="d-flex justify-content-end">
            <img src="./asset/image/1.png" alt="Girl in a jacket" width="100%" height="100%" class="">

          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="container text-start">
    <div class="row justify-content-center align-items-center ">
      <div class="col-sm-4 justify-content-center align-items-center d-flex">
        <div class="stdhomecard">
          <div class="stdhomimg">
            <img src="./asset/image/studentcard.png" alt="Girl in a jacket" width="100%" height="100%"
              class="">
            <h1 class="stdcardtext">
              Trusted Teachers
            </h1>
          </div>

          <div>

          </div>
        </div>
      </div>

      <div class="col-sm-4 justify-content-center align-items-center d-flex">
        <div class="stdhomecard1">
          <div class="stdhomimg">
            <img src="./asset/image/studentcard.png" alt="Girl in a jacket" width="100%" height="100%"
              class="">
            <h1 class="stdcardtext">
              Home to Home
              tuition service
            </h1>
          </div>
          <div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 justify-content-center align-items-center d-flex">
        <div class="stdhomecard2">
          <div class="stdhomimg">
            <img src="./asset/image/studentcard.png" alt="Girl in a jacket" width="100%" height="100%"
              class="">
            <h1 class="stdcardtext">
              Subject specialization
              teachers
            </h1>
          </div>
          <div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 justify-content-center align-items-center d-flex">
        <div class="stdhomecard3">
          <div class="stdhomimg">
            <img src="./asset/image/studentcard.png" alt="Girl in a jacket" width="100%" height="100%"
              class="">
            <h1 class="stdcardtext">
              Improvement
              Guaranteed
            </h1>
          </div>
          <div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 justify-content-center align-items-center d-flex">
        <div class="stdhomecard2">
          <div class="stdhomimg">
            <img src="./asset/image/studentcard.png" alt="Girl in a jacket" width="100%" height="100%"
              class="">
            <h1 class="stdcardtext">
              Reasonable Fees
            </h1>
          </div>
          <div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <h1 class="clicktext">
        Click here for registration
        <h1>
          <h1 class="clicktext1">
            Our Services
            <h1>


    </div>
    <div class="row text-start justify-content-center">
      <div class="col-sm-6">
        <div class="card servicecard">
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <div class="">
                <img src="./asset/image/studentcard.png" alt="Girl in a jacket" width="100%" height="100%"
                  class="serimg">
              </div>
              <div class="">
                <p class="secardtext">Qualified And Trusted Teachers</p>
                <p class="secardsubtext">Skilled and trusted teachers for student</p>

              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card servicecard1">
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <div class="">
                <img src="./asset/image/studentcard.png" alt="Girl in a jacket" width="100%" height="100%"
                  class="serimg">
              </div>
              <div class="">
                <p class="secardtext">Male and Female Teachers</p>
                <p class="secardsubtext"> Male and Female Teachers as per your requirement</p>

              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card servicecard2">
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <div class="">
                <img src="./asset/image/studentcard.png" alt="Girl in a jacket" width="100%" height="100%"
                  class="serimg">
              </div>
              <div class="">
                <p class="secardtext">Tutor Replacement Facility </p>
                <p class="secardsubtext">Tutor replacement incase of dissatisfaction.</p>

              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card servicecard3">
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <div class="">
                <img src="./asset/image/studentcard.png" alt="Girl in a jacket" width="100%" height="100%"
                  class="serimg">
              </div>
              <div class="">
                <p class="secardtext">Monthly Test Series</p>
                <p class="secardsubtext">Month to month test series for students.</p>

              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card servicecard4">
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <div class="">
                <img src="./asset/image/studentcard.png" alt="Girl in a jacket" width="100%" height="100%"
                  class="serimg">
              </div>
              <div class="">
                <p class="secardtext">Free Trial Classes</p>
                <p class="secardsubtext">5 days free demo classes facilities. </p>

              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card servicecard5">
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <div class="">
                <img src="./asset/image/studentcard.png" alt="Girl in a jacket" width="100%" height="100%"
                  class="serimg">
              </div>
              <div class="">
                <p class="secardtext">Unlimited Practice
                  Tests</p>
                <p class="secardsubtext">Daily practice tests by our
                  teachers. </p>

              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card servicecard6">
          <div class="card-body">
            <div class="d-flex justify-content-center align-items-center">
              <div class="">
                <img src="./asset/image/studentcard.png" alt="Girl in a jacket" width="100%" height="100%"
                  class="serimg">
              </div>
              <div class="">
                <p class="secardtext">Parents Doubts</p>
                <p class="secardsubtext">Parents can talk about their child doubt. </p>

              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <h1 class="clicktext">
          Click here for registration
          <h1>
            <h1 class="clicktext1">
              Get the Best Tutor for your child
            <h1>
                <h1 class="clicktext2">
                  Get the best learning support for your child
                <h1>
                    <p class="clickpara">
                      For all your learning support needs such as homework, test, school project and examinations; we are here to give you the best support.
                    </p>
                    <h1 class="clicktext2">
                      The best tutors are here
                    <h1>
                      <p class="clickpara">
                        Our tutors are seasoned professionals, screened and given relevant trainings on monthly basis to deliver the excellent results you desire.
                      </p>
                      <h1 class="clicktext1  registermargbottom">
                        Explore Our Offerings
                      <h1>
                      <div class="text-center">
                        <button type="button" class="btngroup">Nursery</button>
                        <button type="button" class="btngroup">LKG</button>
                        <button type="button" class="btngroup">UKG</button>
                        <button type="button" class="btngroup">Class 1</button>
                        <button type="button" class="btngroup">Class 2</button>
                        <button type="button" class="btngroup">Class 3</button>
                        <button type="button" class="btngroup">Class 4</button>
                        <button type="button" class="btngroup">Class 5</button>
                        <button type="button" class="btngroup">Class 6</button>
                        <button type="button" class="btngroup">Class 7</button>
                        <button type="button" class="btngroup">Class 8</button>
                        <button type="button" class="btngroup">Class 9</button>
                        <button type="button" class="btngroup">Class 10</button>
                      </div>
                      <h1 class="clicktext1 registermargbottom">
                        Explore Subjects
                      <h1>
                        <div class="text-center">
                          <button type="button" class="btngroup">Hindi</button>
                          <button type="button" class="btngroup">English</button>
                          <button type="button" class="btngroup">Maths</button>
                          <button type="button" class="btngroup">Science</button>
                          <button type="button" class="btngroup">Physics</button>
                          <button type="button" class="btngroup">Chemistry</button>
                          <button type="button" class="btngroup">Biology</button>
                          <button type="button" class="btngroup">History</button>
                          <button type="button" class="btngroup">Geography</button>
                          <button type="button" class="btngroup polybtn">Political Science</button>
                          <button type="button" class="btngroup">Economics</button>
                        </div>
                      <div class="text-center registermargintop">
                      <a href="StudentRegistration.php">  <button type="button" class="logbtn">Registration</button></a>
                      </div>

                        
      </div>
    </div>

  </div>

  <!-- navbar end -->



<!-- footer start -->

<?php
include('home_footer.php');
?>



</body>

</html>