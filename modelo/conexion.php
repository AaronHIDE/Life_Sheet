<?php

class Conexion{
    public static function conectar() {
        $nameServer = "localhost";
        $baseDatos = "Life_Sheet";
        $usuario = "root";
        $password = "";
    
        try {
          $objConexion = new PDO("mysql:host=localhost;dbname=$baseDatos;",$usuario,$password);
          $objConexion->exec('set names utf8');
        } catch (Exception $e) {
          $objConexion = $e;
        }
    
        return $objConexion;
      }
}