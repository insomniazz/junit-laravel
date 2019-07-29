# sabo/junit-laravel

# 框架要求
Laravel >= 5.1 & php >= 7.1.3


# 安装方式

```shell
$ composer require sabo/junit-laravel -vvv
```

# 配置方式
5.5手动配置laravel对于``SaboJunitLaravel\Providers\JunitServiceProvider::class``服务放到config/app.php中

解释路由
```php
<?php
Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('junit.store');
?>
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/sabo/junit-laravel/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/sabo/junit-laravel/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT