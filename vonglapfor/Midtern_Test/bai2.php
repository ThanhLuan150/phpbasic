<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 2</title>
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
            '<p style="border-radius:15px;background:red;">Giày dép</p>' => array(
                'NB01' => array(
                    'id'=>'01',
                    'image' => '<img src="https://reviewaz.vn/storage/giay-sandal-nu1.jpg" style="width:250px; height:300px" />',
                    'name' =>'Sandal nữ cao gót phong cách ',
                    'price' =>'<p style="color:red">400.000 VNĐ  </p> ',
                    'button' => '<button class="btn btn-success">Đặt mua</button>',
                ),
                'NB02' => array(
                    'id'=>'02',
                    'image' => '<img src="https://timan.vn/wp-content/uploads/2020/11/Giay-Sandal-Nu-HA10-2-1.jpg" style="width:250px; height:300px" />',
                    'name' =>'Giày sandal đế xuống 7 cm ',
                    'price' =>'<p style="color:red">600.000 VNĐ <del style="color:black">4400000 VND </del> </p> ',
                    'button' => '<button class="btn btn-success">Đặt mua</button>',
                ),
                'NB03' => array(
                    'id'=>'03',
                    'image' => '<img src="https://streetstyleshop.vn/wp-content/uploads/2020/12/giay-sandal-nu-de-5cm-17.jpg" style="width:250px; height:300px" />',
                    'name' =>'Giày cao gót nữ sang chảnh',
                    'price' =>'<p style="color:red">218.000 VNĐ  </p>',
                    'button' => '<button class="btn btn-success">Đặt mua</button>',
                ),
                'NB04' => array(
                    'id'=>'01',
                    'image' => '<img src="https://tse1.mm.bing.net/th?id=OIP.e2z9lKguuTynd71WqmzByQHaHa&pid=Api&P=0" style="width:250px; height:300px" />',
                    'name' =>'Giày Sandal đẹp xiu lung linh',
                    'price' =>'<p style="color:red">300.000 VNĐ <del style="color:black">400.000 VND </del> </p> ',
                    'button' => '<button class="btn btn-success">Đặt mua</button>',
                ),
            ),
            '<p style="border-radius:15px;background:blue;">Túi sách</p>'  => array(
                'SP01' => array(
                    'id'=>'1',
                    'image' => '<img src="https://dailycasau.vn/library/module_new/tui-sach-nu-da-ca-sau--tsncs04_s2280.jpg" style="width:250px; height:300px" />',
                    'name' =>'Túi sách nữ đẹp sang chảnh',
                    'price' =>' <p style="color:red">4000000 VNĐ <del style="color:black">2.000.000 VND </del> </p> ',
                    'button' => '<button class="btn btn-success">Đặt mua</button>',
                ),
                'SP02' => array(
                    'id'=>'2',
                    'image' => '<img src="https://tse1.mm.bing.net/th?id=OIP.qnD22lJXl22mwhptO-MMFgHaHa&pid=Api&P=0" style="width:250px; height:300px" />',
                    'name' =>'Tủi sách nữ siêu sinh siêu xuất sắc',
                    'price' =>'<p style="color:red">600.000 VNĐ <del style="color:black">1.000.000 VND </del></p>',
                    'button' => '<button class="btn btn-success">Đặt mua</button>',
                ),
                'SP03' => array(
                    'id'=>'3',
                    'image' => '<img src="https://media3.scdn.vn/img3/2019/5_22/ZX807A_simg_d0daf0_800x1200_max.jpg" style="width:250px; height:300px" />',
                    'name' =>'Túi sách đeo chéo đẹp xỉu ',
                    'price' =>'<p style="color:red">450.000 VNĐ  <del style="color:black">800.000 VND </del></p> ',
                    'button' => '<button class="btn btn-success">Đặt mua</button>',
                ),
                'SP04' => array(
                    'id'=>'4',
                    'image' => '<img src="http://vuadoda.vn/wp-content/uploads/2020/10/tui_xach_nu__1__1523723b6fa14fa4be40c37fdc4c2d1a_master.jpg" style="width:250px; height:300px" />',
                    'name' =>'Túi đeo chéo màu hồng đẹp',
                    'price' =>' <p style="color:red">1.000.000 VNĐ  <del style="color:black">1.500.000 VND </del> </p>',
                    'button' => '<button class="btn btn-success">Đặt mua</button>',
                ),
            )
         )

    ?>
    
<div class="container">
    <?php 
    foreach ($phones as $k => $v) {
        ?>
        <h2 class="title"><?php echo $k; ?></h2>
        <ul  class="list_schools">
            <?php foreach ($v as $k1 => $v1) {
                ?>
                <li>
                    <p> <?php echo $v1['id'] ?> </p>
                    <p> <?php echo $v1['image'] ?></p>
                    <p> <?php echo $v1['name'] ?></p>
                    <p> <?php echo $v1['price'] ?></p>
                    <p><?php echo $v1['button'] ?></p>
                </li>
        <?php } 
        ?>
        </ul>
            
    <?php
    } 
    ?> 
    <form id="forml" method="post" action="baitap2.php"> 
        <div class="tinhtien" >
                <h1 class="tinhtienh1">Nhập thêm sản phẩm</h1>
        </div>
        <div class="body">
            Nhâp ITSP: 
                <input class="input" type="text" name="id" placeholder="Nhập ID">
            <br><br>
            Hình ảnh: 
                <input class="input" type="file" name="image">
            <br><br>
            Tên sản phẩm: 
                <input class="input" type="text" name="name" placeholder="Tên sản phẩm">
            <br><br>
            Price:
            <input class="input" type="text" name="price" value="" placeholder="Price">
            <br> <br>
            <input class="bt1" type="submit" name="submit" value="Submit"> 
            <br><br>
    </div>
        </form>
        <?php
            ini_set('display_errors',0);
            $id=$_POST["id"] ;
            $image=$_POST["image"];
            $image=$_POST["name"];
            $image=$_POST["price"];

            $new_mang = array(
                "id" => $_POST['id'],
                "image" => $_POST['image'],
                "name" => $_POST["name"],
                "price" => $_POST['price']
            );
            array_push( $phones['Giày dép'], $new_mang);
            ?>
         <div >
    </div>

</div>
</body>
</html>
