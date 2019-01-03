<?php

ob_start();
include('controller/c_web.php');
$c_web= new C_web();
$noi_dung=$c_web->index();
$hot=$noi_dung['hot'];
$hot1=$noi_dung['hot1'];
$menu=$noi_dung['menu'];
$quangcao=$noi_dung['quangcao'];
$nhieunhat=$noi_dung['nhieunhat'];
$yeuthich=$noi_dung['yeuthich'];
$inra=$noi_dung['inra'];
$theloaiList=$noi_dung['theloaiList'];
$theloai=$c_web->loaitin();
$danhmuctin=$theloai['danhmuctin'];
$list=$theloai['list'];
$thanh_phantrang=$theloai['thanh_phantrang'];
$games=$c_web->chitiet();
$chitiet=$games['chitiet'];
$relatednews=$games['relatednews'];

$game=$c_web->timkiem();
$game=$game['game'];






//$thanh_phantrang=$theloai['thanh_phantrang'];
//print_r($quangcao);
?>
<?php 
ob_start();
session_start(); ?>


<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="wowslider/wowslider.css">
    <link rel="stylesheet prefetch" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" />
    <script type="text/javascript" src="wowslider/script.js"></script>
    <script type="text/javascript" src="wowslider/jquery.js"></script>
    <link rel="stylesheet" href="font-awesome.css">
         
    <title><?php if(isset($title)){ echo $title; }?></title>




</head>




<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131551517-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131551517-1');
</script>


<body>
 <header class="header-top">
    <section class="container">
        <section class="logo">
            <a href="index.php"><img src="images/logo.jpg" alt="Logo"></a>
        </section>

      
        <form action="timkiem.php" class="searchform" >
                <input id="txtSearch" type="text" name = "tukhoa" placeholder="Bạn muốn chơi game gì?">
                <button type="submit"  id="btnSearch">Search</button>
           </form>

   



          <?php
           if(isset($_SESSION['username'])){
            ?>
              <li type="submit" id="button-login"><a href="login.php">Xin chào <?=$_SESSION['username']?></a></li> 
        <li type="submit" id="button-register"><a href="logout.php">Đăng xuất</a></li>
        <?php
           }
           else{
            ?>
               <li type="submit" id="button-login"><a href="login.php">Đăng nhập</a></li>
        <li type="submit" id="button-register"><a href="register.php">Đăng ký</a></li>

            <?php
           }
        ?>
    </section>
    <a href="admin">ADMIN</a>
</header>
<!-- End Header -->


<!-- Start Menu -->
<div class="menu" id="menu">
    <section class="container">
        <ul>
            <li><a href="index.php">Trang chủ</a></li>

        <?php
foreach ($menu as $mn) {

    ?>

    <li><a href="theloaigame.php?id_loai=<?=$mn->id_theloai?>"><?=$mn->tentheloai?></a></li>

    <?php
}
        ?>


       <?php
           if(isset($_SESSION['username'])){
            ?>  
        <li><div class="dropdown">
                        <button class="dropbtn">Thể loại khác</button>

                          <div class="dropdown-content">
                          <a href="theloaigame.php?id_loai=9">Trí tuệ</a>
                          <a href="theloaigame.php?id_loai=10">Kinh dị</a>
                          <a href="theloaigame.php?id_loai=11">Âm nhạc</a>
                          <a href="theloaigame.php?id_loai=12">Văn phòng</a>
                          <a href="theloaigame.php?id_loai=13">Trẻ em</a>
                          
                        </div>
                    </div>
        
                </li>

                          <?php
           }
           else{
            ?>
<li><div class="dropdown" id="dropdown1">
            <button class="dropbtn">Thể loại khác</button>
</div></li>
              <?php
           }
        ?>
        </ul>

               </section>
            </div>

    <!-- End Menu -->













    <style type="text/css">
        .dropbtn {
   
    color: white;
    padding: 6px;
    font-size: 16px;
    border: none;
    height: 45px;
    font-family:Arial, Helvetica, sans-serif;
    background-color: #57bdf4;
    text-decoration: none;
  }
  
  /* The container <div> - needed to position the dropdown content */
  .dropdown {
    position: relative;
    display: inline-block;

  }
  
  /* Dropdown Content (Hidden by Default) */
  

.dropdown-content {

    display: none;
    position: absolute;
    background-color: #76b4d7;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    text-decoration: none;

}
  
  /* Links inside the dropdown */
  .dropdown-content a {
    color: rgba(0,0,0,0.2);
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
 a {

    text-decoration: none;

}
  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {background-color: rgba(0,0,0,0.2);
  text-decoration: none;}
  
  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {display: block;
  text-decoration: none;}
  
  /* Change the background color of the dropdown button when the dropdown content is shown */
  .dropdown:hover .dropbtn {background-color: #3e8e41;
  text-decoration: none;}

    </style>