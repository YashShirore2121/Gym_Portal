<?php
/*$dcc ate = new DateTime('2015-10-02');
$date->add(new DateInterval('P3M'));
echo $date->format('Y-m-d');*/
$date = date("Y-m-d");   
  $date = strtotime(date("Y-m-d", strtotime($date)) . " +3 month");
  echo date("Y-m-d",$date);
?>