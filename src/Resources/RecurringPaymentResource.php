<?php

namespace Shimmer\LaravelTebexCheckout\Resources;

use Saloon\Contracts\Response;
use Shimmer\LaravelTebexCheckout\Requests\RecurringPayments\CancelRecurringPaymentRequest;
use Shimmer\LaravelTebexCheckout\Requests\RecurringPayments\GetRecurringPaymentRequest;
use Shimmer\LaravelTebexCheckout\Requests\RecurringPayments\UpdateRecurringPaymentRequest;

class RecurringPaymentResource extends Resource
{
    public function get(string $reference): Response
    {
        return $this->connector->send(new GetRecurringPaymentRequest($reference));
    }

    public function update(string $reference, array $items): Response
    {
        return $this->connector->send(new UpdateRecurringPaymentRequest($reference, $items));
    }

    public function cancel(string $reference): Response
    {
        return $this->connector->send(new CancelRecurringPaymentRequest($reference));
    }

    public function delete(string $reference): Response
    {
        return $this->cancel($reference);
    }
}
