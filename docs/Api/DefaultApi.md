# wxlink\DefaultApi

All URIs are relative to *https://way.jd.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**condition**](DefaultApi.md#condition) | **GET** /xiaokakeji/condition | 查询支持城市及条件
[**violationQuery**](DefaultApi.md#violationQuery) | **GET** /xiaokakeji/violation_query | 查询车辆违章情况


# **condition**
> string condition($appkey)

查询支持城市及条件

查询支持城市及条件

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new wxlink\Api\DefaultApi();
$appkey = "appkey_example"; // string | 万象平台提供的appkey

try {
    $result = $api_instance->condition($appkey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->condition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appkey** | **string**| 万象平台提供的appkey |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **violationQuery**
> string violationQuery($appkey, $body)

查询车辆违章情况

查询车辆违章情况

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new wxlink\Api\DefaultApi();
$appkey = "appkey_example"; // string | 万象平台提供的appkey
$body = "{\"plateNumber\":\"浙A5JJ73\",\"carType\":\"02\",\"vin\":\"054919\"}"; // string | {\"plateNumber\":\"苏A97P90\"(车牌号，必填),\"engineNo\":\"YS669D\"(发动机号，视城市规则是否必填),\"vin\":\"662722\"(车架号，视城市规则是否必填),\"carType\":\"02\"(车辆类型01大车02小车,不必填,默认小车),\"city\":\"杭州市\"(查询城市,不必填,默认查归属地)}

try {
    $result = $api_instance->violationQuery($appkey, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->violationQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appkey** | **string**| 万象平台提供的appkey |
 **body** | **string**| {\&quot;plateNumber\&quot;:\&quot;苏A97P90\&quot;(车牌号，必填),\&quot;engineNo\&quot;:\&quot;YS669D\&quot;(发动机号，视城市规则是否必填),\&quot;vin\&quot;:\&quot;662722\&quot;(车架号，视城市规则是否必填),\&quot;carType\&quot;:\&quot;02\&quot;(车辆类型01大车02小车,不必填,默认小车),\&quot;city\&quot;:\&quot;杭州市\&quot;(查询城市,不必填,默认查归属地)} | [default to {&quot;plateNumber&quot;:&quot;浙A5JJ73&quot;,&quot;carType&quot;:&quot;02&quot;,&quot;vin&quot;:&quot;054919&quot;}]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

