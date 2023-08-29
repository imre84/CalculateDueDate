<?php

function CalculateDueDate($reportDate,$workInHours)
{
  $weeks=intdiv($workInHours,40);
  $workInHours-=40*$weeks;
  $days=intdiv($workInHours,8);
  $workInHours-=8*$days;
  $days+=$weeks*7;
  $result=$reportDate;
  $result=strtotime("+".$days." days",$result);
  $result=strtotime("+".$workInHours." hours",$result);
  return $result;
}

?>
