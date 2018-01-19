<?php
goto a;
echo 'Foo';
 

a:
echo 'Bar'.PHP_EOL;

goto b;

b:
echo 'bbbb'.PHP_EOL;
#goto a;
?>
