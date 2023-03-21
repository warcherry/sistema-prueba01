<?php
/**
 * creado el 18 de marzo 2023
 * hora 13:00
 */
/** variables globales */
define('SERVIDOR','localhost');    /**servidor a contratar cambiar en este punto */
define('USUARIO','root');           /**nombre de usuario ahora esta por defecto  */
define('PASSWORD','');            /**estamos sin contraseña */
define('BD','sistemadeventas');     /** es nuestra base de datos */

/**conexion a la base de datos concatenado */
$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

/**verificacion si esta conectando con la base de datos  */
try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //$pdo = new PDO($servidor, username: USUARIO, passwd: PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAME utf8")); error por otra version de php arreglado con chatgpt
    //echo "La conexion a la base de datos fue con exito";
} catch (PDOException $e) {
    //print_r($e);
    echo "Error al conectar a la base de datos";

}

$URL = "http://localhost/www.sistemadeventas.com";     /**VARIABLE GLOBAL PARA SUBIR A UN SERVIDOR  <?php echo $URL;?> */
