<?php
/* CLASE PARA LA CONEXION DE PHP CON ACCES 2003 */
class database {
 # variable para almacenar la conexion
 private $conexion;
 #Base de datos access 2003
 private  $name = 'eastaeon.mdb';
    /* METODO PARA CONECTAR CON LA BASE DE DATOS*/
 public function conectar()
 {
    # Directorio actual de la base de datos
    $db = getcwd()."\\".$this->name;
    if( is_file($db) )
    {
     # Se forma la cadena de conexión
     $dsn = "DRIVER={Microsoft Access Driver (*.mdb)};DBQ=".$db;
    # Se realiza la conexón con Access
    $this->conexion = odbc_connect( $dsn, '', 'eastaeon123' );
    if (!$this->conexion)
     exit( "Error: No se pudo completar la conexion ");
     else
        echo 'Conexión a ['.$this->name.' ]: Establecida';
    }
    else exit("Error: No existe archivo ".$this->name);
 }

 /* METODO PARA CERRAR LA CONEXION A LA BASE DE DATOS*/
 public function desconectar()
 {
  odbc_close( $this->conexion );
  echo 'Conexion a ['.$this->name.'] : Terminado ';
 }

/* METODO PARA REALIZAR UNA CONSULTA A BASE DE DATOS */
 public function consulta($q)
 {
   $resultado = odbc_exec( $this->conexion, $q) or die( odbc_errormsg() );
   return $resultado;
 }
}//fin clase

#_______________________Soy una barra separadora 🙂


?>
