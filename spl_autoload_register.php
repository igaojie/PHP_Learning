<?php

// function __autoload($class) {
//     include 'classes/' . $class . '.class.php';
// }

function my_autoloader($class) {
	echo 'classes/' . $class . '.class.php'.PHP_EOL;
    //include 'classes/' . $class . '.class.php';
}

spl_autoload_register('my_autoloader');



// 或者，自 PHP 5.3.0 起可以使用一个匿名函数
// spl_autoload_register(function ($class) {
//     include 'classes/' . $class . '.class.php';
// });



class ClassAutoloader {
    public function __construct() {
        spl_autoload_register(array($this, 'loader'));
    }
    private function loader($className) {
        echo 'Trying to load ', $className, ' via ', __METHOD__, "()\n";
        include $className . '.php';
    }
}

$autoloader = new ClassAutoloader();

$obj = new Class1();
$obj = new Class2();


?>