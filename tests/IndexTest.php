<?php
namespace CoverallTest;

use PHPUnit_Framework_TestCase;

class IndexTest extends PHPUnit_Framework_TestCase
{
    public function testAddition() {
        $index = new Index();

        $actual = $index->add(1, 1);

        $this->assertEquals(2, $actual);

    }
}
