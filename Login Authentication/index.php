<?php

session_start();
if(isset($_SESSION['user'])){
    header('location:home.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>PHP Login Authentication OOP PABW</h1>
    <h3><span></span>Login</h3>
    <form method="POST" action="login.php">
    <div>
        <input placeholder="Username" type="text" name="username" autofocus required>
    </div>
    <div>
        <input placeholder="Password" type="text" name="password" required>
    </div>
    
        <button type="submit" name="login"><span>Login</span></button>
    
    </form>
    <?php
    if(isset($_SESSION['message'])){
        ?>
        <div>
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php
        unset($_SESSION['message']);
    }
    ?>
    
</body>
</html>