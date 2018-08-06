<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Biblioteca Acadêmica</title>
        <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"/>
        <link type="text/css" rel="stylesheet" href="assets/css/style-index.css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>

        <div class="row">
            <div class="col s2">
                <!-- Área de navegação e do logo-->
                <section class="secao-esquerda">
                    <div class="border-bottom">
                        <div class="logo">
                            <img src="assets/img/metropolitana-logo.png" width="165px"/>
                            <div class="frase">
                                <h1>Biblioteca Acadêmica</h1>
                            </div>
                        </div>
                    </div>
                    <div class="navegacao">
                        <h4>Busca Avançada</h4>

                        <form method="get">
                            
                                <div class="input-field col s12 campo-busca ">

                                    <select id="categorias">
                                        <optgroup label="Sistemas de Informação">
                                            <option value="" disabled selected>Categorias</option>
                                            <option value="3">Banco de dados</option>
                                            <option value="1">Desenvolvimento</option>
                                            <option value="2">Redes/Infraestrutura</option>
                                            <option value="3">Segurança</option>
                                        </optgroup>
                                        <optgroup class="black-text" label="Fisioterapia">
                                            <option value="3">Ortopedia e Traumatologia</option>
                                            <option value="4">Terapia intensiva</option>
                                            <option>Fisioterapia do trabalho</option>
                                            <option> Fisioterapia esportiva</option>
                                            <option>Cardiologia e Pneumologia</option>
                                        </optgroup>
                                    </select>

                                
                            </div>
                            <div class="row">
                            <div class="input-field col s12 campo-busca">
                                <select>
                                    <option value="" disabled selected>Cursos</option>
                                    <option value="1">Administração</option>
                                    <option value="2">Ciências Contábeis</option>
                                    <option value="3">Licenciatura em Educação Física</option>
                                    <option value="3">Enfermagem</option>
                                    <option value="3">Engenharia Civil</option>
                                    <option value="3">Engenharia de Produção</option>
                                    <option value="3">Engenharia Elétrica</option>
                                    <option value="3">Engenharia Mecânica</option>
                                    <option value="3">Fisioterapia</option>
                                    <option value="3">Sistemas de Informação</option>
                                </select>
                                
                            </div>
                            </div>
                            
                            <div class="row">
                               <div class="input-field col s12 campo-busca">
                                <select>
                                    <option value="" disabled selected>Unidades</option>
                                    <option value="1">Marabá</option>
                                    <option value="2">Parauapebas</option>
                                    <option value="3">Paragominas</option>
                                   
                                </select>
                                
                            </div>
                            </div>
                            
                            <div class="row">
                            
                              <div class="input-field col s12 campo-busca">
                                <select>
                                    <option value="" disabled selected>Orientadores</option>
                                    <option value="1">Orientador 01</option>
                                    <option value="2">Orientador 01</option>
                                    <option value="3">Orientador 01</option>
                                   
                                </select>
                                
                            </div>
                            </div>
                            <div class="row box-login container-btn-busca">
                                     <button class="btn waves-effect waves-light col s12" type="submit">Buscar
  
  </button>
                               
                            </div>
                        </form>



                    </div>

                </section>
                <!-- Fim Área de navegação e do logo-->
            </div>

            <div class="col s10">

                <!-- Área do campo de busca-->
                <section class="campodebusca">
                    <div class="row">
                        <div class="col s12 ">   
                            <div class="box-login">
                                <form class="buscar" method="get">

                                    <input type="text" class="input-field col s11" id="buscar" placeholder="Buscar..." name="buscar"/>

                                    <button class="btn-busca-submit col s1" type="submit"><i class="material-icons">search</i></button>

                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Fim Área do campo de busca-->

                <!--  Área do conteudo-->

                <section class="area-conteudo">
                    <div class="row">
                        <div class="col s12">
                            <div class="card-panel teal white container-mv">
                                 <a class="btn" href="<?php echo BASE_URL.'login';?>">Teste</a>


                            </div>
                        </div>
                    </div>

                </section>
                <!-- Fim Área do conteudo-->
            </div>
        </div>




        <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>
        <script type="text/javascript" src="assets/js/call-jQuery-of-materialize.js"></script>

    </body>
</html>
