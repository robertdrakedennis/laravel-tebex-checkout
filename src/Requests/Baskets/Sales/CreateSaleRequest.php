<?php

namespace Shimmer\LaravelTebexCheckout\Requests\Baskets\Sales;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;

class CreateSaleRequest extends Request implements HasBody
{
    use \Saloon\Traits\Body\HasBody;

    public function __construct(
        protected string $ident,
        protected string $name,
        protected string $discountType,
        protected float $amount
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
        return '/baskets/' . $this->ident . '/sales';
    }

    protected function defaultBody(): array
    {
        return [
            'name' => $this->name,
            'discount_type' => $this->discountType,
            'amount' => $this->amount
        ];
    }
}
