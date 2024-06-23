<?php 
date_default_timezone_set("Asia/Tokyo");
$currentTime = time();// UNIX timestamp : number of seconds since 1st Jan 1970
$futureTime = time() + 7*24*60*60; //5 days ahead
$pastTime = time() - 7*24*60*60; //5 days behind
echo $currentTime , "<br/>";
echo $pastTime , "<br/>";
echo $futureTime , "<br/>";
echo "current date :",date(' d, F, Y') , "<br/>";
echo "current time :",date(' g:i:s a') , "<br/> <br/>";
echo "next week date :",date(' d, F, Y', $futureTime) , "<br/>";
echo "next week time :",date(' g:i:s a', $futureTime) , "<br/> <br/>";
echo "last week date :",date(' d, F, Y', $pastTime) , "<br/>";
echo "last week time :",date(' g:i:s a', $pastTime) , "<br/>";


echo date_default_timezone_get() , "<br/>";

echo date(' d, F, Y', mktime(0,0,0,month:10,day:15,year:2006 )),"<br/>"; //mkTime() produces a timestamp based the parameters
echo date('d, F, Y', strtotime("1st January 2026"));
?>
