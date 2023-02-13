<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    ini_set('display_errors',0);
    $loaiphong= $_POST["loaiphong"];
    $tienan = $_POST["tienan"];
    $giacla=$_POST["giatla"];
    $ansang=$_POST["ansang"];
    $tamhoi=$_POST["tamhoi"];
    $checkin=strtotime( $_POST["checkin"]);
    $checkout=strtotime($_POST["checkout"]); 
    $date = abs($checkout- $checkin)  ;
    $ngaytra = floor($date / (60*60*24)) * $loaiphong;
    $giacla_ansang_tamhoi = $giatla + $ansang + $tamhoi ;
    $tong = $loaiphong +$ngaytra + $giacla_ansang_tamhoi + $tienan;

    function typeroom($loaiphong){
            if ($loaiphong =="1") {
                # code...
            }
    }
    typeroom($loaiphong);

    function rentalhour($tienan){
        return $tienan;
    }

    

?>
    <form id="forml" name="forml" method="post" action="index.php">
        <div class="tinhtien" >
            <h1 class="tinhtienh1">TÍNH TIỀN</h1>
        </div>
        <div class="body">
            Loại phòng:
                <select name="loaiphong" class="input"  >
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                </select>
           <br> <br>
                Check in:
                <input class="input"  type="date" name="checkin"value="" >
            <br> <br>
                Check out:
                <input class="input" type="date" name="checkout" value="">
            <br><br>
                Tiền ăn:
                <input class="input" type="text" name="tienan" value=""placeholder="Vui lòng nhập">
            <br> <br>
                Dịch vu:
                    <input type="radio" name="1" value="1"> Giặc là
                <br> <br>
                    <input type="radio" name="ansa" value="2"> Ăn sáng
                <br> <br>
                    <input type="radio" name="tamhoi" value="3"> Tắm hơi
            <br> <br>
            <button type="submit" class="bt1" >OK</button>
            <button type="cancle" class="bt1">Cancle</button>
        </div>
    </form>
    
        <form id="forml" action='' method='post'>
            Bill
            TypeRoom:<input type="text" name="" value="<?php echo typeroom($_POST['loaiphong']) ?>">< <br> <br>
            Rental hours: <input type="text" name="" value="<?php echo $ngaytra?>"> <br> <br>
            Money for meals:<input type="text" name="" value="<?php echo $tienan ?>">  <br> <br>
            Money for service:<input type="text" name="" value="<?php echo $giacla_ansang_tamhoi ?>">  <br> <br>
            Total:<input type="text" name="" value="<?php echo $tong?>">  <br> <br>
        </form>
   
    
</body>
</html>