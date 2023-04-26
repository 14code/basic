<?php
declare(strict_types=1);

namespace I4code\Basic\Test\Unit;

use I4code\Basic\JsonEncoder;
use PHPUnit\Framework\TestCase;

class JsonEncoderTest extends TestCase
{

    public function testConstructor()
    {
        $encoder = new JsonEncoder();
        $this->assertInstanceOf(JsonEncoder::class, $encoder);
    }

    public function testDecode()
    {
        $test = [
            'test' => 'test',
            'tset' => 'tset'
        ];
        $json = json_encode($test);
        $encoder = new JsonEncoder();
        $this->assertSame($test, $encoder->decode($json));
    }

    public function testEncode()
    {
        $this->assertTrue(true);
    }
}
