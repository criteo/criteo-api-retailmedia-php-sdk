<?php
/**
 * AudienceApi
 * PHP version 7.4
 *
 * @category Class
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API
 *
 * Criteo API - RetailMedia
 *
 * The version of the OpenAPI document: Preview
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace criteo\api\retailmedia\preview\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use criteo\api\retailmedia\preview\ApiException;
use criteo\api\retailmedia\preview\Configuration;
use criteo\api\retailmedia\preview\HeaderSelector;
use criteo\api\retailmedia\preview\ObjectSerializer;

/**
 * AudienceApi Class Doc Comment
 *
 * @category Class
 * @package  criteo\api\retailmedia\preview
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AudienceApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'legacyGetAudienceV1' => [
            'application/json',
        ],
        'legacyGetAudienceV2' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation legacyGetAudienceV1
     *
     * @param  int $account_id ID of the account to which this audience belongs. (required)
     * @param  int[] $limit_to_id Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 (optional)
     * @param  int $page_size Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page. (optional)
     * @param  int $page_index Returns the specified page of results given a pageSize; pages are 0-indexed. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legacyGetAudienceV1'] to see the possible values for this operation
     *
     * @throws \criteo\api\retailmedia\preview\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV1ListResponse
     */
    public function legacyGetAudienceV1($account_id, $limit_to_id = null, $page_size = null, $page_index = null, string $contentType = self::contentTypes['legacyGetAudienceV1'][0])
    {
        list($response) = $this->legacyGetAudienceV1WithHttpInfo($account_id, $limit_to_id, $page_size, $page_index, $contentType);
        return $response;
    }

    /**
     * Operation legacyGetAudienceV1WithHttpInfo
     *
     * @param  int $account_id ID of the account to which this audience belongs. (required)
     * @param  int[] $limit_to_id Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 (optional)
     * @param  int $page_size Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page. (optional)
     * @param  int $page_index Returns the specified page of results given a pageSize; pages are 0-indexed. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legacyGetAudienceV1'] to see the possible values for this operation
     *
     * @throws \criteo\api\retailmedia\preview\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV1ListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function legacyGetAudienceV1WithHttpInfo($account_id, $limit_to_id = null, $page_size = null, $page_index = null, string $contentType = self::contentTypes['legacyGetAudienceV1'][0])
    {
        $request = $this->legacyGetAudienceV1Request($account_id, $limit_to_id, $page_size, $page_index, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV1ListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV1ListResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV1ListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV1ListResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV1ListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation legacyGetAudienceV1Async
     *
     * @param  int $account_id ID of the account to which this audience belongs. (required)
     * @param  int[] $limit_to_id Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 (optional)
     * @param  int $page_size Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page. (optional)
     * @param  int $page_index Returns the specified page of results given a pageSize; pages are 0-indexed. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legacyGetAudienceV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function legacyGetAudienceV1Async($account_id, $limit_to_id = null, $page_size = null, $page_index = null, string $contentType = self::contentTypes['legacyGetAudienceV1'][0])
    {
        return $this->legacyGetAudienceV1AsyncWithHttpInfo($account_id, $limit_to_id, $page_size, $page_index, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation legacyGetAudienceV1AsyncWithHttpInfo
     *
     * @param  int $account_id ID of the account to which this audience belongs. (required)
     * @param  int[] $limit_to_id Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 (optional)
     * @param  int $page_size Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page. (optional)
     * @param  int $page_index Returns the specified page of results given a pageSize; pages are 0-indexed. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legacyGetAudienceV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function legacyGetAudienceV1AsyncWithHttpInfo($account_id, $limit_to_id = null, $page_size = null, $page_index = null, string $contentType = self::contentTypes['legacyGetAudienceV1'][0])
    {
        $returnType = '\criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV1ListResponse';
        $request = $this->legacyGetAudienceV1Request($account_id, $limit_to_id, $page_size, $page_index, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'legacyGetAudienceV1'
     *
     * @param  int $account_id ID of the account to which this audience belongs. (required)
     * @param  int[] $limit_to_id Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 (optional)
     * @param  int $page_size Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page. (optional)
     * @param  int $page_index Returns the specified page of results given a pageSize; pages are 0-indexed. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legacyGetAudienceV1'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function legacyGetAudienceV1Request($account_id, $limit_to_id = null, $page_size = null, $page_index = null, string $contentType = self::contentTypes['legacyGetAudienceV1'][0])
    {

        // verify the required parameter 'account_id' is set
        if ($account_id === null || (is_array($account_id) && count($account_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account_id when calling legacyGetAudienceV1'
            );
        }





        $resourcePath = '/preview/retail-media/accounts/{accountId}/audiences';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit_to_id,
            'limitToId', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_size,
            'pageSize', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_index,
            'pageIndex', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                '{' . 'accountId' . '}',
                ObjectSerializer::toPathValue($account_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', 'application/json', 'text/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation legacyGetAudienceV2
     *
     * @param  int $account_id ID of the account to which this audience belongs. (required)
     * @param  int[] $limit_to_id Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 (optional)
     * @param  int $page_size Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page. (optional)
     * @param  int $page_index Returns the specified page of results given a pageSize; pages are 0-indexed. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legacyGetAudienceV2'] to see the possible values for this operation
     *
     * @throws \criteo\api\retailmedia\preview\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV2ListResponse
     */
    public function legacyGetAudienceV2($account_id, $limit_to_id = null, $page_size = null, $page_index = null, string $contentType = self::contentTypes['legacyGetAudienceV2'][0])
    {
        list($response) = $this->legacyGetAudienceV2WithHttpInfo($account_id, $limit_to_id, $page_size, $page_index, $contentType);
        return $response;
    }

    /**
     * Operation legacyGetAudienceV2WithHttpInfo
     *
     * @param  int $account_id ID of the account to which this audience belongs. (required)
     * @param  int[] $limit_to_id Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 (optional)
     * @param  int $page_size Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page. (optional)
     * @param  int $page_index Returns the specified page of results given a pageSize; pages are 0-indexed. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legacyGetAudienceV2'] to see the possible values for this operation
     *
     * @throws \criteo\api\retailmedia\preview\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV2ListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function legacyGetAudienceV2WithHttpInfo($account_id, $limit_to_id = null, $page_size = null, $page_index = null, string $contentType = self::contentTypes['legacyGetAudienceV2'][0])
    {
        $request = $this->legacyGetAudienceV2Request($account_id, $limit_to_id, $page_size, $page_index, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV2ListResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV2ListResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV2ListResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV2ListResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV2ListResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation legacyGetAudienceV2Async
     *
     * @param  int $account_id ID of the account to which this audience belongs. (required)
     * @param  int[] $limit_to_id Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 (optional)
     * @param  int $page_size Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page. (optional)
     * @param  int $page_index Returns the specified page of results given a pageSize; pages are 0-indexed. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legacyGetAudienceV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function legacyGetAudienceV2Async($account_id, $limit_to_id = null, $page_size = null, $page_index = null, string $contentType = self::contentTypes['legacyGetAudienceV2'][0])
    {
        return $this->legacyGetAudienceV2AsyncWithHttpInfo($account_id, $limit_to_id, $page_size, $page_index, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation legacyGetAudienceV2AsyncWithHttpInfo
     *
     * @param  int $account_id ID of the account to which this audience belongs. (required)
     * @param  int[] $limit_to_id Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 (optional)
     * @param  int $page_size Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page. (optional)
     * @param  int $page_index Returns the specified page of results given a pageSize; pages are 0-indexed. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legacyGetAudienceV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function legacyGetAudienceV2AsyncWithHttpInfo($account_id, $limit_to_id = null, $page_size = null, $page_index = null, string $contentType = self::contentTypes['legacyGetAudienceV2'][0])
    {
        $returnType = '\criteo\api\retailmedia\preview\Model\RmLegacyAudienceGetEntityV2ListResponse';
        $request = $this->legacyGetAudienceV2Request($account_id, $limit_to_id, $page_size, $page_index, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'legacyGetAudienceV2'
     *
     * @param  int $account_id ID of the account to which this audience belongs. (required)
     * @param  int[] $limit_to_id Limits results to the entity IDs specified; parameter key is repeated, eg. limitToId&#x3D;1&amp;limitToId&#x3D;2 (optional)
     * @param  int $page_size Specifies the maximum number of entities returned in a single page; defaults to 25 entities per page. (optional)
     * @param  int $page_index Returns the specified page of results given a pageSize; pages are 0-indexed. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['legacyGetAudienceV2'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function legacyGetAudienceV2Request($account_id, $limit_to_id = null, $page_size = null, $page_index = null, string $contentType = self::contentTypes['legacyGetAudienceV2'][0])
    {

        // verify the required parameter 'account_id' is set
        if ($account_id === null || (is_array($account_id) && count($account_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account_id when calling legacyGetAudienceV2'
            );
        }





        $resourcePath = '/preview/retail-media/v2/accounts/{accountId}/audiences';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit_to_id,
            'limitToId', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_size,
            'pageSize', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_index,
            'pageIndex', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                '{' . 'accountId' . '}',
                ObjectSerializer::toPathValue($account_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', 'application/json', 'text/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
