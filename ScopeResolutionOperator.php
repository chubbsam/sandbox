<?php
class MyClass
{
    protected function myFunc() {
        echo "MyClass::myFunc()\n";
    }
}

class ChildClass extends MyClass
{
    // Override parent's definition
    public function myFunc()
    {
        // But still call the parent function
        parent::myFunc();
        echo "ChildClass::myFunc()\n";
    }
}

$class = new ChildClass();
$class->myFunc();
ChildClass::myFunc();
?>