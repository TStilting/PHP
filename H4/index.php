<?php


print "17C = ".omrekenen(17)."F<br>";

print doorDrieDelen(33)."<br>";

print achterwaards("dit ", "is ", "een ", "test ");

function omrekenen($c) {
    $f = $c*1.8 + 32;
    return $f;
}

function doorDrieDelen($d) {
    $t = ($d % 3 == 0) ? true : false;
    echo $t;
    if ($t) {
        return "true";
    }
    else {
        return "false";
    }

}

function achterwaards($s, $r, $i, $n) {
    return $n.$i.$r.$s;
}
?>
