<?php

namespace MaksymKulia\WayForPayLaravel\Request;

use GuzzleHttp\Psr7\Request;

/**
 * Class Request.
 */
class WayForRequest
{

    /**
     * @var Request
     */
    private $request;

    /**
     * WayForRequest constructor.
     * @param Request $request
     */
    function __construct(Request $request)
    {
        $this->request = $request;
    }
}
