<div class="content-right">
    <div class="quangcao">
<?php
        foreach ($quangcao as $qc) {
                ?>
        <a href="<?=$qc->url?>" target="_blank"><img src="images/quangcao/<?=$qc->taptin?>" alt=""></a><br>
                       <?php
}
?>

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






<div class="game-choinhieunhat"  >
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

<div class="quangcao"  id="yeuthichnhat">
    <div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=163646674273823&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/game2d/?modal=admin_todo_tour" data-tabs="timeline" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/game2d/?modal=admin_todo_tour" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/game2d/?modal=admin_todo_tour">Game Mini- Game 2D</a></blockquote></div>
    </div>
</div>