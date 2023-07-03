<?php
            $name = $_POST["name"];
            $mail = $_POST["mail"];
            $age = $_POST["age"];

            if (strlen($name) > 3 && strpos($mail, "@") !== false && strpos($mail, ".") !== false && is_numeric($age)) {
                $passed = "passed";
            } else {
                $passed = "deny";
            }
        ?>

<!DOCTYPE html>
<html>
<head>
    <title>Risultato Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container <?php echo $passed; ?>">
        <?php
            if ($passed === "passed") {
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            }
        ?>
    </div>
</body>
</html>

<style>
body {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin: 100px auto;
    max-width: 400px;
    padding: 20px;
    text-align: center;
    color: white;
}

.passed{
    background-color: green;
}

.deny{
    background-color: red;
}

h2 {
    color: #333;
}

p {
    color: #555;
}
</style>