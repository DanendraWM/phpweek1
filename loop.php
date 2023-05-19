<?php
$x = [-9, 10, 100, -5, 0];
sort($x);
// -9,-5,0,10,100
$y = [13, 1];
sort($y);
// 1,13
$z = [5, -3, 2, 800];
// -3,2,5,800
sort($z);
$samaanx = [];
$samaany = [];
$samaanz = [];
for ($loop = 0; $loop < count($x); $loop++) {
    for ($loop2 = 0; $loop2 < count($y); $loop2++) {
        for ($loop3 = 0; $loop3 < count($z); $loop3++) {
            $loopplusx = $loop + 1;
            $loopplusy = $loop2 + 1;
            $loopplusz = $loop3 + 1;
            if (in_array($loopplusx, $samaanx)) {
                continue;
            }
            if (in_array($loopplusy, $samaany)) {
                continue;
            }
            if (in_array($loopplusz, $samaanz)) {
                continue;
            }
            if ($x[$loop] < $y[$loop2] || $x[$loop] < $z[$loop3]) {
                $samaanx[] = $loopplusx;
                echo "<br> X," . $x[$loop] . " , A , " . $loop + 1;
                break;
            } else if ($y[$loop2] < $x[$loop] || $y[$loop2] < $z[$loop3]) {
                $samaany[] = $loopplusy;
                echo "<br> Y," . $y[$loop2] . " , B , " . $loop2 + 1;
                break;
            } else if ($z[$loop3] < $x[$loop] || $z[$loop3] < $y[$loop2]) {
                $samaanz[] = $loopplusz;
                echo "<br> Z," . $z[$loop3] . " , C , " . $loop3 + 1;
                break;
            }
        }
    }

}

?>