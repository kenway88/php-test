<?php
/**
 * Created by PhpStorm.
 * User: qianx
 * Date: 2019/9/29
 * Time: 1:37
 */
require_once ('../../vendor/autoload.php');
require_once ('../src/Show.php');

class ShowTest extends \PHPUnit\Framework\TestCase
{
    public function testShowMoney()
    {
        $show = new \service\Show();
        $this->assertEquals(1,$show->showMoney());
    }
}