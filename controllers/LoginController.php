<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author Marcos Vinicius
 */
class LoginController extends Controller {
     public function __construct() {
          if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
               header("Location: " . BASE_URL.'painel');
          }
     }
     public function index(){
          $dados=[];
          $usuario=new Usuarios();
          if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
               $email=addslashes($_POST['email']);
               $senha=addslashes($_POST['password']);
               if($usuario->login($email, $senha)){
                    header("Location: ".BASE_URL.'painel');
               }else{
                   $dados['error']= TRUE;
               }
               
               
          }
          
        
          $this->loadView('login',$dados);
     }
     public function sair(){
          $sair=new Usuarios();
          $sair->sair();
     }
}
