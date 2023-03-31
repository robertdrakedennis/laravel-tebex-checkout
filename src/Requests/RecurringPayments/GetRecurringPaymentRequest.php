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
     * Define the endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/recurring-payments/'.$this->reference;
    }
}
