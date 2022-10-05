<?php
//на 10 баллов
$str1 = "<p>  &  Hello       <i>world</i>      !</p>";
$str1 = trim($str1, " ");
$str1 = strip_tags($str1);
echo "$str1 <br>";

//на 11 баллов
$str2 = "<p>  &  Hello       <i>world</i>      !</p>";
$str2 = htmlspecialchars($str2);
echo $str2;
