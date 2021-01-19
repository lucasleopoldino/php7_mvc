<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-body bg-secondary text-white">
            <h2>Cadastre-se</h2>
        </div>
        <div class="card-body">
            <p class="card-text">
                <small>Preencha o formulario abaixo para fazer seu cadastro</small>
            </p>
            <form name="cadastrar" method="POST" action="<?= URL ?>usuarios/cadastrar" class="mt-4">
                <div class="form-group">
                    <label for="nome">Nome: <sup class="text-danger">*</sup></label>
                    <input type="text" name="nome" class="form-control <?= isset($dados['nome_erro']) ? 'is-invalid' : '' ?>" id="nome" value="<?= $dados['nome'] ?>" >
                    <div class="invalid-feedback">
                        <?= isset($dados['nome_erro']) ? $dados['nome_erro'] : '' ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input type="text" name="email" class="form-control <?= isset($dados['email_erro']) ? 'is-invalid' : '' ?>" id="email" value="<?= $dados['email'] ?>"  >
                    <div class="invalid-feedback">
                        <?= isset($dados['email_erro']) ? $dados['email_erro'] : '' ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="senha" class="form-control <?= isset($dados['senha_erro']) ? 'is-invalid' : '' ?>" id="senha" value="<?= $dados['senha'] ?>"  >
                    <div class="invalid-feedback">
                        <?= isset($dados['senha_erro']) ? $dados['senha_erro'] : '' ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirmar_senha">Confirme a Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="confirmar_senha" class="form-control <?= isset($dados['confirmar_senha_erro']) ? 'is-invalid' : '' ?>" id="confirmar_senha" value="<?= $dados['confirmar_senha'] ?>"  >
                    <div class="invalid-feedback">
                        <?= isset($dados['confirmar_senha_erro']) ? $dados['confirmar_senha_erro'] : '' ?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                    </div>
                    <div class="col-md-6">
                        <a href="<?= URL ?>usuarios/login">Voçe tem uma conta? faça login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
