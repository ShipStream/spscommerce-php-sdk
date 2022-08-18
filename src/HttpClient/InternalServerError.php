<?php
declare(strict_types=1);
namespace ShipStream\SpsCommerce\HttpClient;

use Psr\Http\Message\ServerRequestInterface;
use RuntimeException;
use Throwable;


class InternalServerError extends RuntimeException
{
    /**
     * @var int
     */
    protected $code = 500;

    /**
     * @var string
     */
    protected $message = 'Internal server error.';

    protected $title = '500 Internal Server Error';
    protected $description = 'Unexpected condition encountered preventing server from fulfilling request.';
}