# Laravel Pagination for UIkit

https://getuikit.com/

## Requirements
- PHP >= 8.0
- Laravel >= 10.0

> No version restrictions. It may stop working in future versions.

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
     */
    public function boot(): void
    {
        Paginator::defaultView('pagination-uikit::uikit3');
        Paginator::defaultSimpleView('pagination-uikit::uikit3-simple');
    }
}
```

## Publishing Views(Optional)
```
php artisan vendor:publish --tag=pagination-uikit
```

`resources/views/vendor/pagination-uikit`

## LICENSE
MIT  
