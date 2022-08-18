<?php
declare(strict_types=1);
namespace ShipStream\SpsCommerce\HttpClient;

use Psr\Http\Message\ServerRequestInterface;
use RuntimeException;
use Throwable;


class ObjectNotFoundError extends RuntimeException
{
    /**
     * @var int
     */
    protected $code = 404;

    /**
     * @var string
     */
    protected $message = 'Not found.';

    protected $title = '404 Not Found';
    protected $description = 'The requested resource could not be found. Please verify the URI and try again.';
}
