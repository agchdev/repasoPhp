<?php
    function validarUsu(){
        $nombre = $_POST["nombre"];
        $pass = $_POST["contraseña"];
        $fech = new DateTime($_POST["fecha"]);
        
        echo $pass;
        $patron = "'^(?=(.*[0-9]){2,})(?=.*[A-Z])(?=(.*[\W_]){3,}).{8,20}$'";
        if(preg_match($patron, $pass)){
            echo "<p>fufa</p>";
        }else{
            echo "<p>NO fufa</p>";
        }

        $timestamp = time();
        echo $timestamp;  

        $fecha2 = new DateTime();
        echo "<br>".$fecha2->format('Y-m-d');
        // Fecha de hace dos dias
        $fecha2->modify('-2 day');
        echo "<br>".$fecha2->format('Y-m-d');
        $fecha2->modify('-18 year');
        echo "<br>".$fecha2->format('Y-m-d');

        if($fech > $fecha2){
            echo "<br>menor de 18";
        }

        $fechoxd = new DateTime();
        $fechoxd2 = new DateTime();
        echo "<br>".$fechoxd->format('Y-m-d');
        $fechoxd->modify('-3 day');
        $fechoxd2->modify('+3 day');
        echo "<br>".$fechoxd->format('Y-m-d');
        if($fech > $fechoxd){
            echo "<br>menor de 18";
        }

    }

    

    if(isset($_REQUEST["action"])) { // Si se ha pulsado algun boton
        $action = $_REQUEST["action"]; // Guardamos la accion
        $action();
    }else{
        require_once('./fechaqs.php');    
    }
?>