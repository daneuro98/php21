<!-- <?php 

            // echo "<pre>";   
            //     print_r($categories);
            // echo "</pre>";
            // die();
 ?> -->
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
            <img src="public/home/img/core-img/1.png" alt="">
            <div class="foode-preloader">
                <span></span>
            </div>
        </div>
    </div><?php
    if (isset($_COOKIE['msg'])) {
            ?>
            <div class="alert alert-success">
                <strong>Congratulations!</strong> <?=$_COOKIE['msg']?>
            </div>
        <?php } ?>
        <?php
        if (isset($_COOKIE['error'])) {
            ?>
            <div class="alert alert-danger">
                <strong>Opp!</strong> <?=$_COOKIE['error']?>
            </div>
        <?php } ?>

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
                                <a class="btn btn-xs btn-round btn-danger" href="?mod=post&act=add" style="color: #fff"><i class="fas fa-sign-in-alt" style="color: #fff"></i>Đăng bài</a>
            
                  <span class="dropdown-toggle no-caret" data-toggle="dropdown">
                                                            <img class="avatar avatar-xs" width="35" height="35" src="public/home/img/blog-img<?= $users['avatar'] ?>" id="avatar-header">
                                                      </span>
                  <div class="dropdown-menu dropdown-menu-right">
            
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="?mod=user&act=detail"><i class="fas fa-id-card-alt"></i>&nbsp&nbspTrang cá nhân</a>
            <!-- <hr> -->
            <a class="dropdown-item" href="?mod=admin&act=logout" ><i class="fas fa-power-off" ></i>&nbsp&nbspĐăng xuất</a>
            <!-- <div class="dropdown-divider"></div>
            <a href="aaaaaaaa">eeeeeeeeeeee</a> -->
            
            
          </div>
              

                                
            
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
                        <a href="?mod=admin&act=index" class="nav-brand"><img src="public/home/img/core-img/1.png" alt=""></a>
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
                        <a href="index.html" class="nav-brand"><img src="public/home/img/core-img/1.png" alt=""></a>

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
                                            
                                                <li><a href="?mod=admin&act=get_cate&slug=<?= $category['slug']?>"><?= $category['name']?></a></li>
                                                
                                           
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
    
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">
            
            <?php foreach ($posts as $post) {
                                ?>

            <!-- Single Hero Post -->
            <div class="single-hero-post" href="?mod=post&act=list">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(public/home/img/blog-img<?= $post['thumbnail']?>);" href="?mod=post&act=list" ></div>
                <!-- Post Content --> 
                <div class="hero-slides-content">
                
                    <tr>
                                                
                    <a href="index.php?mod=admin&act=detail&id=<?=$post['id']?>" class="post-title">
                        <h4 ><td href="?mod=admin&act=detail"><?=$post['title'] ?></td></h4>
                    </a></tr>
                    
                </div>
            </div>

            



                <?php } ?>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Featured Post Area -->
                <div class="col-12">
                    <div class="featured-post-area">
                        <div id="featured-post-slides" class="carousel slide d-flex flex-wrap" data-ride="carousel">
                            

                            <div class="carousel-inner"><?php foreach ($posts as $post) {
                                ?>

                                <div class="carousel-item active bg-img" style="background-image: url(public/home/img/blog-img<?= $post['thumbnail'] ?>)">
                                    <!-- Featured Post Content -->
                                    <div class="featured-post-content">
                                        <p>MAY 8, 2018 / foody</p>
                                        <a href="?mod=admin&act=detail&id=<?=$post['id']?>" class="post-title">
                                            <h2><td><?=$post['title'] ?></td></h2>
                                        </a>
                                    </div>
                                </div>
                                <div class="carousel-item active bg-img" style="background-image: url(public/home/img/blog-img<?= $post['thumbnail'] ?>)">
                                    <!-- Featured Post Content -->
                                    <div class="featured-post-content">
                                        <p>MAY 8, 2018 / foody</p>
                                        <a href="#" class="post-title">
                                            <h2><td><?=$post['title'] ?></td></h2>
                                        </a>
                                    </div>
                                </div>

                                
                                <?php } ?>
                            </div>

                                                             
                            <ol class="carousel-indicators">  
                                <li data-target="#featured-post-slides" data-slide-to="0" class="active">
                                    <h2>01</h2>
                                    <a href="#" class="post-title">
                                        <h5><td><?=$post['title'] ?></td></h5>
                                    </a>
                                </li>
                                <li data-target="#featured-post-slides" data-slide-to="1">
                                    <h2>02</h2>
                                    <a href="#" class="post-title">
                                        <h5><?=$post['title'] ?></h5>
                                    </a>
                                </li>
                                <li data-target="#featured-post-slides" data-slide-to="2">
                                    <h2>03</h2>
                                    <a href="#" class="post-title">
                                        <h5>Quick Vegan Enchiladas with Sweet Potato Sauce</h5>
                                    </a>
                                </li>
                                <li data-target="#featured-post-slides" data-slide-to="3">
                                    <h2>04</h2>
                                    <a href="#" class="post-title">
                                        <h5>Instant Pot Mushroom Stroganoff with Vodka</h5>
                                    </a>
                                </li>
                                <li data-target="#featured-post-slides" data-slide-to="4">
                                    <h2>05</h2>
                                    <a href="#" class="post-title">
                                        <h5>The Most Popular Recipe Last Month</h5>
                                    </a>
                                </li>
                            </ol>
                             

                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
                                 <?php foreach ($posts as $post) {
                                            ?>


                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex flex-wrap mt-50">
                                                       <!-- Thumbnail -->
                            <div class="post-thumbnail mb-50">
                                <a href="#">
                                    <img src="public/home/img/blog-img<?= $post['thumbnail'] ?>" alt=""></a>
                            </div>
                            <!-- Content -->
                            <div class="post-content mb-50">
                                <p class="post-date">MAY 8, 2018 / foody</p>
                                <a href="index.php?mod=admin&act=detail&id=<?=$post['id']?>"class="post-title">
                                    <h4><?= $post['title']?></h4>
                                </a>
                                <div class="post-meta">
                                    <a href="#"><span>by</span> Sarah Jenks</a>
                                    <a href="#"><i class="fa fa-eye"></i> 192</a>
                                    <a href="#"><i class="fa fa-comments"></i> 08</a>
                                </div>
                                <p class="post-excerpt"><?= $post['description']?></p>
                                <a href="#" class="read-more-btn">Continue Reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <!-- Post Curve Line -->
                            <img class="post-curve-line" src="public/home/img/core-img/post-curve-line.png" alt="">
                        </div>

                        <!-- Single Blog Post -->
                        
                         <?php } ?>

                    </div>

                    <!-- Pager -->
                    <ol class="foode-pager mt-50">
                        <li><a href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Newer</a></li>
                        <li><a href="#">Older <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                    </ol>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="post-sidebar-area">

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>About Blog</h6>
                            </div>
                            <!-- Thumbnail -->
                            <div class="about-thumbnail">
                                <img src="https://scontent.fhan2-3.fna.fbcdn.net/v/t1.0-9/s960x960/45545836_1133580506806721_7310844879725133824_o.jpg?_nc_cat=107&_nc_ohc=N_FDOaImQTsAQl9rQkUsh1wPQjc_mk6wo308sYjNjFFoDqLZFT8pZXl8w&_nc_ht=scontent.fhan2-3.fna&oh=2fdb346ef8938fb185232d0043189cd7&oe=5E829EE6" alt="">
                            </div>
                            <!-- Content -->
                            <div class="widget-content text-center">
                                <img src="img/core-img/signature.png" alt="">
                                <hr>
                                <p>Vì ta luôn có một cái bụng đói ♥</p>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>QUẢN LÝ BÀI VIẾT</h6>
                            </div>
                            <!-- Widget Social Info -->
                            <div class="widget-social-info text-center">
                                

                        <a class="btn btn-success btn-block btn-hover" href="?mod=post&act=list_ms">Bài viết đã xét duyệt</a><br>
                        <hr>

                        <a class="btn btn-warning btn-block btn-hover" href="/posts?type_manager=0">Bài viết chờ xét duyệt</a>
                        <hr>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Latest Posts</h6>
                            </div>

                            <!-- Single Latest Posts -->
                            <?php foreach ($posts as $post) {
                                            ?>

                            <div class="single-latest-post d-flex">
                                <div class="post-thumb">
                                    <img src="public/home/img/blog-img<?= $post['thumbnail'] ?>" alt="">
                                </div>
                                <div class="post-content">
                                    <a href="index.php?mod=admin&act=detail&id=<?=$post['id']?>" class="post-title">
                                        <h6><?= $post['title']?></h6>
                                    </a>
                                    <a href="#" class="post-author"><span>by</span> Erin Alderson</a>
                                </div>
                            </div>
                             <?php } ?>

                            

                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Adds -->
                            <a href="#"><img src="public/home/img/blog-img/add.png" alt=""></a>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>Newsletter</h6>
                            </div>
                            <!-- Content -->
                            <div class="newsletter-content">
                                <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                                <form action="#" method="post">
                                    <input type="email" name="email" class="form-control" placeholder="Your email">
                                    <button><i class="fa fa-send"></i></button>
                                </form>
                            </div>
                        </div>

                        <!-- ##### Single Widget Area ##### -->
                        <div class="single-widget-area">
                            <!-- Title -->
                            <div class="widget-title">
                                <h6>popular tags</h6>
                            </div>
                            <!-- Tags -->
                            <ol class="popular-tags d-flex flex-wrap">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Unique</a></li>
                                <li><a href="#">Template</a></li>
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">travel</a></li>
                                <li><a href="#">lifestyle</a></li>
                                <li><a href="#">Wordpress Template</a></li>
                                <li><a href="#">food</a></li>
                                <li><a href="#">Idea</a></li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->

    <!-- ##### Instagram Area Start ##### -->
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
                        <a href="https://www.facebook.com/?stype=lo&jlou=AffjrCsSAiehqZ-5Axl6U5lo3s9oMhcD5XA81jpOG2c-3OYvSzSSmbudygKI1Rr-KMjqdgGlLyhBMICEjx-IN28DjigS-cpbEgwM12bjmNo6sQ&smuh=55556&lh=Ac_xAcxLyWL9d651"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                        <a href="https://twitter.com/?lang=vi"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                        <a href="https://mail.google.com/mail/u/0/"><i class="fa fa-google-plus"></i><span>Google +</span></a>
                        <a href="#"><i class="fa fa-linkedin"></i><span>linkedin</span></a>
                        <a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                        <a href="#"><i class="fa fa-vimeo"></i><span>Vimeo</span></a>
                        <a href="https://www.youtube.com"><i class="fa fa-youtube"></i><span>Youtube</span></a>
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