<?php

namespace Shimmer\LaravelTebexCheckout\Resources;

use Saloon\Contracts\Response;
use Shimmer\LaravelTebexCheckout\Requests\Checkout\CreateCheckoutRequest;

class CheckoutResource extends Resource
{
    public function create(array $basket, array $items): Response
    {
        return $this->connector->send(new CreateCheckoutRequest($basket, $items));
    }
}
