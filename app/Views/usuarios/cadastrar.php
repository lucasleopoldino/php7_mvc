<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-body">
            <h2>Cadastre-se</h2>
            <small>Preencha o formulario abaixo para fazer seu cadastro</small>
            
            <form name="cadastrar" method="POST" action="<?= URL ?>usuarios/cadastrar">
                <div class="form-group">
                    <label for="nome">Nome: <sup class="text-danger">*</sup></label>
                    <input type="text" name="nome" class="form-control" id="nome" value="<?= $dados['nome'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input type="email" name="email" class="form-control" id="email" value="<?= $dados['email'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="senha" class="form-control" id="senha" value="<?= $dados['senha'] ?>" required >
                </div>
                <div class="form-group">
                    <label for="confirmar_senha">Confirme a Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="confirmar_senha" class="form-control" id="confirmar_senha" value="<?= $dados['confirmar_senha'] ?>" required >
                </div>
                
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                    </div>
                    <div class="col">
                        <a href="#">Voçe tem uma conta? faça login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
