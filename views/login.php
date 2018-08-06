<html>
    <head>
        <title>Tela de Login</title>
        <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL.'assets/css/materialize.min.css';?>"/>
        <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL.'assets/css/style-login.css';?>"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        
        <div class="box-login margin ">
             <?php if(isset($error) && $error==TRUE):?>
              <div class="card-panel alert alert-danger">
               E-Mail/Senha incorretas
          </div>
             <?php endif;?>
            <div class="responsive-img center-align">
                <img src="<?php echo BASE_URL.'assets/img/metropolitana-logo.png';?>" width="144px"/>
            </div>
            <form method="post" class="row">
                <div class="input input-field col s12">
                    <input type="email" name="email" id="email" class="validate"/>
                    <label for="email">E-mail</label>
                </div>
                
                <div class="input input-field col s12">
                    <input type="password" name="password" id="password" class="validate"/>
                    <label for="password">Senha</label>
                </div>
                <a href="esqueceu-a-senha">Esqueceu a senha?</a>
                <button class="btn waves-effect waves-light submit" type="submit" name="action">Entrar
  </button>
            </form>
        </div>
        
         <script type="text/javascript" src="<?php echo BASE_URL.'assets/js/jquery-3.3.1.min.js';?>"></script>
        <script type="text/javascript" src="<?php echo BASE_URL.'assets/js/materialize.min.js';?>"></script>
        <script type="text/javascript" src="<?php echo BASE_URL.'assets/js/materialize.min.js';?>"></script>
    </body>
</html>
