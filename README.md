# Novassport

A Laravel Nova tool to manage API Authentication (Passport).

![Screenshot](https://i.imgur.com/uFkhrIk.png)

## Todo :

- [x] My Apps
- [x] Authorized Apps
- [ ] Personal Access Tokens

## Requirements

- Laravel
- Passport


## Installation

Depending on your version of Laravel, you should install a different version of the package.

| Laravel Version | Package Version |
|:---------------:|:---------------:|
|       6.0       |      soon..     |
|       5.8       |      1.0        |

You can install the Nova tool in to a [Laravel](http://laravel.com) app that uses [Nova](http://nova.laravel.com) via composer :

```cli
composer require kristories/novassport
```


## Usage

Add `Novassport` to your `NovaServiceProvider.php`


```php

use Kristories\Novassport\Novassport;

// ...

public function tools()
{
    return [
        // ...
        new Novassport(),
    ];
}
```

## License

The MIT License (MIT).
