<div class="sitemap">  
    <?php
    foreach ($menu as $mn) {

        ?>

        <div class="box-sitemap"><a href="theloaigame.php?id_loai=<?=$mn->id_theloai?>"><?=$mn->tentheloai?></a></div>


        <?php
    }
    ?>
</div>

<footer class="footer">
    <a href="https://www.facebook.com/stthoctro/?ref=bookmarks"><img src="images/facebook.png" /></a>
    <a href="https://www.plus.google.com/"><img src="images/gmail.png" /></a>
    <a href="https://www.whatsapp.com/"><img src="images/contact.png" /></a>
    <a href="https://www.google.com/maps/"><img src="images/map.png" /></a>
    <div>
        <p><b>Chơi game lành mạnh, vui vẻ, sắp xếp thời gian hợp lý, tận hưởng cuộc sống lành mạnh, học tập tốt và lao động
            tốt.
        </br>
    Chịu trách nhiệm nội dung: Nguyễn Nhật.   ©2018 Đại học Thủy Lợi, Địa chỉ: 175 TÂY SƠN, ĐỐNG ĐA, HÀ NỘI.    Liên hệ quảng cáo: 0926 053 033.</b></p>
</div>

</footer>
<!-- Start Wowslider -->
<script type="text/javascript" src="wowslider/wowslider.js"></script>
<script type="text/javascript" src="wowslider/script.js"></script>
<script type='text/javascript' src='http://s7.addthis.com/js/250/addthis_widget.js'></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#btnSearch").click(function(){
            var keyword = $("#txtSearch").val();
            $.post('timkiem.php?tukhoa=<?php echo $_GET['tukhoa']?>',{tukhoa:keyword},function(data){
                $("#dataseach").html(data);
                
            })
        })
    })

</script>



<script>
    $(document).ready(function(){
        $("#dropdown1").click(function(){
            alert('Mời đăng nhập để chơi nhiều thể loại khác')
        });
    });

</script>

<script>
var elem = document.getElementById("myweb");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}
</script>



</body>

</html>