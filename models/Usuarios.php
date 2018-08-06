<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuarios
 *
 * @author Marcos Vinicius
 */
class Usuarios {

     public function login($email, $senha) {
          global $pdo;
          $sql = $pdo->prepare("select nome,email,senha from usuarios where email=:email");
          $sql->bindValue(":email", $email);
          $sql->execute();
          if ($sql->rowCount() > 0) {
               $sql=$sql->fetch();
               if(crypt($senha,$sql['senha'])==$sql['senha']){
                     $_SESSION['login']=$sql['email'].'/'.$sql['nome'];
                      return TRUE;
               }else{
                    return FALSE;
               }
              
              
          }else{
               return false;
          }
     }
     public function cadastrar($first_name,$last_name,$matricula,$unidades,$email,$senha){
          global $pdo;
          $sql=$pdo->prepare("insert into usuarios set nome=:nome, sobrenome=:sobrenome, matricula=:matricula, unidades=:unidades, email=:email, senha=:senha");
          $sql->bindValue(':nome',$first_name);
          $sql->bindValue(':sobrenome',$last_name);
          $sql->bindValue(':matricula',$matricula);
          $sql->bindValue(':unidades',$unidades);
          $sql->bindValue(':email',$email);
          $sql->bindValue(':senha',$senha);
          $sql->execute();
          return TRUE;
          
     }
     public  function sair(){
          session_destroy();
          header("Location: ".BASE_URL.'/login');
     }

}
