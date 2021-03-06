<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class UnsupportedMediaTypeExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\UnsupportedMediaTypeException('coucou');
        self::assertEquals('Unsupported Media Type', $exception->getMessageStatus());
        self::assertEquals(415, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
