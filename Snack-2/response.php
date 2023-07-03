<?php
        $name = $_POST["name"];
        $mail = $_POST["mail"];
        $age = $_POST["age"];

        if (strlen($name) > 3 && strpos($mail, "@") !== false && strpos($mail, ".") !== false && is_numeric($age)) {
            echo "Accesso riuscito";
        } else {
            echo "Accesso negato";
        }
    ?>