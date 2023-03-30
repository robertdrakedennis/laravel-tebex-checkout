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
    ){}

    /**
     * Define the HTTP method
     *
     * @var Method
     */
    protected Method $method = Method::PUT;

    /**
     * Define the endpoint for the request
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/recurring-payments/' . $this->reference;
    }

    protected function defaultBody(): array
    {
        return [
            'items' => $this->items
        ];
    }
}
