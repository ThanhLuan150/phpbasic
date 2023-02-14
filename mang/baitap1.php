<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 1</title>
</head>
<body>
    <?php 
        $course =array(
            'FRONTEND'=> array(
                                'title' => 'Khóa học lập trình Frontend Online',
                                'fee' => 1200000
            ),
            'PHP-MYSQL'=> array(
                                'title'=> 'Khóa học lập trình web PHP-MYSQL',
                                'fee' =>1680000
            )
        );
        foreach ($course as $k => $v) {
            echo "{$k}<br>";
            echo "--{$v['title']}<br>";
            echo "--{$v["fee"]}<br>";
        }
    ?>
</body>
</html>