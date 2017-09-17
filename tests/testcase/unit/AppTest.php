<?php

use PhpLibrarySeed\App;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testSample(){
        $app = new App();
        $this->assertEquals($app->hello(), 'hello');
    }
}
