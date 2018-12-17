<section class="game-hot">
            <section class="slider">
                <div id="wowslider-container1">
                    <div class="ws_images">
                        <ul>
                            <li><a href="#" target="_self"><img src="images/game_1.jpg" alt="game_1" title="Truy tìm pokemon trong vườn "
                                id="wows1_0" /></a></li>
                                <li><a href="#" target="_self"><img src="images/game_2.jpg" alt="game_2" title="Tiệm tóc của Barbie"
                                    id="wows1_1" /></a></li>
                                    <li><a href="playgame.php" target="_self"><img src="images/game_3.jpg" alt="game_3" title="Chú khỉ buồn tìm ninja 2"
                                        id="wows1_2" /></a></li>
                                        <li><a href="#" target="_self"><img src="images/game_4.jpg" alt="game_4" title="Phiêu Lưu Cùng Tên Lửa"
                                            id="wows1_3" /></a></li>
                                            <li><a href="#" target="_self"><img src="images/game_5.jpg" alt="game_5" title="Làm bánh tình yêu"
                                                id="wows1_4" /></a></li>
                                            </ul>
                                        </div>
                                        <div class="ws_bullets">
                                            <div>
                                                <a href="#" title="Truy tìm pokemon trong vườn">1</a>
                                                <a href="#" title="Tiệm tóc của Barbie">2</a>
                                                <a href="#" title="Chú khỉ buồn tìm ninja 2">3</a>
                                                <a href="#" title="Phiêu Lưu Cùng Tên Lửa">4</a>
                                                <a href="#" title="Làm bánh tình yêu">5</a>
                                            </div>
                                        </div>

                                        <a href="#" class="ws_frame"></a>
                                        <div class="ws_shadow"></div>

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

                                                        <a href="#"><img src="games/img/<?=$hot[$i]->hinhgame?>" alt=""></a>
                                                        <h3><a href="#"><?=$hot[$i]->tengame?></a></h3>
                                                    </article>
                                                    <?php
                                                }
                                                else{
                                                    ?> 
                                                    <article class="box-gamehot">
                                                        <a href="#"><img src="games/img/<?=$hot[$i]->hinhgame?>" alt=""></a>
                                                        <h3><a href="#"><?=$hot[$i]->tengame?></a></h3>
                                                    </article>
                                                    <?php
                                                }

                                            }
                                            ?>

                                        </section>
                                </aside>
                            </section>