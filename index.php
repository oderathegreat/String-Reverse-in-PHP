<?php



function reverseString($string) {
    $rev_string = "";
    $length = strlen($string);

    for ($i = $length - 1; $i >= 0; $i--) {
        $rev_string .= $string[$i];
          }

    return $rev_string;
}


echo  reverseString("xyz");