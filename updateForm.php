
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="update.php">
        <input type="hidden" name="user-id" value="<?php echo $_GET['code']; ?>" >
        <input type="text" name="user-name" >
        <input type="text" name="user-pass" >

        <input type="submit" value="say hi!">
    </form>
    
</body>
</html>