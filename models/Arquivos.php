<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Arquivos
 *
 * @author Marcos Vinicius
 */
class Arquivos {
     public function PDF($file=[]){
          
            
                $tipo = $file['type'];
                    $tmpname = md5($_SESSION['login'].time() . rand(0, 999999)) . '.pdf';
                    move_uploaded_file($file['tmp_name'], './contents/'.$tmpname);

         return $tmpname;
     }
     public function fotoAutor($file=[]){
          
     }
}
