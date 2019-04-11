<?php 
/*  
loops- for excuting code a number set of times
TYPES OF LOOP
-for 
-while
-Do while
-ForEach
*/

#for-loop
#when you know exactly the amt of times you wanna run the code
//  for ($i=0;$i<10;$i++) {
//    echo 'Number ' . $i;
//    echo '<br>';

//  }

 #while-loop
//  $i = 0;
//   while ($i<19) {
//     echo $i;
//     $i++;
//     echo '<br>';

//   }
#do...while
# takes a condition
 $i = 0;
 do {
  echo $i;
  $i++;
  echo '<br>';
 }
 while ($i<10) ;

 #forEach
 $people = ['brad','tega','jose'];
 foreach($people as $person)
 {
  echo $person;
  echo '<br>';

 };
 
















?>