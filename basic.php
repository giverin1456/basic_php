<?php
    $x = 1071;

    if ($x % 3 ==0 && $x % 7==0){
      echo "xは3の倍数かつ7の倍数です。";
    } elseif ($x % 7 == 0){
      echo "xは3の倍数ですが7の倍数ではありません。";
    } elseif ($x % 3 == 0){
      echo "xは7の倍数ですが3の倍数ではありません。";
    } else {
      echo "xは7の倍数でも3の倍数でもありません。";
    }
  ?>

<?php
    $num = 9;
    $remainder = $num % 3;

    // switch文を用いてください
    switch ($remainder){
      case 0:
      echo "大吉です。";
      break;
      
      case 1:
      echo "中吉です。";
      break;
        
      case 2:
      echo "小吉です。";
      break;
          
      default:
      echo "凶です。";
      break;
    }
  
  ?>

<?php

// この下にfor文を書いてください
  for ($i = 1;$i <= 1000;$i++){
    if ($i % 3 == 0){
     continue;
  }
  echo $i."<br>";
}

?>