<?php

    include("conexion.php");

    if (isset($_POST['register'])){
        if(
            strlen($_POST['id']) >= 1 &&
            strlen($_POST['nom']) >= 1 &&
            strlen($_POST['tel']) >= 1 &&
            strlen($_POST['corr']) >= 1 &&
            strlen($_POST['mens']) >= 1
            ) {
                $id = trim($_post['id']);
                $nom = trim($_post['nom']);
                $tel = trim($_post['tel']);
                $corr = trim($_post['corr']);
                $mens = trim($_post['mens']);
                $consulta = "INSERT INTO datos(id,nom,tel,correo,mensaje)
                    VALUES('$id','$nom','$tel','$corr','$mens')";
                $resultado = mysqli_connect($conex, $consulta);
                if ($sesultado) {
                    ?>
                <h3 class="success"> "Tu registro se a completado" </h3>
                <?php    
                }
        }
    }

?>