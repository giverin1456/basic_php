<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

$totalPrice = 0;

$maxPrice = 0; // 最高価格を入れるための変数
$maxPriceMenuName = ''; // 最高価格のものの名前を入れるための変数

foreach ($menus as $menu) {
  $name = $menu['name'];
  $price = $menu['price'];
  echo $name.'は'.$price.'円です';
  echo '<br>';
  $totalPrice += $price;
  
  // $maxPriceに入っている価格より大きければ
  if ($price > $maxPrice) {
    // その価格で$maxPriceを上書きする
    $maxPrice = $price;
    // 最高価格のものの名前で上書きする
    $maxPriceMenuName = $name;
  }
}

echo '合計金額は'.$totalPrice.'円です';
echo '<br>';
echo $maxPriceMenuName.'が最高価格で'.$maxPrice.'円です';

?>