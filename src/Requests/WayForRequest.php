<?php

namespace MaksymKulia\WayForPayLaravel\Requests;

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
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
