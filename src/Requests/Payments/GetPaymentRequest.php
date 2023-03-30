<?php

namespace Shimmer\LaravelTebexCheckout\Requests\Payments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetPaymentRequest extends Request
{
    public function __construct(
        protected string $txnID
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
        return '/payments/' . $this->txnID . '?type=txn_id';
    }
}
