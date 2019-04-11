<?php
// single line comments
# single line comments
/* multi-line comment*/
// echo 'hello world ';
// print 'tega';


// VARIABLES
#RULES
/*
-prefix with $
-start with a letter or an underscore
-only letters, numbers and underscores
-case sensitive
 */

 $output = 'hello world ';
 echo $output;

// DATA TYPES
/* strings
   integers
   floats 
   booleans
   arrays
   objects
   null
   resource
*/
$num = 4;
$num2 = 10;
$float = 4.4;
$sum = $num + $num2;
 echo $sum;

// in php you concactinate with fullstop
$string1 = 'hello';
$string2 = 'tega ';
// $greeting = $string1 .' '. $string2;
//or you can just do this only with double quotes
$greeting2 = " $string1 $string2";
echo $greeting2;


//CONSTANTS
//eg can be used for server name
//true makes it case insensitive
define('Greeting', 'Hello Everyone ', true);
echo Greeting;

?>

