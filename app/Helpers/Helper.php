<?php


/**
 * if you do this then it should be register in app.php aliases
 * call by Helper::functionName($vale);
 */
// namespace App\Helpers;


// class Helper
// {

//     public static function slice_words($string, $value = false)
//     {
//         return implode(' ', array_slice(explode(' ', $string), 0, $value)) . "\n";
//     }
// }


/**
 * if you do this then it should be register in composer.json at autoload  "files": ["app/Helpers/Helper.php"]
 * call by functionName($paramiters);
 */
function slice_words($string, $value = false)
{
    return implode(' ', array_slice(explode(' ', $string), 0, $value)) . "\n";
}
