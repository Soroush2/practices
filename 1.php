<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <script src="jquery/jquery-3.6.0.min.js"></script>
   <script src="script.js"></script>

</head>

<body>
<?php
//#1
echo "جمع ارقام:"."<br>";
   $num=60;
   $sum = 0;
   $numLength= strlen((string)$num);
   // echo $num %10;
   for($i=1;$i<=$numLength;$i++){
      $sum+=$num%10;
      $num /=10;
      
   }
   echo $sum."<br>"; 
//#2
echo "زوج یا فرد بودن :"."<br>";
   $num =25;
   if($num%2==0){
      echo "It's even"."<br>";
   }
   else{
      echo "It's odd"."<br>";
   }
//#3

?>
</body>

</html>