<?php
class Menu {
  public $name;
  
  public function __construct($name) {
    $this->name = $name;
  }
  public function hello() {
    echo '私は'.$this->name.'です';
  }
}

$juice = new Menu('JUICE');
$coffee = new Menu('COFFEE');
$curry = new Menu('CURRY');
$pasta = new Menu('PASTA');
$menus = array($juice,$coffee,$curry,$pasta);

?>



<?php foreach($menus as $menu):?>
   <h3><?php echo $menu->name?></h3>
 <?php endforeach ?>