<?php

namespace Shimmer\LaravelTebexCheckout\Requests\RecurringPayments;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateRecurringPaymentRequest extends Request implements HasBody
{
    use HasJsonBody;

    public function __construct(
        protected string $reference,
        protected array $items,
    ) {
    }

    /**
     * Define the HTTP method
     */
    protected Method $method = Method::PUT;

    /**
     * Update a subscription with a new product / amount to pay - replacing the existing product.
     *
     * @see https://docs.tebex.io/tebex-checkout-apis/eICB5LG5njxwP9wLlQv4/apis#update-a-subscription-with-a-new-product-amount-to-pay-replacing-the-existing-product
     */
    public function resolveEndpoint(): string
    {
        return '/recurring-payments/'.$this->reference;
    }

    protected function defaultBody(): array
    {
        return [
            'items' => $this->items,
        ];
    }
}
