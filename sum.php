<?php
function arraysum(array $input1, array $input2): bool|array{
    if (count($input1) != count($input2)){
        return false;
        
    }
    $result = [];
    
    for($i = 0, $count= count($input1); $i < $count ; $i++){
        $result[] = ($input1[$i] += $input2[$i]);
    }
        return $result;
}
print_r(arraysum([1, 2, 3, 4, 5], [10, 8, 7, 2, 1]));
