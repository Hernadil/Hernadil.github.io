<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>Log in</h2>
        <br>
        <p class="error">
         <?php
            if (isset($_GET['error'])) {
                echo $_GET['error'];
            }
          ?>
        </p>
        <br>
        <div class="cuccok">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit" name="submit">Log in</button>
        </div>
        
    </form>
</body>
</html>