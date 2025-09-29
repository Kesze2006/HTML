<?php
    session_start();
    $_SESSION["jeloltek"] = [];
    
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <input type="submit" value="Kádár" name="kadar">
        <input type="submit" value="Lajos" name="lajos">
        <input type="submit" value="Béla" name="bela">
    </form>
</body>
</html>