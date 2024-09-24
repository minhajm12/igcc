<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGCC | CAREER</title>


    <link rel="icon" href="assets/img/svg/igcc-favicon.svg" type="image/x-icon">

    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- COMMON STYLE -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CAREER PAGE STYLE -->
    <link rel="stylesheet" href="assets/css/career.css">

    <!-- CTA SECTION STYLE -->
    <link rel="stylesheet" href="assets/css/cta-section.css">

</head>

<body>


    <!-- HEADER SECTION -->
    <?php include('inc/header.php'); ?>
    <!-- HEADER SECTION END-->



    <!-- INNER BANNER -->
    <div id="inner_banner_main" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="0">
        <div class="main-padding">
            <div class="banner-img-div">
                <img src="assets/img/inner-banner/career-banner.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- INNER BANNER END -->


    <!-- CAREER SECTION -->
    <section id="careers_main_section">
        <div class="main-padding">
            <div class="inner-top-section">
                <h6 class="top-head text-lg-center text-center w-100" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="0">Careers</h6>
                <h2 class="main-head text-md-center text-center mt-md-0 mt-1" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">Grow With IGCC</h2>
            </div>
            <div class="careers-grid-section">
                <div class="career-item" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="0">
                    <h6>Diamond Tester</h6>
                    <p class="main-para">Diamonds have been prized for centuries for their beauty and durability. Explore their fascinating history</p>
                    <div class="details">
                        <p>Years Of Experience: <span>2 Years</span></p>
                        <p>No.of Openings: <span>4 Nos</span></p>
                        <p>Job Type: <span>Full Time</span></p>
                    </div>
                    <div class="apply-div d-flex justify-content-center">
                        <button type="button" class="main-btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#careermodal" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="0">Apply Now</button>
                    </div>
                </div>
                <div class="career-item" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                    <h6>Diamond Tester</h6>
                    <p class="main-para">Diamonds have been prized for centuries for their beauty and durability. Explore their fascinating history</p>
                    <div class="details">
                        <p>Years Of Experience: <span>2 Years</span></p>
                        <p>No.of Openings: <span>4 Nos</span></p>
                        <p>Job Type: <span>Full Time</span></p>
                    </div>
                    <div class="apply-div d-flex justify-content-center">
                        <button type="button" class="main-btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#careermodal" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="0">Apply Now</button>
                    </div>
                </div>
                <div class="career-item" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                    <h6>Diamond Tester</h6>
                    <p class="main-para">Diamonds have been prized for centuries for their beauty and durability. Explore their fascinating history</p>
                    <div class="details">
                        <p>Years Of Experience: <span>2 Years</span></p>
                        <p>No.of Openings: <span>4 Nos</span></p>
                        <p>Job Type: <span>Full Time</span></p>
                    </div>
                    <div class="apply-div d-flex justify-content-center">
                        <button type="button" class="main-btn" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#careermodal" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="0">Apply Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CAREER SECTION END -->


    <!-- CAREER MODAL -->
    <div id="career_modal">
        <div class="modal fade" id="careermodal" tabindex="-1" aria-labelledby="careermodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content position-relative">
                    <h2 class="text-center">Apply For <span class="job-name">Diamond Tester</span></h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-form-section mt-lg-4 mt-md-4 mt-3">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6 col-12 mb-3">
                                    <div class="input-div">
                                        <label for="">First Name</label>
                                        <input type="text" placeholder="Enter First Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <div class="input-div">
                                        <label for="">Name</label>
                                        <input type="text" placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 mb-3">

                                    <div class="input-div">
                                        <label for="">Number</label>
                                        <input type="number" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 mb-3">
                                    <div class="input-div">
                                        <label for="">Email</label>
                                        <input type="mail" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 mb-3">
                                    <div class="input-div">
                                        <label for="">Education Qualification</label>
                                        <input type="text" placeholder="Enter Qualification">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 mb-3">
                                    <div class="input-div">
                                        <label for="">Location</label>
                                        <input type="text" placeholder="Enter Your Locations">
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="upload">
                                        <label for="" class="upload-resume">Upload Resume</label>
                                        <input type="file" id="" name="" accept="application/pdf" style="border:none;z-index:2;opacity:0;cursor:pointer;">
                                    </div>
                                </div>
                                <!-- <div class="col-12 mb-3">
                                    <div class="input-div">
                                        <label for="">Location</label>
                                        <select name="" id="" value="">
                                            <option value="select-country">- select branch -</option>
                                            <option value="">Mumbai</option>
                                            <option value="">Calicut</option>
                                            <option value="">Thrissur</option>
                                        </select>
                                    </div>
                                </div> -->
                                <!-- <div class="col-12 mb-2">
                                <div class="input-div">
                                    <textarea name="" id="" rows="7" placeholder="Comments"></textarea>
                                </div>
                            </div> -->
                                <div class="col-12">
                                    <button class="main-btn w-100">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CAREER MODAL END -->



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