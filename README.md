# No longer maintained. Please move to https://github.com/5pm-HDH/churchtools-api!

# ChurchTools API

Access the API for [ChurchTools][1] at [https://api.churchtools.de/][3] in an object-oriented way that integrates nicely with modern PHP projects via Composer.

The API v2 which uses the new (2019) REST api can be found in the [README_API2.md](README_API2.md).

Free software (both as in free beer *and* free speech) by [Vineyard Köln][2], licensed under Apache 2.0

[1]: https://church.tools/
[2]: https://vineyard.koeln/
[3]: https://api.churchtools.de/
[4]: 


## Further development
Currently this library has not been updated recently.
If you wish to participate in development, you can send us pull requests to integrate in the main branch

## Other php CT API implementations
https://github.com/5pm-HDH/churchtools-api


## Installation

`composer require vineyardkoeln/churchtools-api`

## Usage

### Prerequisite: Autoloading

If you haven't already configured autoloading in your project, start by including the Composer autoloader:

```
require __DIR__ . '/vendor/autoload.php';
``` 

### Login to use the API

In order to use the ChurchTools API you need a valid login. This can either be a username / password pair
or you can use a login ID and token. The latter is the recommended way because it keeps you API
separate from any user account but username and password is fine for testing purposes.

To login with username and password, use this code snippet:
```
$api = \ChurchTools\Api\RestApi::createWithUsernamePassword('mychurch', 'username', 'password');
```
where `mychurch` is your church handle or subdomain like in the URL to your web interface: https://_mychurch_.church.tools/.
If you are self-hosting ChurchTools, then use full server name of your installation without protocol (so for example: `'mychurch.example.org'`).

To login with a login ID and token, use this code snippet (recommended):
```
$api = \ChurchTools\Api\RestApi::createWithLoginIdToken('mychurch', 1337, 'a really long seemingly random string of 256 alphanumeric characters');
```
You can retrieve the token by logging in once to the API with a username and password via the static method `getLoginToken()` (see below).

The login is valid for the duration of the programm call (script lifecycle). This way you can perform many requests with
only one login via the static constructor method of your choice.

The following examples mostly assume you have a valid login and the API object is assigned to the variable `$api`. 

### Get Token

In order to acquire a login ID and token you must call the `getLoginToken` method once:

```
$result = \ChurchTools\Api\RestApi::getLoginToken($churchHandle, $usernameOrEmail, $pass);
var_dump($result);
```

This will return something like: 
```
array(2) {
  ["status"]=>
  string(7) "success"
  ["data"]=>
  array(2) {
    ["token"]=>
    string(256) "this is the very long string of seemingly random 256 alphanumberic characters that you need to store"
    ["id"]=>
    string(4) "1337"
  }
}
```

### Get all calendar entries

To get all calendar entries from now until 10 days in the future:
```
$events = $api->getCalendarEvents([1,2,…]);

foreach ($events['data'] as $event) {
    // …
}
```

This method also has two optional parameters, `$toDays` and `$fromDays`, which allow you to select the desired timeframe.

### Get master data

To get calendar or service master data, use this method:

```
var_dump($api->getCalendarMasterData());
```

or 

```
var_dump($api->getServiceMasterData());
```

TODO: In one of the upcoming alpha versions, methods will return model objects and not plain arrays.

## TODOs

1. Wrap more API calls
1. Use Model classes for the return data instead of plain arrays
1. Someday, wrap all available API calls
1. Document every single available method
