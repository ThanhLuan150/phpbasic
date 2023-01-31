<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính diện tích Hình chữ nhật</title>
    <style>
        #forml{
            
            margin: auto;
            margin-top:100px;
        }
        table{
            border:0;
            width: 500px;
            margin: auto;
            background: #ffca97;
        }
        .tabletr{
            background-color: orange;
        }
        .tabletr1{
            background: yellow;
            border: 1px solid yellow;
        }
        .style1{
            text-align: center;
            color:#CC6600;
            font-size: 25px;
            margin-left:40px;
        }
        .style4{
            font-size: 20px;
            color:red;
        }
    </style>
</head>
<body>
    <?php
        ini_set('display_errors',0);
        $dai = $_POST["dai"];
        $rong =  $_POST["rong"];
        $dt = $dai*$rong;
    ?>
   
    <form id="forml" name="forml" method="post" action="S_hcn.php">
        <table>
            <tr class="tabletr">
                <td ><span class="stylel">DIỆN TÍCH HÌNH CHỮ NHẬT</span></td>
                <td></td>
            </tr>
            <tr class="tabletr1">
                <td ><span class="style4">Chiều dài:</span></td>
                <td ><label >
                        <input style="background:pink; border:2px solid pink; border-radius:15px;"  type="text" name="dai" id="dai" value="<?php echo $_POST["dai"];?>" >
                </label>
                </td>
            </tr>
            <tr class="tabletr1">
                <td>
                    <span class="style4">Chiều rộng:</span>
                </td>
                <td >
                    <label >
                        <input   style="background:pink; border:2px solid pink; border-radius:15px;" type="text" name="rong" id="rong" value="<?php echo $_POST["rong"]; ?>">
                    </label>
                </td>
            </tr>
            <tr class="tabletr1">
                <td>
                    <span class="style4">Diện tích:</span>
                </td>
                <td >
                    <label >
                        <input style="background:pink; border:2px solid pink; border-radius:15px;" type="text" name="dt" id="dt" value="<?php echo $dt;?>">
                    </label>
                </td>
            </tr>
            <tr class="tabletr1">
                <td >
                    <label>
                        <input  style="background:#FFFFE0; border:2px solid #FFFFE0; border-radius:15px;" type="submit" name="Submit" value="Tính toán">
                    </label>
                </td>
                <td></td>
            </tr>
        </table>
    </form>
    
</body>
</html>