<?php
use PHPUnit\Framework\TestCase;
use Obra\Hello;

class HelloTest extends TestCase {
    public function testSayHello() {
        $hello = new Hello();
        $this->assertEquals('Olá, mundo!', $hello->sayHello());
    }
}
