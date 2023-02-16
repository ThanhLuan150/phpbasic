<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 3</title>
    <link rel="stylesheet" href="/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <script src="/bootstrap-5.2.2-dist/js/jquery.min.js"></script>
    <script src="/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .container{
            margin-top:10px;
        

        }
        .title{
            color:white;
            text-align: center;
        }
        .list_schools{
            display: grid ;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap:20px;
            list-style-type:none;
            
        }
</style>
</head>
<body>
<?php
        $phones = array(
            '<p style="border-radius:15px;background:red;">Nổi bậc nhất</p>' => array(
                'NB01' => array(
                    'image' => '<img src="https://cdn.nguyenkimmall.com/images/detailed/716/10048676-dien-thoai-samsung-galaxy-a52-4g-128gb-xanh-1.jpg" style="width:250px; height:300px" />',
                    'name' =>'Samsung Galaxy  A52',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i> <span>1999 đánh giá</span>'
                ),
                'NB02' => array(
                    'image' => '<img src="https://cdn.tgdd.vn/Products/Images/42/226463/Samsung-Galaxy-a32-5G--600x600.jpg" style="width:250px; height:300px" />',
                    'name' =>'Samsung Galaxy  A32',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span>1100 đánh giá</span>'
                ),
                'NB03' => array(
                    'image' => '<img src="https://shophuyhoang.com/wp-content/uploads/2021/04/2246ee27e39a2e22e110be73abddd7e9-1024x1024.jpg" style="width:250px; height:300px" />',
                    'name' =>'Samsung Galaxy  A42',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del>  </p>',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span>999 đánh giá</span>'
                ),
                'NB04' => array(
                    'image' => '<img src="https://cf.shopee.vn/file/23447cce04acd51e777a96d20d222643" style="width:250px; height:300px" />',
                    'name' =>'Samsung Galaxy  A22',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span> 2999 đánh giá</span>'
                ),
            ),
            '<p style="border-radius:15px;background:blue;">Sản phẩm mới</p>'  => array(
                'SP01' => array(
                    'image' => '<img src="https://cdn.nguyenkimmall.com/images/detailed/716/10048676-dien-thoai-samsung-galaxy-a52-4g-128gb-xanh-1.jpg" style="width:250px; height:300px" />',
                    'name' =>'Samsung Galaxy  A52',
                    'price' =>' <p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span> 3999 đánh giá</span>'
                ),
                'SP02' => array(
                    'image' => '<img src="https://cdn.nguyenkimmall.com/images/detailed/716/10048676-dien-thoai-samsung-galaxy-a52-4g-128gb-xanh-1.jpg" style="width:250px; height:300px" />',
                    'name' =>'Samsung Galaxy  A52',
                    'price' =>'<p style="color:red">4000000 VNĐ <del style="color:black">4400000 VND </del></p>',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i> <span>  2000 đánh giá</span>'
                ),
                'SP03' => array(
                    'image' => '<img src="https://cdn.nguyenkimmall.com/images/detailed/716/10048676-dien-thoai-samsung-galaxy-a52-4g-128gb-xanh-1.jpg" style="width:250px; height:300px" />',
                    'name' =>'Samsung Galaxy  A52',
                    'price' =>'<p style="color:red">4000000 VNĐ  <del style="color:black">4400000 VND </del></p> ',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><span>999 đánh giá</span>'
                ),
                'SP04' => array(
                    'image' => '<img src="https://cdn.nguyenkimmall.com/images/detailed/716/10048676-dien-thoai-samsung-galaxy-a52-4g-128gb-xanh-1.jpg" style="width:250px; height:300px" />',
                    'name' =>'Samsung Galaxy  A52',
                    'price' =>' <p style="color:red">4000000 VNĐ  <del style="color:black">4400000 VND </del> </p>',
                    'icon' => '<i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i><i class="fa-solid fa-star" style="color:orange"></i> <span>999 đánh giá</span>'
                ),
            )
         )

    ?>

<div class="container" >
    <?php 
    foreach ($phones as $k => $v) {
        ?>
        <h2 class="title"><?php echo $k; ?></h2>
        <ul  class="list_schools">
            <?php foreach ($v as $k1 => $v1) {
                ?>
                <li>
                    <p><span></span> <?php echo $v1['image'] ?></p>
                    <p> <?php echo $v1['name'] ?></p>
                    <p> <?php echo $v1['price'] ?></p>
                    <p><?php echo $v1['icon'] ?></p>
                </li>
        <?php } 
        ?>
        </ul>
            
    <?php
    } 
    ?> 
</div>
</body>
</html>