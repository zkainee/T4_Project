<?php

    $i = 1;
    $increase = true;
    while ($i >= 1)
    {
        // i tekenen
        for ($count = 1; $count <= $i; $count++)
        {
            echo $count;
        }
        echo "<br>";

        if ($increase == true)
        {
            $i++;

        }
        else
        {
            $i--;
        }
        //Omslag punt = 9
        if ($i == 9)
        {
            $increase = false;
        }
    }

?>
