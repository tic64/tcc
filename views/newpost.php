
<h1 class="title-page">Nova Postagem</h1>

<div>
     <form class="form-add-post" enctype="multipart/form-data" method="POST">
           <?php if(isset($errorCamposNaoPreenchidos) && $errorCamposNaoPreenchidos==TRUE):?>
              <div class="card-panel alert alert-danger">
               Por favor, preencha todos os campos para continuar
          </div>
             <?php elseif (isset($errorEstouroLimiteCaractere) && $errorEstouroLimiteCaractere==TRUE):?>
          <div class="card-panel alert alert-danger">
               Breve Descrição do Trabalho excedeu o limite de caracteres permitido
          </div>
          <?php endif;?>
        <div class="row">
            <div class="input-field col s6">
                 <input id="first_name" autocomplete="on" name="form[nome]" type="text" class="validate">
                <label for="first_name">Primeiro Nome do Autor</label>
            </div>
            <div class="input-field col s6">
                 <input id="last_name" autocomplete="on" name="form[sobrenome]" type="text" class="validate">
                <label for="last_name">Sobrenome do Autor</label>
            </div>
        </div>


        <div class="row">
            <div class="input-field col s6">
                 <input id="titulo" autocomplete="on" name="form[titulo]" type="text" class="validate">
                <label for="titulo">Titulo do Trabalho</label>
            </div>
            <div class="input-field col s6">
                <input id="email" type="email" autocomplete="on" name="form[email]"  class="validate">
                <label for="email">Email do Autor</label>
            </div>

        </div>

        <div class="row">

            <div class="input-field col s4">
                <select name="form[curso]">
                    <option value="" disabled selected></option>
                    <option value="Administração">Administração</option>
                    <option value="Ciências Contábeis">Ciências Contábeis</option>
                    <option value="Licenciatura em Educação Física">Licenciatura em Educação Física</option>
                    <option value="Enfermagem">Enfermagem</option>
                    <option value="Engenharia Civil">Engenharia Civil</option>
                    <option value="Engenharia de Produção">Engenharia de Produção</option>
                    <option value="Engenharia Elétrica">Engenharia Elétrica</option>
                    <option value="Engenharia Mecânica">Engenharia Mecânica</option>
                    <option value="Fisioterapia">Fisioterapia</option>
                    <option value="Sistemas de Informação">Sistemas de Informação</option>
                </select>
                <label>Cursos</label>
            </div>

            <div class="input-field col s2">
                 <input id="nota" autocomplete="on" name="form[notaProfessor]" type="text" class="validate">
                <label for="nota">Nota do Professor</label>
            </div>
            <div class="input-field col s6">
                 <input id="orientador" autocomplete="on" name="form[nomeOrientador]" type="text" class="validate">
                <label for="orientador">Nome do Orientador</label>
            </div>

        </div>

        <div class="row">
           
             <div class="col s6">
            <div class="file-field input-field">
                <div class="btn">
                    <span><i class="material-icons" style="font-size: 23pt">add_a_photo</i></span>
                    <input type="file"  name="img">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate"  type="text" placeholder="Foto Autor">
                </div>
            </div>
        </div>
                
                
                <div class="col s6">
            <div class="file-field input-field">
                <div class="btn">
                    <span><i class="material-icons"  style="font-size: 23pt">picture_as_pdf</i></span>
                    <input type="file" name="pdf">
                </div>
                <div class="file-path-wrapper">
                     <input class="file-path validate"  type="text" placeholder="Arquivo PDF">
                </div>
            </div>
        </div>

        </div>
        
        <div class="row">
            <div class="input-field col s12">
                 <textarea id="textarea1" name="form[textarea]" data-length="150" class="materialize-textarea"></textarea>
                    <label for="textarea1">Breve Descrição do Trabalho</label>
                </div>
        </div>
        
        <input type="submit" class="btn" value="Adicionar"/>
    </form>
</div>



