<?php
/**
 * Tests for ProxyShield
 */

use PHPUnit\Framework\TestCase;
use Proxyshield\Proxyshield;

class ProxyshieldTest extends TestCase {
    private Proxyshield $instance;

    protected function setUp(): void {
        $this->instance = new Proxyshield(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Proxyshield::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
