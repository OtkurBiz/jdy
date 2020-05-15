<h1 align="left"><a href="#">jdy SDK</a></h1>

📦 字节跳动PHP SDK 抖音小程序、头条小程序开发组件。PHP SDK for jdy (douyin, tiktok, toutiao)


## Requirement

1. PHP >= 7.1
2. **[Composer](https://getcomposer.org/)**
3. openssl 拓展


## Installation

```shell
$ composer require "otkurbiz/jdy" -vvv
```

## Usage

基本使用（以服务端为例）:

```php
<?php

use EasyWeChat\Factory;

$options = [
    'app_id'    => 'wx3cf01239eb0exxx',
    'app_secret'    => 'f1c242f4f28f735d4687abb469072xxx',
    // ...
];

$app = Factory::make($options);

$session = $app->auth->session($code);
```


## Documentation

Coming soon

## Integration

[Laravel 5 拓展包: otkurbiz/laravel-jdy](https://github.com/otkurbiz/laravel-jdy)

## Contributors


## License

MIT

## Special Thanks
[@overtrue](https://github.com/overtrue)

[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fotkurbiz%2Fjdy.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Fovertrue%2Fwechat?ref=badge_large)
