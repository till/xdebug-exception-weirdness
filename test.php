<?php
set_include_path('/path/to/library/:' . get_include_path());

require_once 'Zend/Exception.php';
require_once 'Zend/Date/Exception.php';

$a = new A;
$a->foo();

class A
{
    function foo()
    {
        try {
            $b = new B;
            $b->bar();
        } catch (Exception $e) {
            echo "Oh noez!" . PHP_EOL;
            var_dump($e);
            exit(1);
        }
    }
}

class B
{
    function bar()
    {
        throw new Zend_Date_Exception('fu');
    }
}

echo "no exception" . PHP_EOL;
