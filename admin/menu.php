<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Site Simples</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="inicio">Início</a></li>
                <li><a href="paginas">Páginas</a></li>
                <li><a href="logout">Sair</a></li>
            </ul>
            <b style="color:#cccccc;float:right;margin-top:14px;">Olá <?=$_SESSION['usuario']?></b>
        </div><!--/.nav-collapse -->
    </div>
</nav>