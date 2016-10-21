<?php

namespace Codeninjas\API\NZB\Oznzb;

use Codeninjas\API\NZB\Oznzb\Transport\Response;

interface TransportInterface
{
    /**
     * @param string $method
     * @param string $url
     * @param array $payload
     * @return Response
     */
    public function dispatch(string $method, string $url, array $payload = null) : Response;
}
