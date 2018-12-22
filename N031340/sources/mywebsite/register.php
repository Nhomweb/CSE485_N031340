<?php
$title='Đăng ký';
require('header.php');

?>

<!-- Start Wrapper  -->
<div class="wrapper">
        <div class="content-left">
               <?php
    include('hot.php')?>


                            <?php require('dangky/includes/config.php');

//if logged in redirect to members page
                            if( $user->is_logged_in() ){ header('Location: index.php'); exit(); }

//if form has been submitted process it
                            if(isset($_POST['submit'])){

                                if (!isset($_POST['username'])) $error[] = "Please fill out all fields";
                                if (!isset($_POST['email'])) $error[] = "Please fill out all fields";
                                if (!isset($_POST['password'])) $error[] = "Please fill out all fields";
                                if (!isset($_POST['fullname']));
                                if (!isset($_POST['sex']));
                                if (!isset($_POST['birthday']));
                                if (!isset($_POST['address']));

                                $username = $_POST['username'];

    //very basic validation
                                if(!$user->isValidUsername($username)){
                                    $error[] = 'Usernames must be at least 4 Alphanumeric characters';
                                } else {
                                    $stmt = $db->prepare('SELECT username FROM user WHERE username = :username');
                                    $stmt->execute(array(':username' => $username));
                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                    if(!empty($row['username'])){
                                        $error[] = 'Username provided is already in use.';
                                    }

                                }

                                if(strlen($_POST['password']) < 6){
                                    $error[] = 'Password is too short.';
                                }

                                if(strlen($_POST['passwordConfirm']) < 6){
                                    $error[] = 'Confirm password is too short.';
                                }

                                if($_POST['password'] != $_POST['passwordConfirm']){
                                    $error[] = 'Passwords do not match.';
                                }

    //email validation
                                $email = htmlspecialchars_decode($_POST['email'], ENT_QUOTES);
                                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                                    $error[] = 'Please enter a valid email address';
                                } else {
                                    $stmt = $db->prepare('SELECT email FROM user WHERE email = :email');
                                    $stmt->execute(array(':email' => $email));
                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                    if(!empty($row['email'])){
                                        $error[] = 'Email provided is already in use.';
                                    }

                                }


    //if no errors have been created carry on
                                if(!isset($error)){

        //hash the password
                                    $hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);

        //create the activasion code
                                    $activasion = md5(uniqid(rand(),true));

                                    try {

            //insert into database with a prepared statement
                                        $stmt = $db->prepare('INSERT INTO user(username,password,email,fullname,sex,birthday,address,active) VALUES (:username, :password, :email,:fullname, :sex, :birthday, :address, :active)');
                                        $stmt->execute(array(
                                            ':username' => $username,
                                            ':password' => $hashedpassword,
                                            ':email' => $email,
                                            ':fullname' => $fullname,
                                            ':sex' => $sex,
                                            ':birthday' => $email,
                                            ':address' => $address,
                                            ':active' => $activasion
                                        ));
                                        $id = $db->lastInsertId('id');

            //send email
                                        $to = $_POST['email'];
                                        $subject = "Registration Confirmation";
                                        $body = "<p>Thank you for registering at demo site.</p>
                                        <p>To activate your account, please click on this link: <a href='".DIR."form_active.php?x=$id&y=$activasion'>".DIR."form_active.php?x=$id&y=$activasion</a></p>
                                        <p>Regards Site Admin</p>";

                                        $mail = new Mail();
                                        $mail->setFrom(SITEEMAIL);
                                        $mail->addAddress($to);
                                        $mail->subject($subject);
                                        $mail->body($body);
                                        $mail->send();

            //redirect to index page
                                        header('Location: register.php?action=joined');
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

                //if action is joined show sucess
                            if(isset($_GET['action']) && $_GET['action'] == 'joined'){
                                echo "<h2 class='bg-success'>Registration successful, please check your email to activate your account.</h2>";
                            }
                            ?>

                            <section class="login">
                                <header class="title-login-register">ĐĂNG KÝ THÀNH VIÊN</header>

                                <form action="" method="post" id="login-register-form"><hr>


                                    <div class="row">
                                        <label for="username">Tên đăng nhập<span class="red asterisk bold"> *</span></label>
                                        <input name="username" id="username" type="text" required autofocus pattern="^[a-z\d\.]{4,}$" title="Ít nhất 4 kí tự & không khoảng trắng" value="<?php if(isset($error)){ echo htmlspecialchars($_POST['username'], ENT_QUOTES); } ?>" tabindex="1">
                                    </div>
                                    <div class="row">
                                        <label for="email">Email<span class="red asterisk bold"> *</span></label>
                                        <input name="email" id="email" type="email" required value="<?php if(isset($error)){ echo htmlspecialchars($_POST['email'], ENT_QUOTES); } ?>" tabindex="2">
                                    </div>

                                    <div class="row">
                                        <label for="password">Mật khẩu<span class="red asterisk bold"> *</span></label>
                                        <input name="password" id="password" type="password" required pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                                        title="Ít nhất 6 kí tự bao gồm chữ hoa, chữ thường, số">

                                    </div>
                                    <div class="row">
                                        <label for="password">Nhập lại mật khẩu<span class="red asterisk bold"> *</span></label>
                                        <input name="passwordConfirm" id="passwordConfirm" type="password" required pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                                        title="Ít nhất 6 kí tự bao gồm chữ hoa, chữ thường, số">

                                    </div>

                                    <div class="row">
                                        <label for="name">Họ & tên</label>
                                        <input name="name" id="name" type="text" required value="<?php if(isset($error)){ echo htmlspecialchars($_POST['fullname'], ENT_QUOTES); } ?>">
                                    </div>
                                    <div class="row">
                                        <label for="">Giới tính</label>
                                        <input name="sex" value="nam" type="radio">Nam&nbsp;&nbsp;
                                        <input name="sex" value="nu" type="radio" required value="<?php if(isset($error)){ echo htmlspecialchars($_POST['sex'], ENT_QUOTES); } ?>">Nữ
                                    </div>
                                    <div class="row">
                                        <label for="birthday">Ngày sinh</label>
                                        <input name="birthday" id="birthday" type="date" required value="<?php if(isset($error)){ echo htmlspecialchars($_POST['birthday'], ENT_QUOTES); } ?>">
                                    </div>
                                    <div class="row">
                                        <label for="address">Địa chỉ</label>
                                        <input name="address" id="address" type="text">
                                    </div>
                                    <div class="row-submit">
                                     <input type="submit" name="submit" value="Đăng ký" class="btn btn-primary btn-block btn-lg" tabindex="5">
                                 </div>


                             </form>
                         </section>
                     </div>
                     <div class="content-right">
                        <section class="quangcao">
                            <a href="http://www.trungtamcanho.com/tong-hop-can-ho-quan-2---chung-cu-quan-2-gia-re" target="_blank"><img
                                src="images/quangcao/quangcao_9.gif" alt=""></a>
                            </section>
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
