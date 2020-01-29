<?php

namespace League\Route\Http\Exception;

use Exception;
use League\Route\Http\Exception as HttpException;

class UnprocessableEntityException extends HttpException
{
    /**
     * Constructor
     *
     * @param string    $message
     * @param Exception $previous
     * @param int $code
     */
    public function __construct($message = 'Unprocessable Entity', $previous = null, $code = 0)
    {
        parent::__construct(422, $message, $previous, [], $code);
    }
}
