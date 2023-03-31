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
     * Define the endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/baskets/'.$this->ident;
    }
}
