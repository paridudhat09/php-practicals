<?php

//Single Dimension Array
//Index Array
$array_one = array("One",'two',"three");
$array_two = array("four",'five',6,7.5);


//Extraction Data from Arrays
//Traversing the Arrays

foreach($array_one as $key => $one) {
  echo "$key -> $one" . "!";
  echo "<br>";
}

echo"<pre>";
print_r($array_one);
print_r($array_two);
echo"</pre>";

echo"<pre>";
print_r(array_push($array_one,"jiya"));
echo"</pre>";

echo"<pre>";
print_r($array_one);
echo"</pre>";

echo"<pre>";
print_r(array_pop($array_one));
echo"</pre>";

echo"<pre>";
print_r($array_one);
echo"</pre>";

echo"<pre>";
print_r(array_merge($array_one,$array_two));
echo"</pre>";

echo"<pre>";
print_r(array_flip($array_one));
echo"</pre>";

 
?>