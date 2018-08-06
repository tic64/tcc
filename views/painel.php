

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
       <form method="post" style="padding: 40px">
            <div class="row">
    <div class="modal-content">
      <h4>Nova categoria/curso</h4>
      
    </div>
                 <div class="input-field col s6">
                      <input id="curso" required="required" placeholder="Obrigatório" type="text" class="validate">
          <label for="curso">Curso</label>
        </div>
                 <div class="input-field col s6">
          <input id="categoria" type="text" class="validate">
          <label for="categoria">Categoria</label>
        </div>
    <div class="modal-footer">
         <button type="submit" class="modal-close waves-effect waves-green btn-flat">Adicionar</a>
    </div>
            </div>
       </form>
    
  </div>
         

<div class="box-login table-margin">
    <a href="<?php echo BASE_URL.'newpost';?>" class="waves-effect waves-light btn"><i class="material-icons left">add_box</i>Adicionar Novo</a>
    <a style="float: right" class="waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons left">add_box</i>Categoria/Categoria</a>


<table class=" striped responsive-table">
    <thead>
        <tr>
            <th>Arquivo</th>
            <th>Nome do Autor</th>
            <th>Date da Postagem</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="Curriculo Sinobras Marcos.pdf" title="Baixar Arquivo"><i class="material-icons" style="font-size: 23pt; color: #8e0b00">picture_as_pdf</i></a></td>
            <td>Marcos Vincius Soares Souza</td>
            <td><?php echo date('d-m-Y');?></td>
            <td><a class="waves-effect waves-light btn-small blue btn-acao">Editar</a><a class="waves-effect waves-light btn-small red btn-acao">Excluir</a></td>
        </tr>
       
    </tbody>
</table>
</div>

