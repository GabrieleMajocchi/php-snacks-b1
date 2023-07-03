<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Page</title>
</head>
<body>
    <div class="container">
        <h2>Accedi al tuo account</h2>
        <form method="POST" action= "./response.php">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="mail">Email:</label>
                <input type="text" name="mail" id="mail" required>
            </div>
            <div class="form-group">
                <label for="age">Età:</label>
                <input type="text" name="age" id="age" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Accedi">
            </div>
        </form>
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
}

h2 {
    color: #333;
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    border-radius: 3px;
    border: 1px solid #ccc;
    box-sizing: border-box;
    font-size: 16px;
    padding: 10px;
    width: 100%;
}

input[type="submit"] {
    background-color: #4CAF50;
    border: none;
    border-radius: 3px;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    padding: 10px;
    width: 100%;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

p {
    text-align: center;
}

a {
    color: #4CAF50;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

</style>