<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IGCC | FAQ</title>

    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- COMMON STYLE -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- FAQ PAGE STYLE -->
    <link rel="stylesheet" href="assets/css/faq.css">

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
                <img src="assets/img/inner-banner/reports-banner.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- INNER BANNER END -->


    <!-- FAQ SECTION -->
    <section id="faq_main_section">
        <div class="main-padding">
            <div class="inner-top-section">
                <h6 class="top-head text-lg-center text-start">FAQ</h6>
                <h2 class="main-head text-md-center text-start mt-md-0 mt-1">Frequently Asked Questions</h2>
            </div>
            <div class="faq-section">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ SECTION END -->



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