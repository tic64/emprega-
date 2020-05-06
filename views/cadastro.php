<form>
    <div class="form-row">
         <div class="form-group col-md-6">
            <label for="nomeempresa">Nome da Empresa</label>
            <input type="email" class="form-control" id="nomeempresa" placeholder="Nome completo">
        </div>
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="E-mail para informações">
        </div>
        <div class="form-group col-md-6">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Senha">
        </div>
        
        <div class="form-group col-md-6">
            <label for="repitaSenha">Repita a senha</label>
            <input type="password" class="form-control" id="repitaSenha" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" id="endereco" placeholder="1234 Main St">
    </div>
    <div class="form-group">
        <label for="cnpj">CNPJ</label>
        <input type="text" class="form-control" id="cnpj" placeholder="CNPJ" data-mask="00.000.000/0000-00" data-mask-selectonfocus="true">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
             <label for="inputCity">Cidades</label>
            <select id="inputCity" class="form-control">
                <?php $cont=0; foreach ($cidades as $cidade): ?>
                    <?php if($cont==0): ?>
                    <option value="<?php echo $cidade; ?>" selected><?php echo $cidade; ?></option>
                <?php else:?>
                    <option value="<?php echo $cidade; ?>"><?php echo $cidade; ?></option>
               <?php endif;
                $cont++;
               endforeach; ?>
                
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">Estado</label>
            <select id="inputState" class="form-control">
                <option selected>PA</option>
                
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">CEP</label>
            <input type="text" class="form-control" id="inputZip" data-mask="00000-000" data-mask-selectonfocus="true">
        </div>
    </div>
    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>

