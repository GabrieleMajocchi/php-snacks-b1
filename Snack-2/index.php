<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Page</title>
</head>
<body>
    
    <h1>Effettua il login:</h1>
    <form method="POST" action= "./response.php">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" required><br>
        <label for="mail">Email:</label>
        <input type="text" name="mail" id="mail" required><br>
        <label for="age">Età:</label>
        <input type="text" name="age" id="age" required><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>
