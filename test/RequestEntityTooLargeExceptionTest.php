<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class RequestEntityTooLargeExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\RequestEntityTooLargeException('coucou');
        self::assertEquals('Request Entity Too Large', $exception->getMessageStatus());
        self::assertEquals(413, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
