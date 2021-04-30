<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class NotAcceptableException extends HttpException
{
    /**
     * NotAcceptableException constructor.
     * @param string $message
     * @param int $code = 406
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 406, Throwable $previous = null)
    {
        parent::__construct($message, 406, $previous);
    }
}