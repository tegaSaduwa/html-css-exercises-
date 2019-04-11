<?php
//ARRAYS
/*
three types
-index
-associative
-multi dimentional
*/
// index
$people = array('tega', 'runo ', 'ejiro');
$ids = array(11,12,13);
echo $people[1];
echo $ids[2];

$cars = [' toyota','honda','bmw'];
$cars[3]= 'lexus';
$cars[]=' hyundai ';

echo $cars[4];
//gives the total num in the array
echo count($cars);
//prints out the whole array
print_r($cars);
//prints out the data type
var_dump($cars);

#ASSOCIATE ARRAY
$data = ['brad' => 32, 'tega' => 21 , 'runo => 19' ];
echo $data['brad'];

echo count($data);
$data['mercy'] = 48;
echo $data['mercy'];
print_r($data);

//MULTIDIMENTIONAL
#arrays inside arrays
$car = [
  ['toyota', 33, 10],
  ['lexus', 22, 14],
  ['honda', 44, 34]
  
];
echo $car[1][0];




?>
