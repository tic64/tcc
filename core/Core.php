<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Core
 *
 * @author Marcos Vinicius
 */
class Core {
    
   public function run(){
     $params=array();
     $url='/'  ;
        if(isset($_GET['url'])){
             $url=$url.$_GET['url'];
        }
        
        if($url!='/'){
             $url=explode('/',$url);
             array_shift($url);
             $currentController=ucfirst($url[0]).'Controller';
             array_shift($url);
             
             if(isset($url[0]) && !empty($url[0])){
                  $currentAction=$url[0];
                  array_shift($url);
             }else{
                  $currentAction="index";
             }
             if(count($url)>0){
                  $params=$url;
             }
             
             
        }else{
            $currentController='HomeController';
            $currentAction='index';
        }
        
        $controller=new $currentController();
        call_user_func_array(array($controller,$currentAction),$params);
      
        
   }
   
}
