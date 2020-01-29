<?php

namespace League\Route\Http\Exception;

use Exception;
use League\Route\Http\Exception as HttpException;

class ImATeapotException extends HttpException
{
    /**
     * Constructor
     *
     * @param string    $message
     * @param Exception $previous
     * @param int $code
     */
    public function __construct($message = "I'm a teapot", $previous = null, $code = 0)
    {
        parent::__construct(418, $message, $previous, [], $code);
    }
}
