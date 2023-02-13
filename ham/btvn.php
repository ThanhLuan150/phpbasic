<html>
   
   <head>
      <title>Hàm trong PHP</title>
   </head>
   
   <body>
      
      <?php
         /* Định nghĩa hàm */
         function vietjackMessage()
         {
            echo "Học dốt nhưng vẫn điểm cao hay thật sự ";
         }
         
         /* Gọi hàm */
         vietjackMessage();
      ?>
      <?php echo "<br>"?>
      <?php
         function hamTinhTong($num1, $num2)
         {
            $sum = $num1 + $num2;
            echo "Tổng hai số là: $sum";
         }
         
         hamTinhTong(11, 22);
      ?>


      
   </body>
</html>