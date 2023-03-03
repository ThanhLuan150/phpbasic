<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<title>Thông tin khách hàng</title>
<style>
    #forml{
            padding-left: 400px;
            padding-top:30px;
            width: 400px;
    }
    .hienthi{
            background-color:green;
            width: 380px;
            height: 350px;
            margin-left: 400px;
            padding-top:20px;
            padding-left: 20px;
            padding-top: 20px;

    }
    .tinhtien{
            background: greenyellow ;
            position: relative;
            top:22px;
    }
    .tinhtienh1{
            font-family: 'Times New Roman', Times, serif;
    }
    .body{
            background: green;
            padding-left:20px  ;
            padding-top: 10px;
            padding-bottom: 10px ;
    }
    .input{
            border-radius: 10px;
            height: 20px;
            border:1px solid white;
    }
    .bt1{
            border-radius:10px;
            border:1px solid white;
    }
</style>
</head>
<body>
    <?php 
        ini_set('display_errors',0);
        $_SESSION['user'] = array();
        if (!empty($_POST['name']) && !empty ($_POST['mail']) && !empty($_POST['phone'])&& !empty($_POST['add']))
        {
            $_SESSION['user'][]= $_POST['name'];
            $_SESSION['user'][]= $_POST['mail'];
            $_SESSION['user'][]= $_POST['phone'];
            $_SESSION['user'][]= $_POST['add'];
        }
    
         
        
    ?>
    <form id="forml" name="forml" method="post" action="session1.php">
        <div class="tinhtien" >
            <h1 class="tinhtienh1">Thông tin đăng nhập</h1>
        </div>
        <div class="body">
                Họ và tên:
                <input class="input"  type="text" name="name"value="<?php if(isset($_POST['name']))  echo $_POST['name']; ?>" >
            <br> <br>
                Email:
                <input class="input" type="text" name="mail" value="<?php if(isset($_POST['mail']))  echo $_POST['mail']; ?>">
            <br><br>
                Số điện thoại:
                <input class="input" type="text" name="phone" value="<?php if(isset($_POST['phone']))  echo $_POST['phone']; ?>">
            <br><br>
                Địa chỉ:
                <input class="input" type="text" name="add" value="<?php if(isset($_POST['add']))  echo $_POST['add']; ?>">
            <br> <br>
            <button type="submit" name="submit" class="bt1" >OK</button>
        </div>
    </form>
     <br> <br>   
    <div >
        <?php 
           if (isset ($_POST['submit'])){
                echo "<div class='hienthi'>";
                echo "<p>Thông tin chi tiết của khách hàng </p></br>";
                echo 'Tên khách hàng'.$_SESSION["user"][0] .'<br>';
                echo "Email".$_SESSION["user"][1].'<br>';
                echo "Số điện thoại".$_SESSION["users"][2].'<br>';
                echo "Địa chỉ".$_SESSION["user"][3].'<br>';
                echo"<a href='session2.php' >Click here! </a>";
            }
        ?>
    </div>
</body>
</html>