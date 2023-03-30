<?php

namespace Shimmer\LaravelTebexCheckout\Requests\Baskets;

use App\Data\TebexCheckout\Responses\Baskets\BasketResponse;
use Saloon\Contracts\Response;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetBasketRequest extends Request
{
    public function __construct(
        protected string $ident
    ){}

    /**
     * Define the HTTP method
     *
     * @var Method
     */
    protected Method $method = Method::GET;

    /**
     * Define the endpoint for the request
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/baskets/' . $this->ident;
    }
}
