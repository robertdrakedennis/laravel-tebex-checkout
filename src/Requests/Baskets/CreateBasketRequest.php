<?php

namespace Shimmer\LaravelTebexCheckout\Requests\Baskets;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateBasketRequest extends Request implements HasBody
{
    use HasJsonBody;

    public function __construct(
        protected string $returnUrl,
        protected string $completeUrl
    ){}

    /**
     * Define the HTTP method
     *
     * @var Method
     */
    protected Method $method = Method::POST;

    /**
     * Define the endpoint for the request
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/baskets';
    }

    protected function defaultBody(): array
    {
        return [
            'return_url' => $this->returnUrl,
            'complete_url' => $this->completeUrl
        ];
    }
}
