<?php
$title='Đăng nhập';
require('header.php');

?>

<!-- Start Wrapper  -->
<div class="wrapper">
    <div class="content-left">
           <?php
    include('hot.php')?>

                            <?php
                             session_start(); 

//include config
                            require_once('dangky/includes/config.php');

//check if already logged in move to home page
                            

//process login form if submitted
                            if(isset($_POST['submit'])){

                                if (!isset($_POST['username'])) $error[] = "Please fill out all fields";

                                if (!isset($_POST['password'])) $error[] = "Please fill out all fields";


                                $username = $_POST['username'];
                                if ( $user->isValidUsername($username)){
                                    if (!isset($_POST['password'])){
                                        $error[] = 'A password must be entered';
                                    }
                                    $password = $_POST['password'];
                                    $username = $_POST["username"];
        
 
                                    if($user->login($username,$password)){
                                        $_SESSION['username'] = $username;
                                        header('Location: index.php');
                                        exit;

                                    } else {
                                        $error[] = 'Wrong username or password or your account has not been activated.';
                                    }
                                }else{
                                    $error[] = 'Usernames are required to be Alphanumeric, and between 4-16 characters long';
                                }



}//end if submit




                //check for any errors
if(isset($error)){
    foreach($error as $error){
        echo '<p class="bg-danger">'.$error.'</p>';
    }
}

if(isset($_GET['action'])){

                    //check the action
    switch ($_GET['action']) {
        case 'active':
        echo "<h2 class='bg-success'>Your account is now active you may now log in.</h2>";
        break;
        case 'reset':
        echo "<h2 class='bg-success'>Please check your inbox for a reset link.</h2>";
        break;
        case 'resetAccount':
        echo "<h2 class='bg-success'>Password changed, you may now login.</h2>";
        break;
    }

}


?>




<section class="login">
    <header class="title-login-register">ĐĂNG NHẬP</header>
    <form action="login.php" method="POST" id="login-register-form">
        <div class="row">
            <label for="username">Tên đăng nhập<span class="red asterisk bold"> *</span></label>
            <input name="username" id="username" type="text" required autofocus value="<?php if(isset($error)){ echo htmlspecialchars($_POST['username'], ENT_QUOTES); } ?>" tabindex="1">
        </div>
        <div class="row">
            <label for="password">Mật khẩu<span class="red asterisk bold"> *</span></label>
            <input name="password" id="password" type="password" required >
        </div>
        <div class="row-submit">
            <input type="submit" name="submit" value="Đăng nhập" class="btn btn-primary btn-block btn-lg" tabindex="5">
            <div class="col-xs-9 col-sm-9 col-md-9"><hr>
               <a href='reset.php'>Forgot your Password?</a>
           </div>
       </div>


   </form>
</section>
</div>
<div class="content-right">
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
</div>
</div>

<?php
require('footer.php');
?>