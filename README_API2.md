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

### Generate the data classes, which match your CT instance
**Before the first use of the classes, you need to generate the wrapper
classes which match your CT instance.**

We can't provide these for you, since each CT instance can be extended/configured
with additional fields and tables.

So you need to create a file which the content below and set the URL to your CT
instance.

You can then call this script once (and afterwards when you add fields to your
CT instance or if you have an upgrade of the CT version)

**The generation of these classes takes 1-2 minutes, depending on your CPU**

```
require __DIR__ . '/vendor/autoload.php';
require_once 'ChurchTools/Tools/Api2Helper.php';
\ChurchTools\Tools\Api2Helper::generateClient("https://mysite.church.tools");
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
