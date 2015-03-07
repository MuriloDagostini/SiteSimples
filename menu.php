<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home">Site Simples</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="home">Home</a></li>
                <li><a href="empresa">Empresa</a></li>
                <li><a href="produtos">Produtos</a></li>
                <li><a href="servicos">Serviços</a></li>
                <li><a href="contato">Contato</a></li>
            </ul>
            <form action="busca.php" method="post">
                <input type="text" name="busca" id="busca" class="search" placeholder="Buscar" />
                <input class="searchIcon" src="img/lupa.png" type="image"></button>
            </form>
        </div><!--/.nav-collapse -->
    </div>
</nav>