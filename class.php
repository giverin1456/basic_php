<?php
class Menu {
  public $name;
  
  // helloメソッドを定義してください
  public function hello(){
    echo "私はMenuクラスのインスタンスです";
  }
}

$curry = new Menu();
$pasta = new Menu();

$curry->name = 'CURRY';
$pasta->name = 'PASTA';

//メソッドの呼び出し
echo $curry -> hello();
echo '<br>';
echo $pasta -> hello();

?>