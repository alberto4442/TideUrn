<?php
/**
 * Tests for TideUrn
 */

use PHPUnit\Framework\TestCase;
use Tideurn\Tideurn;

class TideurnTest extends TestCase {
    private Tideurn $instance;

    protected function setUp(): void {
        $this->instance = new Tideurn(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tideurn::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
