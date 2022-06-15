<?php

$x = 5;
$y = 2;
$a = 8;
$b = 4;

    $x += 10;
    echo $x;
  ?>

<?php
    echo ++$a
  ?>


<?php
    $name = 'にんじゃわんこ';
    echo "こんにちは！".$name;

    $name = 'にんじゃわんこ';
    echo "こんにちは！{$name}さん";
  ?>


<?php
$price = 1000;
$taxRate = 0.08;
echo '変数$priceの値: '.$price;
echo '<br>';
echo '変数$taxRateの値: '.$taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$taxIncludedPrice = $price + $price * $taxRate;            
echo "税込価格は{$taxIncludedPrice}円です";

?>