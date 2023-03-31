<?php

namespace Shimmer\LaravelTebexCheckout\Resources;

use Saloon\Contracts\Response;
use Shimmer\LaravelTebexCheckout\Requests\Baskets\CreateBasketRequest;
use Shimmer\LaravelTebexCheckout\Requests\Baskets\GetBasketRequest;

class BasketResource extends Resource
{
    public function get(string $id): Response
    {
        return $this->connector->send(new GetBasketRequest($id));
    }

    public function create(string $returnUrl, string $completeUrl): Response
    {
        return $this->connector->send(new CreateBasketRequest($returnUrl, $completeUrl));
    }
}
