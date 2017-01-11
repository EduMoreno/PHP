<div class="container">
    <section class="form">
        <h2 id="titulo">Modificar Articulo</h2>
        <form action="../Controller/Modificar.php" method="post">
            <div class="form-group">
            <h4>Titulo:</h4>
            <input class="form-control" type="text" name="tituloM" placeholder="<?=$_POST["modificarTitulo"]?>" autofocus>
            </div>
            <div class="form-group">
            <h4>Descripcion:</h4>
            <textarea class="form-control" name="articuloM" placeholder="<?=$_POST["modificarArticulo"]?>"></textarea>
            </div>
            <div class="form-group">
            Autor: 
            <input class="form-control" type="text" name="autorM" placeholder="<?=$_POST["modificarAutor"]?>">
            </div>
            <div class="form-group">
            Categoria:
            <input class="form-control" type="text" name="categoriaM" placeholder="<?=$_POST["modificarCategoria"]?>">
            </div>
            <input type="hidden" name="idM" value="<?=$_POST["modificarId"]?>">
            <input class="btn btn-primary" type="submit" name="modificar" value="Modificar">
        </form>
    </section>
</div>