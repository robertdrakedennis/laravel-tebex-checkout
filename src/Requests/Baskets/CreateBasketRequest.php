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
    ) {
    }

    /**
     * Define the HTTP method
     */
    protected Method $method = Method::POST;

    /**
     * Create a basket that can be used to pay for items.
     *
     * @see https://docs.tebex.io/tebex-checkout-apis/eICB5LG5njxwP9wLlQv4/apis#create-a-basket-that-can-be-used-to-pay-for-items
     */
    public function resolveEndpoint(): string
    {
        return '/baskets';
    }

    protected function defaultBody(): array
    {
        return [
            'return_url' => $this->returnUrl,
            'complete_url' => $this->completeUrl,
        ];
    }
}
