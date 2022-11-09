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
   unset($i);
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
echo "اول بودن:"."<br>";
$n=21;
$counter=0;
for($i=1;$i<$n;$i++){
   if($n%$i==0){
      $counter++;
   }
}
if($counter<=1){
   echo $n." is a perfect number ";
}
else{
   echo $n. " is not a perfect number";
}
?>
</body>

</html>