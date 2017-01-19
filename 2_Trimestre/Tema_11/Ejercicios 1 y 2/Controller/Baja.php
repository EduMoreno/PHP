<?php

require_once '../Model/Articulo.php';

if (isset($_POST["baja"])) {
    
    $articulo = Articulo::getArticuloById($_POST["bajaId"]);
    
    $articulo->borrar();
    
    header('Location: ../Controller/index.php');
    
} else {
    
    ?>
<p class="error"> Se ha producido un error sera redirigido a la pagina anterior en 5 segundos</p>
<?php

    header("refresh:4;url=../Controller/index.php");

}

