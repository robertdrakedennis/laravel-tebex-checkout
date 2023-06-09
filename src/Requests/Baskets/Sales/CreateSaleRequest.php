<?php

namespace Shimmer\LaravelTebexCheckout\Requests\Baskets\Sales;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateSaleRequest extends Request implements HasBody
{
    use HasJsonBody;

    public function __construct(
        protected string $ident,
        protected string $name,
        protected string $discountType,
        protected float $amount
    ) {
    }

    /**
     * Define the HTTP method
     */
    protected Method $method = Method::POST;

    /**
     * Add a sale to the basket
     *
     * @see https://docs.tebex.io/tebex-checkout-apis/eICB5LG5njxwP9wLlQv4/apis#add-a-sale-to-the-basket
     */
    public function resolveEndpoint(): string
    {
        return '/baskets/'.$this->ident.'/sales';
    }

    protected function defaultBody(): array
    {
        return [
            'name' => $this->name,
            'discount_type' => $this->discountType,
            'amount' => $this->amount,
        ];
    }
}
