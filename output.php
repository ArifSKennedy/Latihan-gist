<?php
    if(isset($_POST['save1'])) {
        $a = $_POST['binary'];

        function count($a) {
            $c = 0;
            $b = count($a);
            $b -= 1;
            for (; $b < $a ;$b--) {
                if ($b < 0) {
                    return $c;
                } else {
                if ($a[$b] == 0 || $b < 0) {
                return $c;
                } else {
                 $c += $a[$b];
                    }
                }
            }
        }

        echo count($a);
    }

?>