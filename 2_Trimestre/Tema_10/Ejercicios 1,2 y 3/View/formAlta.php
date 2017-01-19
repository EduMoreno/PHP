   <?php include '../View/Menu.php'; ?>
<div class="container">
  
    <section class="form">
        <h2 id="titulo">Añadir Articulo</h2>
        <form action="../Controller/Alta.php" method="post">
            <div class="form-group">
            <h4>Titulo:</h4>
            <input class="form-control" type="text" name="tituloA" placeholder="Titulo" autofocus required>
            </div>
            <div class="form-group">
            <h4>Descripcion:</h4>
            <textarea class="form-control" name="descripcionA" placeholder="Descripcion" required></textarea>
            </div>
            <div class="form-group">
            Autor:
            <input class="form-control" type="text" name="autorA" placeholder="Autor" required>
            </div>
            <div class="form-group">    
            Categoria: 
            <input class="form-control" type="text" name="categoriaA" placeholder="Categoria">
            </div>
            <input class="btn btn-primary" type="submit" name="Alta" value="Añadir">
        </form>
    </section>
</div>

 <?php include '../View/piedepagina.php'; ?>