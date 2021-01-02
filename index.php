<?php include("app/config.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!--SITE-->
        <title>Mine Chat</title>
        <meta name="description" content="mine chat" />
        <link rel="shortcut icon" href="https://images.vexels.com/media/users/3/139911/isolated/preview/1afb4038427b2bd8edd275940aea269d-chat-service-icon-by-vexels.png" type="image/x-icon"/>
        <link href="https://images.vexels.com/media/users/3/139911/isolated/preview/1afb4038427b2bd8edd275940aea269d-chat-service-icon-by-vexels.png" rel="apple-touch-icon-precomposed" sizes="196x196" />
        
        <!--JS-->
        <script type="text/javascript" src="app/js/jquery.min.js"></script>

        <!--STYLE-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="lib/style.css">
    </head>

    <body>

        <div class="container my-5 form-signin">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Chat</h1>
                    <div id="resul1" class="resultado"></div>
                    <form  method="POST" id="msgg" class="fixed chats-msg" autocomplete="off">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="msg" placeholder="Digite sua mensagem" style="height: 100px" required></textarea>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required autocomplete="off">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>

                    
                    <div id="msgbody"></div>
                    
                </div>
            </div>
        </div>


    </body>
    
    <script src="app/js/load.js"></script>
    
</html>