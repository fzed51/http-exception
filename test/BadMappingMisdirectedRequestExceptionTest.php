<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class BadMappingMisdirectedRequestExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\BadMappingMisdirectedRequestException('coucou');
        self::assertEquals('Bad mapping / Misdirected Request', $exception->getMessageStatus());
        self::assertEquals(421, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
