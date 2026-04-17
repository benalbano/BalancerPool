<?php
/**
 * Tests for BalancerPool
 */

use PHPUnit\Framework\TestCase;
use Balancerpool\Balancerpool;

class BalancerpoolTest extends TestCase {
    private Balancerpool $instance;

    protected function setUp(): void {
        $this->instance = new Balancerpool(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Balancerpool::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
