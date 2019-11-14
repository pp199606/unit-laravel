## smallzhu/unit-laravel

这里是对于框架的介绍

## 对于框架的要求

Laravel >=5.5 & php >= 7.1.3;

## 安装方式

```yml 
composer require "smallzhu/unit-laravel";
```

## 配置方式
laravel<=5.5 手动配置``Smallzhu\UnitLaravel\Providers\UnitServiceProvider::class`` 服务到config/app.php服务中

## 解释路由
```php
Route::get('/', 'unitController@index');
Route::get('test', 'TestController@index');
Route::post('/', 'unitController@store')->name('unit.store');
```