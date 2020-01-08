<?php
//Turn on error reporting -- this is critical
ini_set('display_errors', 1);
error_reporting(E_ALL);

function printArr($numbers) {
    echo "<p>";
    foreach ($numbers as $num) {
        echo "$num";
    }
    echo "</P>";
}

function largest($numbers) {
      return max($numbers);

}
function removeDubs($numbers) {
    return array_unique($numbers);
}