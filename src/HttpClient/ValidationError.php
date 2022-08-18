<?php
declare(strict_types=1);
namespace ShipStream\SpsCommerce\HttpClient;

use Psr\Http\Message\ServerRequestInterface;
use RuntimeException;
use Throwable;

class ValidationError extends RuntimeException
{
    /**
     * @var int
     */
    protected $code = 400;

    /**
     * @var string
     */
    protected $message = 'Bad request.';

    protected $title = '400 Bad Request';
    protected $description = 'The server cannot or will not process the request due to an apparent client error.';
}