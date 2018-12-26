<?php
$title='';
require('header.php');
?>


<!-- Start Wrapper  -->
<div class="wrapper">
    <div class="content-left">
     <?php include('hot.php')?>
     <section class="game-cung-theloai">
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
       

<?php
$trang_hientai=isset($_GET['page']) ? $_GET['page'] : 1;
        $limit=16;
        $total_records=count($danhmuctin);
        $total_page = ceil($total_records / $limit);
         if ($trang_hientai > $total_page){
            $trang_hientai = $total_page;
        }
        else if ($trang_hientai < 1){
            $trang_hientai = 1;
        }
         $vitri=($trang_hientai-1)*$limit;
          $conn = mysqli_connect('localhost', 'root', '', 'mywebsite');
         $result = mysqli_query($conn, "SELECT * FROM game LIMIT $vitri, $limit");
?>

            <div style="text-align: center;">
                <ul class="pagination">
                    <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
foreach ($menu as $mn) {
    ?>
<?php
            // nếu trang_hientai > 1 và total_page > 1 mới hiển thị nút prev
                    if ($trang_hientai > 1 && $total_page > 1){
                        echo '<a href="theloaigame.php?id_loai=<?=$mn->id_theloai?>&page='.($trang_hientai-1).'">Prev</a> | ';
                    }
            // Lặp khoảng giữa
                    for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                        if ($i == $trang_hientai){
                            echo '<span>'.$i.'</span> | ';
                        }
                        else{
                            echo '<a href="theloaigame.php?id_loai=<?=$mn->id_theloai?>&page='.$i.'">'.$i.'</a> | ';
                        }
                    }
            // nếu trang_hientai < $total_page và total_page > 1 mới hiển thị nút prev
                    if ($trang_hientai < $total_page && $total_page > 1){
                        echo '<a href="theloaigame.php?id_loai=<?=$mn->id_theloai?>page='.($trang_hientai+1).'">Next</a> | ';
                    }
                    ?>
                        <?php
}
?>
                </ul>
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