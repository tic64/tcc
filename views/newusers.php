
<h1 class="title-page">Novo Usuário</h1>


<div >
    
     
     <form class="form-add-post" method="post">
           <?php if (isset($cadastro) && $cadastro == 'sucess'): ?>

          <div class="card-panel alert alert-sucess">
               Cadastro realizado com sucesso!
          </div>
     <?php elseif ((isset($cadastro) && $cadastro == 'fail')): ?>
          <div class="card-panel white-text darken-4">Error ao realizar o cadastro, verifique se todos os campos estão preenchidos</div>
     <?php endif; ?>
          <div class="row">
               <div class="input-field col s6">
                    <input id="first_name" name="dadosForm[first_name]" type="text" class="validate">
                    <label for="first_name">Primeiro do Usuario</label>
               </div>
               <div class="input-field col s6">
                    <input id="last_name" type="text" name="dadosForm[last_name]" class="validate">
                    <label for="last_name">Sobrenome do Usuárior</label>
               </div>
          </div>


          <div class="row">
               <div class="input-field col s6">
                    <input id="matricula" type="text" name="dadosForm[matricula]" class="validate">
                    <label for="matricula">Matrícula</label>
               </div>
               <div class="input-field col s4">
                    <select name="dadosForm[unidades]">
                         <option value="" disabled selected></option>
                         <option value="maraba">Marabá</option>
                         <option value="parauapebas">Parauapebas</option>
                         <option value="paragominas">Paragominas</option>

                    </select>
                    <label>Unidade pertencente</label>
               </div>

          </div>

          <div class="row">


               <div class="input-field col s6">
                    <input id="email" type="email" name="dadosForm[email]" class="validate">
                    <label for="email">E-mail</label>
               </div>
               <div class="input-field col s6">
                    <input id="senha" name="dadosForm[senha]" type="text" class="validate">
                    <label for="senha">Senha</label>
               </div>

          </div>



          <input type="submit" class="btn" value="Adicionar"/>
     </form>
</div>




