<?php
class conexionModel {
    /*
    Funcion que permite insercciones a BD
    */
    public static function execute($scriptSQL){
        try {
            $conexion = mysqli_connect(
                "localhost",
                "root@localhost",
                "",
                "bd_g09_appweb"
            ) or die("No se puede conectar a la DB");

            $resultado=mysqli_query($conexion, $scriptSQL);

        } catch (Exception $e) {
            echo "Error: ". $e->getMessage();
        }
    }

}

?>