<?php
function obtener_servicios() {

    try { //! si aparece un error lo manda al catch (debugear en caso de error)
        //* Importar las credenciales
        require 'database.php';

        //* Consulta SQL
        $sql = "SELECT * FROM servicios;";


        //* Realizar la consulta
        $consulta = mysqli_query($db, $sql);

        //* Acceder a los resultados
        /* echo '<pre>';
        var_dump( mysqli_fetch_assoc($consulta) );    
        echo '</pre>'; */

        return $consulta;
        
        //* Cerrar la conexion (opcional)
        mysqli_close($db);

        //! automaticamente php cierra la conexion, por eso es opcional. Esto ayuda a liberar memoria de la consulta y que no se sature.

    } catch(\Throwable $th) {
        var_dump($th);
    }
}

obtener_servicios();