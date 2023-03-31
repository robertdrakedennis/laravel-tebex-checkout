<?php

namespace Shimmer\LaravelTebexCheckout\Resources;

use Saloon\Contracts\Response;
use Shimmer\LaravelTebexCheckout\Requests\Payments\GetPaymentRequest;
use Shimmer\LaravelTebexCheckout\Requests\Payments\RefundPaymentRequest;

class PaymentResource extends Resource
{
    public function get(string $txnID): Response
    {
        return $this->connector->send(new GetPaymentRequest($txnID));
    }

    public function refund(string $txnID): Response
    {
        return $this->connector->send(new RefundPaymentRequest($txnID));
    }

    public function delete(string $txnID): Response
    {
        return $this->refund($txnID);
    }
}
