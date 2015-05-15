# ![Image](http://i.imgur.com/Fp4eX8r.png)

# php-meerkat
An easy-to-use PHP wrapper class for accessing Meerkat's API.

---

To read the official API doumentation visit
[the Meerkat Developers page](http://developers.meerkatapp.co/)

You will also need an API key so visit
[the registration form](http://developers.meerkatapp.co/api/#getting-an-api-token)
to get one

---

### Installation

I recommend using [Composer](https://getcomposer.org) to keep updates as smooth as possible.

```
$ composer require joshOiknine/php-meerkat
```

### Initialize the class
```php
use joshOiknine\Meerkat;

$meerkat = new Meerkat('YOUR-API-KEY-HERE');
```
or w/o Composer

```php
require_once('Meerkat.php');

$meerkat = new Meerkat('YOUR-API-KEY-HERE');
```

*NOT affiliated with Meerkat*
