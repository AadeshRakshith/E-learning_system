<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form fill</title>
</head>
<body>
    <form action="./data.php" method="post">
        <label for="username">Name: </label>
        <input type="text" name="username" id="username" required>
        <br><br>
        <label for="color">Favourite Color: </label>
        <input type="text" name="color" id="color" required>
        <br><br>
        <label for="Gender">Gender: </label>
        <input type="radio" name="gender" id="Gender" value="m" required>Male
        <input type="radio" name="gender" id="Gender" value="m" required>Female
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <input type="submit" value="submit">
    </form>
    
</body>
</html>