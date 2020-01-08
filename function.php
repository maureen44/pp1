<?php
//Turn on error reporting -- this is critical
ini_set('display_errors', 1);
error_reporting(E_ALL);

function printArr($numbers) {
    foreach ($numbers as $num) {
        echo "<p>$num </P>";
    }
}

function largest($numbers) {
      return max($numbers);

}