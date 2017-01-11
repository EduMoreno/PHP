<div class="container">
    <div id="titulo">Articulos</div>
<?php 
// Variable para filtrar los post inicializada vacia
$filtro="";
$valor="";

// Si se ha mandado el filtro
if (isset($_POST["filtro"])) {
    // Asignamos el filtro
    $filtro = $_POST["filtro"];
    $valor = $_POST["filtroValor"];
}

// Guardamos en data la lista de objetos que nos devuelve la base de datos.
$data["articulos"] = Articulo::getArticulos($filtro, $valor);

// Para cada objeto de data
foreach ($data["articulos"] as $articulo) {
    ?>
    <div class="article"> 
        <h2 class="page-header article-title"><?=$articulo->getTitulo()?></h2>
        <div class="article-meta">
            Escrito por: 
                <form class="inline" action="../Controller/index.php" method="post">
                    <input class="submitLink" type="submit" value="<?=$articulo->getAutor()?> ">
                    <input type="hidden" name="filtro" value="autor">
                    <input type="hidden" name="filtroValor" value="<?=$articulo->getAutor()?>">
                </form>
            en <?=$articulo->getFecha()?>
        </div>
        <article class="article-body"><?=$articulo->getArticulo()?></article>
        <footer>
            <div class="footer-meta">Categoria: 
                <form class="inline" action="../Controller/index.php" method="post">
                    <input class="submitLink" type="submit" value="<?=$articulo->getCategoria()?>">
                    <input type="hidden" name="filtro" value="categoria">
                    <input type="hidden" name="filtroValor" value="<?=$articulo->getCategoria()?>">
                </form>
            <?php if ($articulo->getEditado() == 1) { ?> <span class="article-edit">Ultima Edicion: <?=$articulo->getFechaEdicion()?></span> <?php } ?>
            </div>
            
            <form class="inline" action="../Controller/Modificar.php" method="post">
                <input class="btn btn-primary" type="submit" value="Actualizar">
                <input type="hidden" name="modificarId" value="<?=$articulo->getId()?>">
                <input type="hidden" name="modificarTitulo" value="<?=$articulo->getTitulo()?>">
                <input type="hidden" name="modificarArticulo" value="<?=$articulo->getArticulo()?>">
                <input type="hidden" name="modificarCategoria" value="<?=$articulo->getCategoria()?>">
                <input type="hidden" name="modificarAutor" value="<?=$articulo->getAutor()?>">
            </form>
            <form class="inline" action="../Controller/Baja.php" method="post">
                <input class="btn btn-danger" type="submit" name="baja" value="Borrar">
                <input type="hidden" name="bajaId" value="<?=$articulo->getId()?>">
            </form>
        </footer>
    </div>
<?php 
}
?>
</div>
