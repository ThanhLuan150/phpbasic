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

            $loaiphongErr = $tienanErr = $checkinErr = $checkoutErr = $giaclaErr =$ansangErr =$tamhoiErr ="";
            $loaiphong = $tienan = $checkin = $checkout =$giacla= $ansang=$tamhoi= "";

            $loaiphong= $_POST["loaiphong"];
             $tienan = $_POST["tienan"];
             $giacla =$_POST["giatla"];
             $ansang =$_POST["ansang"];
             $tamhoi =$_POST["tamhoi"];
             $checkin=strtotime( $_POST["checkin"]);
             $checkout=strtotime($_POST["checkout"]); 
             $date = abs($checkout- $checkin)  ;
             $ngaytra = floor($date / (60*60*24))*$loaiphong;
             $giacla_ansang_tamhoi= $giacla + $ansang + $tamhoi ;
             $tong = $loaiphong +$ngaytra + $giacla_ansang_tamhoi + $tienan;
            function loaiphong($loaiphong){

                if ($_POST["loaiphong"]) {
                    if ($_POST["loaiphong"]==1) {
                         echo "A";
                    }
                    if ($_POST["loaiphong"]==2) {
                         echo "B";
                     }
                     if ($_POST["loaiphong"]==3) {
                         echo "C";
                    }
                    if ($_POST["loaiphong"]==4) {
                         echo "D";
                    }
                return $loaiphong;

                }
        }

            function tienan($tienan,$tienanErr){
                $tienan = $_POST["tienan"];
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["tienan"])) {
                        $tienanErr = "Vui lòng nhập tiền:";
                         return  $tienanErr;
                    }
                    else
                    {
                        $tienan = test_input($_POST["tienan"]);
                         return  $tienan;
                    }
            }
        }
            

            function checkincheckout($checkin,$checkout,$checkinErr,$checkoutErr){
                $checkin=strtotime( $_POST["checkin"]);
                $checkout=strtotime($_POST["checkout"]);
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    if (empty($_POST["checkin"])){
                        $checkinErr = "Vui lòng điền đầy đủ";
                         return $checkinErr;
                    }
                    else 
                        {
                            $checkin = test_input($_POST["checkin"]);
                             return  $checkin;
                        }
                    if (empty($_POST["checkout"])){
                        $checkoutErr = "Vui lòng điền đầy đủ";
                         return $checkoutErr;
                        }
                    else 
                        {
                        $checkout = test_input($_POST["checkout"]);
                         return $checkout;
                        }
                    }
                
                    
                }
             
        

            function thoigian($date,$checkin,$checkout){
                $checkin=strtotime( $_POST["checkin"]);
                $checkout=strtotime($_POST["checkout"]); 
                return $date = abs( $checkout- $checkin) ;
            }

            function ngaytra($ngaytra,$date,$loaiphong){

                return $ngaytra = floor( $date / (60*60*24))*$loaiphong;
            }

            function giacla_ansang_tamhoi($giacla_ansang_tamhoi, $giacla, $ansang, $tamhoi ){
                $giacla =$_POST["giatla"];
                $ansang =$_POST["ansang"];
                $tamhoi =$_POST["tamhoi"];
                return  $giacla_ansang_tamhoi= $giacla + $ansang + $tamhoi ;
            }
            function tong($tong ,$loaiphong,$ngaytra,$giacla_ansang_tamhoi,$tienan){

                return $tong = $loaiphong +$ngaytra + $giacla_ansang_tamhoi + $tienan;
            }
        ?>
    
    
    
    <form id="forml" name="forml" method="post" action="function.php">
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
                <span class="error">* <?php echo $loaiphongErr;?></span>
           <br> <br>
                Check in:
                <input class="input"  type="date" name="checkin"value="" >
                <span class="error">* <?php echo $checkinErr;?></span>
            <br> <br>
                Check out:
                <input class="input" type="date" name="checkout" value="">
                <span class="error">* <?php echo $checkoutErr;?></span>
            <br><br>
                Tiền ăn:
                <input class="input" type="text" name="tienan" value=""placeholder="Vui lòng nhập">
                <span class="error">* <?php echo $tienanErr;?></span>
            <br> <br>
                Dịch vu:
                    <input type="radio" name="giacla" value="1000"> Giặt là
                <br> <br>
                    <input type="radio" name="ansang" value="2000"> Ăn sáng
                <br> <br>
                    <input type="radio" name="tamhoi" value="3000"> Tắm hơi
                <br><br>
                
            <br> <br>
            <button type="submit" class="bt1" >OK</button>
            <button type="cancle" class="bt1">Cancle</button>
        </div>
    </form>
    <form id="forml" action='' method='post'>
    Bill
            TypeRoom:<?php echo loaiphong($loaiphong) ?> <br> <br>
            Rental hours:<?php echo $ngaytra?> <br> <br>
            Money for meals: <?php echo $tienan ?> <br> <br>
            Money for service: <?php echo $giacla_ansang_tamhoi ?> <br> <br>
            Total: <?php echo $tong ?> <br> <br>
    </form>    
</body>
</html>