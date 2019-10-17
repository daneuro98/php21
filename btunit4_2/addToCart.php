<?php

session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
$products = array(

         'SP01'=> array('SP01','iphone6',9000000,20,'https://www.didongviet.vn/pub/media/catalog/product//i/p/iphone-6-plus-16gb-quoc-te-like-new-didongviet-1.jpg'),
          'SP02'=> array('SP02','iphone7',10000000,20,'https://www.didongviet.vn/pub/media/catalog/product//i/p/iphone-6-plus-16gb-quoc-te-like-new-didongviet-1.jpg'),
           'SP03'=> array('SP03','iphone7+',9000000,20,'https://www.didongviet.vn/pub/media/catalog/product//i/p/iphone-6-plus-16gb-quoc-te-like-new-didongviet-1.jpg'),
          'SP04'=> array('SP04','iphone8',9000000,20,'https://www.didongviet.vn/pub/media/catalog/product//i/p/iphone-6-plus-16gb-quoc-te-like-new-didongviet-1.jpg'),
         'SP05'=> array('SP05','iphone8+',9000000,100,'https://www.didongviet.vn/pub/media/catalog/product//i/p/iphone-6-plus-16gb-quoc-te-like-new-didongviet-1.jpg'),
  );

 
   if (isset($_GET['msp'])) {
     $msp =$_GET['msp'];

    
     if (isset($_SESSION['products'][$msp])) {
       $_SESSION['products'][$msp][3]++;
     }else{
         $products[$msp][3]=1; 
          $_SESSION['products'][$msp]=$products[$msp];
          $_SESSION['products'][$msp]['time']=date('d/m/y h:s:i');
     }
      echo "<pre>";
        print_r($_SESSION);
     echo "</pre>";


   }
   header('Location: cart_detail.php')
?>