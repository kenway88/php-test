<?php

abstract class AbstractClass
{
    public $a=111;
    const A='22222';
// 强制要求子类定义这些方法
    abstract protected function getValue();

    abstract protected function prefixValue($prefix);

// 普通方法（非抽象方法）
//    public function printOut()
//    {
//        print $this->getValue() . "\n";
//    }
}

class ConcreteClass1 extends AbstractClass
{
    public function getValue()
    {
        echo "ConcreteClass1";
    }

    public function prefixValue($prefix)
    {
        echo "{$prefix}ConcreteClass1";
    }
}

class ConcreteClass2 extends AbstractClass
{
    public function getValue()
    {
        echo  "ConcreteClass2";
    }

    public function prefixValue($prefix)
    {
        echo "{$prefix}ConcreteClass2";
    }
}

$class1 = new ConcreteClass1;
$class1->getValue();
echo $class1->prefixValue('FOO_') . "\n";

$class2 = new ConcreteClass2;
$class2->getValue();
echo $class2->prefixValue('FOO_') . "\n";
