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
                <input type="text" placeholder="B?n mu?n choi game g�?">
                <button type="submit" name="search">Search</button>
            </form>
            <button type="submit" id="button-login"><a href="login.html">�ang nh?p</a></button>
            <button type="submit" id="button-register"><a href="register.html">�ang k�</a></button>
        </section>
    </header>
    <!-- End Header -->


    <!-- Start Menu -->
    <nav class="menu">
        <section class="container">
            <ul>
                <li><a href="index.html">Trang ch?</a></li>
                <li><a href="#">Game m?i</a></li>
                <li><a href="#">Game choi nhi?u</a></li>
                <li><a href="#">N?u an</a></li>
                <li><a href="#">H�nh d?ng</a></li>
                <li><a href="#">�ua xe</a></li>
                <li><a href="#">Th?i trang</a></li>
                <li><a href="#">Th? thao</a></li>
                <li><a href="#">Th? thao</a></li>
                <li><a href="#">Th? lo?i kh�c</a></li>
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
                                <li><a href="#" target="_self"><img src="images/game_1.jpg" alt="game_1" title="Truy t�m pokemon trong vu?n "
                                            id="wows1_0" /></a></li>
                                <li><a href="#" target="_self"><img src="images/game_2.jpg" alt="game_2" title="Ti?m t�c c?a Barbie"
                                            id="wows1_1" /></a></li>
                                <li><a href="#" target="_self"><img src="images/game_3.jpg" alt="game_3" title="Ch� kh? bu?n t�m ninja 2"
                                            id="wows1_2" /></a></li>
                                <li><a href="#" target="_self"><img src="images/game_4.jpg" alt="game_4" title="Phi�u Luu C�ng T�n L?a"
                                            id="wows1_3" /></a></li>
                                <li><a href="#" target="_self"><img src="images/game_5.jpg" alt="game_5" title="L�m b�nh t�nh y�u"
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
                            <h3><a href="#">Ng�i nh� vui v?</a></h3>
                        </article>
                        <article class="box-gamehot">
                            <a href="#"><img src="images/image-game.jpg" alt=""></a>
                            <h3><a href="#">Ng�i nh� vui v?</a></h3>
                        </article>
                        <article class="box-gamehot-last">
                            <a href="#"><img src="images/image-game.jpg" alt=""></a>
                            <h3><a href="#">Ng�i nh� vui v?</a></h3>
                        </article>
                        <article class="box-gamehot">
                            <a href="#"><img src="images/image-game.jpg" alt=""></a>
                            <h3><a href="#">Ng�i nh� vui v?</a></h3>
                        </article>
                        <article class="box-gamehot">
                            <a href="#"><img src="images/image-game.jpg" alt=""></a>
                            <h3><a href="#">Ng�i nh� vui v?</a></h3>
                        </article>
                        <article class="box-gamehot-last">
                            <a href="#"><img src="images/image-game.jpg" alt=""></a>
                            <h3><a href="#">Ng�i nh� vui v?</a></h3>
                        </article>
                    </section>
                </aside>
            </section>
            <section class="login">
                <header class="title-login-register">�ANG K� TH�NH VI�N</header>
                <form action="" method="post" id="login-register-form">
                    <div class="row">
                        <label for="username">T�n dang nh?p<span class="red asterisk bold"> *</span></label>
                        <input name="username" id="username" type="text" required autofocus pattern="^[a-z\d\.]{6,}$" title="�t nh?t 8 k� t? & kh�ng kho?ng tr?ng">
                    </div>
                    <div class="row">
                        <label for="password">M?t kh?u<span class="red asterisk bold"> *</span></label>
                        <input name="password" id="password" type="password" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                            title="�t nh?t 8 k� t? bao g?m ch? hoa, ch? thu?ng, s?">
                    </div>
                    <div class="row">
                        <label for="email">Email<span class="red asterisk bold"> *</span></label>
                        <input name="email" id="email" type="email" required>
                    </div>
                    <div class="row">
                        <label for="name">H? & t�n</label>
                        <input name="name" id="name" type="text">
                    </div>
                    <div class="row">
                        <label for="">Gi?i t�nh</label>
                        <input name="sex" value="nam" type="radio">Nam&nbsp;&nbsp;
                        <input name="sex" value="nu" type="radio">N?
                    </div>
                    <div class="row">
                        <label for="birthday">Ng�y sinh</label>
                        <input name="birthday" id="birthday" type="date">
                    </div>
                    <div class="row">
                        <label for="address">�?a ch?</label>
                        <input name="address" id="address" type="text">
                    </div>
                    <div class="row-submit">
                        <button type="submit" name="submit">�ang k�</button>
                        <button type="reset">L�m l?i</button>
                    </div>


                </form>
            </section>
        </section>
        <aside class="content-right">
            <section class="quangcao">
                <a href="http://indogamersonline.blogspot.com/2011/05/game-untuk-nokia-2700-classic-cricket.html" target="_blank"><img
                        src="images/quangcao/quangcao_1.gif" alt=""></a>
            </section>
            <section class="game-choinhieunhat">
                <header class="title-game-choinhieunhat">Game choi nhi?u nh?t</header>
                <section class="content-game-choinhieunhat">
                    <article class="box-game-choinhieunhat">
                        <a href=""><img src="images/image-game.jpg" alt=""></a>
                        <section>
                            <a href="#"><h5>�ua xe d?a h�nh</h5></a>
                            <p>Lu?t choi: 25034</p>
                        </section>
                    </article>
                    <article class="box-game-choinhieunhat">
                        <a href=""><img src="images/image-game.jpg" alt=""></a>
                        <section>
                            <a href="#"><h5>�ua xe d?a h�nh</h5></a>
                            <p>Lu?t choi: 25034</p>
                        </section>
                    </article>
                    <article class="box-game-choinhieunhat">
                        <a href=""><img src="images/image-game.jpg" alt=""></a>
                        <section>
                            <a href="#"><h5>�ua xe d?a h�nh</h5></a>
                            <p>Lu?t choi: 25034</p>
                        </section>
                    </article>
                    <article class="box-game-choinhieunhat">
                        <a href=""><img src="images/image-game.jpg" alt=""></a>
                        <section>
                            <a href="#"><h5>�ua xe d?a h�nh</h5></a>
                            <p>Lu?t choi: 25034</p>
                        </section>
                    </article>
                    <article class="box-game-choinhieunhat">
                        <a href=""><img src="images/image-game.jpg" alt=""></a>
                        <section>
                            <a href="#"><h5>�ua xe d?a h�nh</h5></a>
                            <p>Lu?t choi: 25034</p>
                        </section>
                    </article>
                    <article class="box-game-choinhieunhat-last">
                        <a href=""><img src="images/image-game.jpg" alt=""></a>
                        <section>
                            <a href="#"><h5>�ua xe d?a h�nh</h5></a>
                            <p>Lu?t choi: 25034</p>
                        </section>
                    </article>
                </section>
            </section>
        </aside>
    </section>
    <!-- End Wrapper -->
    <section class="sitemap">
        <div class="box-sitemap"><a href="#">H�nh d?ng</a></div>
        <div class="box-sitemap"><a href="#">�ua xe</a></div>
        <div class="box-sitemap"><a href="#">Th? thao</a></div>
        <div class="box-sitemap"><a href="#">Th? thao</a></div>
        <div class="box-sitemap-last"><a href="#">B?n g�i</a></div>
        <div class="box-sitemap"><a href="#">Phi�u luu</a></div>
        <div class="box-sitemap"><a href="#">Nh?p vai</a></div>
        <div class="box-sitemap"><a href="#">H�nh d?ng</a></div>
        <div class="box-sitemap"><a href="#">Th? thao</a></div>
        <div class="box-sitemap-last"><a href="#">Van ph�ng</a></div>
    </section>
    <footer class="footer">
        <a href="#"><img src="images/facebook.png" /></a>
        <a href="#"><img src="images/gmail.png" /></a>
        <a href="#"><img src="images/contact.png" /></a>
        <a href="#"><img src="images/map.png" /></a>
        <div>
            <p><b>Choi game l�nh m?nh, vui v?, s?p x?p th?i gian h?p l�, t?n hu?ng cu?c s?ng l�nh m?nh, h?c t?p t?t v� lao d?ng
                t?t.
                </br>
                Ch?u tr�ch nhi?m n?i dung: Nguy?n Nh?t - Tru?ng Giang. �2018 �?i h?c Th?y L?i, �?a ch?: 175 T�Y SON, �?NG �A, H� N?I.  �i?n tho?i: 0926 053 033.</b></p>
        </div>
    </footer>
    <!-- Start Wowslider -->
    <script type="text/javascript" src="wowslider/wowslider.js"></script>
    <script type="text/javascript" src="wowslider/script.js"></script>
    <!-- End Wowslider -->
</body>

</html>