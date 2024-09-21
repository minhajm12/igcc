<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGCC | Course</title>

    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- COMMON STYLE -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- COURSE PAGE STYLE -->
    <link rel="stylesheet" href="assets/css/course.css">

    <!-- CTA SECTION STYLE -->
    <link rel="stylesheet" href="assets/css/cta-section.css">

</head>

<body>


    <!-- HEADER SECTION -->
    <?php include('inc/header.php'); ?>
    <!-- HEADER SECTION END-->



    <!-- INNER BANNER -->
    <div id="inner_banner_main">
        <div class="main-padding">
            <div class="banner-img-div">
                <img src="assets/img/inner-banner/course-banner.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- INNER BANNER END -->


    <!-- COURSE SECTION -->
    <section id="course_main_section">
        <div class="main-padding">
            <div class="inner-top-section">
                <h6 class="top-head text-lg-center text-start">Course</h6>
                <h2 class="main-head text-md-center text-start mt-md-0 mt-1">Provided Course Details</h2>
            </div>
            <div class="course-details-section">
                <div class="row py-lg-5 py-md-4 py-3">
                    <div class="col-lg-6 col-12 course-image-section">
                        <div class="img-section">
                            <div class="img-div">
                                <img src="assets/img/course-img-1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="img-div">
                                <img src="assets/img/course-img-2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 content-section">
                        <h2 class="main-head">Learn today, Lead tomorrow</h2>
                        <div class="d-flex flex-column gap-2">
                            <p class="main-para">Whether you're aiming to enhance your confidence as a buyer, deepen your expertise as a diamond grader, design exquisite jewelry, excel in sales, or become a certified Graduate Gemologist, IGI's global network of schools provides unparalleled educational opportunities. Our comprehensive curriculum covers a wide range of topics, including rough diamond grading, advanced gemstone analysis, pearl evaluations, modern treatments, and cutting-edge computer-assisted jewelry design.</p>
                            <p class="main-para">At IGI’s esteemed School of Gemology, you'll receive world-class training from industry experts, gaining hands-on experience with the latest techniques and technologies. Our programs are designed to cater to both newcomers and seasoned professionals, helping you build a successful career in the gemological and jewelry industries.</p>
                            <p class="main-para">Enroll in IGI's dynamic School of Gemology today and embark on a transformative educational journey that will equip you with the knowledge and skills to thrive in this vibrant field.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="course-form-section mt-lg-5 mt-md-4 mt-3">
                <div class="form-container">
                    <h2 class="main-head text-center">Enquire Now For More course Details</h2>
                    <form action="">
                        <div class="row mt-lg-5 mt-md-4 mt-3">
                            <div class="col-lg-4 col-md-6 col-12 mb-3">
                                <div class="input-div">
                                    <label for="">First Name<span>*</span></label>
                                    <input type="text" placeholder="Enter First Name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-3">
                                <div class="input-div">
                                    <label for="">Last Name<span>*</span></label>
                                    <input type="text" placeholder="Enter Last Name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-3">
                                <div class="input-div">
                                    <label for="">Email<span>*</span></label>
                                    <input type="mail" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-3">
                                <div class="input-div">
                                    <label for="">Phone<span>*</span></label>
                                    <input type="number" placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-3">
                                <div class="input-div">
                                    <label for="">Country of Residence<span>*</span></label>
                                    <select name="" id="" value="">
                                        <option value="select-country">- select country -</option>
                                        <option value="india">INDIA</option>
                                        <option value="saudi">SAUDI</option>
                                        <option value="qatar">QATAR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-3">
                                <div class="input-div">
                                    <label for="">Company/Business Name<span class="opt">(Optional)</span></label>
                                    <input type="text" placeholder="Enter Company Name">
                                </div>
                            </div>



                            <div class="col-12 mb-3">
                                <div class="input-div">
                                    <label for="">Preferred Course Location<span>*</span></label>
                                    <input type="text" placeholder="Enter Your Preferred Location">
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="input-div">
                                    <label for="">Message<span>*</span></label>
                                    <textarea name="" id="" rows="7" placeholder="Your Message Here..."></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="main-btn w-100">Submit</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- COURSE SECTION END -->



    <!-- CTA SECTION -->
    <?php include('inc/cta-section.php'); ?>
    <!-- CTA SECTION END-->


    <!-- FOOTER SECTION -->
    <?php include('inc/footer.php'); ?>
    <!-- FOOTER SECTION END-->




    <!-- JQUERY SCRIPT CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- BOOTSTRAP SCRIPT CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>