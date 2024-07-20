<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adatok</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="signup.php" method="post">
        <h2>Sign up</h2>
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
            <input class="bevitel" type="text" name="name" placeholder="Name"><br>
            <input class="bevitel" type="text" name="username" placeholder="Username"><br>
            <input class="bevitel" type="email" name="email" placeholder="Email addres"><br>
            <input class="bevitel" type="password" name="password" placeholder="Password"><br>
            <input class="bevitel" type="password" name="password-re" placeholder="Re-enter the password"><br>
        </div>
        
        <button type="submit" name="submit">Sign up</button>
        
    </form>
   
    

</body>
</html>