<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PainelController
 *
 * @author Marcos Vinicius
 */
class PainelController extends Controller {

     public function __construct() {
          if (!isset($_SESSION['login']) && empty($_SESSION['login'])) {
               header("Location: " . BASE_URL.'login');
          }
     }

     public function index() {
          $this->loadTemplate('painel');
     }

}
