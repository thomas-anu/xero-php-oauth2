<?php
/**
 * IdentityApi
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP Identity
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero OAuth 2 Identity Service API
 *
 * These endpoints are related to managing authentication tokens and identity for Xero API
 *
 * OpenAPI spec version: 2.21.0
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use XeroAPI\XeroPHP\ApiException;
use XeroAPI\XeroPHP\Configuration;
use XeroAPI\XeroPHP\HeaderSelector;
use XeroAPI\XeroPHP\IdentityObjectSerializer;

/**
 * IdentityApi Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IdentityApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation deleteConnection
     * Deletes a connection for this user (i.e. disconnect a tenant)
     * @param  string $id Unique identifier for retrieving single object (required)
     * @throws \XeroAPI\XeroPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteConnection($id)
    {
        $this->deleteConnectionWithHttpInfo($id);
    }
    /**
     * Operation deleteConnectionWithHttpInfo
     * Deletes a connection for this user (i.e. disconnect a tenant)
     * @param  string $id Unique identifier for retrieving single object (required)
     * @throws \XeroAPI\XeroPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteConnectionWithHttpInfo($id)
    {
        $request = $this->deleteConnectionRequest($id);
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }
    /**
     * Operation deleteConnectionAsync
     * Deletes a connection for this user (i.e. disconnect a tenant)
     * @param  string $id Unique identifier for retrieving single object (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteConnectionAsync($id)
    {
        return $this->deleteConnectionAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation deleteConnectionAsyncWithHttpInfo
     * Deletes a connection for this user (i.e. disconnect a tenant)
     * @param  string $id Unique identifier for retrieving single object (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface */
    public function deleteConnectionAsyncWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->deleteConnectionRequest($id);
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteConnection'
     * @param  string $id Unique identifier for retrieving single object (required)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request  */
    protected function deleteConnectionRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling deleteConnection'
            );
        }
        $resourcePath = '/Connections/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                IdentityObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(IdentityObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [
                    [
                        'Content-type' => 'multipart/form-data',
                    ]
                ];
                
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHostIdentity() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getConnections
     * Retrieves the connections for this user
     * @param  string $auth_event_id Filter by authEventId (optional)
     * @throws \XeroAPI\XeroPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \XeroAPI\XeroPHP\Models\Identity\Connection[]
     */
    public function getConnections($auth_event_id = null)
    {
        list($response) = $this->getConnectionsWithHttpInfo($auth_event_id);
        return $response;
    }
    /**
     * Operation getConnectionsWithHttpInfo
     * Retrieves the connections for this user
     * @param  string $auth_event_id Filter by authEventId (optional)
     * @throws \XeroAPI\XeroPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \XeroAPI\XeroPHP\Models\Identity\Connection[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getConnectionsWithHttpInfo($auth_event_id = null)
    {
        $request = $this->getConnectionsRequest($auth_event_id);
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }
            $statusCode = $response->getStatusCode();
            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }
            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\XeroAPI\XeroPHP\Models\Identity\Connection[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }
                    return [
                        IdentityObjectSerializer::deserialize($content, '\XeroAPI\XeroPHP\Models\Identity\Connection[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }
            $returnType = '\XeroAPI\XeroPHP\Models\Identity\Connection[]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }
            return [
                IdentityObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = IdentityObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\XeroAPI\XeroPHP\Models\Identity\Connection[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }
    /**
     * Operation getConnectionsAsync
     * Retrieves the connections for this user
     * @param  string $auth_event_id Filter by authEventId (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getConnectionsAsync($auth_event_id = null)
    {
        return $this->getConnectionsAsyncWithHttpInfo($auth_event_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }
    /**
     * Operation getConnectionsAsyncWithHttpInfo
     * Retrieves the connections for this user
     * @param  string $auth_event_id Filter by authEventId (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface */
    public function getConnectionsAsyncWithHttpInfo($auth_event_id = null)
    {
        $returnType = '\XeroAPI\XeroPHP\Models\Identity\Connection[]';
        $request = $this->getConnectionsRequest($auth_event_id);
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }
                    return [
                        IdentityObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getConnections'
     * @param  string $auth_event_id Filter by authEventId (optional)
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request  */
    protected function getConnectionsRequest($auth_event_id = null)
    {
        $resourcePath = '/Connections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        // query params
        if ($auth_event_id !== null) {
            $queryParams['authEventId'] = IdentityObjectSerializer::toQueryValue($auth_event_id);
        }
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(IdentityObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [
                    [
                        'Content-type' => 'multipart/form-data',
                    ]
                ];
                
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );
        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHostIdentity() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
