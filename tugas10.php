<?php

    function urutkan($arr) {
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = $i + 1; $j < count($arr); $j++) {
                if ($arr[$i] > $arr[$j]) {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }

        return $arr;
    }
    
    $arr = array(1,3,8,2,5,7,4,0);

    print("Sebelum Di Sorting :<br>");
    print_r($arr);

    $arr = urutkan($arr);
    print("<br> Setelah Disorting (Buble Sort) :<br>");
    print_r($arr);

?>