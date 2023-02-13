<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        ini_set('display_errors',0);
        $type_room = $_POST["room"] ;
        $check_in = strtotime ($_POST["check_in"]);
        $check_out = strtotime ($_POST["check_out"]);
        $tien_an = $_POST["thit"];
        $giat_la = $_POST["giat"];
        $an_sang = $_POST["an_sang"];
        $tam_hoi = $_POST["tam"];
        $date = ($check_out - $check_in);
        $rental_hour = (floor($date / (60*60*24))) ;
        $service = (int)$giat_la + (int)$an_sang + (int)$tam_hoi;
        $total = (int)$tien_an + (int)$service + ((int)$type_room  * (int)$rental_hour) ;
    ?>

    <form action="baitapvenha.php" id="forml" method="post">
        <div class="tinh_tien">
            <b><h1 class="card"> Tính tiền</h1></b> 
        </div> 
        <div class="body">
            <tr class="hotel">
                <td>
                    <b>Loại phòng: </b> 
                </td>
                <td>
                    <label>
                        <select name="room" id="select">
                            <option value="1000">A</option>
                            <option value="800">B</option>
                            <option value="500">C</option>
                        </select> <br> <br>
                    </label>
                </td>
                <td>
                    <b>Check in: </b>
                </td>
                <td>
                    <label name="lbcheck_in">
                        <input type="date" name="check_in" id="txtDate"> <br> <br>
                    </label>
                </td>

                <td>
                    <b>Check out: </b>
                </td>
                <td>
                    <label name="lbcheck_out">
                        <input type="date" name="check_out" id="txtDate"> <br> <br>
                    </label>
                </td>
                <td>
                    <b>Tiền ăn: </b>
                </td>
                <td>
                    <input type="number" name= "thit" value=""> <br> <br>
                </td>
                
                <td>
                    <b>Dịch vụ: </b> 
                </td>
                <td>
                    <label >
                        <input type="checkbox" name = "giat" value = "2000" id="one"> giat la<br> 
                        <input type="checkbox" name = "an_sang" value = "4000" id="one"> an sang <br> 
                        <input type="checkbox" name = "tam" value = "6000" id="one"> tam hoi <br>
                    </label>
                </td>
                <tr>
                    <div class="hello">
                        <td cosplay = "2">
                            <div class="lum">
                        <button type="submit" id = "ok">Tính</button>
                            </div>
                        </td cosplay = "2">
                        <td>
                            <div class="lam">
                                <button type="cancel" id = "cancel">Cancel</button>
                            </div>
                        </td>
                    </div>
                    
                        
                </tr>
                
            </tr>
        </div>
    </form> <br> <br>

    <div class="bill">
        <p><h1 class="pay">BILL</h1></p>
        <form action="" method ="post">
            Loại phòng: <input type="text" value="<?php echo $type_room ?>"> <br> <br>
            Giờ thuê: <input type="text" value="<?php echo $rental_hour ?>"> <br> <br>
            Tiền ăn: <input type="text" value="<?php echo $tien_an ?>"> <br> <br>
            Tiền dịch vụ: <input type="text" value="<?php echo $service ?>"> <br> <br>
            Tổng: <input type="text" value="<?php echo $total ?>">
        </form>
    </div>
</body>
</html>