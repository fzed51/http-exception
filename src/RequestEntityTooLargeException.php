<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class RequestEntityTooLargeException extends HttpException
{
    /**
     * RequestEntityTooLargeException constructor.
     * @param string $message
     * @param int $code = 413
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 413, Throwable $previous = null)
    {
        parent::__construct($message, 413, $previous);
    }
}