<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Shimmer\LaravelTebexCheckout\Requests\Checkout\CreateCheckoutRequest;
use Shimmer\LaravelTebexCheckout\TebexCheckout;

it('successfully creates a checkout request', function () {
    $mockClient = new MockClient([
        CreateCheckoutRequest::class => MockResponse::fixture('create.checkout.request'),
    ]);

    $checkout = new TebexCheckout('foo', 'bar');
    $checkout->withMockClient($mockClient);

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

    $response = $checkout->send($request);

    expect($response->successful())->toBeTrue();
    expect($response->json())->toHaveKey('price', 12.34);
});
