<!DOCTYPE html>
<html lang="pt-BR" xml:lang="pt-BR" itemscope="itemscope" itemtype="http://schema.org/Organization">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=yes">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="robots" content="noindex">

        <title>Đăng nhập Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="css/login.css">
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </head>

    <body>

        <div class="container">    

            <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 

             

                <div class="panel panel-default" >
                    <div class="panel-heading">
                        <div class="panel-title text-center">Đăng nhập hệ thống</div>
                    </div>     

                    <div class="panel-body" >

                        <form action="functions/login.php" name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="user" type="text" class="form-control" name="email" value="" placeholder="E-mail">                                        
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            </div>                                                                  

                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                    <button type="submit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</button>
                                </div>
                            </div>

                        </form>     

                    </div>                     
                </div>  
            </div>
        </div>

        <div id="particles"></div>

       

        <script type="text/javascript" src="js/login.js"></script>

    </body>

</html>