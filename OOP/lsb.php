<?php
class ParentClass {
    public static $value = "Parent value";

    public static function getValue(){
        return static::$value;
    }
}
//extend = mewarisi
class ChildClass extends ParentClass{
    public static $value = "Child Value";
}

echo ParentClass::getValue();
echo PHP_EOL;
echo ChildClass:: getValue();

?>