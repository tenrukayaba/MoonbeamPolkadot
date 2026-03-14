<?php
/**
 * Tests for MoonbeamPolkadot
 */

use PHPUnit\Framework\TestCase;
use Moonbeampolkadot\Moonbeampolkadot;

class MoonbeampolkadotTest extends TestCase {
    private Moonbeampolkadot $instance;

    protected function setUp(): void {
        $this->instance = new Moonbeampolkadot(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Moonbeampolkadot::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
