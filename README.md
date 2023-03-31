This package is currently for internal use, do not expect support.


```
composer require useshimmer/laravel-tebex-checkout
```


### Create a checkout with sdk:

```PHP
    $connector = new TebexCheckout('foo', 'bar');
    
    $request = new CreateCheckoutRequest(
        basket: [
            'return_url' => 'http://foo.com',
            'complete_url' => 'http://bar.com',
            'custom' => [
                'baz' => 'buzz',
            ],
        ],
        items: [
            [
                'package' => [
                    'name' => 'foobar',
                    'price' => 12.34,
                ],
            ],
        ]
    );

    $response = $connector->send($request);
```

### Create a checkout with resource api:

```PHP
    $connector = new TebexCheckout('foo', 'bar');

    $response = $connector->checkout()->create(
        basket: [
            'return_url' => 'http://foo.com',
            'complete_url' => 'http://bar.com',
            'custom' => [
                'baz' => 'buzz',
            ],
        ],
        items: [
            [
                'package' => [
                    'name' => 'foobar',
                    'price' => 12.34,
                ],
            ],
        ]
    );

```
