<?php
include('controller/c_web.php');
$c_web= new C_web();
$noi_dung=$c_web->index();
$hot=$noi_dung['hot'];
$menu=$noi_dung['menu'];
$nhieunhat=$noi_dung['nhieunhat'];
$yeuthich=$noi_dung['yeuthich'];
$inra=$noi_dung['inra'];
$theloaiList=$noi_dung['theloaiList'];
$theloai=$c_web->loaitin();
$danhmuctin=$theloai['danhmuctin'];
$list=$theloai['list'];
$games=$c_web->chitiet();
$chitiet=$games['chitiet'];
$relatednews=$games['relatednews'];

$game=$c_web->timkiem();
$game=$game['game'];
$user = $c_web->dangnhap();
if (isset($_POST['dangnhap'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $user=$c_web->dangnhap($username,$password);
}


if (isset($_POST['binhluan'])) {
    if (isset($_SESSION['id'])) {
        $id=$_SESSION['id'];
        $id_games=$_SESSION['id_games'];
        $noidung=$_SESSION['noidung'];
        $comment=$c_web->themBinhluan();
    }else{
        $_SESSION['chua_dang_nhap']="vui long dang nhap de binh luan";
    }
    
}
//$thanh_phantrang=$theloai['thanh_phantrang'];
//print_r($game);
?>



<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="wowslider/wowslider.css">
    <link rel="stylesheet prefetch" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" />
    <script type="text/javascript" src="wowslider/script.js"></script>
    <script type="text/javascript" src="wowslider/jquery.js"></script>
    <link rel="stylesheet" href="font-awesome.css">
         
    <title><?php if(isset($title)){ echo $title; }?></title>


</head>

<body>
 <header class="header-top">
    <section class="container">
        <section class="logo">
            <a href="index.php"><img src="images/logo.jpg" alt="Logo"></a>
        </section>
        <form action="timkiem.php" class="searchform cf" method="post">

            <input class="form-control" type="text" name="search" placeholder="Bạn muốn chơi game gì?">
            <button onclick="search();" class="btn btn-default" ><span class="glyphicon glyphicon-search"">Search</button></span>
        </form>
          <?php
           if(isset($_SESSION['username']) && $_SESSION['username']){
            ?>
              <li type="submit" id="button-login"><a href="login.php"><?=$_SESSION['username']?></a></li> 
        <li type="submit" id="button-register"><a href="dangky/logout.php">Đăng xuất</a></li>
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
        </ul>

               </section>
            </div>

    <!-- End Menu -->