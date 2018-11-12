<?php
require 'MyTest.php';
use PHPUnit\Framework\TestCase;
class MyTestTests extends TestCase
{
    private $mytest;

    protected function setUp()
    {
        $this->mytest = new MyTest();
    }

    protected function tearDown()
    {
        $this->mytest = NULL;
    }

    public function testAdd()
    {
        $result = $this->mytest->add(-1, 0);
        $this->assertEquals(-1, $result);
    }

    public function test2Add()
    {
        $result = $this->mytest->add(3, 6);
        $this->assertEquals(9, $result);
    }

    public function test3Add()
    {
        $result = $this->mytest->add(3, 5);
        $this->assertEquals(8, $result);
    }

    public function test1Sub()
    {
     	$result = $this->mytest->sub(10, 5);
        $this->assertEquals(5, $result);
    }
}
