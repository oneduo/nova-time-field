<h3 align="left">Laravel Nova Time field</h3>

<div align="left">

![Status](https://img.shields.io/badge/status-active-success.svg)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)
![PHP](https://img.shields.io/badge/PHP-8.0-blue.svg)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/oneduo/nova-time-field.svg)](https://packagist.org/packages/oneduo/nova-time-field)
[![Downloads](https://img.shields.io/packagist/dt/oneduo/nova-time-field.svg)](https://packagist.org/packages/oneduo/nova-time-field)
[![Run tests](https://github.com/oneduo/nova-time-field/actions/workflows/tests.yml/badge.svg?branch=main)](https://github.com/oneduo/nova-time-field/actions/workflows/tests.yml)
</div>

---

## Table of Contents

- [Getting Started](#getting_started)
  - [Prerequisites](#prerequisites)
  - [Installing](#installing)
- [Usage](#usage)
- [Authors](#authors)
- [Changelog](#changelog)
- [Security](#security)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)

## Getting Started <a name = "getting_started"></a>

### Prerequisites

This package requires the following :

- PHP 8.0 or higher
- Laravel Nova 4.0 or higher

### Installing

To get started, you will need to install the following dependencies :

```
composer require oneduo/nova-time-field
```

That's it, you're ready to go!

## Usage <a name="usage"></a>

You may use the `Time` in your Nova resource :

```php
// app/Nova/User.php

use Oneduo\NovaTimeField\File;

class User extends Resource
{
    // ...

    public function fields(NovaRequest $request): array
    {
        return [
            // ... any other fields
            File::make(__('time'), 'time'),
        ];
    }
}
```

## Authors <a name = "authors"></a>

- [Mikaël Popowicz](https://github.com/mikaelpopowicz)
- [Charaf Rezrazi](https://github.com/rezrazi)

See also the list of [contributors](https://github.com/oneduo/nova-time-field/contributors) who
participated in this project.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Security

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
