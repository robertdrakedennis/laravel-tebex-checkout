<?php

namespace Shimmer\LaravelTebexCheckout\Requests\RecurringPayments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class CancelRecurringPaymentRequest extends Request
{
    public function __construct(
        protected string $reference
    ) {
    }

    /**
     * Define the HTTP method
     */
    protected Method $method = Method::DELETE;

    /**
     * Cancel a recurring payment.
     *
     * @see https://docs.tebex.io/tebex-checkout-apis/eICB5LG5njxwP9wLlQv4/apis#cancel-a-recurring-payment
     */
    public function resolveEndpoint(): string
    {
        return '/recurring-payments/'.$this->reference;
    }
}
