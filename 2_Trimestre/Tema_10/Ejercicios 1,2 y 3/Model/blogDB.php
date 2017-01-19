<?php

abstract class blogDB {
  private static $servidor = 'localhost';
  private static $bd = 'Blog';
  private static $usuario = 'root';
  private static $contrasena = '';

  public static function ConexionBD() {
    try {
      $conexion = new PDO("mysql:host=".self::$servidor.";dbname=".self::$bd.";charset=utf8", self::$usuario, self::$contrasena);
    } catch (PDOException $e) {
      echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
      die ("Error: " . $e->getMessage());
    }
 
    return $conexion;
  }
}
