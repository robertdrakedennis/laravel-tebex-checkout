<?php

namespace Shimmer\LaravelTebexCheckout\Resources;

use Saloon\Contracts\Response;
use Shimmer\LaravelTebexCheckout\Requests\Baskets\Packages\AddPackageRequest;
use Shimmer\LaravelTebexCheckout\Requests\Baskets\Packages\DeletePackageRequest;

class PackageResource extends Resource
{
    public function create(string $id, array $package, string $type): Response
    {
        return $this->connector->send(new AddPackageRequest($id, $package, $type));
    }

    public function delete(string $id, string $rowID): Response
    {
        return $this->connector->send(new DeletePackageRequest($id, $rowID));
    }
}
