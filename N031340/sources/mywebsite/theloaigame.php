<?php
$title='';
require('header.php');
?>


<!-- Start Wrapper  -->
<div class="wrapper">
    <div class="content-left">
     <?php include('hot.php')?>
     <section class="game-cung-theloai" id="dataseach">
        <?php
foreach ($list as $list) {
    ?>
    <header class="title-game-cung-theloai">
        <section class="tentheloai"><a href="#"><?=$list->tentheloai?></a></section>
    </header>
    <?php
}
        ?>
     


        <section class="list-game">
        <?php
foreach ($danhmuctin as $tin) {
    ?>
    <article class="box-game">
                <a href="playgame.php?id_games=<?php echo $tin->id_game; ?>&theloai=<?php echo $tin->id_theloai; ?>"><img src="games/img/<?=$tin->hinhgame?>" alt=""></a>
                <section>
                    <a href="playgame.php?id_games=<?php echo $tin->id_game; ?>&theloai=<?php echo $tin->id_theloai; ?>"><h5><?=$tin->tengame?></h5></a>
                    <p>Lượt chơi: <?=$tin->luotchoi?></p>
                </section>
            </article>
            <?php
}
        ?>
       


            <div style="text-align: center;">
                <div><?=$thanh_phantrang?></div>
            </div>
        </section>
    </section>
</div>
<div class="content-right">
    <section class="quangcao">
        <a href="http://indogamersonline.blogspot.com/2011/05/game-untuk-nokia-2700-classic-cricket.html" target="_blank"><img src="images/quangcao/quangcao_1.gif" alt=""></a>
    </section>
    <section class="game-choinhieunhat">
        <header class="title-game-choinhieunhat">Game yêu thích nhiều nhất</header>
        <section class="content-game-choinhieunhat">

          <?php
          for ($i=0; $i <count($nhieunhat) ; $i++) {
            if ($i==0) {
                ?>
                <article class="box-game-choinhieunhat">
                    <a href="playgame.php?id_games=<?php echo $nhieunhat[$i]->id_game; ?>"><img src="games/img/<?=$nhieunhat[$i]->hinhgame?>" alt=""></a>
                    <section>
                        <a href="playgame.php?id_games=<?php echo $nhieunhat[$i]->id_game; ?>"><h5><?=$nhieunhat[$i]->tengame?></h5></a>
                        <p>Lượt chơi: <?=$nhieunhat[$i]->luotchoi?></p>
                    </section>
                </article>
                <?php
            }
            else{
                ?> 
                <article class="box-game-choinhieunhat">
                    <a href="playgame.php?id_games=<?php echo $nhieunhat[$i]->id_game; ?>"><img src="games/img/<?=$nhieunhat[$i]->hinhgame?>" alt=""></a>
                    <section>
                        <a href="playgame.php?id_games=<?php echo $nhieunhat[$i]->id_game; ?>"><h5><?=$nhieunhat[$i]->tengame?></h5></a>
                        <p>Lượt chơi: <?=$nhieunhat[$i]->luotchoi?></p>
                    </section>
                </article>
                <?php
            }
        }
        ?>
    </section>
</div>
</div>
<!-- End Wrapper -->
<?php
require('footer.php');
?>