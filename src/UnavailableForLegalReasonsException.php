<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class UnavailableForLegalReasonsException extends HttpException
{
    /**
     * UnavailableForLegalReasonsException constructor.
     * @param string $message
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", ?Throwable $previous = null)
    {
        parent::__construct($message, 451, $previous);
    }
}
