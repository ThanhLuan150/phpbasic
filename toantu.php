<!DOCTYPE html>

<html>
<style>
.aa{
    color:red;
    font-size: px;
}
</style>
<body>
    <?php 
    $first_number =21;
    $second_number = 16;
    $tich = $first_number * $second_number;
    echo "$tich";
    echo "<br>";
    if ($first_number>$second_number){
        echo "Bạn A cao hơn bạn B";
        echo "<br>";
        echo "$tich";
    }else{
        echo "Bạn B cao hơn ban A";
    }
    ?>
    <?php echo "<br>" ?>
    <?php
     $mong1 = 1;
     $mong2 = 2;
     $mong3 = 2;
     $mong4 = 5;
     $mong5 = 5;
     $mong6 = 6;
     if($mong1 < $mong2){
         echo 'Ăn bánh chưng';
     }
     else{
         echo "Ra lại Đà Nẵng";
     }
    ?>
</body>
</html>