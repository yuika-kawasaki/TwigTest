<?php
use PHPUnit\Framework\TestCase;

class IndexPageTest extends TestCase
{
    public function testIndexOutputContainsMessage()
    {
        $output = $GLOBALS['index_output'] ?? '';
        $this->assertStringContainsString('うわああああああああ', $output);
    }
}
