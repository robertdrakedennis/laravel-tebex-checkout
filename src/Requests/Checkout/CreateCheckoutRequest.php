<?php

namespace Shimmer\LaravelTebexCheckout\Requests\Checkout;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateCheckoutRequest extends Request implements HasBody
{
    use HasJsonBody;

    public function __construct(
        protected array $basket,
        protected array $items,
    ) {
    }

    /**
     * Define the HTTP method
     */
    protected Method $method = Method::POST;

    /**
     * Define the endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/checkout';
    }

    protected function defaultBody(): array
    {
        return [
            'basket' => $this->basket,
            'items' => $this->items,
        ];
    }
}
