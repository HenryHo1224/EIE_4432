<?php
$city_arr = array("Atlanta"=>"880", "Boston"=>"225", "Chicago"=>"788", "Detroit"=>"614", "Miami"=>"1275");

$mpg  = (int)$_POST["mpg"];
$fuel = (int)$_POST["fuel"];
$city = $_POST["city"];
$distance = (int)$city_arr[$city];

(double)$result =($distance/$mpg)*$fuel;

print("<h1>Fuel Cost to $city from NYC</h1>");


print ("<p>The distance is $city_arr[$city] miles and your fuel cost will be approximately $$result</p>");

