<?php
set_include_path('/path/to/library/:' . get_include_path());

require_once 'Zend/Exception.php';
require_once 'Zend/Date/Exception.php';

try {
    throw new Zend_Date_Exception('fu');
} catch (Exception $e) {
    echo "Exception: " . get_class($e) . PHP_EOL;
    echo $e->getMessage() . PHP_EOL;
    exit(1);
}
echo "no exception" . PHP_EOL;
