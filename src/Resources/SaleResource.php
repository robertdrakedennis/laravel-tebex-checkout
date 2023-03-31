<?php

namespace Shimmer\LaravelTebexCheckout\Resources;

use Saloon\Contracts\Response;
use Shimmer\LaravelTebexCheckout\Requests\Baskets\Sales\CreateSaleRequest;

class SaleResource extends Resource
{
    public function create(string $id, string $name, string $discountType, float $amount): Response
    {
        return $this->connector->send(new CreateSaleRequest($id, $name, $discountType, $amount));
    }
}
