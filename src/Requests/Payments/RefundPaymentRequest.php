<?php

namespace Shimmer\LaravelTebexCheckout\Requests\Payments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class RefundPaymentRequest extends Request
{
    public function __construct(
        protected string $txnID
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
        return '/payments/' . $this->txnID . '/refund?type=txn_id';
    }
}
