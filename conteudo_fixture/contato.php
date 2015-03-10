<div class="jumbotron">
    <div class="container">
        <h3>Entre em contato conosco através do formulário abaixo:</h3>
    </div>
</div>
<div class="container">
    <div class="row">
            <div class="col-md-4">
                <form class="form-signin" method="post" action="/contatoPost.php">
                    <h2 class="form-signin-heading">Formulário de contato</h2>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" required autofocus>
                    <br/>
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                    <br/>
                    <label for="assunto" class="sr-only">Assunto</label>
                    <input type="text" id="assunto" name="assunto" class="form-control" placeholder="Assunto" required>
                    <br/>
                    <label for="mensagem" class="sr-only">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" cols="30" rows="7" class="form-control" placeholder="Deixe aqui sua mensagem" required ></textarea>
                    <br/>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
                </form>
            </div>
    </div>
