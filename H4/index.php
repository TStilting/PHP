<?php


print "17C = ".omrekenen(17)."F<br>";

print doorDrieDelen(33);

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


?>
