<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="wowslider/wowslider.css">
    <script type="text/javascript" src="wowslider/jquery.js"></script>
    <title>Document</title>
</head>

<body>
    <!-- Start Header -->
    <header class="header-top">
        <section class="container">
            <section class="logo">
                <img src="images/logo.jpg" alt="Logo">
            </section>
            <form action="#" class="searchform cf" method="post">
                <input type="text" placeholder="Bạn muốn chơi game gì?">
                <button type="submit" name="search">Search</button>
            </form>
            <button type="submit" id="button-login"><a href="login.html">Đăng nhập</a></button>
            <button type="submit" id="button-register"><a href="register.html">Đăng ký</a></button>
        </section>
    </header>
    <!-- End Header -->


    <!-- Start Menu -->
    <nav class="menu">
        <section class="container">
            <ul>
                <li><a href="index.html">Trang chủ</a></li>
                <li><a href="#">Game mới</a></li>
                <li><a href="#">Game chơi nhiều</a></li>
                <li><a href="#">Nấu ăn</a></li>
                <li><a href="#">Hành động</a></li>
                <li><a href="#">Đua xe</a></li>
                <li><a href="#">Thời trang</a></li>
                <li><a href="#">Thể thao</a></li>
                <li><a href="#">Thể thao</a></li>
                <li><a href="#">Thể loại khác</a></li>
            </ul>
        </section>
    </nav>

    <!-- End Menu -->

    <!-- Start Wrapper  -->
    <section class="wrapper">
        <section class="content-left">
            <section class="game-hot">
                <section class="slider">
                    <div id="wowslider-container1">
                        <div class="ws_images">
                            <ul>
                                <li><a href="#" target="_self"><img src="images/game_1.jpg" alt="game_1" title="Truy tìm pokemon trong vườn "
                                            id="wows1_0" /></a></li>
                                <li><a href="#" target="_self"><img src="images/game_2.jpg" alt="game_2" title="Tiệm tóc của Barbie"
                                            id="wows1_1" /></a></li>
                                <li><a href="#" target="_self"><img src="images/game_3.jpg" alt="game_3" title="Chú khỉ buồn tìm ninja 2"
                                            id="wows1_2" /></a></li>
                                <li><a href="#" target="_self"><img src="images/game_4.jpg" alt="game_4" title="Phiêu Lưu Cùng Tên Lửa"
                                            id="wows1_3" /></a></li>
                                <li><a href="#" target="_self"><img src="images/game_5.jpg" alt="game_5" title="Làm bánh tình yêu"
                                            id="wows1_4" /></a></li>
                            </ul>
                        </div>
                        <div class="ws_bullets">
                            <div>
                                <a href="#" title="game_1">1</a>
                                <a href="#" title="game_2">2</a>
                                <a href="#" title="game_3">3</a>
                                <a href="#" title="game_4">4</a>
                                <a href="#" title="game_5">5</a>
                            </div>
                        </div>
                    </div>
                </section>
                <aside class="sidebar">
                    <header class="title-gamehot">Game hay</header>
                    <section class="content-gamehot">
                        <article class="box-gamehot">
                            <a href="#"><img src="images/image-game.jpg" alt=""></a>
                            <h3><a href="#">Ngôi nhà vui vẻ</a></h3>
                        </article>
                        <article class="box-gamehot">
                            <a href="#"><img src="images/image-game.jpg" alt=""></a>
                            <h3><a href="#">Ngôi nhà vui vẻ</a></h3>
                        </article>
                        <article class="box-gamehot-last">
                            <a href="#"><img src="images/image-game.jpg" alt=""></a>
                            <h3><a href="#">Ngôi nhà vui vẻ</a></h3>
                        </article>
                        <article class="box-gamehot">
                            <a href="#"><img src="images/image-game.jpg" alt=""></a>
                            <h3><a href="#">Ngôi nhà vui vẻ</a></h3>
                        </article>
                        <article class="box-gamehot">
                            <a href="#"><img src="images/image-game.jpg" alt=""></a>
                            <h3><a href="#">Ngôi nhà vui vẻ</a></h3>
                        </article>
                        <article class="box-gamehot-last">
                            <a href="#"><img src="images/image-game.jpg" alt=""></a>
                            <h3><a href="#">Ngôi nhà vui vẻ</a></h3>
                        </article>
                    </section>
                </aside>
            </section>
            <section class="login">
                <header class="title-login-register">ĐĂNG NHẬP</header>
                <form action="" method="post" id="login-register-form">
                    <div class="row">
                        <label for="username">Tên đăng nhập<span class="red asterisk bold"> *</span></label>
                        <input name="username" id="username" type="text" required autofocus >
                    </div>
                    <div class="row">
                        <label for="password">Mật khẩu<span class="red asterisk bold"> *</span></label>
                        <input name="password" id="password" type="password" required >
                    </div>
                    <div class="row-submit">
                        <button type="submit" name="submit">Đăng nhập</button>
                    </div>


                </form>
            </section>
        </section>
        <aside class="content-right">
            <section class="game-choinhieunhat">
                <header class="title-game-choinhieunhat">Game chơi nhiều nhất</header>
                <section class="content-game-choinhieunhat">
                    <article class="box-game-choinhieunhat">
                        <a href=""><img src="images/image-game.jpg" alt=""></a>
                        <section>
                            <a href="#"><h5>Đua xe địa hình</h5></a>
                            <p>Lượt chơi: 25034</p>
                        </section>
                    </article>
                    <article class="box-game-choinhieunhat">
                        <a href=""><img src="images/image-game.jpg" alt=""></a>
                        <section>
                            <a href="#"><h5>Đua xe địa hình</h5></a>
                            <p>Lượt chơi: 25034</p>
                        </section>
                    </article>
                    <article class="box-game-choinhieunhat">
                        <a href=""><img src="images/image-game.jpg" alt=""></a>
                        <section>
                            <a href="#"><h5>Đua xe địa hình</h5></a>
                            <p>Lượt chơi: 25034</p>
                        </section>
                    </article>
                    <article class="box-game-choinhieunhat">
                        <a href=""><img src="images/image-game.jpg" alt=""></a>
                        <section>
                            <a href="#"><h5>Đua xe địa hình</h5></a>
                            <p>Lượt chơi: 25034</p>
                        </section>
                    </article>
                    <article class="box-game-choinhieunhat">
                        <a href=""><img src="images/image-game.jpg" alt=""></a>
                        <section>
                            <a href="#"><h5>Đua xe địa hình</h5></a>
                            <p>Lượt chơi: 25034</p>
                        </section>
                    </article>
                    <article class="box-game-choinhieunhat-last">
                        <a href=""><img src="images/image-game.jpg" alt=""></a>
                        <section>
                            <a href="#"><h5>Đua xe địa hình</h5></a>
                            <p>Lượt chơi: 25034</p>
                        </section>
                    </article>
                </section>
            </section>
        </aside>
        <section class="sitemap">
                <div class="box-sitemap"><a href="#">Hành động</a></div>
                <div class="box-sitemap"><a href="#">Đua xe</a></div>
                <div class="box-sitemap"><a href="#">Thể thao</a></div>
                <div class="box-sitemap"><a href="#">Thể thao</a></div>
                <div class="box-sitemap-last"><a href="#">Bạn gái</a></div>
                <div class="box-sitemap"><a href="#">Phiêu lưu</a></div>
                <div class="box-sitemap"><a href="#">Nhập vai</a></div>
                <div class="box-sitemap"><a href="#">Hành động</a></div>
                <div class="box-sitemap"><a href="#">Thể thao</a></div>
                <div class="box-sitemap-last"><a href="#">Văn phòng</a></div>
        </section>
    </section>
    <!-- End Wrapper -->

    <footer class="footer">
            <a href="#"><img src="images/facebook.png" /></a>
	        <a href="#"><img src="images/gmail.png" /></a>
	        <a href="#"><img src="images/contact.png" /></a>
	        <a href="#"><img src="images/map.png" /></a>
	        <div>
	            <p><b>Chơi game lành mạnh, vui vẻ, sắp xếp thời gian hợp lý, tận hưởng cuộc sống lành mạnh, học tập tốt và lao động
	                tốt.
	                </br>
	                Chịu trách nhiệm nội dung: Nguyễn Nhật - Trường Giang. ©2018 Đại học Thủy Lợi, Địa chỉ: 175 TÂY SƠN, ĐỐNG ĐA, HÀ NỘI.  Điện thoại: 0926 053 033.</b></p>
	        </div>
    </footer>
    <!-- Start Wowslider -->
    <script type="text/javascript" src="wowslider/wowslider.js"></script>
    <script type="text/javascript" src="wowslider/script.js"></script>
    <!-- End Wowslider -->
</body>

</html>