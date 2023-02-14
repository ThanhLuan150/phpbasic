<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 2</title>
</head>
<style>
    #content{
        margin-left: 90px;
    }
.title{
    color:red;
}
.list_schools{
    display: grid ;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap:20px;
    list-style-type:none;
    
}
</style>
<body>
    <?php
        $schools = array(
            'Students' => array(
                'SV01' => array(
                    'name' => 'Lê Trương Thành Luân ',
                    'birth' =>'15/05/2003',
                    'gender' =>'Nam'
                ),
                'SV02' => array(
                    'name'=>'Phan Thanh Lực',
                    'birth'=> '12/09/2003',
                    'gender'=>'Nam'
                ),
                'SV03' => array(
                    'name'=> 'Nguyễn Văn Hoàng',
                    'birth' => '01/07/1992',
                    'gender' =>'Nữ'
                ),
                'SC04' => array(
                    'name' =>'Khánh Linh',
                    'birth' =>'01/01/2003',
                    'gender' =>'Nữ'
                ),
            ),
            'Teacher' => array(
                'GV01' => array(
                    'name' =>'Nguyễn Thành Đạt',
                    'birth' =>'04/04/1997',
                    'gender' =>'Nam'
                ),
                'GV02' => array(
                    'name' =>'Phạm Quốc Cường',
                    'birth' =>'23/11/1993',
                    'gender' =>'Nam'
                ),
                'GV03' => array(
                    'name' =>'Phan Thanh Vương',
                    'birth' =>'04/04/1993',
                    'gender' =>'Nam'
                ),
                'GV04' => array(
                    'name' =>'Nguyễn Thị Thanh Thảo',
                    'birth' =>'04/04/1983',
                    'gender' =>'Nam'
                ),
            )
         )

    ?>

<div id="content" >
    <?php 
    foreach ($schools as $k => $v) {
        ?>
        <h2 class="title"><?php echo $k; ?></h2>
        <ul  class="list_schools">
            <?php foreach ($v as $k1 => $v1) {
                ?>
                <li>
                    <p><span>MaSV:</span> <?php echo $k1; ?></p>
                    <p><span>Tên:</span> <?php echo $v1['name'] ?></p>
                    <p><span>Ngày sinh:</span> <?php echo $v1['birth'] ?></p>
                    <p><span>Giới tính:</span> <?php echo $v1['gender'] ?></p>
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