<?php
   session_start();
   $_SESSION["name"] ="Lê Trương Thành Luân" ;
   $_SESSION["age"]="20 tuổi";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resuft page</title>
</head>
<body>
        <?php
            echo$_SESSION['name']. $_SESSION["age"]  ;
            echo "<a href='session1.php'>Nhấn vào đây</a>"
        ?>
</body>
</html>