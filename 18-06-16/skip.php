<?php

$counter = 0;

while($counter < 10)
{
    $counter += 1;
    
    //echo $counter . "\n";
    
    //$counter += 1;
    
    if ($counter % 2 == 0)
    {
        echo "Skip\n";
        continue;
    }
    echo $counter . "\n";
}

?>