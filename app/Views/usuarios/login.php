<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-body bg-secondary text-white">
            <h2>Login</h2>
        </div>
        <div class="card-body">
            <p class="card-text">
                Informe seus dados para fazer seu login</small>
            </p><small>
            
            <form name="login" method="POST" action="<?= URL ?>usuarios/login" class="mt-4">

                <div class="form-group">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input type="text" name="email" class="form-control <?= isset($dados['email_erro']) ? 'is-invalid' : '' ?>" id="email" value=""  >
                    <div class="invalid-feedback">
                        <?= isset($dados['email_erro']) ? $dados['email_erro'] : '' ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="senha" class="form-control <?= isset($dados['senha_erro']) ? 'is-invalid' : '' ?>" id="senha" value=""  >
                    <div class="invalid-feedback">
                        <?= isset($dados['senha_erro']) ? $dados['senha_erro'] : '' ?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" value="Logar" class="btn btn-info btn-block">
                    </div>
                    <div class="col-md-6">
                        <a href="<?= URL ?>usuarios/cadastrar">Não tem uma conta? Cadastre=se</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
