<?php
  function staircase($n)
    {
        $res[0] = 2;
        $res[1] = 1;
        $res[2] = 1;
        for ($i = 3; $i <= $n; $i++)
            $res[$i] = $res[$i - 1] +
                       $res[$i - 2] +
                       $res[$i - 3];

        return $res[$n];
    }

    $n = 4;
    echo staircase($n);

 ?>
