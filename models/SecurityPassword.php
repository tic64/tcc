<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SecurityPassword
 *
 * @author Marcos Vinicius
 */
class SecurityPassword {

     public static  function criptografarSenha($senha) {
          $salto = NULL;
          $controlador = 1;
          for ($index = 0; $index < 22; $index++) {

               if ($controlador == 1) {
                    $salto .= chr(rand(48, 57));
                    $controlador = 2;
               } elseif ($controlador == 2) {
                    $salto .= chr(rand(65, 90));
                    $controlador = 3;
               } elseif ($controlador == 3) {
                    $salto .= chr(rand(97, 122));
                    $controlador = 1;
               }
          }

          
          $custo = '08';
          $hash = crypt($senha, '$2a$' . $custo . '$' . $salto . '$');
          return $hash;
     }

}
