<?php

goto a;
echo "Hello A" . PHP_EOL;

a:
echo "Hello world" . PHP_EOL;


$c = 1;
while ($c <= 10) {
    echo "cont : $c" . PHP_EOL;
    $c++;

    if ($c >5) {
        goto end;
    }
}

end:
return 0;