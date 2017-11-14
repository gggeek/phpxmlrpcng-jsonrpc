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
}
