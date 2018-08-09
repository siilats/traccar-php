# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 3.16
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/siilats/traccar-php.git"
    }
  ],
  "require": {
    "siilats/traccar-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *http://nfn.siilats.com:8082/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**attributesComputedGet**](docs/Api/DefaultApi.md#attributescomputedget) | **GET** /attributes/computed | Fetch a list of Attributes
*DefaultApi* | [**attributesComputedIdDelete**](docs/Api/DefaultApi.md#attributescomputediddelete) | **DELETE** /attributes/computed/{id} | Delete an Attribute
*DefaultApi* | [**attributesComputedIdPut**](docs/Api/DefaultApi.md#attributescomputedidput) | **PUT** /attributes/computed/{id} | Update an Attribute
*DefaultApi* | [**attributesComputedPost**](docs/Api/DefaultApi.md#attributescomputedpost) | **POST** /attributes/computed | Create an Attribute
*DefaultApi* | [**calendarsGet**](docs/Api/DefaultApi.md#calendarsget) | **GET** /calendars | Fetch a list of Calendars
*DefaultApi* | [**calendarsIdDelete**](docs/Api/DefaultApi.md#calendarsiddelete) | **DELETE** /calendars/{id} | Delete a Calendar
*DefaultApi* | [**calendarsIdPut**](docs/Api/DefaultApi.md#calendarsidput) | **PUT** /calendars/{id} | Update a Calendar
*DefaultApi* | [**calendarsPost**](docs/Api/DefaultApi.md#calendarspost) | **POST** /calendars | Create a Calendar
*DefaultApi* | [**commandsGet**](docs/Api/DefaultApi.md#commandsget) | **GET** /commands | Fetch a list of Saved Commands
*DefaultApi* | [**commandsIdDelete**](docs/Api/DefaultApi.md#commandsiddelete) | **DELETE** /commands/{id} | Delete a Saved Command
*DefaultApi* | [**commandsIdPut**](docs/Api/DefaultApi.md#commandsidput) | **PUT** /commands/{id} | Update a Saved Command
*DefaultApi* | [**commandsPost**](docs/Api/DefaultApi.md#commandspost) | **POST** /commands | Create a Saved Command
*DefaultApi* | [**commandsSendGet**](docs/Api/DefaultApi.md#commandssendget) | **GET** /commands/send | Fetch a list of Saved Commands supported by Device at the moment
*DefaultApi* | [**commandsSendPost**](docs/Api/DefaultApi.md#commandssendpost) | **POST** /commands/send | Dispatch commands to device
*DefaultApi* | [**commandsTypesGet**](docs/Api/DefaultApi.md#commandstypesget) | **GET** /commands/types | Fetch a list of available Commands for the Device or all possible Commands if Device ommited
*DefaultApi* | [**devicesGet**](docs/Api/DefaultApi.md#devicesget) | **GET** /devices | Fetch a list of Devices
*DefaultApi* | [**devicesIdDelete**](docs/Api/DefaultApi.md#devicesiddelete) | **DELETE** /devices/{id} | Delete a Device
*DefaultApi* | [**devicesIdDistancePut**](docs/Api/DefaultApi.md#devicesiddistanceput) | **PUT** /devices/{id}/distance | Update the distance counter of the Device
*DefaultApi* | [**devicesIdPut**](docs/Api/DefaultApi.md#devicesidput) | **PUT** /devices/{id} | Update a Device
*DefaultApi* | [**devicesPost**](docs/Api/DefaultApi.md#devicespost) | **POST** /devices | Create a Device
*DefaultApi* | [**driversGet**](docs/Api/DefaultApi.md#driversget) | **GET** /drivers | Fetch a list of Drivers
*DefaultApi* | [**driversIdDelete**](docs/Api/DefaultApi.md#driversiddelete) | **DELETE** /drivers/{id} | Delete a Driver
*DefaultApi* | [**driversIdPut**](docs/Api/DefaultApi.md#driversidput) | **PUT** /drivers/{id} | Update a Driver
*DefaultApi* | [**driversPost**](docs/Api/DefaultApi.md#driverspost) | **POST** /drivers | Create a Driver
*DefaultApi* | [**eventsIdGet**](docs/Api/DefaultApi.md#eventsidget) | **GET** /events/{id} | 
*DefaultApi* | [**geofencesGet**](docs/Api/DefaultApi.md#geofencesget) | **GET** /geofences | Fetch a list of Geofences
*DefaultApi* | [**geofencesIdDelete**](docs/Api/DefaultApi.md#geofencesiddelete) | **DELETE** /geofences/{id} | Delete a Geofence
*DefaultApi* | [**geofencesIdPut**](docs/Api/DefaultApi.md#geofencesidput) | **PUT** /geofences/{id} | Update a Geofence
*DefaultApi* | [**geofencesPost**](docs/Api/DefaultApi.md#geofencespost) | **POST** /geofences | Create a Geofence
*DefaultApi* | [**groupsGet**](docs/Api/DefaultApi.md#groupsget) | **GET** /groups | Fetch a list of Groups
*DefaultApi* | [**groupsIdDelete**](docs/Api/DefaultApi.md#groupsiddelete) | **DELETE** /groups/{id} | Delete a Group
*DefaultApi* | [**groupsIdPut**](docs/Api/DefaultApi.md#groupsidput) | **PUT** /groups/{id} | Update a Group
*DefaultApi* | [**groupsPost**](docs/Api/DefaultApi.md#groupspost) | **POST** /groups | Create a Group
*DefaultApi* | [**notificationsGet**](docs/Api/DefaultApi.md#notificationsget) | **GET** /notifications | Fetch a list of Notifications
*DefaultApi* | [**notificationsIdDelete**](docs/Api/DefaultApi.md#notificationsiddelete) | **DELETE** /notifications/{id} | Delete a Notification
*DefaultApi* | [**notificationsIdPut**](docs/Api/DefaultApi.md#notificationsidput) | **PUT** /notifications/{id} | Update a Notification
*DefaultApi* | [**notificationsPost**](docs/Api/DefaultApi.md#notificationspost) | **POST** /notifications | Create a Notification
*DefaultApi* | [**notificationsTestPost**](docs/Api/DefaultApi.md#notificationstestpost) | **POST** /notifications/test | Send test notification to current user via Email and SMS
*DefaultApi* | [**notificationsTypesGet**](docs/Api/DefaultApi.md#notificationstypesget) | **GET** /notifications/types | Fetch a list of available Notification types
*DefaultApi* | [**permissionsDelete**](docs/Api/DefaultApi.md#permissionsdelete) | **DELETE** /permissions | Unlink an Object from another Object
*DefaultApi* | [**permissionsPost**](docs/Api/DefaultApi.md#permissionspost) | **POST** /permissions | Link an Object to another Object
*DefaultApi* | [**positionsGet**](docs/Api/DefaultApi.md#positionsget) | **GET** /positions | Fetches a list of Positions
*DefaultApi* | [**reportsEventsGet**](docs/Api/DefaultApi.md#reportseventsget) | **GET** /reports/events | Fetch a list of Events within the time period for the Devices or Groups
*DefaultApi* | [**reportsRouteGet**](docs/Api/DefaultApi.md#reportsrouteget) | **GET** /reports/route | Fetch a list of Positions within the time period for the Devices or Groups
*DefaultApi* | [**reportsStopsGet**](docs/Api/DefaultApi.md#reportsstopsget) | **GET** /reports/stops | Fetch a list of ReportStops within the time period for the Devices or Groups
*DefaultApi* | [**reportsSummaryGet**](docs/Api/DefaultApi.md#reportssummaryget) | **GET** /reports/summary | Fetch a list of ReportSummary within the time period for the Devices or Groups
*DefaultApi* | [**reportsTripsGet**](docs/Api/DefaultApi.md#reportstripsget) | **GET** /reports/trips | Fetch a list of ReportTrips within the time period for the Devices or Groups
*DefaultApi* | [**serverGet**](docs/Api/DefaultApi.md#serverget) | **GET** /server | Fetch Server information
*DefaultApi* | [**serverPut**](docs/Api/DefaultApi.md#serverput) | **PUT** /server | Update Server information
*DefaultApi* | [**sessionDelete**](docs/Api/DefaultApi.md#sessiondelete) | **DELETE** /session | Close the Session
*DefaultApi* | [**sessionGet**](docs/Api/DefaultApi.md#sessionget) | **GET** /session | Fetch Session information
*DefaultApi* | [**sessionLoginGet**](docs/Api/DefaultApi.md#sessionloginget) | **GET** /session/login | Use admin token to log in a user without traccartoken. This deletes the anonymous user that has the token and puts the token into the user w email
*DefaultApi* | [**sessionPost**](docs/Api/DefaultApi.md#sessionpost) | **POST** /session | Create a new Session
*DefaultApi* | [**statisticsGet**](docs/Api/DefaultApi.md#statisticsget) | **GET** /statistics | Fetch server Statistics
*DefaultApi* | [**usersGet**](docs/Api/DefaultApi.md#usersget) | **GET** /users | Fetch a list of Users
*DefaultApi* | [**usersIdDelete**](docs/Api/DefaultApi.md#usersiddelete) | **DELETE** /users/{id} | Delete a User
*DefaultApi* | [**usersIdPut**](docs/Api/DefaultApi.md#usersidput) | **PUT** /users/{id} | Update a User
*DefaultApi* | [**usersPost**](docs/Api/DefaultApi.md#userspost) | **POST** /users | Create a User


## Documentation For Models

 - [Attribute](docs/Model/Attribute.md)
 - [Calendar](docs/Model/Calendar.md)
 - [Command](docs/Model/Command.md)
 - [CommandType](docs/Model/CommandType.md)
 - [Device](docs/Model/Device.md)
 - [DeviceTotalDistance](docs/Model/DeviceTotalDistance.md)
 - [Driver](docs/Model/Driver.md)
 - [Event](docs/Model/Event.md)
 - [Geofence](docs/Model/Geofence.md)
 - [Group](docs/Model/Group.md)
 - [Notification](docs/Model/Notification.md)
 - [NotificationType](docs/Model/NotificationType.md)
 - [Permission](docs/Model/Permission.md)
 - [Position](docs/Model/Position.md)
 - [ReportStops](docs/Model/ReportStops.md)
 - [ReportSummary](docs/Model/ReportSummary.md)
 - [ReportTrips](docs/Model/ReportTrips.md)
 - [Server](docs/Model/Server.md)
 - [Statistics](docs/Model/Statistics.md)
 - [User](docs/Model/User.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication


## Author




