 <div class="content-right">
    <div class="quangcao">
        <a href="http://indogamersonline.blogspot.com/2011/05/game-untuk-nokia-2700-classic-cricket.html" target="_blank"><img src="images/quangcao/quangcao_1.gif" alt=""></a>
        <a href="http://www.xemtructiepbongda.net/2015/06/youtube-bong-da.html" target="_blank"><img src="images/quangcao/quangcao_10.gif" alt=""></a>

    </div>
    <div class="game-choinhieunhat">
        <header class="title-game-choinhieunhat">Game chơi nhiều nhất</header>
        <section class="content-game-choinhieunhat">

          <?php
          for ($i=0; $i <count($nhieunhat) ; $i++) {
            if ($i==0) {
                ?>
                <article class="box-game-choinhieunhat">
                    <a href="playgame.php?id_games=<?php echo $nhieunhat[$i]->id_game; ?>&theloai=<?php echo $nhieunhat[$i]->id_theloai; ?>"><img src="games/img/<?=$nhieunhat[$i]->hinhgame?>" alt=""></a>
                    <section>
                        <a href="playgame.php?id_games=<?=$nhieunhat[$i]->id_game?>&theloai=<?php echo $nhieunhat[$i]->id_theloai; ?>"><h5><?=$nhieunhat[$i]->tengame?></h5></a>
                        <p>Lượt chơi: <?=$nhieunhat[$i]->luotchoi?></p>
                    </section>
                </article>
                <?php
            }
            else{
                ?> 
                <article class="box-game-choinhieunhat">
                    <a href="playgame.php?id_games=<?php echo $nhieunhat[$i]->id_game; ?>&theloai=<?php echo $nhieunhat[$i]->id_theloai; ?>"><img src="games/img/<?=$nhieunhat[$i]->hinhgame?>" alt=""></a>
                    <section>
                        <a href="playgame.php?id_games=<?=$nhieunhat[$i]->id_game?>&theloai=<?php echo $nhieunhat[$i]->id_theloai; ?>"><h5><?=$nhieunhat[$i]->tengame?></h5></a>
                        <p>Lượt chơi: <?=$nhieunhat[$i]->luotchoi?></p>
                    </section>
                </article>
                <?php
            }

        }
        ?>
    </section>
</div>






<div class="game-choinhieunhat" id="yeuthichnhat">
    <header class="title-game-choinhieunhat">Game yêu thích nhiều nhất</header>
    <section class="content-game-choinhieunhat">
      <?php
      for ($i=0; $i <count($yeuthich) ; $i++) {
        if ($i==0) {
            ?>
            <article class="box-game-choinhieunhat">
                <a href="playgame.php?id_games=<?php echo $yeuthich[$i]->id_game; ?>&theloai=<?php echo $yeuthich[$i]->id_theloai; ?>"><img src="games/img/<?=$yeuthich[$i]->hinhgame?>" alt=""></a>
                <section>
                    <a href="playgame.php?id_games=<?php echo $yeuthich[$i]->id_game; ?>&theloai=<?php echo $yeuthich[$i]->id_theloai; ?>"><h5><?=$yeuthich[$i]->tengame?></h5></a>
                    <p>Lượt thích: <?=$yeuthich[$i]->luotyeuthich?></p>
                </section>
            </article>
            <?php
        }
        else{
            ?>
           <article class="box-game-choinhieunhat">
                <a href="playgame.php?id_games=<?php echo $yeuthich[$i]->id_game; ?>&theloai=<?php echo $yeuthich[$i]->id_theloai; ?>"><img src="games/img/<?=$yeuthich[$i]->hinhgame?>" alt=""></a>
                <section>
                    <a href="playgame.php?id_games=<?php echo $yeuthich[$i]->id_game; ?>&theloai=<?php echo $yeuthich[$i]->id_theloai; ?>"><h5><?=$yeuthich[$i]->tengame?></h5></a>
                    <p>Lượt thích: <?=$yeuthich[$i]->luotyeuthich?></p>
                </section>
            </article>
            <?php
        }

    }
    ?>
</section>
</div>
</div>