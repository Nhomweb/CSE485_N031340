<?php
$title='Đặt lại mật khẩu';
require('header.php');
?>


                            <?php require_once('dangky/includes/config.php');

//if logged in redirect to members page
                            if( $user->is_logged_in() ){ header('Location:index.php'); exit(); }

//if form has been submitted process it
if(isset($_POST['submit'])){

  //Make sure all POSTS are declared
  if (!isset($_POST['email'])) $error[] = "Please fill out all fields";


  //email validation
  if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $error[] = 'Please enter a valid email address';
  } else {
    $stmt = $db->prepare('SELECT email FROM user WHERE email = :email');
    $stmt->execute(array(':email' => $_POST['email']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if(empty($row['email'])){
      $error[] = 'Email provided is not recognised.';
    }

  }


	//if no errors have been created carry on
                             if(!isset($error)){

		//create the activation code
                              $stmt = $db->prepare('SELECT password, email FROM user WHERE email = :email');
                              $stmt->execute(array(':email' => $_POST['email']));
                              $row = $stmt->fetch(PDO::FETCH_ASSOC);
		$token = hash_hmac('SHA256', $user->generate_entropy(8), $row['password']);//Hash and Key the random data
        $storedToken = hash('SHA256', ($token));//Hash the key stored in the database, the normal value is sent to the user

        try {

         $stmt = $db->prepare("UPDATE user SET randomkey = :token, resetComplete='No' WHERE email = :email");;
         $stmt->execute(array(
            ':email' => $row['email'],
            ':token' => $storedToken
        ));

			//send email
         $to = $row['email'];
         $subject = "Password Reset";
         $body = "<p>Someone requested that the password be reset.</p>
         <p>If this was a mistake, just ignore this email and nothing will happen.</p>
         <p>To reset your password, visit the following address: <a href='".DIR."resetPassword.php?key=$token'>".DIR."resetPassword.php?key=$token</a></p>";

         $mail = new Mail();
         $mail->setFrom(SITEEMAIL);
         $mail->addAddress($to);
         $mail->subject($subject);
         $mail->body($body);
         $mail->send();

			//redirect to index page
         header('Location: login.php?action=reset');
         exit;

		//else catch the exception and show the error.
     } catch(PDOException $e) {
      $error[] = $e->getMessage();
  }

}

}



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
  }
}
?>


<div class="wrapper">
    <div class="content-left">
        <?php
    include('hot.php')?>

<section class="login">
    <header class="title-login-register">ĐĂNG NHẬP</header>
    <form action="" method="post" id="login-register-form">

        <div class="row">
            <label for="email">Nhập email<span class="red asterisk bold"> *</span></label>
            <input type="email" name="email" id="email" type="text" 
            placeholder="Email cần lấy lại mật khẩu" value="" tabindex="1">

        </div>

        <div class="row-submit">
         <input type="submit" name="submit" value="Đặt lại" class="btn btn-primary btn-block btn-lg" tabindex="2"> 
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