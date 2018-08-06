<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewusersController
 *
 * @author Marcos Vinicius
 */
class NewusersController extends Controller {

     public function __construct() {
          if (!isset($_SESSION['login']) && empty($_SESSION['login'])) {
               header("Location: " . BASE_URL . 'login');
          }
     }

     public function index() {
          $dados=[];
          $error = TRUE;
          $user = new Usuarios();
          if (isset($_POST['dadosForm'])) {
               $dadosForm = $_POST['dadosForm'];
               foreach ($dadosForm as $dadoForm) {
                    if (!empty($dadoForm)) {
                         continue;
                    } else {
                         $error = FALSE;
                         break;
                    }
               }

               if ($error) {

                    extract($dadosForm);
                    $senha=SecurityPassword::criptografarSenha($senha);
                    if($user->cadastrar($first_name, $last_name, $matricula, $unidades, $email, $senha)){
                         $dados['cadastro']='sucess';
                    }
               } else {
                    $dados['cadastro']='fail';
               }
          }

          $this->loadTemplate('newusers',$dados);
     }

}
