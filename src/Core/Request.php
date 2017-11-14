<?php

namespace PhpJsonRpc\Core;

use PhpHttpRpc\Core\Request as BaseRequest;

class Request extends BaseRequest
{
    protected $contentType = 'application/json';

    protected $id;

    public function __construct($methodName, array $params = array(), $id = 1)
    {
        // strip out param names, since jsonrpc only uses positional params
        parent::__construct($methodName, array_keys($params));
        $this->id = $id;
    }

    public function getHTTPBody()
    {
        /// @todo
    }

    /**
     * Builds and returns an appropriate Response object from the http data.
     *
     * @param Request $request
     * @param string $body
     * @param array $headers
     * @param array $options Allowed keys: 'debug', 'returnType', 'useExceptions'
     * @return Response
     */
    public function parseHTTPResponse($request, $body, array $headers = array(), array $options = array())
    {
        /// @todo
    }
}
