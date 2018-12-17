<?php
 $title='PlayGame';
 require('header.php');
 ?>

 <!-- Start Wrapper  -->
 <div class="wrapper">
    <div class="content-left">

        <header class="title-box-playgame"><?=$chitiet->tengame?></header>
        <section class="box-playgame">
            <section class="content-box-playgame-flash">
                <object>

                    <embed src="games/data/<?=$chitiet->taptingame?>" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash"
                    type="application/x-shockwave-flash" allowscriptaccess="none" height="100%" width="100%"></embed></br>  
                </object>
            </section>                   

            <section class="content-box-playgame">
                <div class="like">
                    <p id="like">
                        <input class="star" id="star" type="checkbox" name="star" />
                        <label class="star" for="star"></label>
                    </p>
                    <p class="soluong">99999</p>
                    <p id="dow">
                        <input id="dow" class="dow" type="button" name="dow" />
                        <label class="dow" for="dow"></label>
                    </p>
                    <p class="soluong">99999</p>
                    <p id="share">
                        <input id="share" class="share" type="button" name="share" />
                        <label class="share" for="share"></label>
                    </p>
                </div>

                <div class="textview instruction">
                    <?=$chitiet->noidunggame?>

                </div>



            </section>
            </section>  
        <section class="game-cung-theloai">
            <header class="title-game-cung-theloai">
                <section class="tentheloai"><a href="#">Game bắn súng</a></section>
            </header>
            <section class="list-game">
                <article class="box-game">
                    <a href="#"><img src="images/image-game.jpg" alt=""></a>
                    <section>
                        <a href="#"><h5>Đua xe địa hình</h5></a>
                        <p>Lượt chơi: 25034</p>
                    </section>
                </article>
                <article class="box-game">
                    <a href="#"><img src="images/image-game.jpg" alt=""></a>
                    <section>
                        <a href="#"><h5>Đua xe địa hình</h5></a>
                        <p>Lượt chơi: 25034</p>
                    </section>
                </article>
                <article class="box-game">
                    <a href="#"><img src="images/image-game.jpg" alt=""></a>
                    <section>
                        <a href="#"><h5>Đua xe địa hình</h5></a>
                        <p>Lượt chơi: 25034</p>
                    </section>
                </article>
                <article class="box-game-last">
                    <a href="#"><img src="images/image-game.jpg" alt=""></a>
                    <section>
                        <a href="#"><h5>Đua xe địa hình</h5></a>
                        <p>Lượt chơi: 25034</p>
                    </section>
                </article>
                <article class="box-game">
                    <a href="#"><img src="images/image-game.jpg" alt=""></a>
                    <section>
                        <a href="#"><h5>Đua xe địa hình</h5></a>
                        <p>Lượt chơi: 25034</p>
                    </section>
                </article>
                <article class="box-game">
                    <a href="#"><img src="images/image-game.jpg" alt=""></a>
                    <section>
                        <a href="#"><h5>Đua xe địa hình</h5></a>
                        <p>Lượt chơi: 25034</p>
                    </section>
                </article>
                <article class="box-game">
                    <a href="#"><img src="images/image-game.jpg" alt=""></a>
                    <section>
                        <a href="#"><h5>Đua xe địa hình</h5></a>
                        <p>Lượt chơi: 25034</p>
                    </section>
                </article>
                <article class="box-game-last">
                    <a href="#"><img src="images/image-game.jpg" alt=""></a>
                    <section>
                        <a href="#"><h5>Đua xe địa hình</h5></a>
                        <p>Lượt chơi: 25034</p>
                    </section>
                </article>
                <button type="button" class="box-game-xemthem">Xem thêm</button>
            </section>
        </section>
    </div>
    <?php include"slider.php"?>
</div>
<?php include"footer.php"?>
