<?php

interface AbstractClass
{
    const A='22222';
// 强制要求子类定义这些方法
    public function getValue();

    public function prefixValue($prefix);

}

class ConcreteClass1 implements AbstractClass
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

class ConcreteClass2 implements AbstractClass
{
    public function getValue()
    {
        return "ConcreteClass2";
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
