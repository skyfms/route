<?php

namespace League\Route\Http\Exception;

use Exception;
use League\Route\Http\Exception as HttpException;

class GoneException extends HttpException
{
    /**
     * Constructor
     *
     * @param string    $message
     * @param Exception $previous
     * @param int $code
     */
    public function __construct($message = 'Gone', $previous = null, $code = 0)
    {
        parent::__construct(410, $message, $previous, [], $code);
    }
}
