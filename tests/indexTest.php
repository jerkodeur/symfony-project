<?php

use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;

class indexTest extends TestCase
{
    /**
     * @runInSeparateProcess
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     */
    public function testHello()
    {
        // Simulate url parameter
        $_GET['name'] = 'Jérôme';

        // Buffering the index page content
        ob_start();
        include 'index.php';
        $content = ob_get_clean();

        // Verify the result
        $this->assertEquals('Hello Jérôme', $content);
    }
}
