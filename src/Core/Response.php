<?php

namespace PhpJsonRpc\Core;

use PhpHttpRpc\Core\Response as BaseResponse;

class Response extends BaseResponse
{
    public function getHTTPHeaders()
    {
        /// @todo
    }

    /**
     * Will be called when this response is serialized for sending
     * Q: should we return a (plain php) stream instead?
     *
     * @return string
     */
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
