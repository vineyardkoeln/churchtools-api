# ChurchTools API

Access the API for [ChurchTools][1] at [https://api.churchtools.de/][3] in an object-oriented way that integrates nicely with modern PHP projects via Composer.

Free software (both as in free beer *and* free speech) by [Vineyard Köln][2], licensed under Apache 2.0

[1]: https://church.tools/
[2]: https://vineyard.koeln/
[3]: https://api.churchtools.de/

## Installation

`composer require vineyardkoeln/churchtools-api`

## Usage

### Get all calendar entries

To get all calendar entries from now until in 10 days:

```
require __DIR__ . '/vendor/autoload.php';
use ChurchTools\Api\RestApi;

$churchHandle = 'mychurch';
$loginId = 1234; // see below how to get id/token
$token = '…';
$api = RestApi::createWithLoginIdToken($churchHandle, $loginId, $token);
$events = $api->getCalendarEvents([1,2,…]);

foreach($events['data'] as $event) {
    // …
}
```

### Get Token

```
require __DIR__ . '/vendor/autoload.php';
use ChurchTools\Api\RestApi;

$churchHandle = 'mychurch';
$email = 'user@domain.org';
$pass = '…';

$api = RestApi::createWithUsernamePassword($churchHandle, $email, $pass);
print_r($api->getToken($email, $pass));
```
