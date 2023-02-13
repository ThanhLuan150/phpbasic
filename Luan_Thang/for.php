<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vòng lặp for</title>
    <style>
        .do{
            color:red;
            background: red;
        }
        .xanh{
            color:green;
            background: green;
        }
    </style>
</head>
<body>
<?php
        for ($a = 0; $a <= 5; $a++){
            for($b = 0; $b <= 5; $b++) {
                if ($a % 2 == 0) {
                    echo "<div style='background:blue; margin:10px; width:50px; height:50px;display:inline-block;'></div>";
                }
                else {
                    echo "<div style='background:red; margin:10px; width:50px; height:50px;display:inline-block;'></div>";
                }
            }
            echo '<br>';
        }
    ?> <br> <br>


</body>
</html>

