<?php


class loginController{


public static function inicioSesion($data){
    try {
        $username = $data["username"];
        if(is_null($username)){
            ?>
            <script>
                alert("Error al iniciar sesion \n Debe completar el campo Nombre Usuario");
            </script>
            <?php
        } else{
            session_start();
            $_SESSION["username"] = $username;
            header("Location: ../View/home.php");
        }
    } catch (\Exception $e) {
        echo "Error: ". $e->getMessage();
    }


}


public static function cierreSesion(){
    try {
        session_start();
        session_destroy();
        header("Location: ./Index.php");
    } catch (\Throwable $th) {
        echo "Error". $th->getMessage();
    }
}

function insert_ClienteDB($data){
    try {
        $sql = "EXECUTE sp_ejemplo;"; 
        $resultado = conexionModel::execute($sql);
    } catch (\Throwable $th) {
        //throw $th;
    }
}

}

?>

