This is a Laravel 5 package that provides fbaccount management facility for lavalite framework.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `fbaccount/fbaccount`.

    "fbaccount/fbaccount": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

```php
Fbaccount\Fbaccount\Providers\FbaccountServiceProvider::class,

```

And also add it to alias

```php
'Fbaccount'  => Fbaccount\Fbaccount\Facades\Fbaccount::class,
```

Use the below commands for publishing

Migration and seeds

    php artisan vendor:publish --provider="Fbaccount\Fbaccount\Providers\FbaccountServiceProvider" --tag="migrations"
    php artisan vendor:publish --provider="Fbaccount\Fbaccount\Providers\FbaccountServiceProvider" --tag="seeds"

Configuration

    php artisan vendor:publish --provider="Fbaccount\Fbaccount\Providers\FbaccountServiceProvider" --tag="config"

Language

    php artisan vendor:publish --provider="Fbaccount\Fbaccount\Providers\FbaccountServiceProvider" --tag="lang"

Views public and admin

    php artisan vendor:publish --provider="Fbaccount\Fbaccount\Providers\FbaccountServiceProvider" --tag="view-public"
    php artisan vendor:publish --provider="Fbaccount\Fbaccount\Providers\FbaccountServiceProvider" --tag="view-admin"

Publish admin views only if it is necessary.

## Usage


