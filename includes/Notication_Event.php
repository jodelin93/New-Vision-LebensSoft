<?php

 include("../class/Core.php");
     $core = new Core();

  $dates=date('Y-m-d');
 // $dates=substr($dates, 8);

 $condition = "WHERE date_event >='$dates' ";

  $res = $core->TableCount('event','coun',$condition); 
 // $res1 = $core->TableCount('rendezvous','de',NULL); 
 foreach ($res as $res_rek) { 

 $tot=$res_rek->coun;

 	echo "".$tot;

}
?>