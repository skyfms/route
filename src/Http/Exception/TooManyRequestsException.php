<?php

namespace League\Route\Http\Exception;

use Exception;
use League\Route\Http\Exception as HttpException;

class TooManyRequestsException extends HttpException
{
    /**
     * Constructor
     *
     * @param string    $message
     * @param Exception $previous
     * @param int $code
     */
    public function __construct($message = 'Too Many Requests', $previous = null, $code = 0)
    {
        parent::__construct(429, $message, $previous, [], $code);
    }
}
