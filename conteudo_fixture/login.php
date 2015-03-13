    <div class="jumbotron">
        <div class="container">
            <h3>Para ter acesso a área restrita faça o login com seus dados:</h3>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form class="form-signin" method="post" action="/loginPost">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    <br/>
                    <label for="senha" class="sr-only">Senha</label>
                    <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                    <br/>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
                </form>
            </div>
        </div>