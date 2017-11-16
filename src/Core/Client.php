<?php

namespace PhpJsonRpc\Core;

use PhpHttpRpc\Core\Client as BaseClient;

class Client extends BaseClient
{
    protected function getRpcRequestClass()
    {
        return '\PhpJsonRpc\Core\Request';
    }

    public function call($methodName, array $params = array(), $id=1)
    {
        $request = $this->createRequest($methodName, $params, array('id' => $id));
        $response = $this->send($request);

        /// @todo unwrap / throw exception ???

        return $response->value();
    }

    /**
     * @param string $methodName
     * @param array $params
     * @param array $options key 'id' is used for the request Id
     * @return \PhpHttpRpc\API\Request
     */
    public function createRequest($methodName, array $params = array(), array $options = array())
    {
        if ($this->rpcRequestFactory === null) {
            $requestClass = $this->getRpcRequestClass();
            return new $requestClass($methodName, $params, isset($options['id']) ? $options['id'] : 1);
        }

        return $this->rpcRequestFactory->createRequest($methodName, $params, $options);
    }
}
