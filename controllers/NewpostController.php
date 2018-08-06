<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewpostController
 *
 * @author Marcos Vinicius
 */
class NewpostController extends Controller {

     public function __construct() {
          if (!isset($_SESSION['login']) && empty($_SESSION['login'])) {
               header("Location: " . BASE_URL . 'login');
          }
     }

     public function index() {
          $dados = [];
          $files=new Arquivos();
          if (isset($_POST['form'])) {
               $dadosForm = $_POST['form'];
               foreach ($dadosForm as $dadoForm) {
                    if (!empty($dadoForm)) {
                         continue;
                    } else {
                         $dados['errorCamposNaoPreenchidos'] = true;
                         $this->loadTemplate('newpost', $dados);
                         exit();
                    }
               }
               if (strlen($dadosForm['textarea']) > 150) {
                    $dados['errorEstouroLimiteCaractere'] = 'Descrição ultrapassa o limite de caractere permitido';
               }
               if(preg_match('/^[a-z]{3,}$/i',$dadosForm['nome'])==FALSE || preg_match('/^[a-z]{3,}$/i',$dadosForm['sobrenome'])==FALSE){
                    $dados['Error_name']='O nome e sobrenome deve conter somente letras';
               }
               if(preg_match('/^[a-z]{1,}$/i', $dadosForm['titulo'])){
                    $dados['error_titulo']='O Titulo deve conter somente letras';
               }
               if(preg_match('/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/',$dadosForm['email'])){
                    $dados['error_email']='O E-mail inválido, formato permitido email@example.com';
               }
               if(preg_match('/^[0-9]{2}\,[0-9]{2}$/',$dadosForm['notaProfessor'])==FALSE){
                    $dados['error_nota']='A nota deve ter o seguinte formato: 00,00';
               }
               if(preg_match('/^[a-z]{3,}$/i', $dadosForm['nomeOrientador'])){
                    $dados['error_orientador']='O nome do orientador deve conter somente letras';
               }
               if(isset($_FILES['pdf'])){
                   $dados['pdf']= $files->PDF($_FILES['pdf']);
               }
          }

          $this->loadTemplate('newpost');
     }

}
