<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>HNAG</title>

    <!-- Favicon -->
    <link rel="icon" href="public/home/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="public/home/style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="public/home/img/core-img/1.png" alt="" >
            <div class="foode-preloader">
                <span></span>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Search Form -->
                            <div class="search-form">
                                <form action="#" method="get">
                                    <input type="search" name="search" class="form-control" placeholder="Search and hit enter...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>

                            <!-- Social Button -->
                            <div class="top-social-info" >


                                <!-- <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a> -->
                                <a class="btn btn-xs btn-round btn-primary" href="?mod=auth&act=login" style="color: #fff"><i class="fas fa-sign-in-alt" style="color: #fff"></i>Đăng nhập</a>

                                
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Area -->
        <div class="logo-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Nav brand -->
                        <a href="?mod=home&act=index" class="nav-brand"><img src="public/home/img/core-img/1.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="foode-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar" id="foodeNav">

                        <!-- Nav brand -->
                        <a href="?mod=home&act=index" class="nav-brand"><img src="public/home/img/core-img/1.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="?mod=home&act=index">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="?mod=home&act=index">Home</a></li>
                                            <li><a href="archive-blog.html">Archive Blog</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="?mod=home&act=about_us">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="typography.html">Typography</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Catagories</a>
                                        <div class="megamenu">
                                             <ul class="single-mega cn-col-4"></ul>
                                            <ul class="single-mega cn-col-4">
                                                <?php foreach ($categories as $key => $category) {
                                                # code...
                                            
                                ?>
                                            
                                                <li><a href="?mod=home&act=get_cate&slug=<?= $category['slug']?>"><?= $category['name']?></a></li>
                                                
                                           
                                             <?php } ?>
                                              </ul>
                                               <ul class="single-mega cn-col-4"></ul>
                                                <ul class="single-mega cn-col-4"></ul>
                                           
                                        </div>
                                    </li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="?mod=home&act=about_us">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="public/home/img/core-img/breadcrumb-line.png" alt="">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

     <div class="about-us-area section-padding-0-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="section-heading">
                        <h2>About Us</h2>
                        <p>The food we eat together </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="about-content">
                        
                        <p>Feb 12th, 2019.
                            <hr>
Actually, everything was gone, but I tried my best to remember about these memories between him and me. To let’s start, I think that I should write about the first day when I have a dinner with him, or maybe I just simply want to write about it. My English skills are not really good but I think write by English is better, it won’t make everything become too romantically. And it is also the day when my first love story begins. <br>
Great, the previous day, he told me that he would come to Hanoi earlier to see me after having a Tet holiday in Haiphong. I didn’t think that it’s the truth, but amazing, he really shows up today.  He comes to my house about 6 o’clock and asks me what food I want to eat. The first thing appears in my head is grilled chicken, so I shows him a place to find it: TAK hotpot and BBQ at An Trach street. And here is our first dinner
</p>
                <img src="public/home/img/blog-img/23.jpg" alt="" height ="500" width ="300">
                        <!-- <blockquote>
                            <h5>“That’s not to say you’ll have the exact same thing if you stop by: the restaurant’s menus change constantly, based on seasonal ingredients.”</h5>
                        </blockquote> -->
                        <p>I feel it is very delicious because the taste of honey, salt and chili. But unfortunately, he doesn’t like it much, however I don’t care about this much =)))))) <br>
Then, we go to the West Lake to eat ice cream. In the cold weather, eating ice cream is never the bad choice. To finishing a first dating day, we go to a coffee shop to easily talk about each other, some stories from the day we learned in Hola. That is the end of our first day. <br>

Mar 10th, 2019.
</p>
    <p>
        After some days talking and meeting in reality, we have a big meal on this day. He picks me up and drive me to a small restaurant under a bridge, where has the train passing day by day. Sadly, I cannot remember exactly this address anymore. In here, we have a BBQ party and I think that it is a best meal ever for both me and him. The beef is tough enough and vegetable is fresh. Its sauce is also special and suitable with all food in our set.
    </p>500
    <img src="public/home/img/blog-img/29.jpg" alt="" height ="500" width ="300">
    <p>What will be will be, after finishing this meal, me and him walk around Hoan Kiem Lake and it is also the time we become each other’s lover. I think that it is the most beautiful memories in my life and I will never forget this day, this dinner and the person who goes with me at that time. <br>

May 18th, 2019.<br>
Oh my god, he tells me that his sister is coming to Hanoi and she wants to invite me to eating a dinner at Isushi restaurant. I am really panic but using all my brave, I come to there to meet his sister.
</p>

<img src="public/home/img/blog-img/28.jpg" alt="" height ="500" width ="300">
<p>It is our dinner, it’s really fresh, nutritious and tasty. There are many types of fish and other sea food. Beside, we still have beef, pork and vegetable to easily to eat. It costs about 1 million for this meal.<br>
Jul 20th, 2019. <br>
Today is his birthday. I give him a pair of shoe and take him to a hotpot restaurant at Chua Lang street</p>

<img src="public/home/img/blog-img/27.jpg" alt="" height ="500" width ="300">
<p>All things are not perfect but I still feel comfortable about this meal. The price is not too high but the quality of food is not bad. We really eat full mouth and difficultly to move =)))). <br>
Aug 12th, 2019. <br>
Cup of tea is a store with a lot of different drinks, from tea to juice. This is a familiar store of us, when we want to choose a place to study English. Today is also the day I have to “say goodbye” to him about 15 days to go travel and do some my personal works. Although, the taste of tea in here is always good,not too sweet but also soft and clearly fruit flavor, I am still sad because I won’t see him for a long time.  </p>
<img src="public/home/img/blog-img/26.jpg" alt="" height ="500" width ="300">
<p>Sept 13th, 2019. <br>
Finally I come back and I set this day to go out with him. We have a dinner at 28 Nguyen Sieu street, it is a BBQ ribs and “long lon ran”.
</p>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img src="public/home/img/blog-img/24.jpg" alt="">
                            </div>
                            <div class="col-12 col-md-6">
                                <img src="public/home/img/blog-img/25.jpg" alt="">
                            </div>
                        </div>
                        <p>It is also one of the best meals since the day we felt in love. “Long” and ribs is hot but not dry, so we can eat them much. “Long” and “Mam tom” is very fit when it them together. If we have time, absolutely we will try it again with a BBQ meal under a bridge since Mar 10th.</p>
                        <!-- <p>Vestibulum non tristique metus. Morbi tempus nibh sed quam fringilla fringilla a a neque. In aliquet ex vitae eros convallis dictum. Suspendisse vulputate mauris id tincidunt rhoncus. Vestibulum sit amet nibh nisi.</p>
                        <ul>
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Quisque bibendum justo aliquet, aliquam mauris condimentum.</li>
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Sed malesuada neque tempus, euismod magna ut.</li>
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Vivamus lacinia nibh ac lorem mattis.</li>
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Phasellus malesuada dolor eget velit cursus.</li>
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Donec finibus ipsum a turpis volutpat, et tempor enim varius.</li>
                            <li><i class="fa fa-circle" aria-hidden="true"></i> Maecenas laoreet nunc sed odio placerat.</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class="signature">
                            <img class="mb-0" src="img/core-img/signa.png" alt="">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>



     <div class="follow-us-instagram">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Follow Us On Instagram</h2>
                        <span>@foodeblog</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="instagram-slides owl-carousel">
                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="public/home/img/blog-img/insta1.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>

                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="public/home/img/blog-img/insta2.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>

                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="public/home/img/blog-img/insta3.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>

                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="public/home/img/blog-img/insta4.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>

                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="public/home/img/blog-img/insta5.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>

                        <!-- Single Instagram Slide -->
                        <div class="single-instagram-slide">
                            <img src="public/home/img/blog-img/insta6.jpg" alt="">
                            <a href="#"><i class="fa fa-instagram"></i>Follow Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Instagram Area End ##### -->

    <!-- ##### Footer Area Start ##### -->

    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Curve Line -->
                    <img class="footer-curve" src="img/core-img/foo-curve.png" alt="">
                    <!-- Footer Social Info -->
                    <div class="footer-social-info d-flex align-items-center justify-content-between">
                        <a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                        <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                        <a href="#"><i class="fa fa-google-plus"></i><span>Google +</span></a>
                        <a href="#"><i class="fa fa-linkedin"></i><span>linkedin</span></a>
                        <a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                        <a href="#"><i class="fa fa-vimeo"></i><span>Vimeo</span></a>
                        <a href="#"><i class="fa fa-youtube"></i><span>Youtube</span></a>
                    </div>
                    <!-- Footer Curve Line -->
                    <img class="footer-curve" src="img/core-img/foo-curve.png" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="copywrite-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="public/home/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="public/home/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="public/home/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="public/home/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="public/home/js/active.js"></script>
</body>

</html>