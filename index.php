<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$initialValuesArray = [0, 1, -2, 3, 4, -5, 6, -7, 88, 9, -10,50];
$evenNumbersArray = [];
$countEvenNumbersArray = 0;

echo "<h1>Dev-Pro.net</h1>";
echo "<h3>ТЗ.№ 5  </h3>";
echo "<h3>Функция нахождения в массиве только четные числа . </h3>";


/**
 * The function of finding in the array only even numbers
 * @param array $array numbers
 * @return array even numbers
 */
function evenNumbers(array $array): array
{
    $resultArray = [];

    if (count($array) !== 0) {
        foreach ($array as $elementArray) {
            if (($elementArray % 2) === 0) {
                $resultArray[] = $elementArray;
            }
        }
    }
    return $resultArray;
}

$evenNumbersArray = evenNumbers($initialValuesArray);

$countEvenNumbersArray = count($evenNumbersArray);
if ($countEvenNumbersArray === 0) {
    die("Четные числа в массиве не найдены!");
}

echo "В исходном массиве было найдено {$countEvenNumbersArray} четных чисел :<br>";
foreach ($evenNumbersArray as $elementArray) {
    echo $elementArray . "<br>";
}





