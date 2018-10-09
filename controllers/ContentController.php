<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContentController
 *
 * @author Marcos Vinicius
 */
class ContentController extends Controller {


    public function post($params=[]) {
        $url=explode('/',$_GET['url']);
        $dados = [];
        $acao = new Content();
        $dados['post'] = $acao->posts($url[3], NULL);
        $this->loadView('content', $dados);
    }

}
