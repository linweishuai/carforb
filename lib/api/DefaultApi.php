<?php
/**
 * DefaultApi
 * PHP version 5
 *
 * @category Class
 * @package  wxlink
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * default_1496801711081
 *
 * 1，全国车辆违章查询直连渠道，支持大车及小车违章查询 2，可返回文书号以及违章状态（已处理、未处理、已处理未缴款等） 3，支持全国300多城市 4，数据与官网实时更新 5，数据按查询收费
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace api;

use \wxlink\Configuration;
use \wxlink\ApiClient;
use \wxlink\ApiException;
use \wxlink\ObjectSerializer;

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  wxlink
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DefaultApi
{

    /**
     * API Client
     *
     * @var \wxlink\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \wxlink\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\wxlink\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://way.jd.com/');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \wxlink\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \wxlink\ApiClient $apiClient set the API client
     *
     * @return DefaultApi
     */
    public function setApiClient(\wxlink\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation condition
     *
     * 查询支持城市及条件
     *
     * @param string $appkey 万象平台提供的appkey (required)
     * @return string
     * @throws \wxlink\ApiException on non-2xx response
     */
    public function condition($appkey)
    {
        list($response) = $this->conditionWithHttpInfo($appkey);
        return $response;
    }

    /**
     * Operation conditionWithHttpInfo
     *
     * 查询支持城市及条件
     *
     * @param string $appkey 万象平台提供的appkey (required)
     * @return Array of string, HTTP status code, HTTP response headers (array of strings)
     * @throws \wxlink\ApiException on non-2xx response
     */
    public function conditionWithHttpInfo($appkey)
    {
        // verify the required parameter 'appkey' is set
        if ($appkey === null) {
            throw new \InvalidArgumentException('Missing the required parameter $appkey when calling condition');
        }
        // parse inputs
        $resourcePath = "/xiaokakeji/condition";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('text/plain'));

        // query params
        if ($appkey !== null) {
            $queryParams['appkey'] = $this->apiClient->getSerializer()->toQueryValue($appkey);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/xiaokakeji/condition'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation violationQuery
     *
     * 查询车辆违章情况
     *
     * @param string $appkey 万象平台提供的appkey (required)
     * @param string $body {\&quot;plateNumber\&quot;:\&quot;苏A97P90\&quot;(车牌号，必填),\&quot;engineNo\&quot;:\&quot;YS669D\&quot;(发动机号，视城市规则是否必填),\&quot;vin\&quot;:\&quot;662722\&quot;(车架号，视城市规则是否必填),\&quot;carType\&quot;:\&quot;02\&quot;(车辆类型01大车02小车,不必填,默认小车),\&quot;city\&quot;:\&quot;杭州市\&quot;(查询城市,不必填,默认查归属地)} (required)
     * @return string
     * @throws \wxlink\ApiException on non-2xx response
     */
    public function violationQuery($appkey, $body)
    {
        list($response) = $this->violationQueryWithHttpInfo($appkey, $body);
        return $response;
    }

    /**
     * Operation violationQueryWithHttpInfo
     *
     * 查询车辆违章情况
     *
     * @param string $appkey 万象平台提供的appkey (required)
     * @param string $body {\&quot;plateNumber\&quot;:\&quot;苏A97P90\&quot;(车牌号，必填),\&quot;engineNo\&quot;:\&quot;YS669D\&quot;(发动机号，视城市规则是否必填),\&quot;vin\&quot;:\&quot;662722\&quot;(车架号，视城市规则是否必填),\&quot;carType\&quot;:\&quot;02\&quot;(车辆类型01大车02小车,不必填,默认小车),\&quot;city\&quot;:\&quot;杭州市\&quot;(查询城市,不必填,默认查归属地)} (required)
     * @return Array of string, HTTP status code, HTTP response headers (array of strings)
     * @throws \wxlink\ApiException on non-2xx response
     */
    public function violationQueryWithHttpInfo($appkey, $body)
    {
        // verify the required parameter 'appkey' is set
        if ($appkey === null) {
            throw new \InvalidArgumentException('Missing the required parameter $appkey when calling violationQuery');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling violationQuery');
        }
        // parse inputs
        $resourcePath = "/xiaokakeji/violation_query";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('text/plain'));

        // query params
        if ($appkey !== null) {
            $queryParams['appkey'] = $this->apiClient->getSerializer()->toQueryValue($appkey);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($body !== null) {
            $formParams['body'] = $this->apiClient->getSerializer()->toFormValue($body);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/xiaokakeji/violation_query'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
