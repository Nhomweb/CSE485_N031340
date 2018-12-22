<?php
$title='Game mini - Game 2D';
require('header.php');
?>

<!-- Start Wrapper  -->
<div class="wrapper" >
    <div class="content-left">
      <?php require('hot.php');?>

      <section class="theloai-game">
       <?php    for ($ii=0; $ii <count($theloaiList) ; $ii++) {
        ?>
        <header><a href="theloaigame.php?id_loai=<?=$theloaiList[$ii]->id_theloai?>"><?=$theloaiList[$ii]->tentheloai?></a></header><hr>
        <p class="xthem"><a href="theloaigame.php?id_loai=<?=$theloaiList[$ii]->id_theloai?>"><input name="xemthem" type="button" value="Xem Thêm &gt;&gt;"></a></p>




        <?php
        $m_web1 = new M_web();
        $inra1=$m_web1->getDanhSachGame($theloaiList[$ii]->id_theloai);

        for ($i=0; $i <count($inra1) ; $i++) {

    ?>   


    <article class="game-theloai-game">


                <a href="playgame.php?id_games=<?php echo $inra1[$i]->id_game; ?>&theloai=<?php echo $inra1[$i]->id_theloai; ?>"><img src="games/img/<?=$inra1[$i]->hinhgame?>" alt=""></a>
                <h3><a href="playgame.php?id_games=<?php echo $inra1[$i]->id_game; ?>&theloai=<?php echo $inra1[$i]->id_theloai; ?>"><?=$inra1[$i]->tengame?></a></h3>

                
            </article>





                <?php
}
                         
        ?>



<div class="overflow"></div>

        
    <?php } ?>


</section>

</div>
<?php
require('slider.php');
?>
</div>

<?php require('footer.php');?>

