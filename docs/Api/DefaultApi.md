# Swagger\Client\DefaultApi

All URIs are relative to *https://www.bolt.miami/gps/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attributesComputedGet**](DefaultApi.md#attributesComputedGet) | **GET** /attributes/computed | Fetch a list of Attributes
[**attributesComputedIdDelete**](DefaultApi.md#attributesComputedIdDelete) | **DELETE** /attributes/computed/{id} | Delete an Attribute
[**attributesComputedIdPut**](DefaultApi.md#attributesComputedIdPut) | **PUT** /attributes/computed/{id} | Update an Attribute
[**attributesComputedPost**](DefaultApi.md#attributesComputedPost) | **POST** /attributes/computed | Create an Attribute
[**calendarsGet**](DefaultApi.md#calendarsGet) | **GET** /calendars | Fetch a list of Calendars
[**calendarsIdDelete**](DefaultApi.md#calendarsIdDelete) | **DELETE** /calendars/{id} | Delete a Calendar
[**calendarsIdPut**](DefaultApi.md#calendarsIdPut) | **PUT** /calendars/{id} | Update a Calendar
[**calendarsPost**](DefaultApi.md#calendarsPost) | **POST** /calendars | Create a Calendar
[**commandsGet**](DefaultApi.md#commandsGet) | **GET** /commands | Fetch a list of Saved Commands
[**commandsIdDelete**](DefaultApi.md#commandsIdDelete) | **DELETE** /commands/{id} | Delete a Saved Command
[**commandsIdPut**](DefaultApi.md#commandsIdPut) | **PUT** /commands/{id} | Update a Saved Command
[**commandsPost**](DefaultApi.md#commandsPost) | **POST** /commands | Create a Saved Command
[**commandsSendGet**](DefaultApi.md#commandsSendGet) | **GET** /commands/send | Fetch a list of Saved Commands supported by Device at the moment
[**commandsSendPost**](DefaultApi.md#commandsSendPost) | **POST** /commands/send | Dispatch commands to device
[**commandsTypesGet**](DefaultApi.md#commandsTypesGet) | **GET** /commands/types | Fetch a list of available Commands for the Device or all possible Commands if Device ommited
[**devicesGet**](DefaultApi.md#devicesGet) | **GET** /devices | Fetch a list of Devices
[**devicesIdDelete**](DefaultApi.md#devicesIdDelete) | **DELETE** /devices/{id} | Delete a Device
[**devicesIdDistancePut**](DefaultApi.md#devicesIdDistancePut) | **PUT** /devices/{id}/distance | Update the distance counter of the Device
[**devicesIdPut**](DefaultApi.md#devicesIdPut) | **PUT** /devices/{id} | Update a Device
[**devicesNearestGet**](DefaultApi.md#devicesNearestGet) | **GET** /devices/nearest | Searches for nearest Device
[**devicesPost**](DefaultApi.md#devicesPost) | **POST** /devices | Create a Device
[**devicesRefreshGet**](DefaultApi.md#devicesRefreshGet) | **GET** /devices/refresh | Refreshes device online status
[**driversGet**](DefaultApi.md#driversGet) | **GET** /drivers | Fetch a list of Drivers
[**driversIdDelete**](DefaultApi.md#driversIdDelete) | **DELETE** /drivers/{id} | Delete a Driver
[**driversIdPut**](DefaultApi.md#driversIdPut) | **PUT** /drivers/{id} | Update a Driver
[**driversPost**](DefaultApi.md#driversPost) | **POST** /drivers | Create a Driver
[**eventsIdGet**](DefaultApi.md#eventsIdGet) | **GET** /events/{id} | 
[**geofencesGet**](DefaultApi.md#geofencesGet) | **GET** /geofences | Fetch a list of Geofences
[**geofencesIdDelete**](DefaultApi.md#geofencesIdDelete) | **DELETE** /geofences/{id} | Delete a Geofence
[**geofencesIdPut**](DefaultApi.md#geofencesIdPut) | **PUT** /geofences/{id} | Update a Geofence
[**geofencesPost**](DefaultApi.md#geofencesPost) | **POST** /geofences | Create a Geofence
[**groupsGet**](DefaultApi.md#groupsGet) | **GET** /groups | Fetch a list of Groups
[**groupsIdDelete**](DefaultApi.md#groupsIdDelete) | **DELETE** /groups/{id} | Delete a Group
[**groupsIdPut**](DefaultApi.md#groupsIdPut) | **PUT** /groups/{id} | Update a Group
[**groupsPost**](DefaultApi.md#groupsPost) | **POST** /groups | Create a Group
[**notificationsGet**](DefaultApi.md#notificationsGet) | **GET** /notifications | Fetch a list of Notifications
[**notificationsIdDelete**](DefaultApi.md#notificationsIdDelete) | **DELETE** /notifications/{id} | Delete a Notification
[**notificationsIdPut**](DefaultApi.md#notificationsIdPut) | **PUT** /notifications/{id} | Update a Notification
[**notificationsPost**](DefaultApi.md#notificationsPost) | **POST** /notifications | Create a Notification
[**notificationsTestPost**](DefaultApi.md#notificationsTestPost) | **POST** /notifications/test | Send test notification to current user via Email and SMS
[**notificationsTypesGet**](DefaultApi.md#notificationsTypesGet) | **GET** /notifications/types | Fetch a list of available Notification types
[**paymentDepositPost**](DefaultApi.md#paymentDepositPost) | **POST** /payment/deposit | Create deposit for a user
[**paymentRentPost**](DefaultApi.md#paymentRentPost) | **POST** /payment/rent | Create rent for a user
[**paymentReturnPost**](DefaultApi.md#paymentReturnPost) | **POST** /payment/return | Create return for a user
[**permissionsDelete**](DefaultApi.md#permissionsDelete) | **DELETE** /permissions | Unlink an Object from another Object
[**permissionsPost**](DefaultApi.md#permissionsPost) | **POST** /permissions | Link an Object to another Object
[**positionsGet**](DefaultApi.md#positionsGet) | **GET** /positions | Fetches a list of Positions
[**reportsDeviceRouteGet**](DefaultApi.md#reportsDeviceRouteGet) | **GET** /reports/deviceRoute | Fetch a list of Positions within between start and end points
[**reportsDisputeGet**](DefaultApi.md#reportsDisputeGet) | **GET** /reports/dispute | Fetch a list of Positions within the time period for the Devices or Groups and Users to compare
[**reportsEventsGet**](DefaultApi.md#reportsEventsGet) | **GET** /reports/events | Fetch a list of Events within the time period for the Devices or Groups
[**reportsRouteGet**](DefaultApi.md#reportsRouteGet) | **GET** /reports/route | Fetch a list of Positions within the time period for the Devices or Groups
[**reportsStopsGet**](DefaultApi.md#reportsStopsGet) | **GET** /reports/stops | Fetch a list of ReportStops within the time period for the Devices or Groups
[**reportsSummaryGet**](DefaultApi.md#reportsSummaryGet) | **GET** /reports/summary | Fetch a list of ReportSummary within the time period for the Devices or Groups
[**reportsTripsGet**](DefaultApi.md#reportsTripsGet) | **GET** /reports/trips | Fetch a list of ReportTrips within the time period for the Devices or Groups
[**serverGet**](DefaultApi.md#serverGet) | **GET** /server | Fetch Server information
[**serverPut**](DefaultApi.md#serverPut) | **PUT** /server | Update Server information
[**sessionDelete**](DefaultApi.md#sessionDelete) | **DELETE** /session | Close the Session
[**sessionGet**](DefaultApi.md#sessionGet) | **GET** /session | Fetch Session information
[**sessionLoginPost**](DefaultApi.md#sessionLoginPost) | **POST** /session/login | Use admin token to log in a user without traccartoken. This deletes the anonymous user that has the token and puts the token into the user w email
[**sessionLogoutPost**](DefaultApi.md#sessionLogoutPost) | **POST** /session/logout | logout user create anon user
[**sessionPost**](DefaultApi.md#sessionPost) | **POST** /session | Create a new Session
[**sessionRegisterGet**](DefaultApi.md#sessionRegisterGet) | **GET** /session/register | Either logs in or creates anonymous user. Sets geofence id if provided.
[**sessionUserdevicePost**](DefaultApi.md#sessionUserdevicePost) | **POST** /session/userdevice | Get data on User and Device
[**sessionUserdevicePut**](DefaultApi.md#sessionUserdevicePut) | **PUT** /session/userdevice | Update data on User, Device, and Geofence
[**statisticsGet**](DefaultApi.md#statisticsGet) | **GET** /statistics | Fetch server Statistics
[**usersFilterGet**](DefaultApi.md#usersFilterGet) | **GET** /users/filter | Fetch a list of Users filtered by specific email
[**usersGet**](DefaultApi.md#usersGet) | **GET** /users | Fetch a list of Users
[**usersIdDelete**](DefaultApi.md#usersIdDelete) | **DELETE** /users/{id} | Delete a User
[**usersIdGet**](DefaultApi.md#usersIdGet) | **GET** /users/{id} | Get a User
[**usersIdPut**](DefaultApi.md#usersIdPut) | **PUT** /users/{id} | Update a User
[**usersPost**](DefaultApi.md#usersPost) | **POST** /users | Create a User


# **attributesComputedGet**
> \Swagger\Client\Model\Attribute[] attributesComputedGet($all, $user_id, $device_id, $group_id, $refresh)

Fetch a list of Attributes

Without params, it returns a list of Attributes the user has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$all = true; // bool | Can only be used by admins or managers to fetch all entities
$user_id = 56; // int | Standard users can use this only with their own _userId_
$device_id = 56; // int | Standard users can use this only with _deviceId_s, they have access to
$group_id = 56; // int | Standard users can use this only with _groupId_s, they have access to
$refresh = true; // bool | 

try {
    $result = $apiInstance->attributesComputedGet($all, $user_id, $device_id, $group_id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->attributesComputedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **all** | **bool**| Can only be used by admins or managers to fetch all entities | [optional]
 **user_id** | **int**| Standard users can use this only with their own _userId_ | [optional]
 **device_id** | **int**| Standard users can use this only with _deviceId_s, they have access to | [optional]
 **group_id** | **int**| Standard users can use this only with _groupId_s, they have access to | [optional]
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Attribute[]**](../Model/Attribute.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributesComputedIdDelete**
> attributesComputedIdDelete($id)

Delete an Attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->attributesComputedIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->attributesComputedIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributesComputedIdPut**
> \Swagger\Client\Model\Attribute attributesComputedIdPut($id, $body)

Update an Attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\Attribute(); // \Swagger\Client\Model\Attribute | 

try {
    $result = $apiInstance->attributesComputedIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->attributesComputedIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Attribute**](../Model/Attribute.md)|  |

### Return type

[**\Swagger\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attributesComputedPost**
> \Swagger\Client\Model\Attribute attributesComputedPost($body)

Create an Attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Attribute(); // \Swagger\Client\Model\Attribute | 

try {
    $result = $apiInstance->attributesComputedPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->attributesComputedPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Attribute**](../Model/Attribute.md)|  |

### Return type

[**\Swagger\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calendarsGet**
> \Swagger\Client\Model\Calendar[] calendarsGet($all, $user_id)

Fetch a list of Calendars

Without params, it returns a list of Calendars the user has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$all = true; // bool | Can only be used by admins or managers to fetch all entities
$user_id = 56; // int | Standard users can use this only with their own _userId_

try {
    $result = $apiInstance->calendarsGet($all, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->calendarsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **all** | **bool**| Can only be used by admins or managers to fetch all entities | [optional]
 **user_id** | **int**| Standard users can use this only with their own _userId_ | [optional]

### Return type

[**\Swagger\Client\Model\Calendar[]**](../Model/Calendar.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calendarsIdDelete**
> calendarsIdDelete($id)

Delete a Calendar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->calendarsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->calendarsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calendarsIdPut**
> \Swagger\Client\Model\Calendar calendarsIdPut($id, $body)

Update a Calendar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\Calendar(); // \Swagger\Client\Model\Calendar | 

try {
    $result = $apiInstance->calendarsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->calendarsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Calendar**](../Model/Calendar.md)|  |

### Return type

[**\Swagger\Client\Model\Calendar**](../Model/Calendar.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calendarsPost**
> \Swagger\Client\Model\Calendar calendarsPost($body)

Create a Calendar

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Calendar(); // \Swagger\Client\Model\Calendar | 

try {
    $result = $apiInstance->calendarsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->calendarsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Calendar**](../Model/Calendar.md)|  |

### Return type

[**\Swagger\Client\Model\Calendar**](../Model/Calendar.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commandsGet**
> \Swagger\Client\Model\Command[] commandsGet($all, $user_id, $device_id, $group_id, $refresh)

Fetch a list of Saved Commands

Without params, it returns a list of Drivers the user has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$all = true; // bool | Can only be used by admins or managers to fetch all entities
$user_id = 56; // int | Standard users can use this only with their own _userId_
$device_id = 56; // int | Standard users can use this only with _deviceId_s, they have access to
$group_id = 56; // int | Standard users can use this only with _groupId_s, they have access to
$refresh = true; // bool | 

try {
    $result = $apiInstance->commandsGet($all, $user_id, $device_id, $group_id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->commandsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **all** | **bool**| Can only be used by admins or managers to fetch all entities | [optional]
 **user_id** | **int**| Standard users can use this only with their own _userId_ | [optional]
 **device_id** | **int**| Standard users can use this only with _deviceId_s, they have access to | [optional]
 **group_id** | **int**| Standard users can use this only with _groupId_s, they have access to | [optional]
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Command[]**](../Model/Command.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commandsIdDelete**
> commandsIdDelete($id)

Delete a Saved Command

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->commandsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->commandsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commandsIdPut**
> \Swagger\Client\Model\Command commandsIdPut($id, $body)

Update a Saved Command

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\Command(); // \Swagger\Client\Model\Command | 

try {
    $result = $apiInstance->commandsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->commandsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Command**](../Model/Command.md)|  |

### Return type

[**\Swagger\Client\Model\Command**](../Model/Command.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commandsPost**
> \Swagger\Client\Model\Command commandsPost($body)

Create a Saved Command

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Command(); // \Swagger\Client\Model\Command | 

try {
    $result = $apiInstance->commandsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->commandsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Command**](../Model/Command.md)|  |

### Return type

[**\Swagger\Client\Model\Command**](../Model/Command.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commandsSendGet**
> \Swagger\Client\Model\Command[] commandsSendGet($device_id)

Fetch a list of Saved Commands supported by Device at the moment

Return a list of saved commands linked to Device and its groups, filtered by current Device protocol support

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_id = 56; // int | Standard users can use this only with _deviceId_s, they have access to

try {
    $result = $apiInstance->commandsSendGet($device_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->commandsSendGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **int**| Standard users can use this only with _deviceId_s, they have access to | [optional]

### Return type

[**\Swagger\Client\Model\Command[]**](../Model/Command.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commandsSendPost**
> \Swagger\Client\Model\Command commandsSendPost($body)

Dispatch commands to device

Dispatch a new command or Saved Command if _body.id_ set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Command(); // \Swagger\Client\Model\Command | 

try {
    $result = $apiInstance->commandsSendPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->commandsSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Command**](../Model/Command.md)|  |

### Return type

[**\Swagger\Client\Model\Command**](../Model/Command.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **commandsTypesGet**
> \Swagger\Client\Model\CommandType[] commandsTypesGet($device_id, $text_channel)

Fetch a list of available Commands for the Device or all possible Commands if Device ommited

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_id = 56; // int | 
$text_channel = true; // bool | 

try {
    $result = $apiInstance->commandsTypesGet($device_id, $text_channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->commandsTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **int**|  | [optional]
 **text_channel** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\CommandType[]**](../Model/CommandType.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesGet**
> \Swagger\Client\Model\Device[] devicesGet($all, $user_id, $id, $unique_id, $geo_id, $model)

Fetch a list of Devices

Without any params, returns a list of the user's devices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$all = true; // bool | Can only be used by admins or managers to fetch all entities
$user_id = 56; // int | Standard users can use this only with their own _userId_
$id = 56; // int | To fetch one or more devices. Multiple params can be passed like `id=31&id=42`
$unique_id = "unique_id_example"; // string | To fetch one or more devices. Multiple params can be passed like `uniqueId=333331&uniqieId=44442`
$geo_id = 56; // int | Get devices inside geofences with these ids. Multiple params like `geoId=1&geoId=2`
$model = "model_example"; // string | To fetch one or more devices. Multiple params can be passed like `model=111-222&model=333-444`

try {
    $result = $apiInstance->devicesGet($all, $user_id, $id, $unique_id, $geo_id, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->devicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **all** | **bool**| Can only be used by admins or managers to fetch all entities | [optional]
 **user_id** | **int**| Standard users can use this only with their own _userId_ | [optional]
 **id** | **int**| To fetch one or more devices. Multiple params can be passed like &#x60;id&#x3D;31&amp;id&#x3D;42&#x60; | [optional]
 **unique_id** | **string**| To fetch one or more devices. Multiple params can be passed like &#x60;uniqueId&#x3D;333331&amp;uniqieId&#x3D;44442&#x60; | [optional]
 **geo_id** | **int**| Get devices inside geofences with these ids. Multiple params like &#x60;geoId&#x3D;1&amp;geoId&#x3D;2&#x60; | [optional]
 **model** | **string**| To fetch one or more devices. Multiple params can be passed like &#x60;model&#x3D;111-222&amp;model&#x3D;333-444&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\Device[]**](../Model/Device.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesIdDelete**
> devicesIdDelete($id)

Delete a Device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->devicesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->devicesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesIdDistancePut**
> devicesIdDistancePut($id, $body)

Update the distance counter of the Device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\DeviceTotalDistance(); // \Swagger\Client\Model\DeviceTotalDistance | 

try {
    $apiInstance->devicesIdDistancePut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->devicesIdDistancePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\DeviceTotalDistance**](../Model/DeviceTotalDistance.md)|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesIdPut**
> \Swagger\Client\Model\Device devicesIdPut($id, $body)

Update a Device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\Device(); // \Swagger\Client\Model\Device | 

try {
    $result = $apiInstance->devicesIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->devicesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Device**](../Model/Device.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesNearestGet**
> \Swagger\Client\Model\Device devicesNearestGet($tractoken, $latitude, $longitude)

Searches for nearest Device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tractoken = "tractoken_example"; // string | 
$latitude = 8.14; // float | 
$longitude = 8.14; // float | 

try {
    $result = $apiInstance->devicesNearestGet($tractoken, $latitude, $longitude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->devicesNearestGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tractoken** | **string**|  |
 **latitude** | **float**|  |
 **longitude** | **float**|  |

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesPost**
> \Swagger\Client\Model\Device devicesPost($body)

Create a Device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Device(); // \Swagger\Client\Model\Device | 

try {
    $result = $apiInstance->devicesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->devicesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Device**](../Model/Device.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Device**](../Model/Device.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesRefreshGet**
> devicesRefreshGet($force)

Refreshes device online status

Without any params, returns OK response if refreshed successfully

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$force = true; // bool | If true offline devices updated within a day will be forcefully refreshed

try {
    $apiInstance->devicesRefreshGet($force);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->devicesRefreshGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **force** | **bool**| If true offline devices updated within a day will be forcefully refreshed | [optional]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driversGet**
> \Swagger\Client\Model\Driver[] driversGet($all, $user_id, $device_id, $group_id, $refresh)

Fetch a list of Drivers

Without params, it returns a list of Drivers the user has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$all = true; // bool | Can only be used by admins or managers to fetch all entities
$user_id = 56; // int | Standard users can use this only with their own _userId_
$device_id = 56; // int | Standard users can use this only with _deviceId_s, they have access to
$group_id = 56; // int | Standard users can use this only with _groupId_s, they have access to
$refresh = true; // bool | 

try {
    $result = $apiInstance->driversGet($all, $user_id, $device_id, $group_id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->driversGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **all** | **bool**| Can only be used by admins or managers to fetch all entities | [optional]
 **user_id** | **int**| Standard users can use this only with their own _userId_ | [optional]
 **device_id** | **int**| Standard users can use this only with _deviceId_s, they have access to | [optional]
 **group_id** | **int**| Standard users can use this only with _groupId_s, they have access to | [optional]
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Driver[]**](../Model/Driver.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driversIdDelete**
> driversIdDelete($id)

Delete a Driver

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->driversIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->driversIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driversIdPut**
> \Swagger\Client\Model\Driver driversIdPut($id, $body)

Update a Driver

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\Driver(); // \Swagger\Client\Model\Driver | 

try {
    $result = $apiInstance->driversIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->driversIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Driver**](../Model/Driver.md)|  |

### Return type

[**\Swagger\Client\Model\Driver**](../Model/Driver.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **driversPost**
> \Swagger\Client\Model\Driver driversPost($body)

Create a Driver

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Driver(); // \Swagger\Client\Model\Driver | 

try {
    $result = $apiInstance->driversPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->driversPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Driver**](../Model/Driver.md)|  |

### Return type

[**\Swagger\Client\Model\Driver**](../Model/Driver.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventsIdGet**
> \Swagger\Client\Model\Event eventsIdGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->eventsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Event**](../Model/Event.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geofencesGet**
> \Swagger\Client\Model\Geofence[] geofencesGet($all, $user_id, $device_id, $group_id, $refresh)

Fetch a list of Geofences

Without params, it returns a list of Geofences the user has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$all = true; // bool | Can only be used by admins or managers to fetch all entities
$user_id = 56; // int | Standard users can use this only with their own _userId_
$device_id = 56; // int | Standard users can use this only with _deviceId_s, they have access to
$group_id = 56; // int | Standard users can use this only with _groupId_s, they have access to
$refresh = true; // bool | 

try {
    $result = $apiInstance->geofencesGet($all, $user_id, $device_id, $group_id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->geofencesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **all** | **bool**| Can only be used by admins or managers to fetch all entities | [optional]
 **user_id** | **int**| Standard users can use this only with their own _userId_ | [optional]
 **device_id** | **int**| Standard users can use this only with _deviceId_s, they have access to | [optional]
 **group_id** | **int**| Standard users can use this only with _groupId_s, they have access to | [optional]
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Geofence[]**](../Model/Geofence.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geofencesIdDelete**
> geofencesIdDelete($id)

Delete a Geofence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->geofencesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->geofencesIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geofencesIdPut**
> \Swagger\Client\Model\Geofence geofencesIdPut($id, $body)

Update a Geofence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\Geofence(); // \Swagger\Client\Model\Geofence | 

try {
    $result = $apiInstance->geofencesIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->geofencesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Geofence**](../Model/Geofence.md)|  |

### Return type

[**\Swagger\Client\Model\Geofence**](../Model/Geofence.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geofencesPost**
> \Swagger\Client\Model\Geofence geofencesPost($body)

Create a Geofence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Geofence(); // \Swagger\Client\Model\Geofence | 

try {
    $result = $apiInstance->geofencesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->geofencesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Geofence**](../Model/Geofence.md)|  |

### Return type

[**\Swagger\Client\Model\Geofence**](../Model/Geofence.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsGet**
> \Swagger\Client\Model\Group[] groupsGet($all, $user_id)

Fetch a list of Groups

Without any params, returns a list of the Groups the user belongs to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$all = true; // bool | Can only be used by admins or managers to fetch all entities
$user_id = 56; // int | Standard users can use this only with their own _userId_

try {
    $result = $apiInstance->groupsGet($all, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->groupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **all** | **bool**| Can only be used by admins or managers to fetch all entities | [optional]
 **user_id** | **int**| Standard users can use this only with their own _userId_ | [optional]

### Return type

[**\Swagger\Client\Model\Group[]**](../Model/Group.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsIdDelete**
> groupsIdDelete($id)

Delete a Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->groupsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->groupsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsIdPut**
> \Swagger\Client\Model\Group groupsIdPut($id, $body)

Update a Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\Group(); // \Swagger\Client\Model\Group | 

try {
    $result = $apiInstance->groupsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->groupsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Group**](../Model/Group.md)|  |

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupsPost**
> \Swagger\Client\Model\Group groupsPost($body)

Create a Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Group(); // \Swagger\Client\Model\Group | 

try {
    $result = $apiInstance->groupsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->groupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Group**](../Model/Group.md)|  |

### Return type

[**\Swagger\Client\Model\Group**](../Model/Group.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsGet**
> \Swagger\Client\Model\Notification[] notificationsGet($all, $user_id, $device_id, $group_id, $refresh)

Fetch a list of Notifications

Without params, it returns a list of Notifications the user has access to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$all = true; // bool | Can only be used by admins or managers to fetch all entities
$user_id = 56; // int | Standard users can use this only with their own _userId_
$device_id = 56; // int | Standard users can use this only with _deviceId_s, they have access to
$group_id = 56; // int | Standard users can use this only with _groupId_s, they have access to
$refresh = true; // bool | 

try {
    $result = $apiInstance->notificationsGet($all, $user_id, $device_id, $group_id, $refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->notificationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **all** | **bool**| Can only be used by admins or managers to fetch all entities | [optional]
 **user_id** | **int**| Standard users can use this only with their own _userId_ | [optional]
 **device_id** | **int**| Standard users can use this only with _deviceId_s, they have access to | [optional]
 **group_id** | **int**| Standard users can use this only with _groupId_s, they have access to | [optional]
 **refresh** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\Notification[]**](../Model/Notification.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsIdDelete**
> notificationsIdDelete($id)

Delete a Notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->notificationsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->notificationsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsIdPut**
> \Swagger\Client\Model\Notification notificationsIdPut($id, $body)

Update a Notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\Notification(); // \Swagger\Client\Model\Notification | 

try {
    $result = $apiInstance->notificationsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->notificationsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Notification**](../Model/Notification.md)|  |

### Return type

[**\Swagger\Client\Model\Notification**](../Model/Notification.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsPost**
> \Swagger\Client\Model\Notification notificationsPost($body)

Create a Notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Notification(); // \Swagger\Client\Model\Notification | 

try {
    $result = $apiInstance->notificationsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->notificationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Notification**](../Model/Notification.md)|  |

### Return type

[**\Swagger\Client\Model\Notification**](../Model/Notification.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsTestPost**
> notificationsTestPost()

Send test notification to current user via Email and SMS

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->notificationsTestPost();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->notificationsTestPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notificationsTypesGet**
> \Swagger\Client\Model\NotificationType[] notificationsTypesGet()

Fetch a list of available Notification types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->notificationsTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->notificationsTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\NotificationType[]**](../Model/NotificationType.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentDepositPost**
> \Swagger\Client\Model\User paymentDepositPost($tractoken, $bike, $stripe_source, $stripe_amount, $bike_amount)

Create deposit for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tractoken = "tractoken_example"; // string | Trac token used to authenticate user
$bike = "bike_example"; // string | QR code of the bike to rent
$stripe_source = "stripe_source_example"; // string | Source that we want to charge
$stripe_amount = 56; // int | Amount that we should charge
$bike_amount = "bike_amount_example"; // string | Number of scooters that the deposit authorizes user to rent

try {
    $result = $apiInstance->paymentDepositPost($tractoken, $bike, $stripe_source, $stripe_amount, $bike_amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->paymentDepositPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tractoken** | **string**| Trac token used to authenticate user |
 **bike** | **string**| QR code of the bike to rent |
 **stripe_source** | **string**| Source that we want to charge |
 **stripe_amount** | **int**| Amount that we should charge |
 **bike_amount** | **string**| Number of scooters that the deposit authorizes user to rent | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentRentPost**
> \Swagger\Client\Model\User paymentRentPost($tractoken, $bike, $bike_amount)

Create rent for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tractoken = "tractoken_example"; // string | Trac token used to authenticate user
$bike = "bike_example"; // string | QR code of the bike to rent
$bike_amount = "bike_amount_example"; // string | Number of scooters that the deposit authorizes user to rent

try {
    $result = $apiInstance->paymentRentPost($tractoken, $bike, $bike_amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->paymentRentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tractoken** | **string**| Trac token used to authenticate user |
 **bike** | **string**| QR code of the bike to rent |
 **bike_amount** | **string**| Number of scooters that the deposit authorizes user to rent | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentReturnPost**
> \Swagger\Client\Model\User paymentReturnPost($tractoken)

Create return for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tractoken = "tractoken_example"; // string | Trac token used to authenticate user

try {
    $result = $apiInstance->paymentReturnPost($tractoken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->paymentReturnPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tractoken** | **string**| Trac token used to authenticate user |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **permissionsDelete**
> permissionsDelete($body)

Unlink an Object from another Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Permission(); // \Swagger\Client\Model\Permission | 

try {
    $apiInstance->permissionsDelete($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->permissionsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Permission**](../Model/Permission.md)|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **permissionsPost**
> \Swagger\Client\Model\Permission permissionsPost($body)

Link an Object to another Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Permission(); // \Swagger\Client\Model\Permission | 

try {
    $result = $apiInstance->permissionsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->permissionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Permission**](../Model/Permission.md)|  |

### Return type

[**\Swagger\Client\Model\Permission**](../Model/Permission.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **positionsGet**
> \Swagger\Client\Model\Position[] positionsGet($device_id, $from, $to, $id)

Fetches a list of Positions

Without any params, it returns a list of last known positions for all the user's Devices. _from_ and _to_ fields are not required with _id_

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_id = 56; // int | _deviceId_ is optional, but requires the _from_ and _to_ parameters when used
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`
$id = 56; // int | To fetch one or more positions. Multiple params can be passed like `id=31&id=42`

try {
    $result = $apiInstance->positionsGet($device_id, $from, $to, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->positionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **int**| _deviceId_ is optional, but requires the _from_ and _to_ parameters when used | [optional]
 **from** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; | [optional]
 **to** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; | [optional]
 **id** | **int**| To fetch one or more positions. Multiple params can be passed like &#x60;id&#x3D;31&amp;id&#x3D;42&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\Position[]**](../Model/Position.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, text/csv, application/gpx+xml
 - **Accept**: application/json, text/csv, application/gpx+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsDeviceRouteGet**
> \Swagger\Client\Model\Position[] reportsDeviceRouteGet($device_unique_id, $start_position_id, $end_position_id)

Fetch a list of Positions within between start and end points

Device uniqueid, start position id, and end position id must be provided

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_unique_id = "device_unique_id_example"; // string | 
$start_position_id = 56; // int | 
$end_position_id = 56; // int | 

try {
    $result = $apiInstance->reportsDeviceRouteGet($device_unique_id, $start_position_id, $end_position_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reportsDeviceRouteGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_unique_id** | **string**|  |
 **start_position_id** | **int**|  |
 **end_position_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\Position[]**](../Model/Position.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsDisputeGet**
> \Swagger\Client\Model\Position[] reportsDisputeGet($from, $to, $device_id, $user_id, $group_id)

Fetch a list of Positions within the time period for the Devices or Groups and Users to compare

At least one _deviceId_ or one _groupId_ must be passed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`
$device_id = array(56); // int[] | 
$user_id = array(56); // int[] | 
$group_id = array(56); // int[] | 

try {
    $result = $apiInstance->reportsDisputeGet($from, $to, $device_id, $user_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reportsDisputeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; |
 **to** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; |
 **device_id** | [**int[]**](../Model/int.md)|  | [optional]
 **user_id** | [**int[]**](../Model/int.md)|  | [optional]
 **group_id** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Position[]**](../Model/Position.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
 - **Accept**: application/json, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsEventsGet**
> \Swagger\Client\Model\Event[] reportsEventsGet($from, $to, $device_id, $group_id, $type)

Fetch a list of Events within the time period for the Devices or Groups

At least one _deviceId_ or one _groupId_ must be passed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`
$device_id = array(56); // int[] | 
$group_id = array(56); // int[] | 
$type = array("type_example"); // string[] | % can be used to return events of all types

try {
    $result = $apiInstance->reportsEventsGet($from, $to, $device_id, $group_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reportsEventsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; |
 **to** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; |
 **device_id** | [**int[]**](../Model/int.md)|  | [optional]
 **group_id** | [**int[]**](../Model/int.md)|  | [optional]
 **type** | [**string[]**](../Model/string.md)| % can be used to return events of all types | [optional]

### Return type

[**\Swagger\Client\Model\Event[]**](../Model/Event.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
 - **Accept**: application/json, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsRouteGet**
> \Swagger\Client\Model\Position[] reportsRouteGet($from, $to, $device_id, $group_id)

Fetch a list of Positions within the time period for the Devices or Groups

At least one _deviceId_ or one _groupId_ must be passed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`
$device_id = array(56); // int[] | 
$group_id = array(56); // int[] | 

try {
    $result = $apiInstance->reportsRouteGet($from, $to, $device_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reportsRouteGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; |
 **to** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; |
 **device_id** | [**int[]**](../Model/int.md)|  | [optional]
 **group_id** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Position[]**](../Model/Position.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
 - **Accept**: application/json, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsStopsGet**
> \Swagger\Client\Model\ReportStops[] reportsStopsGet($from, $to, $device_id, $group_id)

Fetch a list of ReportStops within the time period for the Devices or Groups

At least one _deviceId_ or one _groupId_ must be passed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`
$device_id = array(56); // int[] | 
$group_id = array(56); // int[] | 

try {
    $result = $apiInstance->reportsStopsGet($from, $to, $device_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reportsStopsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; |
 **to** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; |
 **device_id** | [**int[]**](../Model/int.md)|  | [optional]
 **group_id** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ReportStops[]**](../Model/ReportStops.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
 - **Accept**: application/json, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsSummaryGet**
> \Swagger\Client\Model\ReportSummary[] reportsSummaryGet($from, $to, $device_id, $group_id)

Fetch a list of ReportSummary within the time period for the Devices or Groups

At least one _deviceId_ or one _groupId_ must be passed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`
$device_id = array(56); // int[] | 
$group_id = array(56); // int[] | 

try {
    $result = $apiInstance->reportsSummaryGet($from, $to, $device_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reportsSummaryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; |
 **to** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; |
 **device_id** | [**int[]**](../Model/int.md)|  | [optional]
 **group_id** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ReportSummary[]**](../Model/ReportSummary.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
 - **Accept**: application/json, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportsTripsGet**
> \Swagger\Client\Model\ReportTrips[] reportsTripsGet($from, $to, $device_id, $group_id)

Fetch a list of ReportTrips within the time period for the Devices or Groups

At least one _deviceId_ or one _groupId_ must be passed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`
$device_id = array(56); // int[] | 
$group_id = array(56); // int[] | 

try {
    $result = $apiInstance->reportsTripsGet($from, $to, $device_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reportsTripsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; |
 **to** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; |
 **device_id** | [**int[]**](../Model/int.md)|  | [optional]
 **group_id** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ReportTrips[]**](../Model/ReportTrips.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
 - **Accept**: application/json, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serverGet**
> \Swagger\Client\Model\Server serverGet()

Fetch Server information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->serverGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->serverGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Server**](../Model/Server.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serverPut**
> \Swagger\Client\Model\Server serverPut($body)

Update Server information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Server(); // \Swagger\Client\Model\Server | 

try {
    $result = $apiInstance->serverPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->serverPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Server**](../Model/Server.md)|  |

### Return type

[**\Swagger\Client\Model\Server**](../Model/Server.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionDelete**
> sessionDelete()

Close the Session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->sessionDelete();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sessionDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionGet**
> \Swagger\Client\Model\User sessionGet($token)

Fetch Session information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = "token_example"; // string | 

try {
    $result = $apiInstance->sessionGet($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sessionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionLoginPost**
> \Swagger\Client\Model\User sessionLoginPost($anontoken, $adminemail, $adminpassword, $email, $password, $google_login)

Use admin token to log in a user without traccartoken. This deletes the anonymous user that has the token and puts the token into the user w email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$anontoken = "anontoken_example"; // string | 
$adminemail = "adminemail_example"; // string | 
$adminpassword = "adminpassword_example"; // string | 
$email = "email_example"; // string | 
$password = "password_example"; // string | 
$google_login = true; // bool | 

try {
    $result = $apiInstance->sessionLoginPost($anontoken, $adminemail, $adminpassword, $email, $password, $google_login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sessionLoginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anontoken** | **string**|  |
 **adminemail** | **string**|  |
 **adminpassword** | **string**|  |
 **email** | **string**|  |
 **password** | **string**|  |
 **google_login** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionLogoutPost**
> \Swagger\Client\Model\User sessionLogoutPost($anontoken, $adminemail, $adminpassword)

logout user create anon user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$anontoken = "anontoken_example"; // string | 
$adminemail = "adminemail_example"; // string | 
$adminpassword = "adminpassword_example"; // string | 

try {
    $result = $apiInstance->sessionLogoutPost($anontoken, $adminemail, $adminpassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sessionLogoutPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anontoken** | **string**|  |
 **adminemail** | **string**|  |
 **adminpassword** | **string**|  |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionPost**
> \Swagger\Client\Model\User sessionPost($email, $password)

Create a new Session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->sessionPost($email, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sessionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |
 **password** | **string**|  |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionRegisterGet**
> \Swagger\Client\Model\User sessionRegisterGet($token, $geo_id)

Either logs in or creates anonymous user. Sets geofence id if provided.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = "token_example"; // string | 
$geo_id = 56; // int | 

try {
    $result = $apiInstance->sessionRegisterGet($token, $geo_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sessionRegisterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **geo_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionUserdevicePost**
> \Swagger\Client\Model\UserDevice sessionUserdevicePost($anontoken, $adminemail, $adminpassword, $bikeimei)

Get data on User and Device

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$anontoken = "anontoken_example"; // string | 
$adminemail = "adminemail_example"; // string | 
$adminpassword = "adminpassword_example"; // string | 
$bikeimei = "bikeimei_example"; // string | 

try {
    $result = $apiInstance->sessionUserdevicePost($anontoken, $adminemail, $adminpassword, $bikeimei);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sessionUserdevicePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anontoken** | **string**|  |
 **adminemail** | **string**|  |
 **adminpassword** | **string**|  |
 **bikeimei** | **string**|  |

### Return type

[**\Swagger\Client\Model\UserDevice**](../Model/UserDevice.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sessionUserdevicePut**
> \Swagger\Client\Model\User sessionUserdevicePut($body)

Update data on User, Device, and Geofence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | Request parameters and User Device to update

try {
    $result = $apiInstance->sessionUserdevicePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sessionUserdevicePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)| Request parameters and User Device to update | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **statisticsGet**
> \Swagger\Client\Model\Statistics[] statisticsGet($from, $to)

Fetch server Statistics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | in IS0 8601 format. eg. `1963-11-22T18:30:00Z`

try {
    $result = $apiInstance->statisticsGet($from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->statisticsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; |
 **to** | **\DateTime**| in IS0 8601 format. eg. &#x60;1963-11-22T18:30:00Z&#x60; |

### Return type

[**\Swagger\Client\Model\Statistics[]**](../Model/Statistics.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersFilterGet**
> \Swagger\Client\Model\User[] usersFilterGet($email)

Fetch a list of Users filtered by specific email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | Can only be used by admin

try {
    $result = $apiInstance->usersFilterGet($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->usersFilterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Can only be used by admin | [optional]

### Return type

[**\Swagger\Client\Model\User[]**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersGet**
> \Swagger\Client\Model\User[] usersGet($user_id)

Fetch a list of Users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | Can only be used by admin or manager users

try {
    $result = $apiInstance->usersGet($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->usersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| Can only be used by admin or manager users | [optional]

### Return type

[**\Swagger\Client\Model\User[]**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdDelete**
> usersIdDelete($id)

Delete a User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->usersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->usersIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdGet**
> \Swagger\Client\Model\User usersIdGet($id)

Get a User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->usersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->usersIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersIdPut**
> \Swagger\Client\Model\User usersIdPut($id, $body)

Update a User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$body = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | 

try {
    $result = $apiInstance->usersIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->usersIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **body** | [**\Swagger\Client\Model\User**](../Model/User.md)|  |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersPost**
> \Swagger\Client\Model\User usersPost($body)

Create a User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\User(); // \Swagger\Client\Model\User | 

try {
    $result = $apiInstance->usersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->usersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\User**](../Model/User.md)|  |

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

