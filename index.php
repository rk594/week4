<?php


//1

date_default_timezone_set("America/New_York");

$date = date("Y-m-d <br />", time());
$tar = "2017/05/24";

echo "The value of \$date: $date <br />";
echo "The value of \$tar: $tar <br />";
$year = array("2012","396","300","2000","1100","1089");
print_r ($year);


//2

echo "<br /><br /> Replace “-“ in \$date with “/“ <br />";
$date2 = str_replace("-","/",$date);
echo "The value of \$date after replacement: $date2 <br />";


//3

echo "<br />Comparing \$date with \$tar <br />";
if (strcmp($date2,$tar)>0)
{
echo "the future <br />  <br />";
}
elseif (strcmp($date2,$tar)<0)
{
echo "the past <br />  <br />";
}
else
{
echo "oops <br />  <br />";
}


//4

echo "Position of / in \$date <br />";
for($i=0;$i<strlen($date2);$i++)
{
if($date2[$i]=='/')
{
echo $i . " ";
}
}


//5

echo "<br /> <br /> To print number of words <br />";
echo  str_word_count($date) . "<br />";


//6

echo "<br />The length of the above sentence is: <br />";
echo strlen($date2)."<br />";


//7

echo "<br />ASCII value of first character of above underlined sentence is";
echo "<br />" .ord ($date2)."<br />";


//8

echo "<br />To return the last two charcters of date";
echo "<br />".substr("$date", -2)."<br />";


//9

echo "<br>Convert date into array & delimit '/' it with space<br>";
$dateElements=explode("/",$date2);
for($i=0;$i<count($dateElements);$i++)
{
echo $dateElements[$i]." ";
}
echo "<br />";

?>
