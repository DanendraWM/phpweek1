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
    // echo "<br>" . $x[$loop];
    $loopplusx = $loop + 1;
    for ($loop2 = 0; $loop2 < count($y); $loop2++) {
        // echo "<br>" . $y[$loop2];
        if ($x[$loop] < $y[$loop2] && $x[$loop] < $z[$loop2]) {
            echo "<br> X," . $x[$loop] . " , A , " . $loopplusx;
            break;
        } else if ($x[$loop] < $y[$loop2] && $x[$loop] > $z[$loop2]) {
            echo "<br> Z," . $z[$loop2] . " , C , " . $loop2 + 1;
            break;
        } else {
            $loopplusy = $loop2 + 1;
            if (in_array($loopplusx, $samaanx)) {
                continue;
            }
            if (in_array($loopplusy, $samaany)) {
                continue;
            }
            $samaany[] = $loopplusy;
            $samaanx[] = $loopplusx;
            echo "<br> Y," . $y[$loop2] . " , B , " . $loopplusy;
            // echo "<br> X," . $x[$loop] . " , A , " . $loopplusx;
            // print_r($samaanx);
        }
        for ($loop3 = 0; $loop3 < count($z); $loop3++) {
            if ($x[$loop] < $z[$loop3]) {
                echo "<br> X," . $x[$loop] . " , A , " . $loopplusx;
                break;
            } else {
                $loopplusz = $loop3 + 1;
                if (in_array($loopplusz, $samaanz)) {
                    continue;
                }
                $samaanz[] = $loopplusz;
                echo "<br> Z," . $z[$loop3] . " , C , " . $loopplusz;
            }
        }
    }

}
// if ($x[0] < $y[0] && $x[0] < $z[0]) {
//     for ($loop = 0; $loop < count($x); $loop++) {
//         echo "<br> X," . $x[$loop] . " , A , " . $loop + 1;
//     }
// } else if ($y[0] < $x[0] && $y[0] < $z[0]) {
//     for ($loop = 0; $loop < count($y); $loop++) {
//         echo "<br> Y," . $y[$loop] . " , B , " . $loop + 1;
//     }
// } else if ($z[0] < $x[0] && $z[0] < $y[0]) {
//     for ($loop = 0; $loop < count($z); $loop++) {
//         echo "<br> Z," . $z[$loop] . " , C , " . $loop + 1;
//     }
// }

// if ($x[$loop] < $y[$loop2] || $x[$loop] < $z[$loop3]) {
//     $samaanx[] = $loopplusx;
//     echo "<br> X," . $x[$loop] . " , A , " . $loop + 1;
//     break;
// } else if ($y[$loop2] < $x[$loop] || $y[$loop2] < $z[$loop3]) {
//     $samaany[] = $loopplusy;
//     echo "<br> Y," . $y[$loop2] . " , B , " . $loop2 + 1;
//     break;
// } else if ($z[$loop3] < $x[$loop] || $z[$loop3] < $y[$loop2]) {
//     $samaanz[] = $loopplusz;
//     echo "<br> Z," . $z[$loop3] . " , C , " . $loop3 + 1;
//     break;
// }
?>