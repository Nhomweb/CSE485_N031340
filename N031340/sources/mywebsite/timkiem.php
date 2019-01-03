<?php
 $title='Game mini-Game 2D(Tìm kiếm)';
 require('header.php');
 ?>


 <!-- Start Wrapper  -->
 <div class="wrapper">
    <div class="content-left" >
<section class="game-cung-theloai">

<div id="thongbao">Tìm thấy <?=count($game)?> nội dung cho <?php echo $_GET['tukhoa']?></div>
<section class="list-game" id="dataseach"><hr>

        	   <?php
foreach ($game as $game) {
    ?>
    <article class="box-game" >
                <a href="playgame.php?id_games=<?php echo $game->id_game; ?>&theloai=<?php echo $game->id_theloai; ?>"><img src="games/img/<?=$game->hinhgame?>" alt=""></a>
                <section>
                    <a href="playgame.php?id_games=<?php echo $game->id_game; ?>&theloai=<?php echo $game->id_theloai; ?>"><h5><?=$game->tengame?></h5></a>
                    <p>Lượt chơi: <?=$game->luotchoi?></p>
                </section>
            </article>
            <?php
}
        ?>
        </section>
    </section>
        


    </div>
    <?php
require('slider.php');
?>
</div>

<?php require('footer.php');?>
