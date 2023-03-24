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
                            <li><a class="dropdown-item " href="#">Somethin g else here</a></li>
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
                <div class="col-sm-6">
                    <div class="">
                        <h1 class="headstdhome">
                            Student Registration
                        </h1>
                    </div>
                </div>
                <div class="col-sm-6 ">
                    <div class="d-flex justify-content-end">
                        <img src="./asset/image/Group45.png" alt="Girl in a jacket" width="100%"
                            height="100%" class="sturegiserimg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-start">
        <div class="row justify-content-center align-items-center ">
            <div class="col-sm-12">
                <div class="text-center">
                    <h1 class="registrationhead">
                        <u>About You</u>
                    </h1>
                    <h1 class="registrationtext">
                        Personal Details
                    </h1>
                </div>

            </div>
            <div class="row justify-content-center align-items-center ">
                <div class="col-sm-6">
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
                <div class="col-sm-3">
                    <form>
                        <div class="regiserform">
                            <div class="d-flex">
                                <p class="align-items-center mx-3 mt-3">Gender</p>
                            </div>
                            <select class="gendiv" id="exampleFormControlSelect1">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                    </form>
                </div>
                <div class="col-sm-3">
                    <form>
                        <div class="regiserform">
                            <div class="d-flex">
                                <p class="align-items-center mx-3 mt-3">DOB</p>
                            </div>
                            <input class="gendiv" type="date" name="search" placeholder="">
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <form>
                        <div class="regiserform">
                            <div class="d-flex">
                                <p class="align-items-center mx-3 mt-3"> Father’s Name </p>
                            </div>
                            <div class="">
                                <input class="numdiv" type="text" name="search" placeholder="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <form>
                        <div class="regiserform">
                            <div class="d-flex">
                                <p class="align-items-center mx-3 mt-3"> Mother’s Name </p>
                            </div>
                            <div class="">
                                <input class="numdiv" type="text" name="search" placeholder="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <form>
                        <div class="regiserform">
                            <div class="d-flex">
                                <p class="align-items-center mx-3 mt-3">Phone Number </p>
                            </div>
                            <div class="">
                                <input class="numdiv" type="text" name="search" placeholder="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <form>
                        <div class="regiserform">
                            <div class="d-flex">
                                <p class="align-items-center mx-3 mt-3"> No. of Students </p>
                            </div>
                            <div class="">
                                <select class="numdiv" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="text-center">

                    <h1 class="registrationtext registermargbottom">
                        Address Details
                    </h1>
                </div>

            </div>
            <div class="row justify-content-center align-items-center ">
                <div class="col-sm-6">
                    <form>
                        <div class="regiserform">
                            <div class="d-flex">
                                <p class="align-items-center mx-3 mt-3"> State </p>
                            </div>
                            <div class="">
                                <select class="numdiv" id="exampleFormControlSelect1">
                                    <option>maharashtra</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <form>
                        <div class="regiserform">
                            <div class="d-flex">
                                <p class="align-items-center mx-3 mt-3"> City </p>
                            </div>
                            <div class="">
                                <select class="numdiv" id="exampleFormControlSelect1">
                                    <option>pune</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
              
                <div class="col-sm-6">
                    <form>
                        <div class="regiserform">
                            <div class="d-flex">
                                <p class="align-items-center mx-3 mt-3"> Locality/Area </p>
                            </div>
                            <div class="">
                                <input class="numdiv" type="text" name="search" placeholder="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <form>
                        <div class="regiserform">
                            <div class="d-flex">
                                <p class="align-items-center mx-3 mt-3"> Full Address </p>
                            </div>
                            <div class="">
                                <input class="numdiv" type="text" name="search" placeholder="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-12">
                    <div class="text-center">
    
                        <h1 class="registrationtext registermargbottom">
                            Upload 
                        </h1>
                    </div>
    
                </div>

                <div class="col-sm-6 mt-3">
                    <div class="d-flex align-items-center photoregi">
                    <p class="inputtextlabel">Photo</p>
                    <div class="upbtnwraper">
                        <button class="upbtn"> <img src="./asset/image/up.png" alt="Girl in a jacket" width=""
                            height=""class='upimg'>Upload Image</button>
                        <input type="file" name="myfile" />
                      </div>
                    </div>
 
                </div>
                <div class="col-sm-6 mt-3">
                    <div class="d-flex align-items-center photoregi">
                    <p class="inputtextlabel">Aadhar Card</p>
                    <div class="upbtnwraper">
                        <button class="upbtn"> <img src="./asset/image/up.png" alt="Girl in a jacket" width=""
                            height=""class='upimg'>Upload Image</button>
                        <input type="file" name="myfile" />
                      </div>
                    </div>
 
                </div>
                <!-- <div class="col-sm-6 mt-3 ">
                    <div class="d-flex align-items-center photoregi">
                    <p class="inputtextlabel">Aadhar Card</p>
                    <div class="upbtnwraper">
                        <button class="upbtn"> <img src="./asset/image/up.png" alt="Girl in a jacket" width=""
                            height=""class='upimg'>Upload Image</button>
                        <input type="file" name="myfile" />
                      </div>
                    </div>
 
                </div>
                <div class="col-sm-6 "></div> -->
                
                <div class="col-sm-12">
                    <div class="text-center">
    
                        <h1 class="registrtionfee registermargbottom">
                            299/- Registration Fee                        </h1>
                            
                    </div>
                <div class="justify-content-center d-flex align-items-center text-center" > 
                    <div class="form-check d-flex align-items-center">
                        <input class="form-check-input ckeckregi" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label checklabel" for="defaultCheck1">
                            I agree with the terms and conditions
                        </label>
                      </div>
                    </div>
                    <div class="text-center registermargintop">
                      <a href="Login.php">  <button type="button" class="logbtn">Register</button></a>
                      </div>
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