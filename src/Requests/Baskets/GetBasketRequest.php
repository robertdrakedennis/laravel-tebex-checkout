<?php

namespace Shimmer\LaravelTebexCheckout\Requests\Baskets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetBasketRequest extends Request
{
    public function __construct(
        protected string $ident
    ) {
    }

    /**
     * Define the HTTP method
     */
    protected Method $method = Method::GET;

    /**
     * Fetch a basket by its identifier.
     *
     * @see https://docs.tebex.io/tebex-checkout-apis/eICB5LG5njxwP9wLlQv4/apis#fetch-a-basket-by-its-identifier
     */
    public function resolveEndpoint(): string
    {
        return '/baskets/'.$this->ident;
    }
}
