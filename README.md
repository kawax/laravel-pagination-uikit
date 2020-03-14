# Laravel Pagination for UIkit

https://getuikit.com/

## Requirements
- PHP >= 7.2
- Laravel >= 6.0

## Installation

```
composer require revolution/laravel-pagination-uikit
```

### AppServiceProvider@boot

```php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('pagination-uikit::uikit3');
        Paginator::defaultSimpleView('pagination-uikit::uikit3-simple');
    }
}
```

## Publishing Views(Optional)
```
php artisan vendor:publish --provider="Revolution\Pagination\UIkit\UIkitServiceProvider"
```

`resources/views/vendor/pagination-uikit`

## LICENSE
MIT  
