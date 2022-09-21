# Quote

This package content is developed to set content by page

## Installation

Use the package manager [package](https://packagist.org/packages/eyupinann/quote) to install foobar.

```bash
composer require eyupinann/quote
```

## Usage


```php
use eyupinann\Quote\Index;

public function App(Index $index) {
  return $index->page('Contact',['test@test.com','0505'])
}
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
