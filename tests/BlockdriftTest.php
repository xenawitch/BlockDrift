<?php
/**
 * Tests for BlockDrift
 */

use PHPUnit\Framework\TestCase;
use Blockdrift\Blockdrift;

class BlockdriftTest extends TestCase {
    private Blockdrift $instance;

    protected function setUp(): void {
        $this->instance = new Blockdrift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockdrift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
