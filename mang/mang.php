<!-- <?php
 $ages = array("Peter"=>22 ,"Clark"=>32,"John"=>28);
 $ages["Peter"]="22" ;
 $ages["Clark"]="32" ;
 $ages["John"]="28" ;
 echo 'Perter'.' '. $ages ["Peter"].' '.'tuổi';
 ?> -->

 <?php
 $animal_list =array("a"=>"Lion", "b"=>"Wolf", "c"=>"Dog","d"=>"Cat");
    // foreach($animal_list as $key => $array_value) {
    //     echo "<h1>".$array_value."<br>";
    // }
    foreach($animal_list as $x => $array_value) {
        echo "Key=" . $x . ", Value=" . $array_value;
        echo "<br>";
      }
 
  ?>
  <?php
    $b =count($animal_list);
    for ($b=0; $b <count($animal_list) ; $b++) { 
        echo $b ."<br>";
    }
  ?>

<?php
$danhsach = array (
  array("1234l89","Luân"),
  array("345lo09","Tiến"),
  array("3421th0","Lực"),
  array("342th09","Thi")
);
 $row= count($danhsach) ;
for ($row = 0; $row < 4; $row++) {
  for ($col = 0; $col< 2; $col++) {
    echo$danhsach[$row][$col];
    echo "<br>";
  }

}
?>

<?php
    $course =array(
        'FRONTEND' =>array(
                            

        )
    )
?>