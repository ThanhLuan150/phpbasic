<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<title>Thông tin chi tiết của khách hàng</title>
<link rel="stylesheet" href="cookies_doc.css">
</head>
<body>
    
    <div class="title">
        
        Kết quả sau khi nhấn <a  href="#"> click here! </a> của trang session.
    </div>

    <?php 
        echo '<div class="ket_qua">Xin chào '. $_COOKIE["khach_hang"].'<br>';
        echo '<a href="cookies.php"> Click để quay về trang đăng nhập </a>';
        echo '</div>';
        echo '<img class="img1" src="https://backlinks.vn/hinh-anh-shop-quan-ao/imager_113620.jpg">';
        echo '<img class="img2" src="https://tse2.mm.bing.net/th?id=OIP.OFwEtBDE6V4Geeo-7u8quAHaFJ&pid=Api&P=0">';

    ?>

</body>
</html>