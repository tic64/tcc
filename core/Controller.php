<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Marcos Vinicius
 */
class Controller {
     private $viewData;
     public function loadView($viewName, $viewData=array()){
          extract($viewData);
          require './views/'.$viewName.'.php';
     }
     public function loadTemplate ($viewName,$viewData=array()){
          $nome='';
          if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
              $nome= $this->nome();
          }
          $this->viewData=$viewData;
           extract($this->viewData);
          require './views/template.php';
          
     }
     public function loadViweInTemplate($viewName){
         extract($this->viewData);
          require './views/'.$viewName.'.php';
     }
    
     private function nome(){
          $nome=explode('/', $_SESSION['login']);
          return $nome[1];
     }
    
}
