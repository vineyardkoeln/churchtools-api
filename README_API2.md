# ChurchTools API2

Access the new (2019) Rest API for [ChurchTools][1]  via classes and methods

Free software (both as in free beer *and* free speech) by [Vineyard Köln][2], licensed under Apache 2.0

[1]: https://church.tools/

## Installation

`composer require vineyardkoeln/churchtools-api`

## Usage

### Prerequisite: Autoloading

If you haven't already configured autoloading in your project, start by including the Composer autoloader:

```
require __DIR__ . '/vendor/autoload.php';
``` 

### Using the Api2

```
require_once __DIR__.'/vendor/autoload.php';

$apiClient = \ChurchTools\Api2\RestApi2::createClientWithUsernamePassword("https://mysite.church.tools", "username", "mypassword");
$apiInfo = $apiClient->getApiInfo();
var_dump($apiInfo);
```

You can also use tokens to access the Api2. In that case use this create method:

```
$apiClient = \ChurchTools\Api2\RestApi2::createClientWithLoginToken("https://mysite.church.tools", "my_auth_token");
```
