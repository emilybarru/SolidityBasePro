<?php
/**
 * Tests for SolidityBasePro
 */

use PHPUnit\Framework\TestCase;
use Soliditybasepro\Soliditybasepro;

class SoliditybaseproTest extends TestCase {
    private Soliditybasepro $instance;

    protected function setUp(): void {
        $this->instance = new Soliditybasepro(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditybasepro::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
