<?php
 use PHPUnit\Framework\TestCase;

class copilotTest extends TestCase
{
    public function testGenerateStrongPassword()
    {
        require_once('copilot.php');

        $password = generateStrongPassword();
        $this->assertEquals(9, strlen($password));
    }
}