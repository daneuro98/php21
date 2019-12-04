
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
                                <a class="btn btn-xs btn-round btn-primary" href="?mod=post&act=add" style="color: #fff"><i class="fas fa-sign-in-alt" style="color: #fff"></i>Đăng bài</a>

                                
            
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
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="archive-blog.html">Archive Blog</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                            <li><a href="about-us.html">About</a></li>
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
                                    <li><a href="about-us.html">About</a></li>
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

    <div class="container">
        
        <?php
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

        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $key => $post) {
                    ?>
                    <hr>
                    <tr>
                        <td><?=$key+1?></td>
                        <td><?=$post['title']?></td>
                        <td><?=$post['description']?></td>
                        <td>
                            <a href="?mod=post&act=detail&id=<?=$post['id']?>" class="btn btn-info">Detail</a>
                            <a href="?mod=post&act=edit&id=<?=$post['id']?>" class="btn btn-warning">Edit</a>
                            <a href="?mod=post&act=delete&id=<?=$post['id']?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>





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