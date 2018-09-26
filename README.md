# Novassport

A Laravel Nova tool to manage API Authentication (Passport).

![Screenshot](https://i.imgur.com/uFkhrIk.png)

## Todo :

- [x] My Apps
- [x] Authorized Apps
- [ ] Personal Access Tokens

## Installation 

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
