<?php

    $i= 2;
    
    while($i <= 100){
      echo $i. "<br>";
      $i += 2;
    }
  ?>


<?php

    for ($i = 1;$i <= 1000;$i++){
      echo $i."<br>";
      if ($i >= 500){
        break;
      }
    }
    
  ?>