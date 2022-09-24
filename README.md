# Quote

This package content is developed to set content by page

## Installation

Use the package manager [package](https://packagist.org/packages/eyupinann/quote) to install foobar.

```bash
composer require eyupinann/quote
```
We add this code to the providers part in config/app.php so we import the providers part of our package
```php
eyupinann\Quote\BlogPackageServiceProvider::class
```
We run our provider file with this command. Our migration and view files are created
```bash
php artisan vendor:publish --provider="eyupinann\Quote\BlogPackageServiceProvider" --tag="page"
php artisan migrate
```
## Usage
Using this function, we send the page name and content to the relevant function and return it.

```php
use eyupinann\Quote\Index;

public function App(Index $index) {
  return $index->page('About','info@google.com');
}
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
