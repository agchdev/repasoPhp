<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> 1. Cadena vacía.</h2>
    <?php
        $cadenaVacia = "";
        if(empty($cadenaVacia)){
            echo "<p>La cadena está vacía</p>";
        }else{
            echo "<p>La cadena NO está vacía</p>";
        }
    ?>
    <h2> 2. Cadena con una única palabra (sólo letras, puede haber espacios delante y detrás).</h2>
    <?php
        $cadena2 = "   hola    ";
        $patron = "'^\s*([a-zA-Z]+)\s*$'";
        if(preg_match($patron, $cadena2)){
            echo "<p>Cadena con una única palabra</p>";
        }else{
            echo "<p>error</p>";
        }
    ?>
    <h2>9. Contraseña (al menos seis caracteres, debe contener</h2>
    <h2>a. Debe tener entre 8 y 20 caracteres.</h2>
    <h2>b. Debe contener al menos 2 números (no tienen que ser consecutivos).</h2>
    <h2>c. Debe contener al menos 1 letra mayúscula y 3 caracteres especiales (no consecutivos).</h2>
    
    <?php
        /**
         *  ^ -> Que empiece por
         *  ^(?=(.*[0-9]){2,}) => Que solo puede introducir 2 o mas numeros
         *      Lookahead positivo (?=...): Revisa que, tras la posición actual, exista un patrón específico.
         *      Lookahead negativo (?!...): Revisa que, tras la posición actual, no exista un patrón específico.
         *      . => Que puede haber cualquier caracter
         *      * => todas las veces que quiera
         *      [0-9] => a posterior un numero de entre el 0 y el 9
         *      {2,} => quiere decir que 2 o muchos
         *  (?=.*[A-Z]) => Que solo puede introducir al menos una letra mayuscula
         *      Lookahead positivo (?=...): Revisa que, tras la posición actual, exista un patrón específico.
         *      . => Que puede haber cualquier caracter
         *      * => todas las veces que quiera
         *      [A-Z] => a posterior un caracter entre la A y la Z (mayúscula)
         *  (?=(.*[\W_]){3,}).{8,20}$
         *      Lookahead positivo (?=...): Revisa que, tras la posición actual, exista un patrón específico.
         *      . => Que puede haber cualquier caracter
         *      * => todas las veces que quiera
         *      [\W_] => cualquier caracter especial
         *      {3,} => 3 o mas veces
         *      . => Que puede haber cualquier caracter
         *      {8,20} => 8 a 20 caracteres
         */
        $cadena2 = "aLe-jaAn%d_ro22";
        $patron = "'^(?=(.*[0-9]){2,})(?=.*[A-Z])(?=(.*[\W_]){3,}).{8,20}$'";
        if(preg_match($patron, $cadena2)){
            echo "<p>Válida</p>";
        }else{
            echo "<p>error</p>";
        }

        $patron2 = "'^(?=(.*[0-9]){2,})(?=.*[A-Z])(?=(.*[\W_]){3,}).{8,20}$'"
    ?>
</body>
</html>