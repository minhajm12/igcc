<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGCC | Verify Report</title>

    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- COMMON STYLE -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- VERIFY REPORT PAGE STYLE -->
    <link rel="stylesheet" href="assets/css/verify-report.css">

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
                <img src="assets/img/inner-banner/reports-banner.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- INNER BANNER END -->


    <!-- VERIFY REPORT SECTION -->
    <section id="verify_report_main_section">
        <div class="main-padding">
            <div class="verify-main-div"  data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                <div class="inner-top-section">
                    <!-- <h6 class="top-head text-lg-center text-start">Reports</h6>VERIFY REPORT -->
                    <h2 class="main-head text-md-center text-start mt-md-0 mt-1">Verify Your Report</h2>
                </div>
                <div class="bottom-form-section">
                    <form action="">
                        <div class="input-div">
                            <label for="unique-id">Enter Your Unique ID:</label>
                            <input type="number" placeholder="Enter ID here">
                        </div>
                        <button class="main-btn">Verify Report</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- VERIFY REPORT SECTION END -->



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