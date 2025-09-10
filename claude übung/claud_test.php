<?php

class Test {
    public static $count = 0;
    public function __construct() {
        self::$count++;
    }
}
$a = new Test(); $b = new Test();
echo Test::$count;

?>