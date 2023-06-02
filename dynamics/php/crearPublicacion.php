<?php
    $include = include("./config.php");
    $con = connect();

    if ($include && $con){
        $ID_USUARIO = 1;
        $descripcion = "descripcion nueva";
        $fecha = "01-06-2023";
        $hora = "10:00";
        $corazon = 1;
        $n_comentarios = 3;
        $n_retuits = 5;
    
        //$peticion = "INSERT INTO publicacion VALUES(0,1,'$descripcion','$fecha','$hora',$corazon,$n_comentarios,$n_retuits)";
        //$query = mysqli_query($con, $peticion);
        
        $sql = "SELECT * FROM publicacion";
        $query = mysqli_query($con, $sql);
        
        //var_dump($query);
        //$datos=mysqli_fetch_assoc($query);
        //var_dump($datos);

        while ($row = mysqli_fetch_assoc($query)) {
            //echo $row["n_comentarios"];
            echo "<br><br><br>";
            var_dump($row);
            
        }


    }


?>