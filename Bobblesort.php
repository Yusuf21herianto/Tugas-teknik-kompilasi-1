<?php
/*
    created by yusuf herianto
    Tugas Teknik Kompilasi
 */

function bubble_Sort($my_array ) {
  do{
    $swapped = false;
   for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ ) {
       if( $my_array[$i] > $my_array[$i + 1] ){
            list( $my_array[$i + 1], $my_array[$i] ) = array( $my_array[$i], $my_array[$i + 1] );
             $swapped = true;
        }
   }
  }while( $swapped );
return $my_array;
}
  $test_array = array(17, 10, 11, 40, 15, 54);
  echo "array sebelum diurutkan :";
  echo implode(', ',$test_array );
  echo "<br/> array setelah diurutkan: ";
  echo implode(', ',bubble_Sort($test_array));

  