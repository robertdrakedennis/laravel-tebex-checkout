<?php

namespace Shimmer\LaravelTebexCheckout\Requests\RecurringPayments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetRecurringPaymentRequest extends Request
{
    public function __construct(
        protected string $reference
    ) {
    }

    /**
     * Define the HTTP method
     */
    protected Method $method = Method::GET;

    /**
     * Fetch a recurring payment (subscription) by its reference.
     *
     * @see https://docs.tebex.io/tebex-checkout-apis/eICB5LG5njxwP9wLlQv4/apis#fetch-a-recurring-payment-subscription-by-its-reference
     */
    public function resolveEndpoint(): string
    {
        return '/recurring-payments/'.$this->reference;
    }
}
