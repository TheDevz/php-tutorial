<?php
/** Static method */
//class greeting {
//    public static function welcome() {
//        echo "Hello World!";
//    }
//
//    public function __construct() {
//        self::welcome();
//    }
//}
//
//new greeting();

/** Static property */
class ClassName
{
    public static $staticProp = "W3Schools";

    public function welcome()
    {
        echo "welcome";
    }
}
echo classname::$staticProp;
//classname::welcome();// throws an error
