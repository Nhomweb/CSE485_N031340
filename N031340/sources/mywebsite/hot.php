 <section class="game-hot">
    <section class="slider">
        <div id="wowslider-container1">
            <div class="ws_images">
                <ul>
                    <li><a href="playgame.php?id_games=114&theloai=2" target="_self"><img src="games/img/Pokemon-phong-thu.jpg" alt="game_1" title="Pokemon phòng thủ"
                        id="wows1_0" /></a></li>
                        <li><a href="playgame.php?id_games=340&theloai=4" target="_self"><img src="games/img/Phau-thuat-cho-Barbie.jpg" alt="game_2" title="Phẫu thuật cho Barbie"
                            id="wows1_1" /></a></li>
                            <li><a href="playgame.php?id_games=406&theloai=4" target="_self"><img src="games/img/ninja-rua.jpg" alt="game_3" title="Ninja rùa"
                                id="wows1_2" /></a></li>
                                <li><a href="playgame.php?id_games=421&theloai=5" target="_self"><img src="games/img/doremon-va-nobita-phieu-luu.jpg" alt="game_4" title="Doremon và Nobita phiêu lưu"
                                    id="wows1_3" /></a></li>
                                    <li><a href="playgame.php?id_games=313&theloai=4" target="_self"><img src="games/img/Xuong-banh-Gato_Secure.jpg" alt="game_5" title="Xuởng bánh Gato Secure"
                                        id="wows1_4" /></a></li>
                                    </ul>
                                </div>
                                <div class="ws_bullets">
                                    <div>
                                        <a href="playgame.php?id_games=114&theloai=2" title="Pokemon phòng thủ">1</a>
                                        <a href="playgame.php?id_games=340&theloai=4" title="Phẫu thuật cho Barbie">2</a>
                                        <a href="playgame.php?id_games=406&theloai=4" title="Ninja rùa">3</a>
                                        <a href="playgame.php?id_games=421&theloai=5" title="Doremon và Nobita phiêu lưu">4</a>
                                        <a href="playgame.php?id_games=313&theloai=4" title="Xuởng bánh Gato Secure">5</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <aside class="sidebar">
                            <header class="title-gamehot">Game hay</header>
                            <section class="content-gamehot">
                                <?php
                                for ($i=0; $i <count($hot) ; $i++) { 
                                    if ($i==0) {
                                        ?>
                                        <article class="box-gamehot">

                                            <a href="playgame.php?id_games=<?php echo $hot[$i]->id_game; ?>&theloai=<?php echo $hot[$i]->id_theloai; ?>"><img src="games/img/<?=$hot[$i]->hinhgame?>" alt=""></a>
                                            <h3><a href="playgame.php?id_games=<?php echo $hot[$i]->id_game; ?>&theloai=<?php echo $hot[$i]->id_theloai; ?>"><?=$hot[$i]->tengame?></a></h3>
                                        </article>
                                        <?php
                                    }
                                    else{
                                        ?> 
                                        <article class="box-gamehot">

                                            <a href="playgame.php?id_games=<?php echo $hot[$i]->id_game; ?>&theloai=<?php echo $hot[$i]->id_theloai; ?>"><img src="games/img/<?=$hot[$i]->hinhgame?>" alt=""></a>
                                            <h3><a href="playgame.php?id_games=<?php echo $hot[$i]->id_game; ?>&theloai=<?php echo $hot[$i]->id_theloai; ?>"><?=$hot[$i]->tengame?></a></h3>
                                        </article>
                                        <?php
                                    }

                                }
                                ?>

                            </section>
                        </aside>
                    </section>
                    