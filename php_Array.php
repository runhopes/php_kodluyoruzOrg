<?php
$myarray = ["Bora", "İlker", "Deneme", "Samsun", "Antalya", "Konya"];
function myFunction($array, $value)
{
    $fArray = array_filter($array);
    $rArray = array_rand($fArray, $value);
    $result = array_map(function ($item) use ($fArray) {
        return $fArray[$item];
    }, $rArray);
    return $result;
}

echo "<pre>";
print_r(myFunction($myarray, 2));
print_r(myFunction($myarray, 3));
print_r(myFunction($myarray, 2));
print_r(myFunction($myarray, 4));
print_r(myFunction($myarray, 5));

?>