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
                   
    
                    <p id="fullscreen">
                        <input id="fullscreen" class="fullscreen" type="button" name="fullscreen" />
                        <label class="icon-fullscreen" for="fullscreen"></label>
                    </p>

<div class="like1">
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div style="float: left;margin-top: 22px;margin-left: 25px" class="addthis_inline_share_toolbox"></div>
            <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5c1c9288df1a2965"></script>



</div>
<div class="like2">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=163646674273823';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="box_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>


</div>


       </section>




                <div class="textview instruction">
                    <?=$chitiet->noidunggame?>
                </div><hr>




<?php
if (isset($_SESSION['chua_dang_nhap'])) {
    echo "<div class='alert alert-danger'>$_SESSION[chua_dang_nhap]</div>";
}
?>

<div class="well">
    <h4>Viết bình luận...<span class="glyphicon glyphicon-pencil"></span></h4>
    <form role="form" method="post" action="#">
        <input type="hidden" name="id_games" value="<?=$chitiet->id?>">
        <div class="form-group">
            <textarea class="form-control" rows="2" name="noidung"></textarea>
        </div>
        <button type="sumit" name="binhluan" class="btn-primary">Gửi</button>
    </form>
</div><hr>



            </section>  
        <section class="game-cung-theloai">
            <header class="title-game-cung-theloai">
                  <section class="tentheloai"><a href="#">Game liên quan</a></section>
            </header>
            <section class="list-game" id="box">

                <?php
foreach ($relatednews as $related) {
                ?>
                <article class="box-game">
                    <a href="playgame.php?id_games=<?php echo $related->id_game; ?>&theloai=<?php echo $related->id_theloai; ?>"><img src="games/img/<?=$related->hinhgame?>" alt=""></a>
                    <section>
                        <a href="playgame.php?id_games=<?php echo $related->id_game; ?>&theloai=<?php echo $related->id_theloai; ?>"><h5><?=$related->tengame?></h5></a>
                        <p>Lượt chơi: <?=$related->luotchoi?></p>
                    </section>
                </article>
                <?php
}
?>

  <script type="text/javascript">
                    var toancuc=0;
                    $(document).ready(function(){
                        $("#xemthem").click(function(){
                            toancuc=toancuc+1;
                            $.get('phantrang.php',{trang:toancuc}, function(data){
                              $("#box").append(data);
                            });
                        });
                    });
                </script>

                <button type="button" class="box-game-xemthem" id="xemthem">Xem thêm</button>
            </section>
        </section>
    </div>
    <?php include"slider.php"?>
</div>
<?php include"footer.php"?>
