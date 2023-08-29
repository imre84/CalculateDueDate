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

//print date("l jS \of F Y h:i:s A",CalculateDueDate(time(),42));
//print "<br>\n";
//print date("l jS \of F Y h:i:s A",strtotime("2023-08-28T10:14:25+0200"));
//print "<br>\n";
//print date("l jS \of F Y h:i:s A",CalculateDueDate(strtotime("2023-08-28T10:14:25+0200"),42));
//print "<br>\n";

?>
