<?php


print "17C = ".omrekenen(17)."F<br>";

print doorDrieDelen(33)."<br>";

print achterwaards("dit ", "is ", "een ", "test ");

function omrekenen($c) {
    $f = $c*1.8 + 32;
    return $f;
}

function doorDrieDelen($d) {
    if ($d / 3 == 0) {
        $t = true;
        return $t;
    }
    else {
        $t = false;
        return $t;
    }

}

function achterwaards($s, $r, $i, $n) {
    return $n.$i.$r.$s;
}
?>
