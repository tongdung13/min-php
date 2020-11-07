<?php

$mang = array(23,4,1,6,8,9,56);
 $min = null;
 $vitri = null;

 for ($i = 0; $i < count($mang); $i++) {
     if ($min == null) {
         $min = $mang[$i];
         $vitri = $i;
     } else {
         if ($mang[$i] < $min) {
             $min = $mang[$i];
             $vitri = $i;
         }
     }
 }

 echo "gia tri nho nhat la: $min <br> ";
 echo  "nam o vi tri: $vitri";