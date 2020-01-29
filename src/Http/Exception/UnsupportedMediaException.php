<?php

namespace League\Route\Http\Exception;

use Exception;
use League\Route\Http\Exception as HttpException;

class UnsupportedMediaException extends HttpException
{
    /**
     * Constructor
     *
     * @param string    $message
     * @param Exception $previous
     * @param int $code
     */
    public function __construct($message = 'Unsupported Media', $previous = null, $code = 0)
    {
        parent::__construct(415, $message, $previous, [], $code);
    }
}
