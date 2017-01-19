<?php
require_once '../Model/Articulo.php';
require_once 'Twig/lib/Twig/Autoloader.php';

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
$twig = new Twig_Environment($loader);

if (isset($_POST["modificar"])) {
    
    $articulo = Articulo::getArticuloById($_POST["idM"]);
    
    $fecha = date('d-m-Y H:i');
    $articulo->setter($_POST["tituloM"], $_POST["articuloM"], $_POST["autorM"], $fecha, $_POST["categoriaM"]);
    $articulo->modificar();
    
    header('Location: ../Controller/index.php');
    
} else {

   // Datos del articulo a modificar para pasar por la plantilla twig
    $data["id"] = $_POST["modificarId"];
    $data["titulo"] = $_POST["modificarTitulo"];
    $data["articulo"] = $_POST["modificarArticulo"];
    $data["autor"] = $_POST["modificarAutor"];
    $data["categoria"] = $_POST["modificarCategoria"];
    
    // Mostramos el formulario mediante la plantilla twig
    echo $twig->render('formModificar.html.twig', $data);
}