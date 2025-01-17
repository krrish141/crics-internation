<?php include("./header.php")?>
<!-- Add AOS Library for Animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- Keep Your Existing CSS -->
<style>
.page-title::before {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background: url(../images/background/breadcrumb-overlaygfdg.png) center / cover no-repeat;
}

.page-title {
    position: relative;
    z-index: 2;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    padding: 200px 0;
    min-height: 350px;
}

.page-title .title {
    position: relative;
    font-size: 50px;
    font-weight: 700;
    font-family: initial;
    color: #0a0a0a;
    letter-spacing: .4px;
    margin-bottom: 18px;
}

.flipped {
    transform: scaleX(-1);
}

.choose-block .content .text {
    color: #a3a3a3;
    font-size: 16px;
    text-align: justify;
    width: 98%;
    margin-bottom: 0;
}
</style>

<!-- Start Breadcrumb Section -->
<section class="page-title" data-aos="fade-up">
    <div class="bg bg-image" style="background-image: url(./assets/images/product/french-fries/banner1.jpg)"></div>
    <div class="container">
        <div class="title-outer">
            <h2 class="title">Freshness of the <br> Farms on Your Plate</h2>

        </div>
    </div>
</section>

<section class="page-title flipped" data-aos="fade-up">
    <div class="bg bg-image flipped" style="background-image: url(./assets/images/product/french-fries/banner2.jpg)">
        <div class="container">
            <div class="title-outer">
                <h2 class="title"></h2>

            </div>
        </div>
    </div>
</section>

<section class="page-title" data-aos="fade-up">
    <div class="bg bg-image" style="background-image: url(./assets/images/product/french-fries/banner3.jpg)">
        <div class="container">
            <div class="title-outer">
                <h2 class="title"></h2>

            </div>
        </div>
    </div>
</section>


<!-- Include AOS Script -->
<script>
// Initialize AOS (Animate on Scroll)
AOS.init({
    duration: 1000, // Animation duration in milliseconds
    easing: "ease-in-out", // Easing function
    once: true, // Whether animation should happen only once
});
</script>

<!-- End Breadcrumb Section -->




<!-- Start About Section -->
<section class="about-section style-2 space">
    <div class="bg bg-image" style="background-image: url(assets/images/product/french-fries/BgLight.jpg)"></div>
    <div class="about__shape">
        <div class="about__shape-1  d-none d-xxl-block wow fadeInRight"><img
                src="assets/images/about/about-right-shape.png" alt=""></div>
        <div class="about__shape-2  d-none d-xxl-block wow fadeInRight"><span class="icon icon-plane6 bounce-y"></span>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="image-column wow fadeInLeft col-lg-6">
                <img src="./assets/images/product/french-fries/french-fries-logo.jpeg" alt="" style="width: 100%;"><br>
                <img src="./assets/images/product/french-fries/french-fries.jpeg" alt="">
            </div>
            <div class="content-column col-lg-6 wow fadeInRight">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="sub-title text-dark">Crics International</span>
                        <h2>The <span class="color1">French Fries.</span></h2>
                        <div class="text" style="font-size: 18px; text-align:justify">French fries is the third-largest
                            producer of French fries in india. From
                            sowing only the highest quality potato seeds to harvesting a healthy crop and
                            manufacturing every packet with heaps of care. our only aim is to give the best quality
                            products to our customers.

                        </div>
                        <br>

                        <div class="text" style="font-size: 18px ; text-align:justify">
                            French fries was started with the aim of providing healthy and hassle-free food items that
                            cater to the demands of the modern world. At the core of French fries there lies an
                            unbeatable love for good food and an entrepreneurship mindset.

                        </div>


                    </div>
                    <hr>
                    <img src="./assets/images/product/french-fries/french.jpeg" alt="" width="100%" height="100%">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->


<!-- Start Projects Section -->
<section class="projects-section style-2 space-top sm-pb-80 vxs-pb-70 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="sec-title">
                    <span class="sub-title">The French Fries</span>
                    <h2>Product List</h2>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="sec-right" style="justify-content: end;">
                    <div class="text"></div>
                    <div class="owl-nav custom-nav"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="projects-carousel2 owl-carousel owl-theme default-dots">

                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="assets/images/product/french-fries/CrinklecutFrenchFrise2.jpg"
                                            alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <div class="title-box">
                                    <span class="cat">The French Fries</span>
                                    <h4 class="title">Crinkle Cut French Fries</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="assets/images/product/french-fries/FrenchFries2.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <div class="title-box">
                                    <span class="cat">The French Fries</span>
                                    <h4 class="title">French Fries</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="assets/images/product/french-fries/HerbChilliPatty2.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <div class="title-box">
                                    <span class="cat">The French Fries</span>
                                    <h4 class="title">Herb Chilli Party</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="assets/images/product/french-fries/AlooTikki2.jpg" alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <div class="title-box">
                                    <span class="cat">The French Fries</span>
                                    <h4 class="title">Aloo Tikki</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="assets/images/product/french-fries/Masalafrench fries2.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <div class="title-box">
                                    <span class="cat">The French Fries</span>
                                    <h4 class="title">Masala French Fries</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="assets/images/product/french-fries/VegBurgerPatty2.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <div class="title-box">
                                    <span class="cat">The French Fries</span>
                                    <h4 class="title">Veg Burger Patty</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="assets/images/product/french-fries/SpicyWedges2.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <div class="title-box">
                                    <span class="cat">The French Fries</span>
                                    <h4 class="title">Spicy Wedges</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="assets/images/product/french-fries/OvalHashBrown2.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <div class="title-box">
                                    <span class="cat">The French Fries</span>
                                    <h4 class="title">Oval Hash Brown</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="assets/images/product/french-fries/PotatoCheeseShotz2.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <div class="title-box">
                                    <span class="cat">The French Fries</span>
                                    <h4 class="title">Potato Cheese Shot</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="assets/images/product/french-fries/VeggieFinger2.jpg" alt=""></a>
                                </figure>
                            </div>
                            <div class="content-box">
                                <div class="title-box">
                                    <span class="cat">The French Fries</span>
                                    <h4 class="title">Veggie Finger</h4>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a href="#"><img
                                            src="assets/images/product/french-fries/SuperCrisp2.jpg" alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <div class="title-box">
                                    <span class="cat">The French Fries</span>
                                    <h4 class="title">Super Crisp</h4>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Projects Section -->


<!-- Start Marquee Section -->
<div class="marquee-section style-2">
    <div class="marquee">
        <ul class="marquee-group marquee_mode">
            <li class="text">*&nbsp;&nbsp;Crics International LLP</li>
            <li class="text active">*&nbsp;&nbsp;Beyond Boundries *</li>
            <li class="text active" style="color: yellow;">&nbsp;&nbsp;The French Fries</li>
        </ul>
    </div>
</div>
<!-- End Marquee Section -->

<!-- Start Achivement Section -->
<!-- ========================================== -->
<section class="achivement-section style-2 space-top sm-pb-80 pt-140  vxs-pb-70 mt-80" style="margin-top:150px">
    <div class="bg bg-image" style="background-image: url(./assets/images/product/french-fries/banner4.jpg)"></div>
    <div class="achivement-shape">
        <span class="icon icon-dots wow fadeInLeft"></span>
    </div>
    <div class="container">
        <div class="row">
            <div class="content-column col-lg-6 wow fadeInLeft">
                <div class="inner-column">
                    <div class="sec-title light">
                        <span class="sub-title">Cric International</span>
                        <h2 class="text-dark">The French Fries</h2>
                    </div>

                </div>
            </div>

        </div>
        <div class="row counter-section gy-30">
            <div class="achivement-block col-lg-6 col-md-6 col-sm-6 wow fadeInLeft">
                <div class="inner-box d-sm-flex align-items-sm-center">
                    <div class="icon-box">
                        <div class="icon"><img src="assets/images/achivement/1.png" alt=""></div>
                    </div>
                    <div class="content">
                        <h3 class="odometer-wrapper" style="font-size:35px">
                            <span class="suffix">Our Vission </span>
                        </h3>
                        <p class="title">Our goal is to lead the food production industry through innovation, meeting
                            evolving customer demands, ensuring food safety standards, and leveraging technology for a
                            world-class business model.</p>
                    </div>
                    <div class="top-right__shape"></div>
                </div>
            </div>
            <div class="achivement-block style-2 col-lg-6 col-md-6 col-sm-6 wow fadeInRight">
                <div class="inner-box bg-yellow d-sm-flex align-items-sm-center">
                    <div class="icon-box">
                        <div class="icon"><img src="assets/images/achivement/2.png" alt=""></div>
                    </div>
                    <div class="content">
                        <h3 class="odometer-wrapper">
                            <span class="suffix" style="font-size:35px">Our Mission</span>
                        </h3>
                        <p class="title">We aim to serve the community with humanity and sustainability, ensuring social
                            welfare, equality, and ethical practices. Our efforts prioritize the upliftment of growers,
                            stakeholders, and the nation with a strong sense of patriotism.</p>
                    </div>
                    <div class="top-right__shape"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========================================== -->
<!-- End Achivement Section -->



<!-- Start ChooseUs Section -->
<!-- ========================================== -->
<section class="choose-section space-top mt-100 mb-100">
    <div class="bg bg-image overlay" style="background-image: url(assets/images/product/french-fries/french.jpeg)">
    </div>
    <div class="choose__shape d-none d-xxl-block">
        <div class="icon icon-plane3 wow fadeInLeft"></div>
        <div class="img-right__shape wow fadeInRight">
            <img src="assets/images/choose/chooseus-right-thumb.png" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row gy-35">
            <div class="sec-title light two">
                <span class="sub-title">WHY CHOOSE US?</span>
                <h2>We’re the Best Leader of <br> Transportations</h2>
            </div>
            <div class="content-column col-lg-6 col-md-6">
                <div class="inner-column">

                    <div class="row">
                        <div class="choose-block mb-50 xs-mb-20 col-12">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <div class="icon mr-30"><img src="assets/images/product/french-fries/quality.png"
                                            alt=""></div>
                                </div>
                                <div class="content">
                                    <h4 class="title">Quality</h4>
                                    <p class="text">
                                        Quality is maintained at every level from seeds to the manufacturing of the
                                        final product.</p>
                                </div>
                            </div>
                        </div>

                        <div class="choose-block  mb-50 xs-mb-20 col-12">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <div class="icon  mr-30" style="background-color: red;"><img
                                            src="assets/images/product/french-fries/french-fries.png" alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title">Dedicated Potato production program</h4>
                                    <p class="text">
                                        800-900 farmers across Gujarat, MP, Punjab, Himachal, and UP grow potatoes for
                                        French fries.</p>
                                </div>
                            </div>
                        </div>

                        <div class="choose-block  mb-50 xs-mb-20 col-12">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <div class="icon mr-30" style="background-color: #62d146;"><img
                                            src="assets/images/product/french-fries/seeding.png" alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title">Seeds Multiplication Program</h4>
                                    <p class="text">
                                        The end product can be best only when the raw material is of the best quality.
                                        And we do not just ensure the quality of the potatoes being used.
                                        but also ensure that only good quality seeds are used for growing the potatoes.
                                        We harvest our own potatoes to maintain the same standards and around 45-60
                                        growers for the seed multiplication program are located in HP. Punjab & Haryana.
                                    </p>
                                </div>
                            </div>
                        </div>





                    </div>
                </div>
            </div>

            <div class="content-column col-lg-6 col-md-6">
                <div class="inner-column">

                    <div class="row">


                        <div class="choose-block  mb-50 xs-mb-20 col-12">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <div class="icon mr-30" style="background-color: #e47af7;"><img
                                            src="assets/images/product/french-fries/safe.png" alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title">Hygiene</h4>
                                    <p class="text">

                                        French fries follows all international quality standards, so maintaining hygiene
                                        at every level is of utmost importance to us.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="choose-block  mb-50 xs-mb-20 col-12">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <div class="icon bg-yellow mr-30"><img
                                            src="assets/images/product/french-fries/planet-earth.png" alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title">Sustainability</h4>
                                    <p class="text">
                                        We have a dedicated team to assist growers in agronomy with the use of
                                        scientific methods which are sustainable and help in keeping the soil healthy.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="choose-block  mb-50 xs-mb-20 col-12">
                            <img src="./assets/images/product/french-fries/french-fries-logo.jpeg" alt=""
                                style="border-radius:10px">
                        </div>



                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
<!-- ========================================== -->
<!-- End ChooseUs Section -->






<!-- Start Brands Section -->
<!-- ========================================== -->
<div class="brands-section">
    <div class="container">
        <div class="sponsors-outer">
            <ul class="brands-carousel owl-carousel owl-theme">
                <li class="brand-item">
                    <a href="#" class="image">
                        <img src="assets/images/product/french-fries/license/apeda.png" alt="">
                    </a>
                </li>
                <li class="brand-item">
                    <a href="#" class="image">
                        <img src="assets/images/product/french-fries/license/BRCGS.jpg" alt="">
                    </a>
                </li>
                <li class="brand-item">
                    <a href="#" class="image">
                        <img src="assets/images/product/french-fries/license/FDA-1.webp" alt="">
                    </a>
                </li>
                <li class="brand-item">
                    <a href="#" class="image">
                        <img src="assets/images/product/french-fries/license/haccp.png" alt="">
                    </a>
                </li>
                <li class="brand-item">
                    <a href="#" class="image">
                        <img src="assets/images/product/french-fries/license/fssai.png" alt="">
                    </a>
                </li>
                <li class="brand-item">
                    <a href="#" class="image">
                        <img src="assets/images/product/french-fries/license/halal.jpg" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(document).ready(function() {
    $(".brands-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
});
</script>
<!-- ========================================== -->
<!-- End Brands Section -->





<?php include("./footer.php")?>