<?php

namespace Shimmer\LaravelTebexCheckout\Requests\Payments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class RefundPaymentRequest extends Request
{
    public function __construct(
        protected string $txnID
    ) {
    }

    /**
     * Define the HTTP method
     */
    protected Method $method = Method::POST;

    /**
     * Refund a payment by its transaction ID
     *
     * @see https://docs.tebex.io/tebex-checkout-apis/eICB5LG5njxwP9wLlQv4/apis#refund-a-payment-by-its-transaction-id
     */
    public function resolveEndpoint(): string
    {
        return '/payments/'.$this->txnID.'/refund?type=txn_id';
    }
}
