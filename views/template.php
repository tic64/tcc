<html>
     <head>

          <title>Painel Administrativo</title>
          <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL.'assets/css/materialize.min.css';?>"/>
          <link type="text/css" rel="stylesheet" href="<?php echo BASE_URL.'assets/css/style-painel.css';?>"/>
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     </head>
     <body>
          <header>
               <nav class="box-login">
                    <div class="nav-wrapper">
                         <a href="<?php echo BASE_URL.'painel';?>" class="brand-logo">Área de Postagens</a>
                         <?php if(isset($_SESSION['login']) && !empty($_SESSION['login'])):?>
                         <ul id="nav-mobile" class="right hide-on-med-and-down">
                              <li><a href="<?php echo BASE_URL.'newusers';?>">Novo usuário</a></li>
                              <li><a href="#">Olá, <?php echo $nome;?></a></li>
                             

                              <li><a href="<?php echo BASE_URL.'login/sair';?>">Sair</a></li>
                         </ul>
                         <?php endif;?>
                    </div>
               </nav> 
          </header>
          <?php $this->loadViweInTemplate($viewName);?>
          <script type="text/javascript" src="<?php echo BASE_URL.'assets/js/jquery-3.3.1.min.js';?>"></script>
          <script type="text/javascript" src="<?php echo BASE_URL.'assets/js/jquery.mask.js';?>"></script>
           <script type="text/javascript" src="<?php echo BASE_URL.'assets/js/js.js';?>"></script>
          <script type="text/javascript" src="<?php echo BASE_URL.'assets/js/materialize.min.js';?>"></script>
          <script type="text/javascript" src="<?php echo BASE_URL.'assets/js/call-jQuery-of-materialize.js';?>"></script>
     </body>
</html>
