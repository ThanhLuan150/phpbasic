<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
    <link rel="stylesheet" href="bai1.css">
</head>
<body>
    <?php
        // định nghĩa các biến và đặt giá trị rỗng
        $emailErr = $firstnameErr = $lastnameErr = $passwordErr = "";
        $email = $firstname = $lastname = $password = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["email"])) {
                $emailErr = "Bắt buộc nhập";
            } else {
                $email = test_input($_POST["email"]);
                if (!preg_match("/^[a-zA-Z-' ]*$/",$email)) {
                $emailErr = "Bắt đầu nhập";
                }
            }
            
            if (empty($_POST["firstname"])) {
                $firstnameErr = "Bắt buộc nhập";
            } else {
                $firstname = test_input($_POST["firstname"]);
                // 
                if (!filter_var($firstname, FILTER_VALIDATE_EMAIL)) {
                $firstnameErr = "không rỗng, và chỉ nhập các ký tự";
                }
            }
            if (empty($_POST["lastname"])) {
                $lastnameErr = "Bắt buộc nhập";
            } else {
                $lastname = test_input($_POST["lastname"]);
                if (!filter_var($firstname, FILTER_VALIDATE_EMAIL)) {
                $lastnameErr = "không rỗng, và chỉ nhập các ký tự";
                }
            }
            if (empty($_POST["password"])) {
                $passwordErr = "Bắt buộc nhập";
            } else {
                $password = test_input($_POST["password"]);
                if (!filter_var($firstname, FILTER_VALIDATE_EMAIL)) {
                $passwordErr = "Invalid email format";
                }
            }
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>

    <form id="forml" method="post" action=" <?php echo htmlspecialchars( $_SERVER [ "PHP_SELF" ]); ?>"> 
        <div class="tinhtien" >
                <h1 class="tinhtienh1">Sign up</h1>
        </div>
        <div class="body">
            Work Email: 
                <input class="input" type="text" name="email" placeholder="Work Email">
                <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            First Name: 
                <input class="input" type="text" name="firstname" placeholder="First Name">
                <span class="error">* <?php echo $firstnameErr;?></span>
            <br><br>
            Last Name: 
                <input class="input" type="text" name="lastname" placeholder="Last Name">
                <span class="error">*<?php echo $lastnameErr;?></span>
            <br><br>
            Password:
            <input class="input" type="text" name="password" value="" placeholder="Password">
            <span class="error">* <?php echo $passwordErr;?></span>
            <br> <br>
            <input class="bt1" type="submit" name="submit" value="Submit"> 
            <br><br>
             
    </div>
        </form>

        <?php
        echo "<h2>Customer Information:</h2>";
        echo $email;
        echo "<br>";
        echo $firstname;
        echo "<br>";
        echo $lastname;
        echo "<br>";
        echo $password;
        ?>
</body>
</html>